@extends('front.master')


@section('content')
    {{--<h1>In Cart Page</h1>--}}
    <div class="banner1">
        <div class="container">
            <h3><a href="{{url('/')}}">Home</a> / <span>Cart</span></h3>
        </div>
    </div>
    <div class="content">
        <div class="new-single-wl3">
            <div class="container">
                @if($message =Session::get('message'))
                    <h4 class="page-header text-success">{{$message}}</h4>
                @endif
            </div>
        </div>
    </div>
    <div class="content">
        <div class="new-arrivals-w3agile">
            <div class="container">
                <h3 class="title">.You have to give us product Product Payment information to complete your valuable order.</h3>
                <hr>
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="title text-center">Payment  Info</h4>
                        <div class="panel-body">
                            <form action="{{ url('/new-order') }}" method="POST">
                                {{ csrf_field() }}
                                <table width="100%" class="table-bordered table-striped table-bordered" id="dataTables-example">
                                    <tr>
                                        <th>Cash on Delivery</th>
                                        <td><input type="radio" name="payment_type" id=""  value="Cash On Delivery"></td>
                                    </tr>
                                    <tr>
                                        <th>Bkash</th>
                                        <td><input type="radio" name="payment_type" id="" value="Bkash"></td>
                                    </tr>
                                    <tr>
                                        <th>Paypal</th>
                                        <td><input type="radio" name="payment_type" id="" value="Paypal"></td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <td><input type="submit" name="btn" class="btn  btn-info" id="" value="Confirm Order"></td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection