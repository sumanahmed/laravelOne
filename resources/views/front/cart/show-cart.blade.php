@extends('front.master')
@section('content')
    <div class="banner1">
        <div class="container">
            <h3><a href="index.html">Home</a> / <span>Cart</span></h3>
        </div>
    </div>
    <div class="content">
        <div class="new-single-wl3">
            <div class="container">
                @if($message = Session::get('message'))
                    <div class="alert alert-info">
                        <h2>{{ $message }}</h2>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="content">
        <!--single-->
        <div class="single-wl3">
            <div class="container">
                <table class="table table-dark table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">SL No</th>
                        <th scope="col">Product Id</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Product Image</th>
                        <th scope="col">Product Price</th>
                        <th scope="col">Product Quantity</th>
                        <th scope="col">Total Price</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php($i=1)
                    @php($sum=0)
                    @foreach($productcarts as $productcart)
                        <tr>
                            <th scope="row">{{ $i++ }}</th>
                            <td>{{ $productcart->id }}</td>
                            <td>{{ $productcart->name }}</td>
                            <td><img src="{{ asset($productcart->options->image) }}" alt="" height="60" width="60"></td>
                            <td>Tk. {{ $productcart->price }}</td>
                            <td>
                                <form action=" {{ url('/update-cart-product') }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="number" name="qty" value="{{ $productcart->qty }}" >
                                    <input type="hidden" name="rowId" value="{{ $productcart->rowId }}" >
                                    <input type="submit" name="btn" value="Update" id="">
                                </form>
                            </td>
                            <td>Tk. {{ $total =  $productcart->price*$productcart->qty }}</td>
                            <td>
                                <a href="{{ url('/delete-cart-product/'.$productcart->rowId) }}" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure to Delete ?')">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                            </td>
                        </tr>
                        @php($sum = $sum+$total)
                    @endforeach
                    </tbody>
                </table>

                <table class="table table-dark">
                    <thead>
                    <tr>
                        <th scope="col">Sub Total</th>
                        <th scope="col">BDT {{ $sum }}</th>
                    </tr>
                    <tr>
                        <th scope="col">Discout</th>
                        <th scope="col">{{ $discount = 0 }}</th>
                    </tr>
                    <tr>
                        <th scope="col">Tax</th>
                        <th scope="col">{{ $tax = 0 }}</th>
                    </tr>
                    <tr>
                        <th scope="col">Grand Total</th>
                        <th scope="col">{{ $grandTotal = ($sum-$discount)+$tax }}</th>
                    </tr>
                </table>
                <a href="{{ url('/') }}" class="btn btn-success">Continue Shopping</a>
                <a href="{{ url('/checkout') }}" class="btn btn-success">Checkout</a>
            </div>
        <!--single-->
            <!--new-arrivals-->
        </div>
    </div>
@endsection