<?php
/***************************************************************
 *  Copyright notice
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
 * Safe Writer
 *
 * @license http://www.gnu.org/copyleft/gpl.html
 * @see http://php.net/manual/en/function.flock.php
 */
class SafeWriter {

	/**
	 * @param string $path
	 * @param string $data
	 * @return bool
	 */
	public static function write($path, $data) {
		$fp = fopen($path, "w");
		$retries = 0;
		$max_retries = 100;

		if (!$fp) {

			// failure
			return FALSE;
		}

		// keep trying to get a lock as long as possible
		do {
			if ($retries > 0) {
				usleep(rand(1, 10000));
			}
			$retries += 1;
		} while (!flock($fp, LOCK_EX) and $retries <= $max_retries);

		// couldn't get the lock, give up
		if ($retries == $max_retries) {
			// failure
			return FALSE;
		}

		// got the lock, write the data
		fwrite($fp, "$data\n");

		// release the lock
		flock($fp, LOCK_UN);
		fclose($fp);

		// success
		return TRUE;
	}
}
?>
