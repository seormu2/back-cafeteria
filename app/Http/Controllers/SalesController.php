<?php

namespace App\Http\Controllers;
use App\Models\Sales;
use Illuminate\Http\Request;
use App\Response\Response;
Use App\Controller\ProductController;

class SalesController extends Controller
{
    public function createSale(Request $resquest){
        $sale = new Sales();
        $sale->amount = $resquest->input('amount');
        $sale->total   = $resquest->input('total');
        $sale->idProduct       = $resquest->input('idProduct');
        $result = $sale->save();
        
        if($result){
            return Response::responseSuccess($sale,200);
        }else{
            return Response::responseError('Ha ocurrido un error al guardar el producto',500);
        }
    }
}
