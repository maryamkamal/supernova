@extends('layouts.electronicStore')

@section('content')



<!-- start cards ----- -->
 <div class="content" style="margin-bottom:50px;" >
     
        <div class="container-1">
            <div class="row">
            
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb40 text-center">
                        <h1>Items Added To Your Shopping Cart</h1>
                </div>

            </div>

            <div class="table_back">
                
                <table class="table" border="1px">
                    <tr>
                        <th>NAME</th>
                        <th>PRICE</th>
                        <th>QTY</th>
                        <th>ACTION</th>
                    </tr>
                @foreach($items as $row)
                    <tr>
                        <th>{{$row->name}}</th>
                        <th>{{$row->price}}</th>
                        <th>
                           <form method="PUT" action="{{ url('cart.update/'.$row->rowId) }}">
                        {{ csrf_field() }}
				    <input type="text" name="qty" value="{{$row->qty }}">
				
                        </th>

                        <th>
						<input type="submit" id="ok" value ="OK"> 
						</form>
						<a href="{{ url('cart.remove/'.$row->rowId) }}" id="del"> delete</a>
                            
                        </th>
                    </tr>
                @endforeach
                    <tr>
                        <th></th>
                        <th>
                            
                            <p>Total : {{Cart::subtotal()}}</p>
                           
                        </th>
                        <th>
                            <p>Items</p>
                            <p>{{Cart::count()}}</p>
                        </th>
                        <th></th>
                    </tr>
                    
                </table>

                @if(Cart::count() > 0)
			    <button class="btn btn-danger enroll" data-toggle="modal"  data-target="#enrollCourse" id="submit">
                                                                     confirm </button>
	            <a href="{{ route('cart.destroy') }}"id="destroy"> destroy</a>
                @endif
            </div>



     
    

</div>


     




@endsection
