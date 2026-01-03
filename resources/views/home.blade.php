@extends('layouts.app')

@section('content')
<div id="page-content" class="page-content" style="margin-top: -25px">
    <div class="banner">
        <div class="jumbotron jumbotron-video text-center bg-dark mb-0 rounded-0">
            <video width="100%" preload="auto" loop autoplay muted>
                <source src='assets/media/explore.mp4' type='video/mp4' />
                <source src='assets/media/explore.webm' type='video/webm' />
            </video>
            <div class="container">
                <h1 class="pt-5">
                    Save time and leave the<br>
                    groceries to us.
                </h1>
                <p class="lead">
                    Always Fresh Everyday.
                </p>

         
<div class="row">
    <div class="col-md-4">
        <div class="card border-0 text-center">
            <div class="card-icon">
                <div class="card-icon-i">
                    <i class="fa fa-shopping-basket"></i>
                </div>
            </div>
            <div class="card-body">
                <h4 class="card-title">
                    Buy
                </h4>
                <p class="card-text">
                    Simply click-to-buy on the product you want and submit your order when you're done.
                </p>

            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card border-0 text-center">
            <div class="card-icon">
                <div class="card-icon-i">
                    <i class="fas fa-leaf"></i>
                </div>
            </div>
            <div class="card-body">
                <h4 class="card-title">
                    Harvest
                </h4>
                <p class="card-text">
                    Our team ensures the produce quality is up to our standard and delivers to your door within 24 hours of harvest day.
                </p>

            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card border-0 text-center">
            <div class="card-icon">
                <div class="card-icon-i">
                    <i class="fa fa-truck"></i>
                </div>
            </div>
            <div class="card-body">
                <h4 class="card-title">
                    Delivery
                </h4>
                <p class="card-text">
                    Farmers receive your orders two days in advance so they can prepare for harvest exactly as your orders – no wasted produce.
                </p>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

<section id="why">
<h2 class="title">Why FOOD ORDER</h2>
<div class="container">
<div class="row">
<div class="col-md-4">
    <div class="card border-0 text-center gray-bg">
        <div class="card-icon">
            <div class="card-icon-i text-success">
                <i class="fas fa-leaf"></i>
            </div>
        </div>
        <div class="card-body">
            <h4 class="card-title">
                Straight from the Farm
            </h4>
            <p class="card-text">
                Our farm-to-table concept emphasizes on getting the fresh produce directly from local farms to your tables within one day, hence you know you get the freshest produce straight from harvest.
            </p>

        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="card border-0 text-center gray-bg">
        <div class="card-icon">
            <div class="card-icon-i text-success">
                <i class="fa fa-question"></i>
            </div>
        </div>
        <div class="card-body">
            <h4 class="card-title">
                Know Your Farmers
            </h4>
            <p class="card-text">
                We want you to know exactly who is growing your food by having the farmers profile on each item and farmers page. You’re welcome to visit the farms and see the love they put into growing your food.
            </p>

        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="card border-0 text-center gray-bg">
        <div class="card-icon">
            <div class="card-icon-i text-success">
                <i class="fas fa-smile"></i>
            </div>
        </div>
        <div class="card-body">
            <h4 class="card-title">
                Improving Farmers’ Livelihood
            </h4>
            <p class="card-text">
                Slowly but sure, by cutting the complex supply chain and food system, we hope to improve the welfare of farmers by giving them the returns they deserve for their hard work.
            </p>
        </div>
    </div>
</div>

    <div class="col-md-12 mt-5 text-center">
        <a href="{{route('products.shop')}}" class="btn btn-primary btn-lg">SHOP NOW</a>
       
    </div>
    </div>
    </div>
    </section>

    <!-- Trust sections: Testimonials, Security & Delivery, Our Farmers -->
    <section id="trust" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="title">What Our Customers Say</h2>
                    <div class="card border-0">
                        <div class="card-body">
                            <blockquote class="blockquote">
                                <p class="mb-2">"The produce always arrives fresh and tastes amazing. I trust Food Order for our weekly groceries."</p>
                                <footer class="blockquote-footer">Anna, regular customer</footer>
                            </blockquote>
                            <blockquote class="blockquote mt-3">
                                <p class="mb-2">"Fast delivery and great communication — excellent service from farm to table."</p>
                                <footer class="blockquote-footer">Marc, Lyon</footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2 class="title">Secure & Reliable</h2>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="feature-box">
                                <h5>Secure Payments</h5>
                                <p>We use trusted payment gateways and never store your card details.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="feature-box">
                                <h5>Fast Delivery</h5>
                                <p>Same-day dispatch from local farms and next-day delivery in most areas.</p>
                            </div>
                        </div>
                        <div class="col-12 mt-3">
                            <h5>Our Farmers</h5>
                            <p>We partner with local growers who follow sustainable practices. Learn more on each product page.</p>
                            <div class="d-flex gap-2">
                                <img src="{{asset('assets/img/legume.jpg')}}" class="img-fluid rounded" style="width:80px;height:80px;object-fit:cover">
                                <img src="{{asset('assets/img/legume.jpg')}}" class="img-fluid rounded" style="width:80px;height:80px;object-fit:cover">
                                <img src="{{asset('assets/img/legume.jpg')}}" class="img-fluid rounded" style="width:80px;height:80px;object-fit:cover">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="categories" class="pb-0 gray-bg">
    <h2 class="title">Categories</h2>
    <div class="landing-categories owl-carousel">
        @foreach ($categories as $categorie)
        <div class="item">
            <div class="card rounded-0 border-0 text-center">
                <img src="{{asset('assets/img/'.$categorie->image.'')}}">
                <div class="card-img-overlay d-flex align-items-center justify-content-center">
                    <!-- <h4 class="card-title">Vegetables</h4> -->
                    <a href="{{url('products/category/'.$categorie->id)}}" class="btn btn-primary btn-lg">{{$categorie->name}}</a>
                </div>
            </div>
            </div>
        @endforeach
    
    
    </div>
    </section>
    </div>
@endsection
