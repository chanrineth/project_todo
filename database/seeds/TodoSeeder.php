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
            'description' => 'gvjdfnbjkdnfkb',
            'status_id' => 1,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        \App\Todo::create([
            'title'=> 'Hello02',
            'description' => 'gvjdfnbjkdnfkb',
            'status_id' => 1,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        \App\Todo::create([
            'title'=> 'Hello03',
            'description' => 'gvjdfnbjkdnfkb',
            'status_id' => 2,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        \App\Todo::create([
            'title'=> 'Hello04',
            'description' => 'gvjdfnbjkdnfkb',
            'status_id' =>3,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

    }
}
