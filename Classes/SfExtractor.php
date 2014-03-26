<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2011-2013 Xavier Perseguers <xavier@causal.ch>, Causal Sàrl
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * SourceForge.net TYPO3 version extractor.
 *
 * @author      Xavier Perseguers <xavier@causal.ch>
 * @copyright   2011-2013 Causal Sàrl
 * @license     http://www.gnu.org/copyleft/gpl.html
 */
class SfExtractor {

	const SF_URL = 'http://sourceforge.net/projects/typo3/files/TYPO3%20Source%20and%20Dummy/';

	const WIKI_URL = 'http://wiki.typo3.org/TYPO3_%s';

	/**
	 * @return array
	 */
	public function getSummary() {
		$summary = array();
		$latestStable = '0.0.0';
		$releases = $this->getReleases();

		// Group releases by branch
		foreach ($releases as $release) {

			preg_match('/^(\d\.\d+)/', $release['version'], $matches);
			$branch = $matches[1];
			if (!isset($summary[$branch])) {
				$summary[$branch] = array(
					'releases' => array(),
					'latest' => '0.0.0',
					'stable' => '0.0.0',
					'active' => FALSE,
				);
			}
			$summary[$branch]['releases'][$release['version']] = $release;
			if (version_compare($release['version'], $summary[$branch]['latest'], '>')) {
				$summary[$branch]['latest'] = $release['version'];
			}

			if ($release['type'] !== 'development' && (version_compare($release['version'], $summary[$branch]['stable'], '>'))) {
				$summary[$branch]['stable'] = $release['version'];
			}

			if (preg_match('/^6\.[0-9]+\.[0-9]+$/', $release['version'])) {
				if (version_compare($release['version'], $latestStable, '>')) {
					$latestStable = $release['version'];
				}
			}
		}

		// Latest versions on top :)
		krsort($summary);

		$summary['latest_stable'] = $latestStable;
		# @todo check if "latest_old_stable" is still needed - not working anymore after the 6.0 jump.
		$parts = explode('.', $latestStable);
		$branchOldStable = join('.', array($parts[0], $parts[1] - 1));
		$summary['latest_old_stable'] = $summary[$branchOldStable]['latest'];
		$summary['latest_lts'] = $summary['6.2']['latest'];
		$summary['latest_old_lts'] = $summary['4.5']['latest'];
		$summary['latest_deprecated'] = $summary['4.7']['latest'];

		// Supported branches
		$summary['4.5']['active'] = TRUE;
		$summary['4.7']['active'] = TRUE;
		$summary['6.0']['active'] = TRUE;
		$summary['6.1']['active'] = TRUE;
		$summary['6.2']['active'] = TRUE;

		return $summary;
	}

	/**
	 * @return array
	 */
	public function getReleases() {
		$content = file_get_contents(self::SF_URL);
		$content = $this->strCutTo($content, '<table id="files_list"');
		$content = $this->strCutToInclusive($content, '<tbody>');
		$content = $this->strCutFrom($content, '</tbody>');

		$blocks = explode('<tr ', $content);
		array_shift($blocks);

		$releases = array();
		foreach ($blocks as $block) {
			$block = $this->strCutToInclusive($block, 'title="');
			$version = $this->strCutFrom($block, '"');
			$block = $this->strCutToInclusive($block, '"files_date_h"');
			$block = $this->strCutToInclusive($block, 'title="');
			$date = $this->strCutFrom($block, '"');
			$releases[] = array(
				'version' => substr($version, 6),
				'date' => $date,
				'type' => $this->getType(substr($version, 6)),
				'checksums' => $this->getCheckSums(substr($version, 6)),
				'url' => array(
					'zip' => 'http://get.typo3.org/' . substr($version, 6) . '/zip',
					'tar' => 'http://get.typo3.org/' . substr($version, 6),
				),
			);
		}

		return $releases;
	}

