@extends('layouts.default')

@section('title','Update User')

@section('content')
    <form class="col-lg-6" method="post" action="{{ route('users.update', $user->id) }}">
        @method('PUT')
        @include('users.form')
    </form>
@endsection
