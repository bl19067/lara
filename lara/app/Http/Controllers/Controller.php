<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

#class Controller extends BaseController
#{
       #use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
#}
class Controller extends Controller{
       public function index() {
              return <<<EOF
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
<p>sample hogeControllr</p>
<h2>index</h2>
</body>
</html>
EOF;
       }
}
