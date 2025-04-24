@extends('layout.sidenav-layout')
@section('content')
    @include('components.AdminDashboard.adminReport')
    @include('components.AdminDashboard.adminReportDetails')
    @include('components.AdminDashboard.updateStatus')
@endsection
