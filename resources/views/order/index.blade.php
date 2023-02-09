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
                  <li class="breadcrumb-item active" aria-current="page">{{ $item->item_name}}</li>
                </ol>
              </nav>
        </div>
        <div class="col-md-12 mt-5">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{url('images/pisang.jpg')}}" class="rounded mx-auto d-block" width="400" alt="">
                    </div>
                    <div class="col-md-6 mt-4">
                        <h3>{{ $item->item_name}}</h3>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Price</td>
                                    <td>:</td>
                                    <td>Rp. {{number_format($item->price)}}</td>
                                </tr>
                                <tr>
                                    <td>Description</td>
                                    <td>:</td>
                                    <td>{{$item->item_desc}}</td>
                                </tr>
                                <form method="POST" action="{{url('order')}}/{{$item->item_id}}">
                                    @csrf
                                    <tr>
                                        <td>Quantity</td>
                                        <td>:</td>
                                        <td>
                                            <input type="text" name="jumlah_pesan" class="form-control" required="">
                                            <button type="submit" class="btn btn-primary mt-3"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                        </td>
                                    </tr>
                                </form>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
