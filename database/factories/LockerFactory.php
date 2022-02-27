<?php

namespace Database\Factories;
use App\Models\Locker;
use App\Models\Members;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Locker>
 */



class LockerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Locker::class;
    protected $user = Members::class;
    public function definition()
    {


        return [
            //

                'locker_id' =>  $this->faker->numerify('##########'),
                'Num' => $this->faker->numerify('####################'),
                'created_at' =>$this->faker->dateTime($max = 'now', $timezone = null),
                'updated_at' =>$this->faker->dateTime($max = 'now', $timezone = null),
            
        ];
    }
}
