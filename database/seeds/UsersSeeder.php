<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Create fake data
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\User::class, 100)->create();
    }
}
