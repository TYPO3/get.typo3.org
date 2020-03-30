<?php
declare(strict_types=1);

/*
 * This file is part of the package t3o/gettypo3org.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace App\Menu;

use T3G\Bundle\TemplateBundle\Menu\MenuBuilder as TemplateMenuBuider;

/**
 * MenuBuilder
 */
class MenuBuilder extends TemplateMenuBuider
{
    /**
     * @param array $options
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
     * @param array $options
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
