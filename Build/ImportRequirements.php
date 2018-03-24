<?php
declare(strict_types=1);


foreach ([7, 8, 9] as $version) {
    $releasesFileContent = file_get_contents(__DIR__ . '/Data/' . $version . '.json');
    $v = json_decode($releasesFileContent, true);

    $db = new SQLite3(__DIR__ . '/../var/gettr.db');

    foreach ($v['systemRequirements'] as $category => $requirement) {
        if ($requirement['min'] ?? false) {
            $stmt = $db->prepare(
                'INSERT INTO requirement (version, category, name, min, max) VALUES' .
                '(:version, :category, :name, :min, :max)'
            );
            $stmt->bindParam(':version', $version);
            $stmt->bindParam(':category', $category);
            $stmt->bindParam(':name', $category);
            $stmt->bindParam(':min', $requirement['min']);
            $max = $perCatReq['max'] ?? null;
            $stmt->bindParam(':max', $max);
            $stmt->execute();

        } else {
            foreach ($requirement as $name => $perCatReq) {
                $stmt = $db->prepare(
                    'INSERT INTO requirement (version, category, name, min, max) VALUES' .
                    '(:version, :category, :name, :min, :max)'
                );
                $stmt->bindParam(':version', $version);
                $stmt->bindParam(':category', $category);
                $stmt->bindParam(':name', $name);
                if ($perCatReq['min'] === 'latest') {
                    $min = null;
                    $stmt->bindParam(':min', $min);
                } else {
                    $stmt->bindParam(':min', $perCatReq['min']);
                }
                $max = $perCatReq['max'] ?? null;
                $stmt->bindParam(':max', $max);
                $stmt->execute();
            }
        }
    }

}
