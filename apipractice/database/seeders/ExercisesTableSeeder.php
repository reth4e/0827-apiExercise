<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Exercise;

class ExercisesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'test1',
            'email' => 'test1@example.com',
            'profile' => 'a'
        ];
        $exercise = new Exercise;
        $exercise->fill($param)->save();
        $param = [
            'name' => 'test2',
            'email' => 'test2@example.com',
            'profile' => 'b'
        ];
        $exercise = new Exercise;
        $exercise->fill($param)->save();
        $param = [
            'name' => 'test3',
            'email' => 'test3@example.com',
            'profile' => 'c'
        ];
        $exercise = new Exercise;
        $exercise->fill($param)->save();
    }
    
}
