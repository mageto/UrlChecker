<?php

namespace Mageto\UrlChecker;

use App\Http\Controllers\Controller;
use Request;
use Wisdmlabs\Todolist\Task;

class UrlCheckerController extends Controller
{
    public function index()
    {
      return 'Hello from the controller file';
     //  if (request()==\DB::table('configs')->where('id', 1)->value('website')) {
     //   return view('index');
     // }
     // else{
     //     // return redirect('http://anotherdomain.com/');
     //     return view('welcome');
     // }
    }
}

?>
