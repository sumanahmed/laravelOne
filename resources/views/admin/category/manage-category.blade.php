@extends('admin.master')
@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Manage Category</h3>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">

                        <table class="table table-bordered table-hover">
                            <tr>
                                <td>Category Id</td>
                                <td>Category Name</td>
                                <td>Category Description</td>
                                <td>Publication Status</td>
                                <td>Action</td>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td>Mobile</td>
                                <td>Category Description</td>
                                <td>Published</td>
                                <td>
                                    <a class="btn btn-info btn-xs" title="Edit Product" href="editId=<?php //echo $value['id']; ?>">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a class="btn btn-danger btn-xs" title="Delete Product" href="?id=<?php //echo $value['id']; ?>" onclick="return confirm('Are you sure to delete this row!!');">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </td>
                            </tr>

                        </table>
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
        </div>

    </div>
    <!-- /.row -->

@endsection