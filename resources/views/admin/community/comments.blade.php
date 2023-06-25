@extends('layouts.app-admin')

@section('content')

<!-- SideBar --><!-- End SideBar -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Comments Community</h4>
                        <p class="category">Last Update</p>
                    </div>
                    <div class="content">
                        <div class="row">
                            <form action="{{ route('admin.community-comment.search') }}" method="get">
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="search" placeholder="search">
                                </div>
                                <div class="col-md-7">
                                    <button type="submit" class="btn btn-primary">Search</button> &nbsp;
                                </div>
                            </form>
                        </div>
                        <table class="table table-striped h5">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">community</th>
                                    <th scope="col">articel</th>
                                    <th scope="col">users</th>
                                    <th scope="col">comment</th>
                                    <th scope="col">status</th>
                                    <th scope="col">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach($getCommentCommunity as $data)
                                <tr>
                                    <th scope="row">{{ $no++ }}</th>
                                    <td>{{ $data->name_community}}</td>
                                    <td>{{ $data->articel}}</td>
                                    <td>{{ $data->fullname}}</td>
                                    <td>{{ $data->comment}}</td>
                                    <td>{{ $data->status}}</td>
                                    <td>
                                        @if(Auth::user()->role == "admin")
                                        <a class="btn btn-warning btn-fill btn-sm" data-toggle="modal" data-target="#status_comment_community{{$data->id}}">
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                        @endif
                                        @if(Auth::user()->role == "superuser")
                                        <a class="btn btn-warning btn-fill btn-sm" data-toggle="modal" data-target="#status_comment_community{{$data->id}}">
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                        <a class="btn btn-danger btn-fill btn-sm" data-toggle="modal" data-target="#modal-delete-status-comment-community{{$data->id}}">
                                            <i class="fa-solid fa-trash"></i>
                                        </a>
                                        @endif
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

<!-- modal admin status user -->
@include('components.admin.modal.status-comment-community')
@include('components.admin.modal.comment-articel-community')

<!-- Notification -->
@include('components.notifications')

@endSection