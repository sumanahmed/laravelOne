@extends('admin.master')
@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Add New Product</h3>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">

                        <h1 class="text-center text-success"> {{ Session::get('message') }}</h1>
                        <form id="myform" class="form-horizontal" action="{{ url('/new-brand') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="publication_status" class="col-sm-3">Category Name</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="publication_status" id="publication_status" required>
                                        <option>---Select Publication Status---</option>
                                        <option value="1">Published</option>
                                        <option value="0">Unpublished</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="publication_status" class="col-sm-3">Brand Name</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="publication_status" id="publication_status" required>
                                        <option>---Select Publication Status---</option>
                                        <option value="1">Published</option>
                                        <option value="0">Unpublished</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="product_name" class="col-sm-3">Product Name</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="product_name" id="product_name" placeholder="Type Product name">
                                    <span class="text-danger">{{ $errors->has('product_name')  ? $errors->first('product_name') : ' ' }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="product_code" class="col-sm-3">Product Code</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="product_code" id="product_code" placeholder="Type Product Code">
                                    <span class="text-danger">{{ $errors->has('product_code')  ? $errors->first('product_code') : ' ' }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="product_price" class="col-sm-3">Product Price</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="number" name="product_price" id="product_price" placeholder="Type Product Price">
                                    <span class="text-danger">{{ $errors->has('product_price')  ? $errors->first('product_price') : ' ' }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="product_quantity" class="col-sm-3">Product Quantity</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="number" name="product_quantity" id="product_quantity" placeholder="Type Product Quantity">
                                    <span class="text-danger">{{ $errors->has('product_price')  ? $errors->first('product_price') : ' ' }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="short_description" class="col-sm-3">Product Short Description</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" rows="5" name="short_description" id="short_description" placeholder="Type Product Short description" style="resize: vertical;" ></textarea>
                                    <span class="text-danger">{{ $errors->has('short_description')  ? $errors->first('short_description') : ' ' }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="long_description" class="col-sm-3">Product Long Description</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control textarea" rows="10" name="long_description" id="long_description" placeholder="Type Product Short description" style="resize: vertical;" ></textarea>
                                    <span class="text-danger">{{ $errors->has('long_description')  ? $errors->first('long_description') : ' ' }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="product_image" class="col-sm-3">Product Image</label>
                                <div class="col-sm-9">
                                    <input type="file" name="product_image" accept="image/*" id="" />
                                    <span class="text-danger">{{ $errors->has('product_image')  ? $errors->first('product_image') : ' ' }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="publication_status" class="col-sm-3">Publication Status</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="publication_status" id="publication_status" required>
                                        <option>---Select Publication Status---</option>
                                        <option value="1">Published</option>
                                        <option value="0">Unpublished</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3"></label>
                                <div class="col-sm-9">
                                    <input class="btn btn-block btn-success" type="submit" name="button" value="Save Product Information">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
        </div>

    </div>
    <!-- /.row -->
    </div>
@endsection