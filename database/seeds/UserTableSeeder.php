<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $users = [
      ['name' => 'Josua Obando', 'email' => 'josua@mail.com', 'password' => Hash::make('2909')]
    ];

    foreach($users as $user)
    {
      \App\User::create($user);
    }
  }
}
