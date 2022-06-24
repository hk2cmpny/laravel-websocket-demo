<?php

use App\Events\PriorityVideo;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/demo', function() { return "testing"; });


Route::get('/webhook/{sensor}', function($sensor) {

    $conf = [
        "thermo_123" => [
            "project" => "p1",
            "device" => 1,
            "url" => "https://youtu.be/rNOGLLPXzwc",
        ],
        "cam_001" => [
            "project" => "p1",
            "device" => 2,
            "url" =>  "https://youtu.be/2WCtGFNENYU"
        ],
        "cam_555" => [
            "project" => "p2",
            "device" => 3,
            "url" =>  "https://youtu.be/2WCtGFNENYU"
        ]
    ];

    $data = Arr::get($conf, $sensor, null);

    if ($data != null) {
        event(new PriorityVideo($data));
    }


});
