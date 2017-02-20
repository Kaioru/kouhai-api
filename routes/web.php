<?php

use Dingo\Api\Routing\Router;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\ProductionController;
use App\Http\Controllers\EpisodeController;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->version();
});

$api = app(Router::class);
$api->version('v1', function ($api) {
    $api->resource('series', SeriesController::class);
	$api->resource('productions', ProductionController::class);
	$api->resource('episodes', EpisodeController::class);
});
