<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Episode;
use File;

class EpisodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get(public_path("data/episodes.json"));
        $episodes =  json_decode($json)->results;

        foreach($episodes as $key=>$value)
        {
            Episode::create([
                'name' => $value->name,
                'air_date' => $value->air_date,
                'episode' =>$value->episode,
                'characters' => json_encode($value->characters),
                'url' =>$value->url
            ]);
        }
    }
}
