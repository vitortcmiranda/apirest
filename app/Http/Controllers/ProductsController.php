<?php

namespace App\Http\Controllers;

use App\Http\requests\ProductsRequest as Request;
use App\Product;
class ProductsController extends Controller
{
    //
    public function index(){
        return Product::all();
    }

    

    public function store(Request $request){
        
         $Produto=  Product::create($request->all());
         return $Produto;
    }

    public function update(Request $request,Product $prodcut){
        $prodcut = Product::find($request->id);
        //Posicionando no elemento que estou procurando
        $prodcut->title = $request->title;
        $prodcut->body = $request->body;
        //Alterando ele com os parâmetros recebidos na request
        $prodcut->save();
        //Salvando ele no banco
        return $prodcut;
    }
    
    public function show(Request $request, Product $prodcut ){
        return Product::find($request->id);
    }
    
    public function destroy(Request $request, Product $prodcut ){
       $Produto = Product::find($request->id);
       $Produto->delete();
       return $Produto;
    }

}
