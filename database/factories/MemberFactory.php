<?php

namespace Database\Factories;

use App\Models\Members;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Members::class;

    public function definition()
    {
        return [
            'member_id'=>$this->faker->uuid(),
            'phone' =>  $this->faker->numerify('##########'),
            'card_id' => $this->faker->numerify('##########'),
            'name' =>  $this->faker->text(10),
            'membership'=>'暢遊會員',
            'created_at' =>$this->faker->dateTime($max = 'now', $timezone = null),
            'updated_at' =>$this->faker->dateTime($max = 'now', $timezone = null),
            ];
    }

  
}
