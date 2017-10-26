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
                <h3 class="title">Wellcome {{session::get('customerName')}}.You have to give us product shipping information to complete your valuable order.If your billing and shipping info are same then just press save shipping Info button </h3>
                <hr>
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="title text-center">Shipping  Info</h4>

                        <div class="panel-body">
                            <form class="form-horizontal" action="{{url('/new-shipping')}}" method="POST">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label class="control-label col-sm-3">Full Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="full_name" class="form-control" value="{{$customer->first_name.' '.$customer->last_name}}"/>
                                        {{$errors->has('full_name') ? $errors->first('full_name'):''}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" name="email" class="form-control" value="{{$customer->email}}"/>
                                        {{$errors->has('email') ? $errors->first('email'):''}}
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3">Phone Number</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="phone_number" class="form-control" value="{{$customer->phone_number}}"/>
                                        {{$errors->has('phone_number') ? $errors->first('phone_number'):''}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3">Address</label>
                                    <div class="col-sm-9">
                                        <textarea type="text" rows="5" name="address" class="form-control"> {{$customer->address}}</textarea>
                                        {{$errors->has('address') ? $errors->first('address'):''}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-9 col-sm-offset-3">
                                        <input type="submit" name="submit" value="Save Shipping Info" class="btn btn-info btn-block"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection