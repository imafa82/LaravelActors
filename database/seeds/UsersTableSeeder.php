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
        $this->saveUser('Massimiliano', 'imafa82@gmail.com');
        $this->saveUser('Fabrizio', 'fabrizio@gmail.com');
    }

    public function saveUser($name, $email, $password="test"){
        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->password = bcrypt($password);
        $user->save();
    }
}
