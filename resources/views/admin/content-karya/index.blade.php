@extends('layouts.app-admin')

@section('content')

<!-- SideBar -->
@include('components.admin.sidebar')
<!-- End SideBar -->

<section class="main_content dashboard_part large_header_bg">

    <!-- navbar -->
    @include('components.admin.navbar')
    <!-- End Navbar -->

    <div class="main_content_iner overly_inner ">
        <div class="container-fluid p-0 ">

            <div class="row">
                <div class="col-12">
                    <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                        <div class="page_title_left d-flex align-items-center">
                            <h3 class="f_s_25 f_w_700 dark_text mr_30">Dashboard</h3>
                            <ol class="breadcrumb page_bradcam mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                <li class="breadcrumb-item active">Analytic</li>
                            </ol>
                        </div>
                        <div class="page_title_right">
                            <div class="page_date_button d-flex align-items-center">
                                <img src="img/icon/calender_icon.svg" alt>
                                August 1, 2020 - August 31, 2020
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="white_card card_height_100 mb_30 pt-4">
                        <div class="white_card_body">
                            <div class="QA_section">
                                <div class="white_box_tittle list_header">
                                    <h4>Content Karya </h4>
                                    <div class="box_right d-flex lms_block">
                                        <div class="serach_field_2">
                                            <div class="search_inner">
                                                <form active="#">
                                                    <div class="search_field">
                                                        <input type="text" placeholder="Search content here...">
                                                    </div>
                                                    <button type="submit"> <i class="ti-search"></i> </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="add_button ms-2">
                                            <a href="#" data-toggle="modal" data-target="#addcategory" class="btn_1">search</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="QA_table mb_30" style="overflow-x:auto;">

                                    <table class="table lms_table_active ">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">User</th>
                                                <th scope="col">Title</th>
                                                <th scope="col">Sub Title</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">Image Thumbnail</th>
                                                <th scope="col">Image Content</th>
                                                <th scope="col">Video Content</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Created</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $no = 1;
                                            @endphp
                                            @foreach($getDataContent as $data)
                                            <tr>
                                                <th scope="row"> <a href="#" class="question_content"> {{$no++}} </a></th>
                                                <td>{{$data->fullname}}</td>
                                                <td>{{$data->title}}</td>
                                                <td>{{$data->sub_title}}</td>
                                                <td>{{$data->description}}</td>
                                                <td>
                                                    <img src="{{ asset('storage/content/thumbnail/' . $data->path_thumbnail) }}" height="50" width="50" alt="Thumbnail">
                                                </td>
                                                <td>
                                                    <img src="{{ asset('storage/content/image/' . $data->path_image) }}" height="50" width="50" alt="image">
                                                </td>
                                                <td>
                                                    <a href="{{ $data->path_video ? asset('storage/content/video/' . $data->path_video) : '#' }}">{{$data->path_video ? "See Video" : "No Video" }}</a>
                                                </td>
                                                <td><a href="#" class="status_btn">{{$data->status}}</a></td>
                                                <td>{{$data->created_at}}</td>
                                                <td>
                                                    <div class="action_btns d-flex">
                                                        <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                                                        <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('components.admin.footer')
</section>

@endSection