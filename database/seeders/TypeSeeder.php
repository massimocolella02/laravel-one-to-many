<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrayTypes = 
        [
            [
                'Front-End' => 'Vue Js',
                'Back-End' => 'PHP',
                'Full-Stack' => 'Si',
                'Design' => 'Figma'
            ],
            [
                'Front-End' => 'React Js',
                'Back-End' => 'Laravel',
                'Full-Stack' => 'Si',
                'Design' => 'Figma'
            ],
            [
                'Front-End' => 'Vue Js',
                'Back-End' => 'PHP',
                'Full-Stack' => 'Si',
                'Design' => 'Figma'
            ]
        ];

        foreach ($arrayTypes as $elem) {
            $newType = new Type();
            $newType->front_end = $elem['Front-End'];
            $newType->back_end = $elem['Back-End'];
            $newType->full_stack = $elem['Full-Stack'];
            $newType->design = $elem['Design'];
            $newType->save();
        }
    }
}
