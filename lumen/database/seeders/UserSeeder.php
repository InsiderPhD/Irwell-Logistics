<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        $faker = Faker\Factory::create();

        for ($i = 0; $i < 5; $i++)
        {
            $user = new User();
            $user->full_name = $faker->firstName . ' ' . $faker->lastName;
            $user->email = $faker->email;
            $user->job_title = "Floor worker";
            $user->password = Hash::make('verysecurepassword123');
            $user->role()->associate(Role::where("name" , "=", "Worker")->first());
            $user->save();
        }
        for ($i = 0; $i < 5; $i++)
        {
            $user = new User();
            $user->full_name = $faker->firstName . ' ' . $faker->lastName;
            $user->email = $faker->email;
            $user->password = Hash::make('verysecurepassword123');
            $user->job_title = "Delivery Driver";
            $user->role()->associate(Role::where("name" , "=", "Driver")->first());
            $user->save();
        }

        $user = new User();
        $user->full_name = $faker->firstName . ' ' . $faker->lastName;
        $user->email = $faker->email;
        $user->job_title = "Junior System Admin";
        $user->password = Hash::make('password');
        $user->role()->associate(Role::where("name" , "=", "System Admin")->first());
        $user->save();

        $user = new User();
        $user->full_name = $faker->firstName . ' ' . $faker->lastName;
        $user->email = $faker->email;
        $user->job_title = "System Admin";
        $user->password = Hash::make('asecurepassword1234');
        $user->role()->associate(Role::where("name" , "=", "System Admin")->first());
        $user->save();

        $user = new User();
        $user->full_name = $faker->firstName . ' ' . $faker->lastName;
        $user->email = $faker->email;
        $user->job_title = "Head of IT";
        $user->password = Hash::make('asecurepassword1234');
        $user->role()->associate(Role::where("name" , "=", "System Admin")->first());
        $user->save();

        $user = new User();
        $user->full_name = $faker->firstName . ' ' . $faker->lastName;
        $user->email = $faker->email;
        $user->job_title = "Operations Manager";
        $user->password = Hash::make('123123123');
        $user->role()->associate(Role::where("name" , "=", "Manager")->first());
        $user->save();

        $user = new User();
        $user->full_name = $faker->firstName . ' ' . $faker->lastName;
        $user->email = $faker->email;
        $user->job_title = "CEO";
        $user->password = Hash::make('password123');
        $user->role()->associate(Role::where("name" , "=", "Manager")->first());
        $user->save();

    }
}
