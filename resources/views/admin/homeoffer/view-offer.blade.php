@extends('admin.master')
@section('title')
   View Home Offer
@endsection
@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Show Home Offer
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <tr>
                                <th>Big Image Caption</th>
                                <td>{{$getHomeOfferById->big_img_caption}}</td>
                            </tr>
                            <tr>
                                <th>Offer %</th>
                                <td>{{$getHomeOfferById->offer}}</td>
                            </tr>

                            <tr>
                                <th>Big Image</th>
                                <td><img src="{{asset($getHomeOfferById->big_image)}}" style="width: 100px; height: 100px;"></td>
                            </tr>
                            <tr>
                                <th>Small Image Caption</th>
                                <td>{{$getHomeOfferById->small_img_caption}}</td>
                            </tr>
                            <tr>
                                <th>Small Image</th>
                                <td><img src="{{asset($getHomeOfferById->small_image)}}" style="width: 100px; height: 100px;"></td>
                            </tr>
                            <tr>
                                <th>Left Image Caption</th>
                                <td>{{$getHomeOfferById->left_img_caption}}</td>
                            </tr>
                            <tr>
                                <th>Left Image</th>
                                <td><img src="{{asset($getHomeOfferById->left_image)}}" style="width: 100px; height: 100px;"></td>
                            </tr>
                            <tr>
                                <th>Right Image Caption</th>
                                <td>{{$getHomeOfferById->right_img_caption}}</td>
                            </tr>
                            <tr>
                                <th>Right Image</th>
                                <td><img src="{{asset($getHomeOfferById->right_image)}}" style="width: 100px; height: 100px;"></td>
                            </tr>
                        </table>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
    </div>
@endsection
