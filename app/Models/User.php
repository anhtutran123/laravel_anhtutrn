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
     * @param array $input
     * @return Illuminate\Pagination\Paginator
     */
    public function getUsersFromDB($input)
    {
        $builder = $this->orderBy('mail_address', 'asc');
        if (isset($input['mail_address'])) {
            $builder->where('mail_address', 'like', '%' . $input['mail_address'] . '%');
        }
        if (isset($input['name'])) {
            $builder->where('name', 'like', '%' . $input['name'] . '%');
        }
        if (isset($input['address'])) {
            $builder->where('address', 'like', '%' . $input['address'] . '%');
        }
        if (isset($input['phone'])) {
            $builder->where('phone', $input['phone']);
        }
        return $builder->paginate();
    }

    /**
     * Create user after input was validated
     *
     * @param $input
     */
    public function createUser($input)
    {
        $input['password'] = Hash::make($input['password']);
        $this->create($input);
    }

    /**
     * Find user with id
     *
     * @param int $id
     * @return App\Models\User
     */
    public function findUser($id)
    {
        return $this->find($id);
    }

    /**
     * Update user in DB
     *
     * @param array $input
     * @return bool
     */
    public function updateUser($input)
    {
        if ($input['password'] == null) {
            unset($input['password']);
        } else {
            $input['password'] = Hash::make($input['password']);
        }
        return $this->find($input['id'])->update($input);
    }
}
