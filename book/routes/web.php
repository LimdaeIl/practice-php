<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users/{name?}', function ($name = null) {
    return '안녕,' . $name;
})->where('name', '[A-Za-z]+');

Route::get('/products/{id?}', function ($id = null) {
    return '제품 ID : ' . $id;
})->where('id', '[0-9]+');

Route::get('/home/{name?}', [HomeController::class, 'index'])->name('home');  // name 뒤 ? 는 null 허용을 의미한다.

Route::get('/user/{name?}', function ($name = null) {
    $age = 13;
    return view('user', compact('name', 'age')); // compact 는 ['name' => $name] 연관 배열이다.
});

Route::get('/test1/', function () {
    return view('test1', ['name' => '<script>alert("1")</script>']); //    htmlspecialchars() 기능과 비교하기
});
