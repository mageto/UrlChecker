<?php
  // Mageto\UrlChecker\src\routes\web.php
  // Route::get('/', function(){
  //     return 'Hello from the route file';
  // });
  // Route::get('/', function(){
  //      if (Request::url() === "http://127.0.0.1:8000") {
  //       return view('welcome');
  //     }
  //     else{
  //         return Redirect::to('http://www.writersweb.co.ke/');
  //     }
  // });
  Route::get('/', 'Mageto\UrlChecker\Http\Controllers\UrlCheckerController@index');

  ?>
