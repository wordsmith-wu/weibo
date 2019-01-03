<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Translation;

class TranslationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_ids = ['1','2','3'];
        $faker = app(Faker\Generator::class);

        $translations = factory(Translation::class)->times(100)->make()->each(function ($translation) use ($faker, $user_ids) {
            $translation->user_id = $faker->randomElement($user_ids);
        });

        Translation::insert($translations->toArray());
    }
}
