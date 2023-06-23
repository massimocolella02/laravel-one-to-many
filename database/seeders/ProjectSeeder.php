<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrayProjects = [
            [
                'name' => 'Boolflix',
                'description' => 'Descrizione progetto Boolflix',
                'created_date' => '10-12-2022',
            ],
            [
                'name' => 'Whatsapp Web',
                'description' => 'Descrizione progetto Whatsapp Web',
                'created_date' => '10-12-2022',
            ],
            [
                'name' => 'Zoom',
                'description' => 'Descrizione progetto Zoom',
                'created_date' => '22-10-2023',
            ],
        ];

        foreach ($arrayProjects as $elem) {
            $newProject = new Project();
            $newProject->name_project = $elem['name'];
            $newProject->description = $elem['description'];
            $newProject->created_date = $elem['created_date'];
            $newProject->save();
        }
    }
}
