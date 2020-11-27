<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CartController extends Controller
{
    public function store(Request $request)
    {
      // dd($request);
      $item = \Cart::session('cart')->get($request->id);

      if (is_null($item)) {
        \Cart::session('cart')->add(array(
            'id' => $request->id,
            'name' => $request->nombre,
            'price' => $request->precio,
            'quantity' => $request->cantidad,

        ));
        //Session::flash('addcart');
        return redirect('carrito#cart');
      }else{
        // dd($item->quantity);
        if ($item->quantity >= 2) {
          //Session::flash('addcart');
          return redirect('carrito#cart');
        }else{
          \Cart::session('cart')->add(array(
              'id' => $request->id,
              'name' => $request->nombre,
              'price' => $request->precio,
              'quantity' => $request->cantidad,

          ));
          //Session::flash('addcart');
          return redirect('carrito#cart');
        }
      }




    }

    public function destroy($id)
    {
        \Cart::session('cart')->remove(\Crypt::decrypt($id));
        //Session::flash('delete');
        return redirect('carrito#cart');
    }

    public function datosCliente(Request $request)
    {
        $productos= \Cart::session('cart')->getContent();

        $datos = new \stdClass();
        $datos->nombre =$request->nombre;
        $datos->telefono =$request->telefono;
        $datos->ciudad =$request->nombre;
        $datos->direccion =$request->direccion;

        \Session::put('datosCliente', $datos);
        $datosCliente = \Session::get('datosCliente');

        $ApiKey = env('API_KEY_PAYU');
        $merchanid = env('MERCHANT_ID_PAYU');
        $referencia = $datosCliente->nombre;
        $total = \Cart::session('cart')->getTotal();
        $currency = env('CURRENCY_PAYU');

        $firma = md5($ApiKey."~".$merchanid."~".$referencia."~".$total."~".$currency);

        return view('pages.checkout',compact('datosCliente','productos','firma'));
    }

    public function response(Request $r)
    {

        if($r->lapTransactionState === "APPROVED"){
            $cliente = \Session::get('datosCliente');
            $productos= \Cart::session('cart')->getContent();
            $datos = $cliente;
            $correo = "al221711754@gmail.com";

            Mail::send('email.sendmail', ['cliente' => $cliente, 'productos' => $productos], function ($msj) use ($correo) {

                $msj->subject('Resumen de venta');
                $msj->to($correo);
            });

            \Cart::session('cart')->clear();
            \Session::forget('datosCliente');
            \Session::flash('APPROVED');
            return view('pages.responsepay',compact('datos'));
        }
        if ($r->lapTransactionState === "DECLINED") {

            \Session::flash('DECLINE');
            return view('pages.responsepay');
        }
    }

}
