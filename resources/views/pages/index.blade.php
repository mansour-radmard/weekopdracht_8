@extends('layouts.app')

@section('content')
<div class="row text-center">
   @foreach ($ads as $ad)
    <div class="col-md-3">
        <div class="card">
            <img class="card-img-top" src="http://placehold.it/500x325" alt="">
            <div class="card-body">
                <h5 class="card-title">{{$ad->product_name}}</h5>
                <h6><span>EUR </span>{{$ad->price}}</h6>
                <p class="card-text">{{str_limit ($ad->product_description, 20)}}</p>
            </div>
            <div class="card-footer">
                <a href="{{ route('ad.show', ['id' => $ad->id]) }}" class="btn btn-primary">Find Out More!</a>
            </div>
        </div>
    </div>
   @endforeach
</div>
<div class="row">
    <div class="col-md-12">
        <!-- Admin / user panel -->
        <div class="card my-4">
            <h5 class="card-header"></h5>
            <div class="card-body user-panel">
                <h6 id="name">
                    <i class="fas fa-user"></i>
                </h6>
                <h6 id="date">
                    <i class="far fa-calendar-alt"></i>
                </h6>
                <h6>
                    <a href="#"><i class="fas fa-ad"></i> Add new Ad </a>
                </h6>
                <h6>
                    <a href="#"><i class="far fa-address-card"></i> My Ads </a>
                </h6>
            </div>
        </div>
    </div>
</div>
@endsection
