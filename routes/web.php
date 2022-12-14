<?php

use App\Http\Controllers\usercontroller;
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
    return redirect('subject');
});
route::get('subject',[usercontroller::class,'subject']);
route::post('/subjectAdd',[usercontroller::class,'subjectAdd']);
route::get('subjectlist',[usercontroller::class,'subjectlist']);
route::view('faculty','faculty');
route::post('/facultyAdd',[usercontroller::class,'facultyAdd']);
route::get('/facultylist',[usercontroller::class,'facultylist']);
