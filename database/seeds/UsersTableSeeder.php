<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Helping Ray Admin';
        $user->email = 'admin@gmail.com';
        $user->password = bcrypt('12345678');
        $user->role = 'admin';
        $user->status = 'verified';
        $user->save();
    }
}
