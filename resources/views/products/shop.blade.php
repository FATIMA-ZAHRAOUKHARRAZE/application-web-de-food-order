@extends('layouts.app')

@section('content')
<div id="page-content" class="page-content">
    <div class="banner">
        <div class="jumbotron jumbotron-bg text-center rounded-0" style=" margin-top:-25px;background-image: url({{asset('assets/img/bg-header.jpg')}});">
            <div class="container">
                <h1 class="pt-5">
                    Shopping Page
                </h1>
                <p class="lead">
                    Save time and leave the groceries to us.
                </p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="shop-categories owl-carousel mt-5">
                    @foreach ($categories as $categorie)
                    <div class="item">
                        <a href="{{route('single.category',$categorie->id)}}">
                            <div class="media d-flex align-items-center justify-content-center">
                              
                                <span class="d-flex mr-2"><i class="sb-bistro-{{$categorie->icon}}"></i></span>
                                <div class="media-body">
                                    <h5>{{$categorie->name}}</h5>
                                    <p></p>
                                </div>
                            </div>
                            
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <section id="most-wanted">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title">Most Wanted</h2>
                    <div class="product-carousel owl-carousel">
                        @foreach ($mostwanted as $mostwante)
                        <div class="item">
                            <div class="card card-product">
                                <div class="card-ribbon">
                                    <div class="card-ribbon-container right">
                                        <span class="ribbon ribbon-primary">SPECIAL</span>
                                    </div>
                                </div>
                                <div class="card-badge">
                                    <div class="card-badge-container left">
                                        <span class="badge badge-default">
                                            Until {{$mostwante->exp_date}}
                                        </span>
                                        <span class="badge badge-primary">
                                            20% OFF
                                        </span>
                                    </div>
                                    <img src="{{asset('assets/img/'.$mostwante->image)}}" alt="Card image 2" class="card-img-top">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="{{route('single.Product',$mostwante->id)}}">{{$mostwante->name}}</a>
                                    </h4>
                                    <div class="card-price">
                                        <span class="reguler">{{$mostwante->price}} DH</span>
                                    </div>
                                    <a href="{{route('single.Product',$mostwante->id)}}" class="btn btn-block btn-primary">
                                        Display Details
                                    </a>

                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="vegetables" class="gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title">Vegetables</h2>
                    <div class="product-carousel owl-carousel">
                        @foreach ($vegetables as $vegetable)
                        <div class="item">
                            <div class="card card-product">
                                <div class="card-ribbon">
                                    <div class="card-ribbon-container right">
                                        <span class="ribbon ribbon-primary">SPECIAL</span>
                                    </div>
                                </div>
                                <div class="card-badge">
                                    <div class="card-badge-container left">
                                        <span class="badge badge-default">
                                            Until 2018
                                        </span>
                                        <span class="badge badge-primary">
                                            20% OFF
                                        </span>
                                    </div>
                                    <img src="{{asset('assets/img/'.$vegetable->image)}}" alt="Card image 2" class="card-img-top">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="{{route('single.Product',$mostwante->id)}}">{{$vegetable->name}}</a>
                                    </h4>
                                    <div class="card-price">
                                        
                                        <span class="reguler">{{$vegetable->price}} DH</span>
                                    </div>
                                    <a href="{{route('single.Product',$mostwante->id)}}" class="btn btn-block btn-primary">
                                        Display Detail
                                    </a>

                                </div>
                            </div>
                        </div>
                       @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="meats">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title">Meats</h2>
                    <div class="product-carousel owl-carousel">
                        @foreach ($meats as $meat)
                        <div class="item">
                            <div class="card card-product">
                                <div class="card-ribbon">
                                    <div class="card-ribbon-container right">
                                        <span class="ribbon ribbon-primary">SPECIAL</span>
                                    </div>
                                </div>
                                <div class="card-badge">
                                    <div class="card-badge-container left">
                                        <span class="badge badge-default">
                                            Until {{$meat->exp_date}}
                                        </span>
                                        <span class="badge badge-primary">
                                            20% OFF
                                        </span>
                                    </div>
                                    <img src=" {{asset('assets/img/'.$meat->image)}}" alt="Card image 2" class="card-img-top">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="{{route('single.Product',$meat->id)}}">{{$meat->name}}</a>
                                    </h4>
                                    <div class="card-price">
                                       
                                        <span class="reguler">{{$meat->price}} DH</span>
                                    </div>
                                    <a href="{{route('single.Product',$meat->id)}}" class="btn btn-block btn-primary">
                                        Display Detail
                                    </a>

                                </div>
                            </div>
                        </div>
                       @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="fishes" class="gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title">Fishes</h2>
                    <div class="product-carousel owl-carousel">
                        @foreach ($fishes as $fishe)
                        <div class="item">
                            <div class="card card-product">
                                <div class="card-ribbon">
                                    <div class="card-ribbon-container right">
                                        <span class="ribbon ribbon-primary">SPECIAL</span>
                                    </div>
                                </div>
                                <div class="card-badge">
                                    <div class="card-badge-container left">
                                        <span class="badge badge-default">
                                            Until {{$fishe->exp_date}}
                                        </span>
                                        <span class="badge badge-primary">
                                            20% OFF
                                        </span>
                                    </div>
                                    <img src=" {{asset('assets/img/'.$fishe->image)}}" alt="Card image 2" class="card-img-top">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="{{route('single.Product',$fishe->id)}}"> {{$fishe->name}}</a>
                                    </h4>
                                    <div class="card-price">
                                       
                                        <span class="reguler">{{$fishe->price}} DH</span>
                                    </div>
                                    <a href="{{route('single.Product',$fishe->id)}}" class="btn btn-block btn-primary">
                                      Display Detail
                                    </a>

                                </div>
                            </div>
                        </div>
                       @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="fruits">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title">Fruits</h2>
                    <div class="product-carousel owl-carousel">
                        @foreach ($fruits as $fruit)
                        <div class="item">
                            <div class="card card-product">
                                <div class="card-ribbon">
                                    <div class="card-ribbon-container right">
                                        <span class="ribbon ribbon-primary">SPECIAL</span>
                                    </div>
                                </div>
                                <div class="card-badge">
                                    <div class="card-badge-container left">
                                        <span class="badge badge-default">
                                            Until {{$fruit->exp_date}}
                                        </span>
                                        <span class="badge badge-primary">
                                            20% OFF
                                        </span>
                                    </div>
                                    <img src="{{asset('assets/img/'.$fruit->image)}}" alt="Card image 2" class="card-img-top">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="{{route('single.Product',$fruit->id)}}">{{$fruit->name}}</a>
                                    </h4>
                                    <div class="card-price">
                                        
                                        <span class="reguler">{{$fruit->price}} DH</span>
                                    </div>
                                    <a href="{{route('single.Product',$fruit->id)}}" class="btn btn-block btn-primary">
                                        Add to Cart
                                    </a>

                                </div>
                            </div>
                        </div>
                        @endforeach
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection