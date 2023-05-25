<?php

namespace Database\Seeders;

use App\Models\Bug;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BugSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            'name' => 'Tidak bisa logout',
            'project_id' => '1', 
            'description' => 'yayaya', 
            'file'=> 'N/A',
             'status' =>'PENDING',
             'progress' => '1',
              'priority'=>'HIGH',

        ];

        Bug::create($data);
    }
}
