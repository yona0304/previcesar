<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();

        $user->type = 'CC';
        $user->identification = 1096189273;
        $user->name = 'yonatan david vides centeno';
        $user->post = 'Administrador';
        $user->phone_number = '3134213189';
        $user->usuario = 'yonatanvides04@gmail.com';
        $user->password = bcrypt('12345678');
        $user->state = 'activo';

        $user->save();

        $user = new User();
        
        $user->type = 'CC';
        $user->identification = 1096189275;
        $user->name = 'Charamusca mortal';
        $user->post = 'Asesor';
        $user->phone_number = '01800911911';
        $user->usuario = 'charamusca@example.com';
        $user->password = bcrypt('12345678');
        $user->state = 'activo';

        $user->save();

        User::factory(23)->create();
    }
}
