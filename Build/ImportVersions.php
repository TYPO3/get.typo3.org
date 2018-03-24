<?php
$db = new SQLite3(__DIR__ . '/../var/gettr.db');

foreach ([7, 8, 9] as $version) {
    $releasesFileContent = file_get_contents(__DIR__ . '/Data/' . $version . '.json');
    $v = json_decode($releasesFileContent, true);


    $stmt = $db->prepare(
        'INSERT INTO major_version ' .
        '(version, title, subtitle, description, maintained_until, release_date, lts) VALUES ' .
        '(:version, :title, :subtitle, :description, :maintainedUntil, :releaseDate, :lts)'
    );

    $stmt->bindParam(':version', $v['version']['major']);
    $stmt->bindParam(':title', $v['title']);
    $stmt->bindParam(':subtitle', $v['subtitle']);
    $stmt->bindParam(':description', $v['description']);
    $stmt->bindParam(':maintainedUntil', $v['maintainedUntil']);
    $stmt->bindParam(':releaseDate', $v['releaseDate']);
    if ($version === 8) {
        $stmt->bindValue(':lts', 8.7);
    } else if ($version === 7) {
        $stmt->bindValue(':lts', 7.6);
    } else {
        $stmt->bindValue(':lts', null);
    }

    $stmt->execute();
}


$releasesFileContent = file_get_contents(__DIR__ . '/Data/releases.json');
$v = json_decode($releasesFileContent, true);
foreach ($v as $major => $content) {
    if (in_array($major, [7, 8, 9], false) || !is_array($content)) {
        continue;
    }
    $stmt = $db->prepare(
        'INSERT INTO major_version ' .
        '(version, title, subtitle, description, release_date, maintained_until, lts) VALUES ' .
        '(:version, :title, :subtitle, :description, :releaseDate, :maintained_until, :lts)'
    );

    $title = 'TYPO3 v' . $major;
    $subtitle = '';
    $description = '';
    $releases = $content['releases'];
    $previousReleaseDate = $firstRelease['date'] ?? '2017-04-04 10:56:12 UTC';
    do {
        $firstRelease = array_pop($releases);
    } while (
        strpos($firstRelease['version'], 'rc') ||
        strpos($firstRelease['version'], 'alpha') ||
        strpos($firstRelease['version'], 'beta')
    );
    $releaseDate = $firstRelease['date'];
    $stmt->bindParam(':version', $major);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':subtitle', $subtitle);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':releaseDate', $releaseDate);
    $stmt->bindParam(':maintained_until', $previousReleaseDate);
    $stmt->bindValue(':lts', $major == 6.2 ? 6.2 : null);

    $stmt->execute();
}
