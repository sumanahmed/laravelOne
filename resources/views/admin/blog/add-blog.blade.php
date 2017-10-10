@extends('admin.master')
@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Add New Blog</h3>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">

                        <h1 class="text-center text-success"><?php if(isset($message)){ echo $message; } ?></h1>
                        <form id="myform" class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="blog_title" class="col-sm-3">Blog Title</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="blog_title" id="blog_title" placeholder="Enter Blog title" required>
                                    <span id="error_post_title" style="color:red;"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="category_id" class="col-sm-3">Category Name</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="publication_status" id="publication_status" required>
                                        <option>---Select Publication Status---</option>
                                        <option value="1">Published</option>
                                        <option value="0">Unpublished</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="blog_description" class="col-sm-3">Blog Description</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" rows="10" name="blog_description" id="blog_description" placeholder="Enter Blog description" style="resize: vertical;" required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="post_image" class="col-sm-3">Blog Image</label>
                                <div class="col-sm-9">
                                    <input type="file" name="blog_image" accept="image/*"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="publication_status" class="col-sm-3">Publicatoin Status</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="publication_status" id="publication_status" required>
                                        <option value="1">Published</option>
                                        <option value="0">Unpublished</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3"></label>
                                <div class="col-sm-9">
                                    <input class="btn btn-block btn-success" type="submit" name="button" value="Save Post Information">
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