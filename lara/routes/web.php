<?php

use Illuminate\Support\Facades\Route;
/*
use App\Http\Controllers\TranslationController;
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
Route::get('hello/{msg?}', function ($msg='no message.'){
$html = <<<EOF
<html>
<head>
<title>hogehoge</title>
<style>
body {font-size:16pt; color:#999;}
h1 { font-size:100pt; text-align:right; color:#eee; margin:-40px 0px -50px 0px;}
</style>
</head>
<body>
<h1>hogehoge</h1>
<p>Hello!</p>
<p>{$msg}</p>
<p>sample page!</p>
</body>
</html>
EOF;


	return $html;
});

Route::get('/sample',[\App\Http\Controllers\Sample\IndexController::class, 'show']);
Route::get('/sample/{id}',[\App\Http\Controllers\Sample\IndexController::class, 'showId']);
Route::get('/blog/',[\App\Http\Controllers\Sample\IndexController::class, 'show']);



