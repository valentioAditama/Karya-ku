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
                <img src="{{ asset('assets-admin/img/icon/calender_icon.svg') }}" alt>
                August 1, 2020 - August 31, 2020
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row ">
        <div class="col-xl-8 ">
          <div class="white_card mb_30 card_height_100">
            <div class="white_card_header">
              <div class="row align-items-center justify-content-between flex-wrap">
                <div class="col-lg-4">
                  <div class="main-title">
                    <h3 class="m-0">Stoke Details</h3>
                  </div>
                </div>
                <div class="col-lg-4 text-end d-flex justify-content-end">
                  <select class="nice_Select2 max-width-220">
                    <option value="1">Show by month</option>
                    <option value="1">Show by year</option>
                    <option value="1">Show by day</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="white_card_body">
              <div id="management_bar"></div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 ">
          <div class="white_card card_height_100 mb_30 user_crm_wrapper">
            <div class="row">
              <div class="col-lg-6">
                <div class="single_crm">
                  <div class="crm_head d-flex align-items-center justify-content-between">
                    <div class="thumb">
                      <img src="{{asset('assets-admin/img/crm/businessman.svg')}}" alt>
                    </div>
                    <i class="fas fa-ellipsis-h f_s_11 white_text"></i>
                  </div>
                  <div class="crm_body">
                    <h4>2455</h4>
                    <p>User Registrations</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="single_crm ">
                  <div class="crm_head crm_bg_1 d-flex align-items-center justify-content-between">
                    <div class="thumb">
                      <img src="{{asset('assets-admin/img/crm/customer.svg')}}" alt>
                    </div>
                    <i class="fas fa-ellipsis-h f_s_11 white_text"></i>
                  </div>
                  <div class="crm_body">
                    <h4>2455</h4>
                    <p>User Registrations</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="single_crm">
                  <div class="crm_head crm_bg_2 d-flex align-items-center justify-content-between">
                    <div class="thumb">
                      <img src="{{asset('assets-admin/img/crm/infographic.svg')}}" alt>
                    </div>
                    <i class="fas fa-ellipsis-h f_s_11 white_text"></i>
                  </div>
                  <div class="crm_body">
                    <h4>2455</h4>
                    <p>User Registrations</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="single_crm">
                  <div class="crm_head crm_bg_3 d-flex align-items-center justify-content-between">
                    <div class="thumb">
                      <img src="{{asset('assets-admin/img/crm/sqr.svg')}}" alt>
                    </div>
                    <i class="fas fa-ellipsis-h f_s_11 white_text"></i>
                  </div>
                  <div class="crm_body">
                    <h4>2455</h4>
                    <p>User Registrations</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="crm_reports_bnner">
              <div class="row justify-content-end ">
                <div class="col-lg-6">
                  <h4>Create CRM Reports</h4>
                  <p>Outlines keep you and honest
                    indulging honest.</p>
                  <a href="#">Read More <i class="fas fa-arrow-right"></i> </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6">
          <div class="white_card card_height_100 mb_30">
            <div class="white_card_header">
              <div class="row align-items-center">
                <div class="col-lg-4">
                  <div class="main-title">
                    <h3 class="m-0">New Users</h3>
                  </div>
                </div>
                <div class="col-lg-8">
                  <div class="row justify-content-end">
                    <div class="col-lg-8 d-flex justify-content-end">
                      <div class="serach_field-area theme_bg d-flex align-items-center">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="white_card_body ">
              <div class="single_user_pil d-flex align-items-center justify-content-between">
                <div class="user_pils_thumb d-flex align-items-center">
                  <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="{{asset('assets-admin/img/customers/1.png')}}" alt></div>
                  <span class="f_s_14 f_w_400 text_color_11">Jhon Smith</span>
                </div>
                <div class="user_info">
                  Customer
                </div>
                <div class="action_btns d-flex">
                  <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                  <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                </div>
              </div>
              <div class="single_user_pil admin_bg d-flex align-items-center justify-content-between">
                <div class="user_pils_thumb d-flex align-items-center">
                  <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="{{asset('assets-admin/img/customers/1.png')}}" alt></div>
                  <span class="f_s_14 f_w_400 text_color_11">Jhon Smith</span>
                </div>
                <div class="user_info">
                  Admin
                </div>
                <div class="action_btns d-flex">
                  <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                  <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                </div>
              </div>
              <div class="single_user_pil d-flex align-items-center justify-content-between">
                <div class="user_pils_thumb d-flex align-items-center">
                  <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="{{asset('assets-admin/img/customers/1.png')}}" alt></div>
                  <span class="f_s_14 f_w_400 text_color_11">Jhon Smith</span>
                </div>
                <div class="user_info">
                  Customer
                </div>
                <div class="action_btns d-flex">
                  <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                  <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                </div>
              </div>
              <div class="single_user_pil d-flex align-items-center justify-content-between">
                <div class="user_pils_thumb d-flex align-items-center">
                  <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="{{asset('assets-admin/img/customers/1.png')}}" alt></div>
                  <span class="f_s_14 f_w_400 text_color_11">Jhon Smith</span>
                </div>
                <div class="user_info">
                  Customer
                </div>
                <div class="action_btns d-flex">
                  <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                  <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                </div>
              </div>
              <div class="single_user_pil d-flex align-items-center justify-content-between mb-0">
                <div class="user_pils_thumb d-flex align-items-center">
                  <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="{{asset('assets-admin/img/customers/1.png')}}" alt></div>
                  <span class="f_s_14 f_w_400 text_color_11">Jhon Smith</span>
                </div>
                <div class="user_info">
                  Customer
                </div>
                <div class="action_btns d-flex">
                  <a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                  <a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="white_card card_height_100 mb_20 ">
            <div class="white_card_header">
              <div class="box_header m-0">
                <div class="main-title">
                  <h3 class="m-0">New Laporan</h3>
                </div>
                <div class="header_more_tool">
                  <div class="dropdown">
                    <span class="dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown">
                      <i class="ti-more-alt"></i>
                    </span>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#"> <i class="ti-eye"></i> Action</a>
                      <a class="dropdown-item" href="#"> <i class="ti-trash"></i> Delete</a>
                      <a class="dropdown-item" href="#"> <i class="fas fa-edit"></i> Edit</a>
                      <a class="dropdown-item" href="#"> <i class="ti-printer"></i> Print</a>
                      <a class="dropdown-item" href="#"> <i class="fa fa-download"></i> Download</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="white_card_body QA_section">
              <div class="QA_table ">

                <table class="table lms_table_active2 p-0">
                  <thead>
                    <tr>
                      <th scope="col">Product 1</th>
                      <th scope="col">Price</th>
                      <th scope="col">Discount</th>
                      <th scope="col">Sold</th>
                      <th scope="col">Source</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="customer d-flex align-items-center">
                          <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/pro_1.png" alt></div>
                          <span class="f_s_12 f_w_600 color_text_5">Product 1</span>
                        </div>
                      </td>
                      <td class="f_s_12 f_w_400 color_text_6">$564</td>
                      <td class="f_s_12 f_w_400 color_text_7">#DE2548</td>
                      <td class="f_s_12 f_w_400 color_text_6">60</td>
                      <td class="f_s_12 f_w_400 text-end"><a href="#" class="text_color_1">Google</a></td>
                    </tr>
                    <tr>
                      <td>
                        <div class="customer d-flex align-items-center">
                          <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/pro_2.png" alt></div>
                          <span class="f_s_12 f_w_600 color_text_5">Product 2</span>
                        </div>
                      </td>
                      <td class="f_s_12 f_w_400 color_text_6">$564</td>
                      <td class="f_s_12 f_w_400 color_text_7">#DE2548</td>
                      <td class="f_s_12 f_w_400 color_text_6">60</td>
                      <td class="f_s_12 f_w_400 text-end"><a href="#" class="text_color_2">Direct</a></td>
                    </tr>
                    <tr>
                      <td>
                        <div class="customer d-flex align-items-center">
                          <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/pro_3.png" alt></div>
                          <span class="f_s_12 f_w_600 color_text_5">Product 3</span>
                        </div>
                      </td>
                      <td class="f_s_12 f_w_400 color_text_6">$564</td>
                      <td class="f_s_12 f_w_400 color_text_7">#DE2548</td>
                      <td class="f_s_12 f_w_400 color_text_6">60</td>
                      <td class="f_s_12 f_w_400 text-end"><a href="#" class="text_color_1">Google</a></td>
                    </tr>
                    <tr>
                      <td>
                        <div class="customer d-flex align-items-center">
                          <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/pro_4.png" alt></div>
                          <span class="f_s_12 f_w_600 color_text_5">Product 4</span>
                        </div>
                      </td>
                      <td class="f_s_12 f_w_400 color_text_6">$564</td>
                      <td class="f_s_12 f_w_400 color_text_7">#DE2548</td>
                      <td class="f_s_12 f_w_400 color_text_6">60</td>
                      <td class="f_s_12 f_w_400 text-end"><a href="#" class="text_color_1">Refferal</a></td>
                    </tr>
                    <tr>
                      <td>
                        <div class="customer d-flex align-items-center">
                          <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/pro_5.png" alt></div>
                          <span class="f_s_12 f_w_600 color_text_5">Product 5</span>
                        </div>
                      </td>
                      <td class="f_s_12 f_w_400 color_text_6">$564</td>
                      <td class="f_s_12 f_w_400 color_text_7">#DE2548</td>
                      <td class="f_s_12 f_w_400 color_text_6">60</td>
                      <td class="f_s_12 f_w_400 text-end"><a href="#" class="text_color_1">20</a></td>
                    </tr>
                    <tr>
                      <td>
                        <div class="customer d-flex align-items-center">
                          <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/pro_6.png" alt></div>
                          <span class="f_s_12 f_w_600 color_text_5">Product 6</span>
                        </div>
                      </td>
                      <td class="f_s_12 f_w_400 color_text_6">$564</td>
                      <td class="f_s_12 f_w_400 color_text_7">#DE2548</td>
                      <td class="f_s_12 f_w_400 color_text_6">60</td>
                      <td class="f_s_12 f_w_400 text-end"><a href="#" class="text_color_5">Direct</a></td>
                    </tr>
                    <tr>
                      <td>
                        <div class="customer d-flex align-items-center">
                          <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/pro_6.png" alt></div>
                          <span class="f_s_12 f_w_600 color_text_5">Product 6</span>
                        </div>
                      </td>
                      <td class="f_s_12 f_w_400 color_text_6">$564</td>
                      <td class="f_s_12 f_w_400 color_text_7">#DE2548</td>
                      <td class="f_s_12 f_w_400 color_text_6">60</td>
                      <td class="f_s_12 f_w_400 text-end"><a href="#" class="text_color_5">Direct</a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="white_card card_height_100 mb_20 ">
            <div class="white_card_header">
              <div class="box_header m-0">
                <div class="main-title">
                  <h3 class="m-0">New Community</h3>
                </div>
                <div class="header_more_tool">
                  <div class="dropdown">
                    <span class="dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown">
                      <i class="ti-more-alt"></i>
                    </span>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#"> <i class="ti-eye"></i> Action</a>
                      <a class="dropdown-item" href="#"> <i class="ti-trash"></i> Delete</a>
                      <a class="dropdown-item" href="#"> <i class="fas fa-edit"></i> Edit</a>
                      <a class="dropdown-item" href="#"> <i class="ti-printer"></i> Print</a>
                      <a class="dropdown-item" href="#"> <i class="fa fa-download"></i> Download</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="white_card_body QA_section">
              <div class="QA_table ">

                <table class="table lms_table_active2 p-0">
                  <thead>
                    <tr>
                      <th scope="col">Product 1</th>
                      <th scope="col">Price</th>
                      <th scope="col">Discount</th>
                      <th scope="col">Sold</th>
                      <th scope="col">Source</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="customer d-flex align-items-center">
                          <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/pro_1.png" alt></div>
                          <span class="f_s_12 f_w_600 color_text_5">Product 1</span>
                        </div>
                      </td>
                      <td class="f_s_12 f_w_400 color_text_6">$564</td>
                      <td class="f_s_12 f_w_400 color_text_7">#DE2548</td>
                      <td class="f_s_12 f_w_400 color_text_6">60</td>
                      <td class="f_s_12 f_w_400 text-end"><a href="#" class="text_color_1">Google</a></td>
                    </tr>
                    <tr>
                      <td>
                        <div class="customer d-flex align-items-center">
                          <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/pro_2.png" alt></div>
                          <span class="f_s_12 f_w_600 color_text_5">Product 2</span>
                        </div>
                      </td>
                      <td class="f_s_12 f_w_400 color_text_6">$564</td>
                      <td class="f_s_12 f_w_400 color_text_7">#DE2548</td>
                      <td class="f_s_12 f_w_400 color_text_6">60</td>
                      <td class="f_s_12 f_w_400 text-end"><a href="#" class="text_color_2">Direct</a></td>
                    </tr>
                    <tr>
                      <td>
                        <div class="customer d-flex align-items-center">
                          <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/pro_3.png" alt></div>
                          <span class="f_s_12 f_w_600 color_text_5">Product 3</span>
                        </div>
                      </td>
                      <td class="f_s_12 f_w_400 color_text_6">$564</td>
                      <td class="f_s_12 f_w_400 color_text_7">#DE2548</td>
                      <td class="f_s_12 f_w_400 color_text_6">60</td>
                      <td class="f_s_12 f_w_400 text-end"><a href="#" class="text_color_1">Google</a></td>
                    </tr>
                    <tr>
                      <td>
                        <div class="customer d-flex align-items-center">
                          <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/pro_4.png" alt></div>
                          <span class="f_s_12 f_w_600 color_text_5">Product 4</span>
                        </div>
                      </td>
                      <td class="f_s_12 f_w_400 color_text_6">$564</td>
                      <td class="f_s_12 f_w_400 color_text_7">#DE2548</td>
                      <td class="f_s_12 f_w_400 color_text_6">60</td>
                      <td class="f_s_12 f_w_400 text-end"><a href="#" class="text_color_1">Refferal</a></td>
                    </tr>
                    <tr>
                      <td>
                        <div class="customer d-flex align-items-center">
                          <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/pro_5.png" alt></div>
                          <span class="f_s_12 f_w_600 color_text_5">Product 5</span>
                        </div>
                      </td>
                      <td class="f_s_12 f_w_400 color_text_6">$564</td>
                      <td class="f_s_12 f_w_400 color_text_7">#DE2548</td>
                      <td class="f_s_12 f_w_400 color_text_6">60</td>
                      <td class="f_s_12 f_w_400 text-end"><a href="#" class="text_color_1">20</a></td>
                    </tr>
                    <tr>
                      <td>
                        <div class="customer d-flex align-items-center">
                          <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/pro_6.png" alt></div>
                          <span class="f_s_12 f_w_600 color_text_5">Product 6</span>
                        </div>
                      </td>
                      <td class="f_s_12 f_w_400 color_text_6">$564</td>
                      <td class="f_s_12 f_w_400 color_text_7">#DE2548</td>
                      <td class="f_s_12 f_w_400 color_text_6">60</td>
                      <td class="f_s_12 f_w_400 text-end"><a href="#" class="text_color_5">Direct</a></td>
                    </tr>
                    <tr>
                      <td>
                        <div class="customer d-flex align-items-center">
                          <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/pro_6.png" alt></div>
                          <span class="f_s_12 f_w_600 color_text_5">Product 6</span>
                        </div>
                      </td>
                      <td class="f_s_12 f_w_400 color_text_6">$564</td>
                      <td class="f_s_12 f_w_400 color_text_7">#DE2548</td>
                      <td class="f_s_12 f_w_400 color_text_6">60</td>
                      <td class="f_s_12 f_w_400 text-end"><a href="#" class="text_color_5">Direct</a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="white_card card_height_100 mb_20 ">
            <div class="white_card_header">
              <div class="box_header m-0">
                <div class="main-title">
                  <h3 class="m-0">New Content Karya</h3>
                </div>
                <div class="header_more_tool">
                  <div class="dropdown">
                    <span class="dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown">
                      <i class="ti-more-alt"></i>
                    </span>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#"> <i class="ti-eye"></i> Action</a>
                      <a class="dropdown-item" href="#"> <i class="ti-trash"></i> Delete</a>
                      <a class="dropdown-item" href="#"> <i class="fas fa-edit"></i> Edit</a>
                      <a class="dropdown-item" href="#"> <i class="ti-printer"></i> Print</a>
                      <a class="dropdown-item" href="#"> <i class="fa fa-download"></i> Download</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="white_card_body QA_section">
              <div class="QA_table ">

                <table class="table lms_table_active2 p-0">
                  <thead>
                    <tr>
                      <th scope="col">Product 1</th>
                      <th scope="col">Price</th>
                      <th scope="col">Discount</th>
                      <th scope="col">Sold</th>
                      <th scope="col">Source</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="customer d-flex align-items-center">
                          <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/pro_1.png" alt></div>
                          <span class="f_s_12 f_w_600 color_text_5">Product 1</span>
                        </div>
                      </td>
                      <td class="f_s_12 f_w_400 color_text_6">$564</td>
                      <td class="f_s_12 f_w_400 color_text_7">#DE2548</td>
                      <td class="f_s_12 f_w_400 color_text_6">60</td>
                      <td class="f_s_12 f_w_400 text-end"><a href="#" class="text_color_1">Google</a></td>
                    </tr>
                    <tr>
                      <td>
                        <div class="customer d-flex align-items-center">
                          <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/pro_2.png" alt></div>
                          <span class="f_s_12 f_w_600 color_text_5">Product 2</span>
                        </div>
                      </td>
                      <td class="f_s_12 f_w_400 color_text_6">$564</td>
                      <td class="f_s_12 f_w_400 color_text_7">#DE2548</td>
                      <td class="f_s_12 f_w_400 color_text_6">60</td>
                      <td class="f_s_12 f_w_400 text-end"><a href="#" class="text_color_2">Direct</a></td>
                    </tr>
                    <tr>
                      <td>
                        <div class="customer d-flex align-items-center">
                          <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/pro_3.png" alt></div>
                          <span class="f_s_12 f_w_600 color_text_5">Product 3</span>
                        </div>
                      </td>
                      <td class="f_s_12 f_w_400 color_text_6">$564</td>
                      <td class="f_s_12 f_w_400 color_text_7">#DE2548</td>
                      <td class="f_s_12 f_w_400 color_text_6">60</td>
                      <td class="f_s_12 f_w_400 text-end"><a href="#" class="text_color_1">Google</a></td>
                    </tr>
                    <tr>
                      <td>
                        <div class="customer d-flex align-items-center">
                          <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/pro_4.png" alt></div>
                          <span class="f_s_12 f_w_600 color_text_5">Product 4</span>
                        </div>
                      </td>
                      <td class="f_s_12 f_w_400 color_text_6">$564</td>
                      <td class="f_s_12 f_w_400 color_text_7">#DE2548</td>
                      <td class="f_s_12 f_w_400 color_text_6">60</td>
                      <td class="f_s_12 f_w_400 text-end"><a href="#" class="text_color_1">Refferal</a></td>
                    </tr>
                    <tr>
                      <td>
                        <div class="customer d-flex align-items-center">
                          <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/pro_5.png" alt></div>
                          <span class="f_s_12 f_w_600 color_text_5">Product 5</span>
                        </div>
                      </td>
                      <td class="f_s_12 f_w_400 color_text_6">$564</td>
                      <td class="f_s_12 f_w_400 color_text_7">#DE2548</td>
                      <td class="f_s_12 f_w_400 color_text_6">60</td>
                      <td class="f_s_12 f_w_400 text-end"><a href="#" class="text_color_1">20</a></td>
                    </tr>
                    <tr>
                      <td>
                        <div class="customer d-flex align-items-center">
                          <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/pro_6.png" alt></div>
                          <span class="f_s_12 f_w_600 color_text_5">Product 6</span>
                        </div>
                      </td>
                      <td class="f_s_12 f_w_400 color_text_6">$564</td>
                      <td class="f_s_12 f_w_400 color_text_7">#DE2548</td>
                      <td class="f_s_12 f_w_400 color_text_6">60</td>
                      <td class="f_s_12 f_w_400 text-end"><a href="#" class="text_color_5">Direct</a></td>
                    </tr>
                    <tr>
                      <td>
                        <div class="customer d-flex align-items-center">
                          <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/pro_6.png" alt></div>
                          <span class="f_s_12 f_w_600 color_text_5">Product 6</span>
                        </div>
                      </td>
                      <td class="f_s_12 f_w_400 color_text_6">$564</td>
                      <td class="f_s_12 f_w_400 color_text_7">#DE2548</td>
                      <td class="f_s_12 f_w_400 color_text_6">60</td>
                      <td class="f_s_12 f_w_400 text-end"><a href="#" class="text_color_5">Direct</a></td>
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

  <!-- footer -->
  @include('components.admin.footer')
  <!-- end -->

  <!-- Notification -->
  @include('components.notifications')
  <!-- end -->
</section>
@endSection