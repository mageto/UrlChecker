<?php

namespace Mageto\UrlChecker\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Request;

class UrlCheckerController extends Controller
{
    public function index()
    {
      if (Request::url() === "xxx.com") {
          return view('welcome');
        }
        else{
            return Redirect::to('yyy.com');
        }
    }
}

?>
