 <?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class LessonTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();
        $lessonIds = \App\Lesson::pluck('id');
        $tagIds = \App\Tag::pluck('id');

        foreach( range(1, 30) as $index){
            DB::table('lesson_tag')->insert([
                'lesson_id' => $faker->randomElement($lessonIds),
                'tag_id' => $faker->randomElement( $tagIds)
                ]);
        }

    }
}
