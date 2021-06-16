<?php

declare(strict_types=1);

/*
 * This file is part of the package t3o/get.typo3.org.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

namespace App\Menu;

use T3G\Bundle\TemplateBundle\Menu\MenuBuilder as TemplateMenuBuider;

/**
 * MenuBuilder
 */
class MenuBuilder extends TemplateMenuBuider
{
    /**
     * @return \Knp\Menu\ItemInterface|\Knp\Menu\MenuItem
     */
    public function mainDefault(array $options)
    {
        $menu = parent::mainDefault($options);
        $menu->addChild(
            'download',
            [
                'route' => 'download',
                'label' => 'Download'
            ]
        );
        $menu->addChild(
            'release-notes',
            [
                'route' => 'release-notes',
                'label' => 'Release Notes'
            ]
        );
        $composer = $menu->addChild(
            'composer',
            [
                'route' => 'composer',
                'label' => 'Composer'
            ]
        );
        $composer->addChild(
            'composer-helper',
            [
                'route' => 'composer-helper',
                'label' => 'Helper'
            ]
        );
        $composer->addChild(
            'composer-repository',
            [
                'route' => 'composer-repository',
                'label' => 'Repository'
            ]
        );
        $menu->addChild(
            'api',
            [
                'route' => 'app.swagger_ui',
                'label' => 'API'
            ]
        );
        return $menu;
    }

    /**
     * @return \Knp\Menu\ItemInterface|\Knp\Menu\MenuItem
     */
    public function mainProfile(array $options)
    {
        $menu = parent::mainProfile($options);
        $menu->addChild(
            'install',
            [
                'uri' => 'https://docs.typo3.org/typo3cms/InstallationGuide/',
                'label' => 'Installation Guide'
            ]
        );
        $menu->addChild(
            'gettingstarted',
            [
                'uri' => 'https://docs.typo3.org/typo3cms/GettingStartedTutorial/',
                'label' => 'Getting Started'
            ]
        );
        $menu->addChild(
            'elts',
            [
                'uri' => 'https://typo3.com/elts',
                'label' => 'ELTS'
            ]
        );
        return $menu;
    }
}
