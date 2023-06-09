@extends('layouts.app-admin')

@section('content')

<!-- SideBar -->
@include('components.admin.sidebar')
<!-- End SideBar -->


<!-- modal admin status user -->
@include('components.admin.modal.status-users')

@endSection