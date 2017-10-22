@extends('admin.master')
@section('title')
    Manage Product
@endsection
@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                for delete
                @if($message =Session::get('message'))
                    <h1 class="page-header text-success">{{$message}}</h1>
                @endif
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
                            <thead>
                            <tr>
                                <th>SL No</th>
                                <th>Big Image Caption</th>
                                <th>Offer</th>
                                <th>Small Image Caption</th>
                                <th>Left Image Caption</th>
                                <th>Right Image Caption</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i=1; ?>
                            @foreach($getHomeOffer as $getHomeOffers)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$getHomeOffers->big_img_caption}}</td>
                                    <td>{{$getHomeOffers->offer}}</td>
                                    <td>{{$getHomeOffers->small_img_caption}}</td>
                                    <td>{{$getHomeOffers->left_img_caption}}</td>
                                    <td>{{$getHomeOffers->right_img_caption}}TK</td>
                                    <td>
                                        <a href="{{url('/view-offer/'.$getHomeOffers->id)}}" class="btn btn-info btn-xs" title="view">
                                            <span class=" glyphicon glyphicon-zoom-in"></span>
                                        </a>
                                        <a href="{{url('/edit-offer/'.$getHomeOffers->id)}}" class="btn btn-primary btn-xs" title="Edit">
                                            <span class=" glyphicon glyphicon-edit"></span>
                                        </a>
                                        <a href="{{url('/delete-offer/'.$getHomeOffers->id)}}" class="btn btn-danger btn-xs" title="delete">
                                            <span class=" glyphicon glyphicon-trash"></span>
                                        </a>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
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
