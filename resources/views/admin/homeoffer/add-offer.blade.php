@extends('admin.master')
@section('title')
    Add Home Offer
@endsection
@section('content')


    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Add Home Offer Info</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-10">
                <h1 class="text-success">{{Session::get('message')}}</h1>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form action="{{url('new-offer')}}" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="name"> Big Image Caption</label>
                                        <input type="text" name="big_img_caption" class="form-control" value="" placeholder="Caption">
                                        <span class="text-danger">{{$errors->has('big_img_caption')?$errors->first('big_img_caption'):''}}</span>

                                    </div>
                                    <div class="form-group">
                                        <label for="name"> Offer</label>
                                        <input type="text" name="offer" class="form-control" value="" placeholder="Ex:00% off">
                                        <span class="text-danger">{{$errors->has('offer')?$errors->first('offer'):''}}</span>

                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" control-label>Big Image</label>
                                        <input type="file" name="big_image" accept="image/*">
                                    </div>
                                    <div class="form-group">
                                        <label for="name"> Small Image Caption</label>
                                        <input type="text" name="small_img_caption" class="form-control" value="" placeholder="Caption">
                                        <span class="text-danger">{{$errors->has('small_img_caption')?$errors->first('small_img_caption'):''}}</span>

                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" control-label>Small Image</label>
                                        <input type="file" name="small_image" accept="image/*">
                                    </div>
                                    <div class="form-group">
                                        <label for="name"> Left Image Caption</label>
                                        <input type="text" name="left_img_caption" class="form-control" value="" placeholder="Caption">
                                        <span class="text-danger">{{$errors->has('left_img_caption')?$errors->first('left_img_caption'):''}}</span>

                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" control-label>Left Image</label>
                                        <input type="file" name="left_image" accept="image/*">
                                    </div>
                                    <div class="form-group">
                                        <label for="name"> Right Image Caption</label>
                                        <input type="text" name="right_img_caption" class="form-control" value="" placeholder="Caption">
                                        <span class="text-danger">{{$errors->has('right_img_caption')?$errors->first('right_img_caption'):''}}</span>

                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" control-label>Right Image</label>
                                        <input type="file" name="right_image" accept="image/*">
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" name="submit" class="btn btn-primary btn-lg">Save Home Offer</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
@endsection
