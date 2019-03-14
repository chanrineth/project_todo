<?php

use Illuminate\Database\Seeder;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Todo::create([
            'title'=> 'Hello01',
            'description' => 'Go to university',
            'status_id' => 1,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        \App\Todo::create([
            'title'=> 'Hello02',
            'description' => 'Go to cinema',
            'status_id' => 1,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        \App\Todo::create([
            'title'=> 'Hello03',
            'description' => 'Go to shopping',
            'status_id' => 2,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        \App\Todo::create([
            'title'=> 'Hello04',
            'description' => 'Go to hospital',
            'status_id' =>3,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

    }
}
