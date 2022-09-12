<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $new_user = new User();
        $new_user->name = 'Manuel';
        $new_user->surname = 'Benini';
        $new_user->date_of_birth = '2000/05/01';
        $new_user->email = 'manuelbenini@gmail.com';
        $new_user->password = Hash::make(12341234);
        $new_user->remember_token = false;
        $new_user->save();

        $new_user = new User();
        $new_user->name = 'Francesco';
        $new_user->surname = 'Cataletto';
        $new_user->date_of_birth = '1997/12/07';
        $new_user->email = 'catalettofrancesco@gmail.com';
        $new_user->password = Hash::make(12341234);
        $new_user->remember_token = false;
        $new_user->save();

        $new_user = new User();
        $new_user->name = 'Marco';
        $new_user->surname = 'Gagliano';
        $new_user->date_of_birth = '1994/04/12';
        $new_user->email = 'rage.asura94@gmail.com';
        $new_user->password = Hash::make(12341234);
        $new_user->remember_token = false;
        $new_user->save();

        $new_user = new User();
        $new_user->name = 'Salvatore';
        $new_user->surname = 'Olivieri';
        $new_user->date_of_birth = '1998/10/03';
        $new_user->email = 'salvatoreolivieri@gmail.com';
        $new_user->password = Hash::make(12341234);
        $new_user->remember_token = false;
        $new_user->save();

        $new_user = new User();
        $new_user->name = 'Carlo';
        $new_user->surname = 'Duminuco Del Monte';
        $new_user->date_of_birth = '1990/01/29';
        $new_user->email = 'carloduminuco90@gmail.com';
        $new_user->password = Hash::make(12341234);
        $new_user->remember_token = false;
        $new_user->save();
    }
}
