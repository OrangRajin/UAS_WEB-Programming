@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{url('home')}}" class="btn btn-primary"><i class="fa fa-arrow-left">Back</i></a>
        </div>
        <div class="col-md-12 mt-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Check Out</li>
                </ol>
              </nav>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3><i class="fa fa-shopping-cart"></i>Check Out</h3>
                    @if (!empty($pesanan))
                    <div class="col-md-12">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Barang</th>
                                    <th>Total Harga</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach($orders as $orders)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$order->item->item_name}}</td>
                                    <td>{{$order->price}}</td>
                                    <td>
                                        <form action="{{url('check_out')}}/{{$order->order_id}}" method="post"></form>
                                        @csrf
                                        {{method_field('DELETE')}}
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash" ></i></button>
                                    </td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td>
                                        <a href="{{'konfirmasi-check-out'}}" class="btn btn-success">
                                            <i class="fa fa-shopping-cart">
                                            </i>Check Out
                                        </a>
                                    </td>
                                </tr>                   
                            </tbody>
                        </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection
