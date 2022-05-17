<?php

declare(strict_types=1);
/**
 * This file is part of Sett.
 *
 * @link     https://www.Sett.io
 * @document https://doc.Sett.io
 * @contact  group@Sett.io
 * @license  https://github.com/Sett/Sett/blob/master/LICENSE
 */
namespace Hhr\LogViewer;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [
            ],
            'commands' => [
            ],
            'annotations' => [
                'scan' => [
                    'paths' => [
                        __DIR__,
                    ],
                ],
            ],
            'publish' => [
                [
                    'id' => 'config',
                    'description' => '',
                    'source' => __DIR__ . '/../publish/logViewer.php',
                    'destination' => BASE_PATH . '/config/autoload/logViewer.php',
                ],
                [
                    'id' => 'view',
                    'description' => '',
                    'source' => __DIR__ . '/../publish/log.html',
                    'destination' => BASE_PATH . '/storage/view/log.html',
                ],
                [
                    'id' => 'js',
                    'description' => '',
                    'source' => __DIR__ . '/../publish/bootstrap.min.js',
                    'destination' => BASE_PATH . '/public/js/bootstrap.min.js',
                ],
                [
                    'id' => 'css',
                    'description' => '',
                    'source' => __DIR__ . '/../publish/bootstrap.min.css',
                    'destination' => BASE_PATH . '/public/css/bootstrap.min.css',
                ],
                [
                    'id' => 'js',
                    'description' => '',
                    'source' => __DIR__ . '/../publish/popper.min.js',
                    'destination' => BASE_PATH . '/public/js/popper.min.js',
                ],

            ],
        ];
    }
}
