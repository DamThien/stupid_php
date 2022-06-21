<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for ($i=0; $i < 100; $i++) {
            DB::table('users')->insert([
                'name' => $faker->name(),
                'email' => $faker->unique()->safeEmail(),
                'email_verified_at' => now(),
                'password' => Hash::make('password'), // password
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
// class UsersTableSeeder extends Factory
// {
//     /**
//      * Define the model's default state.
//      *
//      * @return array
//      */
//     public function definition()
//     {
//         $factory->define(App\Model\User::class, function (Faker\Generator $faker) {
//             return [
//                 'name' => $this->faker->name(),
//                 'email' => $this->faker->unique()->safeEmail(),
//                 'email_verified_at' => now(),
//                 'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
//                 'remember_token' => Str::random(10),
//             ];
//         });
//     }
// }