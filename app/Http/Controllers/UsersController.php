<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Models\User;

class UsersController extends Controller
{
    /**
     * Display a listing of users.
     *
     * @return view
     */
    public function index()
    {
        $users = User::getUsersFromDB();
        return view('users/UsersList', ['users' => $users]);
    }

    /**
     * Show the form for creating a new user.
     *
     * @return view
     */
    public function create()
    {
        return view('users/UserAdd');
    }

    /**
     * Store a newly user in storage.
     *
     * @param  CreateUserRequest
     * @return view
     */
    public function store(CreateUserRequest $request)
    {
        $input = $request->all();
        User::createUser($input);
        flash('Thêm mới người dùng thành công.')->success();
        return redirect('users');
    }

}
