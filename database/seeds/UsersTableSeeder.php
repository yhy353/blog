<?php

use Carbon\Carbon;
use App\User;
use Identicon\Identicon;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $users = [
          [
              'name' => 'admin',
              'email' => 'xiaohong@163.com',
              'password' => Hash::make('123123'),
              'status' => true,
              'is_admin' => true,
              'avatar'   => (new Identicon())->getImageDataUri('admin', 256),
              'confirm_code' => str_random(64),
              'created_at'  => Carbon::now(),
              'updated_at'  => Carbon::now()
          ]
      ];

      DB::table('users')->insert($users);

      factory(User::class, 10)->create();
    }
}
