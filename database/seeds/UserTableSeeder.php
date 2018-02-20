<?php
use App\User;
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
        $faker = Faker\Factory::create();
        foreach(range(1,15) as $index){
          user::create([
            'name' => $faker->name,
            'email' => $faker->email,
            'password' => Hash::make('password')
          ]);
        }
    }
}
