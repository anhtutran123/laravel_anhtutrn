<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Hash;

class User extends Model
{
    use SoftDeletes;
    protected $table = 'users';
    protected $fillable = [
        'mail_address',
        'name',
        'address',
        'phone',
        'password',
    ];
    protected $perPage = 20;
    public $timestamps = true;

    /**
     * Get users from DB sort by email and paginated 20 each
     *
     * @param $input
     * @return Illuminate\Pagination\Paginator
     */
    public function getUsersFromDB($input)
    {
        $users = User::orderBy('mail_address', 'asc');
        if (isset($input['mail_address'])) {
            $users = $users->where('mail_address', 'like', '%' . $input['mail_address'] . '%');
        }
        if (isset($input['name'])) {
            $users = $users->where('name', 'like', '%' . $input['name'] . '%');
        }
        if (isset($input['address'])) {
            $users = $users->where('address', 'like', '%' . $input['address'] . '%');
        }
        if (isset($input['phone'])) {
            $users = $users->where('phone', '=', $input['phone']);
        }
        return $users->paginate();
    }

    /**
     * Create user after input was validated
     *
     * @param $input
     */
    public function createUser($input)
    {
        $input['password'] = Hash::make($input['password']);
        User::create($input);
    }

    /**
     * Find user with id
     *
     * @param $id
     * @return  $user
     */
    public function findUser($id)
    {
        $user = User::find($id);
        return $user;
    }

    /**
     * Update user in DB
     *
     * @param $input
     * @param $id
     */
    public function updateUser($input, $id)
    {
        $user = User::find($id);
        if ($input['password'] == null)
        {
            $input['password'] = $user['password'];
        }
        else {
            $input['password'] = Hash::make($input['password']);
        }
        $user->fill($input);
        $user->save();
    }
}
