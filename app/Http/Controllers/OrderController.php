<?php

namespace App\Http\Controllers;

use App\Models\item;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Alert;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id){
        $item = item::where('item_id', $id)->first();

        return view('order.index', compact('item'));
    }

    public function ordering(Request $request, $id){
        $item = item::where('item_id', $id)->first();

        $cek_pesanan = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();
        //Menyimpan ke database order
        if(empty($cek_pesanan)){
            $order = new Order;
            $order->user_id = Auth::user()->id; 
            $order->status = 0;
            $order->price = $item->price*$request->jumlah_pesan;
            $order->save();
        }

        // Alert::success('Success Message', 'Sucsess');
        redirect('home');

    }

    public function check_out(){
        $pesanan = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();
        if(!empty($pesanan)){
            $pesanan_detail = Order::where('order_id', $pesanan->id)->get();
        }

        return view('order.check_out', compact('pesanan', 'pesanan_detail'));
    }

    public function delete($id){
        $order = Order::where('order_id', $id)->first();

        $order->delete();
        return redirect('check-out');
    }

    public function confirm(){
        $pesanan = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $pesanan->status = 1;
        $pesanan->update();

        return redirect('home');
    }
}
