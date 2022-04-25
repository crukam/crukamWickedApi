<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Character;
use File;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get(public_path("data/characters.json"));
        $characters =  json_decode($json)->results;

        foreach($characters as $key=>$value)
        {
            Character::create([
                'name' => $value->name,
                'status' => $value->status,
                'species' => $value->species,
                'type' => $value->type,
                'gender' => $value->gender,
                'origin' => json_encode($value->origin),
                'location' => json_encode($value->location) ,
                'image' => $value->image,
                'episodes' => json_encode($value->episode),
                'url' =>$value->url
            ]);
        }
    }
}
