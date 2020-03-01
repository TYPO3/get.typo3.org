<?php

/*
 * This file is part of the package t3o/gettypo3org.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace App\Repository;

use App\Entity\MajorVersion;
use App\Entity\Requirement;
use App\Enum\RequirementCategoryEnum;
use Doctrine\ORM\EntityRepository;

/**
 * RequirementRepository
 */
class RequirementRepository extends EntityRepository
{
    public function getCommonEntities(MajorVersion $version): array
    {
        return [
            (new Requirement())
                ->setVersion($version)
                ->setCategory(RequirementCategoryEnum::OPTION_OS)
                ->setName(RequirementCategoryEnum::OPTION_OS),
            (new Requirement())
                ->setVersion($version)
                ->setCategory(RequirementCategoryEnum::OPTION_WEBSERVER)
                ->setName(RequirementCategoryEnum::OPTION_WEBSERVER)
        ];
    }
}
