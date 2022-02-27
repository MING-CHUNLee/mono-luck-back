<?php

namespace Database\Seeders;

use App\Models\Locker;
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
        // $member=Members::factory()->create();
        // $locker=Locker::factory()->count(3)->for($user)
        // \App\Models\User::factory(10)->create();
        $this->call([MemberTableSeeder::class,LokerSeeder::class]);
        
         
    }
}
