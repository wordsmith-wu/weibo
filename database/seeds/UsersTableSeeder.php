<?php

use Illuminate\Database\Seeder;
use App\Models\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(User::class)->times(100)->make();
        User::insert($users->makevisible(['password','remember_token'])->toArray());
        $user = User::find(1);
        $user->name = 'Wordsmith';
        $user->email = 'wordsmith@qq.com';
        $user->is_admin = true;
        $user->save();
    }
}
