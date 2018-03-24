<?php

$releasesFileContent = file_get_contents(__DIR__ . '/Data/releases.json');
$releaseJson = json_decode($releasesFileContent, true);

$db = new SQLite3(__DIR__ . '/../var/gettr.db');

foreach ($releaseJson as $major) {
    if (isset($major['releases'])) {
        foreach ($major['releases'] as $minor => $data) {
            $version   = trimmr($data['version']);
            $date      = trimmr($data['date']);
            $type      = trimmr($data['type']);
            $tarsha1   = trimmr($data['checksums']['tar']['sha1'] ?? null);
            $tarsha256 = trimmr($data['checksums']['tar']['sha256'] ?? null);
            $zipsha1   = trimmr($data['checksums']['zip']['sha1'] ?? null);
            $zipsha256 = trimmr($data['checksums']['zip']['sha256'] ?? null);
            $tarmd5    = trimmr($data['checksums']['tar']['md5'] ?? null);
            $zipmd5    = trimmr($data['checksums']['zip']['md5'] ?? null);
            $stmt = $db->prepare(
                'INSERT INTO "release" ' .
                '(version, date, type, tar_package_md5sum, tar_package_sha1sum, tar_package_sha256sum, zip_package_md5sum, zip_package_sha1sum, zip_package_sha256sum, major_version) ' .
                'VALUES (:version, :date, :type, :tarmd5, :tarsha1, :tarsha256, :zipmd5, :zipsha1, :zipsha256, :majorversion)'
            );
            if (in_array((int)$version[0], [7, 8, 9], true)) {
                $major = (int)$version[0];
            } else {
                $major = (float)substr($version, 0, 3);
            }
            $stmt->bindValue(':version', $version);
            $stmt->bindValue(':date', $date);
            $stmt->bindValue(':type', $type);
            $stmt->bindValue(':tarsha1', $tarsha1);
            $stmt->bindValue(':zipsha1', $zipsha1);
            $stmt->bindValue(':tarsha256', $tarsha256);
            $stmt->bindValue(':zipsha256', $zipsha256);
            $stmt->bindValue(':tarmd5', $tarmd5);
            $stmt->bindValue(':zipmd5', $zipmd5);
            $stmt->bindValue(':majorversion', $major);
            $stmt->execute();
        }
    }
}

function trimmr($string) {
    if ($string !== null) {
        $string = trim($string);
    }
    return $string;
}

