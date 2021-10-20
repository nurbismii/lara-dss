<?php

namespace Database\Seeders;

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
        //
        $model = new user();
        $model->name = "Nur Bismi";
        $model->email = "nurbismi74@gmail.com";
        $model->password = bcrypt('12345678');
        $model->save();
    }
}
