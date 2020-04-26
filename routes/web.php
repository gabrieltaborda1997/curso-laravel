<?php
/*-------ROTAS-------*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function(){
    return view('login');
});

/*-------ROTAS COM PARAMETROS-------*/
Route::get('/categorias/{flag}',function($flag) {
    return "Produtos da categoria: {$flag}";
});

Route::get('/categoria/{flag}/posts', function($flag){
    return "Posts da categoria {$flag}";
});

/*-------PARAMETROS OPCIONAIS-------*/

Route::get('/produtos/{idProduct?}', function($idProduct = ''){
    return "Produtos {$idProduct}";
});

/*-------ROTAS REDIRECIONADAS 'redirect'-------*/
Route::get('redirect1', function(){
    return redirect('/redirect2');
});


Route::get('redirect2', function(){
    return "Redirect 02";
});

/*-------VIEWS-------*/
//Route::view('/view', 'welcome' );

/*-------ROTAS NOMEADAS-------*/
Route::get('/no-url', function(){
    return "hey hey hey";
})->name('url.name');

Route::get('redirect3', function(){
    return redirect()->route('url.name');
});

/*-------GRUPO DE ROTAS-------*/
Route::get('/login', function(){ //area de login.
    return 'login';
})->name('login');

Route::middleware(['auth'])->group(function(){ //chama area de login #segurança #autenticação.

    Route::prefix('admin')->group(function(){ // cria prefixo ex: /admin/....
       
       
        Route::get('/dashboard', function(){
            return 'Home Admin';
        });
    
        Route::get('/financeiro', function(){
            return 'Financeiro Admin';
        });
    
        Route::get('/produtos', function(){
            return 'Produtos Admin';

        Route::get('/', function(){
            return 'Admin';
            
        });
    });      
});

/*-------CONTROLER-------*/
