<?php

use Illuminate\Database\Seeder;

class sbUserTableSeeder extends Seeder
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
          'name' => 'test',
          'email' => 'test@mail.com',
          'password' => Hash::make('12345')
        ]
      ];

      foreach($users as $user){
        \App\User::create($user);
      }
    }
}
