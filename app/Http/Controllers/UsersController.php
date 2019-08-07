<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UsersController extends Controller
{
    protected $users;

    public function __construct(User $users)
    {
        $this->users = $users;
    }

    /**
     * Display a listing of users.
     *
     * @param Request $request
     * @return view
     */
    public function index(Request $request)
    {
        $input = $request->all();
        $users = $this->users->getUsersFromDB($input);
        return view('users/index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new user.
     *
     * @return view
     */
    public function create()
    {
        return view('users/create');
    }

    /**
     * Store a newly user in storage.
     *
     * @param StoreUserRequest $request
     * @return view
     */
    public function store(StoreUserRequest $request)
    {
        $input = $request->all();
        $this->users->createUser($input);
        flash('Thêm mới người dùng thành công.')->success();
        return redirect()->route('users.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $user = $this->users->findUser($id);
        return view('users/edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StoreUserRequest $request
     * @param int $id
     * @return Response
     */
    public function update(StoreUserRequest $request, $id)
    {
        $input = $request->all();
        $this->users->updateUser($input, $id);
        flash('Cập nhập người dùng thành công.')->success();
        return redirect()->route('users.index');
    }
}
