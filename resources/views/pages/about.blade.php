@extends('layouts.app')

@section('content')

<div id="page-content" class="page-content">
    <div class="banner">
        <div class="jumbotron jumbotron-bg text-center rounded-0" style=" margin-top:-25px;background-image: url({{asset('assets/img/bg-header.jpg')}});">
            <div class="container">
                <h1 class="pt-5">
                    Food Order
                </h1>
                <p class="lead">
                    Fresh fruits & vegetables delivered to your door.
                </p>
            </div>
        </div>
    </div>

    <section class="bg-leaf">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center mb-3">
                    <h1 class="title text-uppercase mb-2">Food Order</h1>
                    <h5>
                        Fruits & Vegetables
                    </h5>
                </div>
                <div class="col-md-10">
                    <p class="text-justify">
                        We make it easy to order fresh fruits and vegetables from local farms. Choose your produce, place an order, and receive freshly harvested items delivered quickly to your home.
                    </p>
                </div>
            </div>

            <div class="row justify-content-center align-items-center mt-3">
                <div class="col-md-4">
                    <img src="assets/img/legume.jpg" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <h5>
                        Straight from the Farm
                    </h5>
                    <p>
                        We source fruits and vegetables directly from nearby farms and deliver them within 24 hours to guarantee peak freshness.
                    </p>
                </div>
            </div>

            <div class="row justify-content-center align-items-center text-right mt-3">
                <div class="col-md-6">
                    <h5>
                        Know Your Farmers
                    </h5>
                    <p>
                        Each product links to the farmer who grew it so you can learn where your food comes from and support local growers.
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="assets/img/legume.jpg" class="img-fluid">
                </div>
            </div>

            <div class="row justify-content-center align-items-center mt-3">
                <div class="col-md-4">
                    <img src="assets/img/legume.jpg" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <h5>
                        Improving Farmers’ Livelihood
                    </h5>
                    <p>
                        By connecting customers directly with producers, we help farmers receive fair prices and build sustainable businesses.
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection