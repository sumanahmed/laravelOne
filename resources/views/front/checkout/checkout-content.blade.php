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
               <h3 class="tittle1"> You have to login to complete your valuable order. If you are not registered registration first</h3>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="panel-body">
                            <h2 class="text-success text-center">Login Form</h2>
                            <hr>
                            <form class="form-horizontal" action="{{ url('/customer-login') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="email" class="control-label col-sm-3">Email Address</label>
                                    <div class="col-sm-9">
                                        <input type="email" name="email" class="form-control" id="email">
                                        {{ $errors->has('email')? $errors->first('email') : '' }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="control-label col-sm-3">Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" name="password" class="form-control" id="password">
                                        {{ $errors->has('password')? $errors->first('password') : '' }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-9 col-sm-offset-3">
                                        <input type="submit" name="btn" value="Login" class="btn btn-success btn-block" >
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="panel-body">
                            <h2 class="text-success text-center">Registration Form</h2>
                            <hr>
                            <form class="form-horizontal" action="{{ url('/new-customer') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="first_name" class="control-label col-sm-3">First Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="first_name" class="form-control" id="first_name">
                                        {{ $errors->has('first_name')? $errors->first('first_name') : '' }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="last_name" class="control-label col-sm-3">Last Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="last_name" class="form-control" id="last_name">
                                        {{ $errors->has('last_name')? $errors->first('last_name') : '' }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="control-label col-sm-3">Email Address</label>
                                    <div class="col-sm-9">
                                        <input type="email" name="email" class="form-control" id="email">
                                        {{ $errors->has('email')? $errors->first('email') : '' }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="control-label col-sm-3">Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" name="password" class="form-control" id="password">
                                        {{ $errors->has('password')? $errors->first('password') : '' }}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="phone_number" class="control-label col-sm-3">Phone Number</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="phone_number" class="form-control" id="phone_number">
                                        {{ $errors->has('phone_number')? $errors->first('phone_number') : '' }}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="address" class="control-label col-sm-3">Address</label>
                                    <div class="col-sm-9">
                                        <textarea name="address" class="form-control" id="address" cols="30" rows="5" style="resize: horizontal"></textarea>
                                        {{ $errors->has('address')? $errors->first('address') : '' }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-9 col-sm-offset-3">
                                        <input type="submit" name="btn" value="Registration" class="btn btn-success btn-block" >
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