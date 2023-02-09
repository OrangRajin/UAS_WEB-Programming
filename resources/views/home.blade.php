@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mb-3">
            <img src="{{url('images/logo.png')}}" width="200" class="rounded mx-auto d-block" alt="">
        </div>
        
        @foreach ($items as $item)
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{url('images/pisang.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">{{$item->item_name}}</h5>
                      <p class="card-text">Rp. {{number_format($item->price)}}
                        <hr>
                        {{$item->item_desc}}
                      </p>
                      <a href="{{url('order')}}/{{ $item->item_id }}" class="btn btn-primary"><i class="fa fa-shopping-cart">
                        </i>Add to Cart</a>
                    </div>
                  </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
