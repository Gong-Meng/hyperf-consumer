<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
return [
    'consumers' => [
        [
            // The service name, this name should as same as with the name of service provider.
            'name' => 'CalculatorService',
            // The service registry, if `nodes` is missing below, then you should provide this configs.
            'service' => \App\JsonRpc\CalculatorServiceInterface::class,
            'registry' => [
                'protocol' => 'consul',
                'address' => 'http://127.0.0.1:8500',
            ],
            // If `registry` is missing, then you should provide the nodes configs.
//            'nodes' => [
//                // Provide the host and port of the service provider.
//                ['host' => '127.0.0.1', 'port' => 9503]
//            ],
        ],
    ],
];
