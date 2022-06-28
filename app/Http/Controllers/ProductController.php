<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Response\Response;
class ProductController extends Controller
{
    public function listProducts(){
        return Product::all();
    }

    public function deleteProduct($id){
        $product = Product::find($id);
        $result = $product->delete();
        if($result){
            return Response::responseSuccess($product,200);
        }else{
            return Response::responseError('Ha ocurrido un error al eliminar el producto',500);
        }
    }

    public function createProduct(Request $resquest){
        $product = new Product();
        $product->nameProduct = $resquest->input('nameProduct');
        $product->referency   = $resquest->input('referency');
        $product->price       = $resquest->input('price');
        $product->weight      = $resquest->input('weight');
        $product->stock       = $resquest->input('stock');
        $product->idCategory  = $resquest->input('idCategory');
        $result = $product->save();
        
        if($result){
            return Response::responseSuccess($product,200);
        }else{
            return Response::responseError('Ha ocurrido un error al guardar el producto',500);
        }
    }

    public function updateProduct(Request $resquest, $id){
        $result = Product::where('id', $id)->update([
            'nameProduct' => $resquest->input('nameProduct'),
            'referency' => $resquest->input('referency'),
            'price' => $resquest->input('price'),
            'weight' => $resquest->input('weight'),
            'stock' => $resquest->input('stock'),
            'idCategory' => $resquest->input('idCategory')
        ]);
        if($result){
            return Response::responseSuccess('producto ' . $resquest->input('nameProduct') . ' actualizado correctamente',200);
        }else{
            return Response::responseError('Ha ocurrido un error al actualizar el producto',500);
        }
    }

    public function updateStock(Request $resquest,$id){
        $result = Product::where('id', $id)->update([
            'stock' => $resquest->input('stock'),
        ]);
        if($result){
            return Response::responseSuccess('actualizado correctamente',200);
        }else{
            return Response::responseError('Ha ocurrido un error al actualizar el producto',500);
        }
    }
}
