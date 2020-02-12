@extends('layouts.app')

@section('content')



<div data-vide-bg="video/video">
    <div class="container">
		<div class="banner-info">
			<h3>It is a long established fact that a reader will be distracted by 
			the readable </h3>	
			<div class="search-form">
                <div class="autocomplete">
                    <input autocomplete="off" id="myInput" type="text" placeholder="Search..." name="Search...">
                </div>
                <input data-toggle="modal" data-target="#myModal1" id="searchBtn" type="submit" value=" " >
			</div>		
		</div>	
    </div>
</div>

    <!-- <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script> -->
    {{-- <script src="js/jquery.vide.min.js"></script> --}}
    <script src="{{ asset('js/jquery.vide.min.js')}}"></script>

<!--content-->
<div class="content-top ">
    <div class="container ">
        <div class="spec ">
            <h3>Special Offers</h3>
            <div class="ser-t">
                <b></b>
                <span><i></i></span>
                <b class="line"></b>
            </div>
        </div>
        <div class="tab-head ">
            <div class=" tab-content tab-content-t ">
                <div class="tab-pane active text-style" id="tab1">
                    <div class=" con-w3l">
                        @foreach ($products as $product)
                        <div class="col-md-3 m-wthree" >
                            <div class="col-m">
                                <a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
                                <img src="{{$product->Image}}" id="image" class="img-responsive" 
                                data-id="{{$product->id}}" data-name="{{$product->Name}}" 
                                data-summary="{{$product->Description}}" data-price="{{$product->Salary}}" 
                                data-quantity="1" alt="">
                                    <div class="offer">
                                        <p><span>Offer</span></p>
                                    </div>
                                </a>
                                <div class="mid-1">
                                    <div class="women">
                                    <h6><a href="single.html">{{$product->Name}}</a>(1 kg)</h6>
                                    </div>
                                    <div class="mid-2">
                                    <p><em class="item_price">${{$product->Salary}}</em></p>
                                        <div class="block">
                                            <div class="starbox small ghosting"> </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="d-flex">
                                    <div class="add">
                                        @if (Auth::user()->isadmin == true)
                                            <a href='{{ route('home.edit',['home'=>$product->id]) }}'>
                                                <button class="btn btn-danger my-cart-btn my-cart-b " data-id="1"
                                                    data-name="Moong" data-summary="summary 1" data-price="1.50"
                                                    data-quantity="1" data-image="images/of.png">
                                                    Edit
                                                </button>
                                            </a>    
                                        @else
                                            <div class="add-to">
                                                <button class="btn btn-danger my-cart-btn my-cart-b" 
                                                    data-id="{{$product->id}}" data-name="{{$product->Name}}" 
                                                    data-summary="summary 1" data-price="{{$product->Salary}}" 
                                                    data-quantity="1" data-image="{{$product->Image}}">
                                                        Add to Cart
                                                </button>
                                            </div>
                                        @endif
                                    @if (Auth::user()->isadmin == true)
                                        <div style="display: inline-flex">
                                        {!! Form::open(array('route' => array('home.destroy','home'=>$product->id),'method'=>'POST')) !!}
                                        {!! Form::hidden('_method', 'DELETE') !!}
                                        <button type="submit" class="btn btn-danger my-cart-btn my-cart-b " data-id="1"
                                        data-name="Moong" data-summary="summary 1" data-price="1.50"
                                        data-quantity="1" data-image="images/of.png">
                                        Delete
                                        </button>
                                        {!! Form::close() !!}
                                        
                                    <form action="{{ route('customer.purchase') }}" method="POST">
                                        
                                    </form>
                                        </div>
                                    @endif
                                    </div>
                                    </div>
                                    
                                    </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--content-->
<div class="content-mid">
    <div class="container">

        <div class="col-md-4 m-w3ls">
            <div class="col-md1 ">
                <a href="kitchen.html">
                    <img src="{{asset('images/co1.jpg')}}" class="img-responsive img" alt="">
                    <div class="big-sa">
                        <h6>New Collections</h6>
                        <h3>Season<span>ing </span></h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority </p>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-4 m-w3ls1">
            <div class="col-md ">
                <a href="hold.html">
                    <img src="{{asset('images/co.jpg')}}" class="img-responsive img" alt="">
                    <div class="big-sale">
                        <div class="big-sale1">
                            <h3>Big <span>Sale</span></h3>
                            <p>It is a long established fact that a reader </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!--content-->



@endsection

