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
        $admin = new \App\User([
            'id' => '1',
            'name' => 'Admin',
            'password' => Hash::make('admin'),
            'email' =>'naveenperera777@gmail.com',
            'type' => 'admin'
        ]);
        $admin->save();

        $admin = new \App\User([
            'id' => '2',
            'name' => 'Naveen',
            'password' => Hash::make('123456'),
            'email' =>'naveen@gmail.com',
            'type' => 'customer'
        ]);
        $admin->save();
    }
}
