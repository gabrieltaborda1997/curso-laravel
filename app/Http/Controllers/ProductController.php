<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
   // protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
        //$this->middleware('auth');

        /*$this->middleware('auth')->only([
            'create', 'store'
        ]); */

        /*$this->middleware('auth')->except([
            'index', 'show', 'create'
        ]);*/
        
        }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teste = 123;
        $products = ['BRAHMA', 'SKOL', 'KAISER',];
        return view('admin.pages.products.index', compact('teste', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request->all());
       // dd($request->only(['name', 'description']));
       // dd($request->name());
       // dd($request->input('teste', 'default'));
       // dd($request->except('_token'));
       if($request->file('photo')->isValid()){
        $nameFile = $request->name . '.' . $request->photo->extension();
        dd($request->file('photo')->storeAs('products', $nameFile)); //Upload de arquivos
          //dd($request->photo->store('products'));

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.pages.products.edit', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dd("Editando produto {$id}");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
