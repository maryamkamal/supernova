@extends('layouts.electronicStore')

@section('content')


    <!-- start cards ----- -->
    <div class="content" style="margin-right: -4px">
 
				 
        <div class="container-1">
            <div class="row">
			 <div  style="margin-right">

        	<a href="{{ route('cart') }}" class="fas fa-cart-plus fa-2x">{{Cart::count()}}</a>
					
                 </div>
                  
                <div class="col-md-6 col-12" style="margin:60px 0">
                  <h3>Search for your Need</h3>
				  <form action="/search" method="GET" role="search">
                   {{ csrf_field() }}
                    <div class="input-group">
					<input type="text" placeholder="Search.." name="search_item">
                    <button type="submit"><i class="fa fa-search"></i></button>
                    </div>
					</form>
                </div>
          

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb40 text-center">
                    <h1>Explore Our Electronics</h1>
                </div>

            </div>
				<div class="row">
                @foreach($products as $product)
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 filter type4">
                    <!-- team-img -->
                    <div class="team-block">
                        <div class="team-img">
                            <img src="{{ url($product->imgpath) }}">
                            <div class="team-content">
                                <h4 class="text-white">{{ $product->title }}</h4>
								<h4 class="text-white">{{ $product->price }}lE</h4>

                            </div>
                            
                            <div class="overlay">
                                <div class="text">
                                    <h4>{{ $product->title }}</h4>
                                    <p>{{ $product->description }}</p>
                                </div>
                                
								<a href="{{ url('add-to-cart/'.$product->id) }}"id="add" >Add To Cart</a>
                            </div>

                        </div>
                    </div>
                </div>
    @endforeach               
    
        </div>
    </div>

</div>
@endsection