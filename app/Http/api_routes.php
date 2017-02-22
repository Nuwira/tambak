<?php

use Dingo\Api\Routing\Router;

$api = app(Router::class);

$api->version('v1', [
        'namespace' => 'App\Api\V1\Controllers',
    ], function($api) {
        // Welcome
        $api->group([
                'namespace' => 'Welcome',
                'prefix' => 'welcome',
            ], function($api) {
                $api->get('/', [
                        'as' => 'api.v1.welcome',
                        'uses' => 'WelcomeController@get',
                    ]);
            });

    });
