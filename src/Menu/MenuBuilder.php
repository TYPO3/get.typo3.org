<?php
declare(strict_types=1);

/*
 * This file is part of the package t3o/gettypo3org.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace App\Menu;

use Knp\Menu\FactoryInterface;
use Knp\Menu\Matcher\MatcherInterface;
use Knp\Menu\MenuFactory;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * MenuBuilder
 */
class MenuBuilder
{
    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * @var MenuFactory
     */
    private $factory;

    /**
     * @var MatcherInterface
     */
    private $matcher;

    /**
     * @param ContainerInterface $container
     * @param FactoryInterface $factory
     */
    public function __construct(
        ContainerInterface $container,
        FactoryInterface $factory
    ) {
        $this->container = $container;
        $this->factory = $factory;
    }

    /**
     * @param array $options
     * @return \Knp\Menu\ItemInterface|\Knp\Menu\MenuItem
     */
    public function mainDefault(array $options)
    {
        $menu = $this->factory->createItem('root');

        $menu->addChild(
            'root',
            [
                'route' => 'root',
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

        $menu->addChild(
            'composer-helper',
            [
                'route' => 'composer-helper',
                'label' => 'Composer Helper'
            ]
        );

        $menu->addChild(
            'api',
            [
                'route' => 'app.swagger_ui',
                'label' => 'REST API'
            ]
        );

        return $menu;
    }
}