	/**
	 * Returns the type of a given TYPO3 version.
	 *
	 * @param string $version
	 * @return string
	 */
	protected function getType($version) {
		$type = 'unknown';

		// Just to speed up the process...
		$types = array(
			'6.1.1' => 'regular', '6.1.0' => 'release',
			'6.0.5' => 'regular',
			'6.0.4' => 'regular', '6.0.3' => 'security', '6.0.2' => 'regular', '6.0.1' => 'regular', '6.0.0' => 'release',
			'4.7.12' => 'regular', '4.7.11' => 'regular', '4.7.10' => 'regular',
			'4.7.9' => 'security', '4.7.8' => 'regular', '4.7.7' => 'regular', '4.7.6' => 'security', '4.7.5' => 'regular',
			'4.7.4' => 'security', '4.7.3' => 'regular', '4.7.2' => 'security', '4.7.1' => 'regular', '4.7.0' => 'release',
			'4.6.18' => 'regular', '4.6.17' => 'security', '4.6.16' => 'regular', '4.6.15' => 'regular',
			'4.6.14' => 'security', '4.6.13' => 'regular', '4.6.12' => 'security', '4.6.11' => 'regular', '4.6.10' => 'security',
			'4.6.9' => 'regular', '4.6.8' => 'security', '4.6.7' => 'security', '4.6.6' => 'regular', '4.6.5' => 'regular',
			'4.6.4' => 'regular', '4.6.3' => 'regular', '4.6.2' => 'security', '4.6.1' => 'regular', '4.6.0' => 'release',
			'4.5.27' => 'regular', '4.5.26' => 'regular',
			'4.5.25' => 'regular', '4.5.24' => 'security', '4.5.23' => 'regular', '4.5.22' => 'regular', '4.5.21' => 'security',
			'4.5.20' => 'regular', '4.5.19' => 'security', '4.5.18' => 'regular', '4.5.17' => 'security',
			'4.5.16' => 'regular', '4.5.15' => 'security', '4.5.14' => 'security', '4.5.13' => 'regular', '4.5.12' => 'regular',
			'4.5.11' => 'regular', '4.5.10' => 'regular', '4.5.9' => 'security', '4.5.8' => 'regular', '4.5.7' => 'security',
			'4.5.6' => 'security', '4.5.5' => 'regular', '4.5.4' => 'security', '4.5.3' => 'regular', '4.5.2' => 'regular',
			'4.5.1' => 'regular', '4.5.0' => 'release', '4.4.13' => 'regular', '4.4.12' => 'regular', '4.4.11' => 'security',
			'4.4.10' => 'regular', '4.4.9' => 'security', '4.4.8' => 'regular', '4.4.7' => 'regular', '4.4.6' => 'regular',
			'4.4.5' => 'security', '4.4.4' => 'security', '4.4.3' => 'regular', '4.4.2' => 'security', '4.4.1' => 'security',
			'4.4.0' => 'release', '4.3.14' => 'security', '4.3.13' => 'regular', '4.3.12' => 'security', '4.3.11' => 'regular',
			'4.3.10' => 'regular', '4.3.9' => 'security', '4.3.8' => 'security', '4.3.7' => 'security', '4.3.6' => 'regular',
			'4.3.5' => 'security', '4.3.4' => 'security', '4.3.3' => 'security', '4.3.2' => 'security', '4.3.1' => 'security',
			'4.3.0' => 'release', '4.2.17' => 'regular', '4.2.16' => 'security', '4.2.15' => 'security', '4.2.14' => 'security',
			'4.2.13' => 'regular', '4.2.12' => 'security', '4.2.11' => 'regular', '4.2.10' => 'regular', '4.2.9' => 'regular',
			'4.2.8' => 'regular', '4.1.15' => 'security', '4.1.14' => 'regular', '4.1.13' => 'regular', '4.1.12' => 'regular',
			'4.0.13' => 'regular', '3.8.1' => 'regular', '3.7.1' => 'regular', '3.6.2' => 'regular', '3.5.0' => 'release',
			'3.3.0' => 'release',
		);
		if (isset($types[$version])) {
			return $types[$version];
		}

		// Automatic retrieval of the status
		$parts = explode('.', $version);
		if (count($parts) == 2) {
			return 'development';
		}
		list($major, $minor, $revision) = $parts;
		if ($revision === '0') {
			$type = 'release';
		} elseif (!is_numeric($revision)) {
			$type = 'development';
		} else {
			try {
				$releaseNotes = file_get_contents(sprintf(self::WIKI_URL, $version));
				if (preg_match('/<p>This (version|release) .*/', $releaseNotes, $matches)) {
					if (preg_match('/security/', $matches[0])) {
						$type = 'security';
					} else {
						$type = 'regular';
					}
				}
			} catch (Exception $e) {
				// Nothing to do
			}
		}

		return $type;
	}

