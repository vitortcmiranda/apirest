<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductsController extends Controller
{
    //
    public function index(){
        return Product::all();
    }

    public function store(Request $request){
        return Product::create($request->all());
    }

    public function excluir(Request $request){
        Product::delete($request->where($request->id));
        return 'Produto'.$request->title.' foi deletado';
    }

    public function update(Request $request,Prodcut $prodcut){
        $product->update($request0>all());
        return $product;
    }

    public function listar($id,Product $produto){
        Product::withoutGlobalScope('id');
        //$produto->where('id','=',$id);
        dd($id);
        return 'produto aí o infeliz'.$produto;
        // return Product::selectOne()->whereRaw($id);
    }
}
