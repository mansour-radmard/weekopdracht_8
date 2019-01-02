@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-6 offset-md-2">
        <div class="card mt-4">
            <img class="card-img-top img-fluid" src="http://placehold.it/900x400" alt="">
            <div class="card-body">
                <small class="text-muted">Seller: {{$ad->user->first_name}} {{$ad->user->last_name}} </small>
                <h2>{{$ad->product_name}}</h2>
                <h4><span>EUR </span>{{$ad->price}}</h4>
                <p class="card-text">{{$ad->product_description}}</p>
                <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
                4.0 stars
            </div>
        </div>
        <div class="card card-outline-secondary my-4">
            <div class="card-header">
                Offers made
            </div>
            <div class="card-body">
                <p>
                    <spa>€ </spa>
                </p>
                <small class="text-muted">By: <br />Bidded on </small>
                <hr>
            </div>
        </div>
        <div class="card card-outline-secondary my-4">
            <div class="card-body">
                <form action="#" method="POST">
                  @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <span class="input-symbol-euro">
                                <input type="number" name="price" value="0" min="0" step="1" />
                            </span>
                        </div>
                        <div class="col-md-6">
                            <input name="user_id" value="" hidden />
                            <input name="id" value="" hidden />
                            <button type="submit" name="submit" class="btn btn-success">Make offer</button><br />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
