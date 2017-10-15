@extends('admin.master')
@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Add New Brand</h3>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">

                        <h1 class="text-center text-success"> {{ Session::get('message') }}</h1>
                        <form id="myform" class="form-horizontal" action="{{ url('/new-brand') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="brand_name" class="col-sm-3">Brand Name</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="brand_name" id="brand_name" placeholder="Type brand name">
                                    <span class="text-danger">{{ $errors->has('brand_name')  ? $errors->first('brand_name') : ' ' }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="brand_description" class="col-sm-3">Brand Description</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" rows="10" name="brand_description" id="brand_description" placeholder="Type brand description" style="resize: vertical;" ></textarea>
                                    <span class="text-danger">{{ $errors->has('brand_description')  ? $errors->first('brand_description') : ' ' }}</span>
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
                                    <input class="btn btn-block btn-success" type="submit" name="button" value="Save Brand Information">
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