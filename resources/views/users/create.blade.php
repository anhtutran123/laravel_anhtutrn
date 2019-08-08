@extends('layouts.default')

@section('title','Thêm mới')

@section('create','active')

@section('content')
    <form class="col-lg-6" method="post" action="{{ route('users.store') }}">
        @include('users.form')
    </form>
@endsection
