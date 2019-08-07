@extends('layouts.default')

@section('title','Danh sách người dùng')
@section('index','active')

@section('content')
    <form class="col-auto" method="get" action="{{ route('users.index') }}">
        <div class="form-row" style="margin: 10px 0px;">
            <div class="col-auto">
                <input type="text" class="form-control" name="mail_address" id="mail-address" placeholder="Địa chỉ email">
            </div>
            <div class="col-auto">
                <input type="text" class="form-control" name="name" id="name" placeholder="Tên">
            </div>
            <div class="col-auto">
                <input type="text" class="form-control" name="address" id="address" placeholder="Địa chỉ">
            </div>
            <div class="col-auto">
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Số điện thoại">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-outline-warning">Tìm kiếm</button>
            </div>
        </div>
    </form>
    @if(count($users))
        <table class="table table-bordered">
            <thead class="text-center" style="background-color: #ffa7f4">
            <tr>
                <th>STT</th>
                <th>Địa chỉ email</th>
                <th>Tên</th>
                <th>Địa chỉ</th>
                <th>Số điện thoại</th>
                <th>Hành động</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $key => $user)
                <tr>
                    <td>{{ ++$key + ($users->currentPage() - 1) * $users->perPage()}}</td>
                    <td>{{ $user->mail_address }}</td>
                    <td>{{ HelperFacade::toUpperCase($user->name) }}</td>
                    <td>{{ $user->address }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>
                        <a href="{{ route('users.edit', $user->id) }}">
                            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Cập nhập</button>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {!! $users->links() !!}
    @else
        <p>Không có kết quả tìm kiếm</p>
    @endif
@endsection
