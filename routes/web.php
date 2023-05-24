<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $nome = "Laravel";
    $idade = 20;
    $cidade = "São Paulo";
    $arr = [1, 2, 3, 4, 5];
    $nomes = ['João', 'Maria', 'José', 'Ana'];
    return view('welcome', [
        'nome' => $nome,
        'idade' => $idade,
        'cidade' => $cidade,
    'profissao' => 'Programador',
    'arr' => $arr,
    'nomes' => $nomes]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/produtos', function () {

    $busca = request('search');

    return view('products', ['busca' => $busca]);
});

Route::get('/produtos_teste/{id?}', function ($id = null) {
    return view('product', ['id' =>$id]);
});
