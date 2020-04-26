<?php
/*-------ROTAS-------*/
/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function(){
    return view('login');
});

/*-------ROTAS COM PARAMETROS-------*/
/*Route::get('/categorias/{flag}',function($flag) {
    return "Produtos da categoria: {$flag}";
});

Route::get('/categoria/{flag}/posts', function($flag){
    return "Posts da categoria {$flag}";
});
*/
/*-------PARAMETROS OPCIONAIS-------*/

/*Route::get('/produtos/{idProduct?}', function($idProduct = ''){
    return "Produtos {$idProduct}";
});
*/
/*-------ROTAS REDIRECIONADAS 'redirect'-------*/
/*Route::get('redirect1', function(){
    return redirect('/redirect2');
});
*/

/*Route::get('redirect2', function(){
    return "Redirect 02";
});
*/
/*-------VIEWS-------*/
//Route::view('/view', 'welcome' );

/*-------ROTAS NOMEADAS-------*/
/*Route::get('/no-url', function(){
    return "hey hey hey";
})->name('url.name');

Route::get('redirect3', function(){
    return redirect()->route('url.name');
});
*/
/*-------GRUPO DE ROTAS-------*/
/*Route::middleware([])->group(function(){ //chama area de login #segurança #autenticação.

    Route::prefix('admin')->group(function(){ // cria prefixo ex: /admin/....
       
        Route::namespace('Admin')->group(function (){

            Route::name('admin.')->group(function(){

                Route::get('/dashboard', 'TestController@teste')->name('dashboard');
    
                Route::get('/financeiro', 'TestController@teste')->name('financeiro');
        
                Route::get('/produtos', 'TestController@teste')->name('produtos');
    
                Route::get('/', function(){
                    return redirect()->route('admin.dashboard');
                })->name('home');
            });
        });    
    });      
});*/ 
//-------SIMPLIFICANDO OQUE FOI FEITO ACIMA-------

/*Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'name' => 'admin.'
], function(){
    Route::get('/dashboard', 'TestController@teste')->name('dashboard');
    
    Route::get('/financeiro', 'TestController@teste')->name('financeiro');

    Route::get('/produtos', 'TestController@teste')->name('produtos');

    Route::get('/', function(){
        return redirect()->route('admin.dashboard');
    })->name('home');
}); // cmd > php artisan route:list // cmd php artisan route:cache
*/
/*-------Usando Controller-------*/ // aula 16 /*-------Rotas com Crud-------*/ //aula 18

/*
Route::get('products/{id}', 'ProductController@show')->name('products.show'); // Exibindo produto
Route::get('products', 'ProductController@index')->name('products.index'); // Listagem de produtos
Route::get('products/create', 'ProductController@create')->name('products.create'); // Criar novo produto
Route::get('products/{id}/edit', 'ProductController@edit')->name('products.edit'); // Editar produtos
Route::post('products', 'ProductController@store')->name('products.store'); // Criar produtos
Route::put('products/{id}', 'ProductController@update')->name('products.update'); // Editar produtos
Route::delete('products/{id}', 'ProductController@destroy')->name('products.destroy'); // Deletando produtos
*/ 

/*------- Simplificando Rotas Acima -------*/ // aula 19
Route::get('/login', function(){ //area de login.
    return view('login');
})->name('login');

Route::resource('products', 'ProductController');