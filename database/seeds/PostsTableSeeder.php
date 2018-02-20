<?php
use App\Models\posts;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
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
        posts::create([
          'user_id' => $faker->numberBetween(1,15),
          'category_id' => $faker->numberBetween(1,4),
          'title' => $faker->sentence(1),
          'body' => $faker->sentence(3),
          'email' => $faker->email,
          'slug' => $faker->sentence(1),
          'created_at' => $faker->DateTime,
          'updated_at' => $faker->DateTime
        ]);
      }
    }
}
