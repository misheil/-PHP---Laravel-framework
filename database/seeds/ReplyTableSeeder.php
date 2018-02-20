<?php
use App\Models\reply;
use Illuminate\Database\Seeder;

class ReplyTableSeeder extends Seeder
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
        reply::create([
          'user_id' => $faker->numberBetween(1,15),
          'posts_id' => $faker->numberBetween(1,15),
          'body' => $faker->sentence(3),
          'created_at' => $faker->DateTime,
          'updated_at' => $faker->DateTime
          ]);
        }
    }
}
