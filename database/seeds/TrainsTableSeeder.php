<?php

use App\Models\Train;

use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
            [
                'departure_city'=>'Rome',
                'arrival_city'=>'Naples',
                'price'=>12.80
            ],
            [
                'departure_city'=>'Milan',
                'arrival_city'=>'Palermo',
                'price'=>120.80
            ],

        ];

        foreach ($trains as $element) {
            $new_train = new Train();
            $new_train->departure_city = $element['departure_city'];
            $new_train->arrival_city = $element['arrival_city'];
            $new_train->price = $element['price'];
            $new_train->save();
        }
    }
}
