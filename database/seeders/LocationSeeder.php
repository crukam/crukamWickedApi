<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Location;
use File;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get(public_path("data/locations.json"));
        $locations =  json_decode($json)->results;

        foreach($locations as $key=>$value)
        {
            Location::create([
                'name' => $value->name,
                'type' =>$value->type,
                'dimension' => $value->dimension,
                'residents' => json_encode($value->residents),
                'url'   => $value->url
            ]);
        }
    }
}
