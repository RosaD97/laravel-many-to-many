<?php

namespace Database\Seeders;

use App\Models\Type;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Schema;


class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        Schema::disableForeignKeyConstraints();
        Project::truncate();
        Schema::enableForeignKeyConstraints();

        for($i = 0; $i < 10; $i++){

            $type = Type::inRandomOrder()->first();
           
            $project = new Project();
            $project->title = $faker->sentence(2);
            $project->text = $faker->text(500);
            $project->start_date = $faker->dateTime();
            $project->slug = Str::slug($project->title);
            $project->type_id = $type->id;
            $project->save();
            
        }
    }
}
