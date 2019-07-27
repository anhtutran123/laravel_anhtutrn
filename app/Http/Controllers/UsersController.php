<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Models\User;

class UsersController extends Controller
{
    /**
     * Display a listing of users.
     *
     * @return UsersList
     */
    public function index()
    {
        $users = User::getUsersFromDB();
        return view('users_management.UsersList', ['users' => $users]);
    }

    /**
     * Show the form for creating a new user.
     *
     * @return UserAdd
     */
    public function create()
    {
        return view('users_management.UserAdd');
    }

    /**
     * Store a newly user in storage.
     *
     * @param  $request
     * @return UsersList
     */
    public function store(CreateUserRequest $request)
    {
        $input = $request->all();
        User::createUser($input);
        flash('Thêm mới người dùng thành công.')->success();
        $users = User::getUsersFromDB();
        return view('users_management.UsersList',['users' => $users]);
    }

}
