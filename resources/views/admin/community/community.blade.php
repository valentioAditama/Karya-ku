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
                                    <h4>Community </h4>
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
                                <div class="QA_table mb_30">

                                    <table class="table lms_table_active ">
                                        <thead>
                                            <tr>
                                                <th scope="col">id</th>
                                                <th scope="col">User</th>
                                                <th scope="col">Username</th>
                                                <th scope="col">Email Address</th>
                                                <th scope="col">Role</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row"> <a href="#" class="question_content"> 1 </a></th>
                                                <td>Hayden</td>
                                                <td>Hayden</td>
                                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7c0b130e17484c453c1b111d1510521f1311">[email&#160;protected]</a></td>
                                                <td><a href="#">Admin</a></td>
                                                <td><a href="#" class="status_btn">Active</a></td>
                                                <td>
                                                    <div class="action_btns d-flex">
                                                        <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                                                        <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"> <a href="#" class="question_content"> 1 </a></th>
                                                <td>Hayden</td>
                                                <td>Hayden</td>
                                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7c0b130e17484c453c1b111d1510521f1311">[email&#160;protected]</a></td>
                                                <td><a href="#">Admin</a></td>
                                                <td><a href="#" class="status_btn">Active</a></td>
                                                <td>
                                                    <div class="action_btns d-flex">
                                                        <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                                                        <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"> <a href="#" class="question_content"> 1 </a></th>
                                                <td>Hayden</td>
                                                <td>Hayden</td>
                                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f68199849dc2c6cfb6919b979f9ad895999b">[email&#160;protected]</a></td>
                                                <td><a href="#">Admin</a></td>
                                                <td><a href="#" class="status_btn">Active</a></td>
                                                <td>
                                                    <div class="action_btns d-flex">
                                                        <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                                                        <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"> <a href="#" class="question_content"> 1 </a></th>
                                                <td>Hayden</td>
                                                <td>Hayden</td>
                                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="374058455c03070e77505a565e5b1954585a">[email&#160;protected]</a></td>
                                                <td><a href="#">Admin</a></td>
                                                <td><a href="#" class="status_btn">Active</a></td>
                                                <td>
                                                    <div class="action_btns d-flex">
                                                        <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                                                        <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"> <a href="#" class="question_content"> 1 </a></th>
                                                <td>Hayden</td>
                                                <td>Hayden</td>
                                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b6c1d9c4dd82868ff6d1dbd7dfda98d5d9db">[email&#160;protected]</a></td>
                                                <td><a href="#">Admin</a></td>
                                                <td><a href="#" class="status_btn">Active</a></td>
                                                <td>
                                                    <div class="action_btns d-flex">
                                                        <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                                                        <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"> <a href="#" class="question_content"> 1 </a></th>
                                                <td>Hayden</td>
                                                <td>Hayden</td>
                                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b6c1d9c4dd82868ff6d1dbd7dfda98d5d9db">[email&#160;protected]</a></td>
                                                <td><a href="#">Admin</a></td>
                                                <td><a href="#" class="status_btn">Active</a></td>
                                                <td>
                                                    <div class="action_btns d-flex">
                                                        <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                                                        <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"> <a href="#" class="question_content"> 1 </a></th>
                                                <td>Hayden</td>
                                                <td>Hayden</td>
                                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7b0c1409104f4b423b1c161a121755181416">[email&#160;protected]</a></td>
                                                <td><a href="#">Admin</a></td>
                                                <td><a href="#" class="status_btn">Active</a></td>
                                                <td>
                                                    <div class="action_btns d-flex">
                                                        <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                                                        <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"> <a href="#" class="question_content"> 1 </a></th>
                                                <td>Hayden</td>
                                                <td>Hayden</td>
                                                <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b9ced6cbd28d8980f9ded4d8d0d597dad6d4">[email&#160;protected]</a></td>
                                                <td><a href="#">Admin</a></td>
                                                <td><a href="#" class="status_btn">Active</a></td>
                                                <td>
                                                    <div class="action_btns d-flex">
                                                        <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                                                        <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                                    </div>
                                                </td>
                                            </tr>
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