	/**
	 * Returns the check sums of the tar.gz and zip of a given TYPO3 version.
	 *
	 * @param string $version
	 * @return array
	 */
	protected function getCheckSums($version) {
		$checkSum = array('tar' => '', 'zip' => '');

		// Just to speed up the process...
		$checkSums = CheckSumProvider::getCache();

		// Returns straight away result if found in the Cache
		if (isset($checkSums[$version])) {
			return $checkSums[$version];
		}

		$info = (array) json_decode(file_get_contents(self::SF_URL . 'TYPO3%20' . $version . '/list'));
		if ($info) {
			$tar = (array) $info['typo3_src-' . $version . '.tar.gz'];
			$zip = (array) $info['typo3_src-' . $version . '.zip'];

			$checkSum = array(
				'tar' => array(
					'md5' => $tar['md5'],
					'sha1' => $tar['sha1'],
				),
				'zip' => array(
					'md5' => $zip['md5'],
					'sha1' => $zip['sha1'],
				),
			);
		}

		return $checkSum;
	}

	/**
	 * Cuts from <var>$haystack</var> the part that is after <var>$needle</var>
	 *
	 * @param string $haystack
	 * @param string $needle
	 * @return string
	 */
	protected function strCutFrom($haystack, $needle) {
		if (($pos = strpos($haystack, $needle)) === FALSE) {
			return $haystack;
		}
		return substr($haystack, 0, $pos);
	}

	/**
	 * Cuts from <var>$haystack</var> the part that is after last occurence of <var>$needle</var>
	 *
	 * @param string $haystack
	 * @param string $needle
	 * @return string
	 */
	function strCutFromLast($haystack, $needle) {
		if (($pos = strrpos($haystack, $needle)) === FALSE) {
			return $haystack;
		}
		return substr($haystack, 0, $pos);
	}

	/**
	 * Cuts <var>$haystack</var> up to the first occurence of <var>$needle</var>
	 *
	 * @param string $haystack
	 * @param string $needle
	 * @return string
	 */
	protected function strCutTo($haystack, $needle) {
		if (($pos = strpos($haystack, $needle)) === FALSE) {
			return $haystack;
		}
		return substr($haystack, $pos);
	}

	/**
	 * Cuts <var>$haystack</var> up to the first occurence of <var>$needle</var> (inclusive)
	 *
	 * @param string $haystack
	 * @param string $needle
	 * @return string
	 */
	protected function strCutToInclusive($haystack, $needle) {
		if (($pos = strpos($haystack, $needle)) === FALSE) {
			return $haystack;
		}
		return substr($haystack, $pos + strlen($needle));
	}

	/**
	 * Cuts <var>$haystack</var> up to the last occurence of <var>$needle</var>
	 *
	 * @param string $haystack
	 * @param string $needle
	 * @return string
	 */
	protected function strCutToLast($haystack, $needle) {
		if (($pos = strrpos($haystack, $needle)) === FALSE) {
			return $haystack;
		}
		return substr($haystack, $pos);
	}

	/**
	 * Cuts <var>$haystack</var> up to the last occurence of <var>$needle</var> (inclusive)
	 *
	 * @param string $haystack
	 * @param string $needle
	 * @return string
	 */
	protected function strCutToLastInclusive($haystack, $needle) {
		if (($pos = strrpos($haystack, $needle)) === FALSE) {
			return $haystack;
		}
		return substr($haystack, $pos + strlen($needle));
	}
}

?>
