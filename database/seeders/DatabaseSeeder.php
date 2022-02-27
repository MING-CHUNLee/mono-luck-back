<?php

namespace Database\Seeders;
use APP\Models\Members;
use Database\Factories\MemberFactory;
use Database\Seeders\factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([MemberTableSeeder::class,]);
    
    }
}
