<?php

use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Status::create([ 'name'=> 'In progress']);
        \App\Status::create([ 'name'=> 'Done']);
        \App\Status::create([ 'name'=> 'Review']);
    }
}
