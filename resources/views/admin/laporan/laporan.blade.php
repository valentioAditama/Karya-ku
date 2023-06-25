@extends('layouts.app-admin')

@section('content')

<!-- SideBar --><!-- End SideBar -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Laporan</h4>
                        <p class="category">Last Update</p>
                    </div>
                    <div class="content">
                        <div class="row">
                            <form action="{{ route('admin.laporan.search') }}" method="get">
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="search" placeholder="search">
                                </div>
                                <div class="col-1">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </form>
                        </div>
                        <table class="table table-striped h5">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">users</th>
                                    <th scope="col">comments</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no = 1;
                                @endphp
                                @foreach($getDataReport as $data)
                                <tr>
                                    <th scope="row">{{ $no++ }}</th>
                                    <td>{{ $data->fullname}}</td>
                                    <td>{{ $data->comment}}</td>
                                    <td>
                                        @if(Auth::user()->role == "superuser")
                                        <a class="btn btn-danger btn-fill btn-sm" data-toggle="modal" data-target="#laporan-delete{{$data->id}}">
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
<!-- modal admin report -->
@include('components.admin.modal.laporan-delete')

<!-- Notification -->
@include('components.notifications')

@endSection