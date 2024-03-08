@extends('layouts.app')

@section('content')
<div id="page-content" class="page-content">
    <div class="banner">
        <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url( '{{asset('assets/img/bg-header.jpg')}}') ;margin-top:-25px">
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
                    <div class="item">
                        <a href="shop.html">
                            <div class="media d-flex align-items-center justify-content-center">
                                <span class="d-flex mr-2"><i class="sb-bistro-carrot"></i></span>
                                <div class="media-body">
                                    <h5>Vegetables</h5>
                                    <p>Freshly Harvested Veggies From Local Growers</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="shop.html">
                            <div class="media d-flex align-items-center justify-content-center">
                                <span class="d-flex mr-2"><i class="sb-bistro-apple"></i></span>
                                <div class="media-body">
                                    <h5>Fruits</h5>
                                    <p>Variety of Fruits From Local Growers</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="shop.html">
                            <div class="media d-flex align-items-center justify-content-center">
                                <span class="d-flex mr-2"><i class="sb-bistro-roast-leg"></i></span>
                                <div class="media-body">
                                    <h5>Meats</h5>
                                    <p>Protein Rich Ingridients From Local Farmers</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="shop.html">
                            <div class="media d-flex align-items-center justify-content-center">
                                <span class="d-flex mr-2"><i class="sb-bistro-fish-1"></i></span>
                                <div class="media-body">
                                    <h5>Fishes</h5>
                                    <p>Protein Rich Ingridients From Local Farmers</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="shop.html">
                            <div class="media d-flex align-items-center justify-content-center">
                                <span class="d-flex mr-2"><i class="sb-bistro-french-fries"></i></span>
                                <div class="media-body">
                                    <h5>Frozen Foods</h5>
                                    <p>Protein Rich Ingridients From Local Farmers</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="shop.html">
                            <div class="media d-flex align-items-center justify-content-center">
                                <span class="d-flex mr-2"><i class="sb-bistro-appetizer"></i></span>
                                <div class="media-body">
                                    <h5>Packages</h5>
                                    <p>Protein Rich Ingridients From Local Farmers</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="most-wanted">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title">Products For This Category</h2>
                    @if ($products->count()>0)
                    <div class="product-carousel owl-carousel">
                       
                            
                        
                        @foreach ($products as $product)
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
                                             untill{{$product->exp_date}}
                                        </span>
                                        <span class="badge badge-primary">
                                            20% OFF
                                        </span>
                                    </div>
                                    <img src=" {{asset('assets/img/'.$product->image)}}" alt="Card image 2" class="card-img-top">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="detail-product.html">{{$product->name}}</a>
                                    </h4>
                                    <div class="card-price">
                                     
                                        <span class="reguler">{{$product->price}} DH</span>
                                    </div>
                                    <a href={{route('single.Product',$product->id)}} class="btn btn-block btn-primary">
                                        Display Details
                                    </a>

                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @else
                       <p class="alert alert-success">
                            there are no products in this category just now
                       </p>
                       @endif
                </div>
            </div>
        </div>
    </section>

   

  

   

   
</div>
@endsection