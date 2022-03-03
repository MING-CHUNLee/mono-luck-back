<?php
/*
 * @Author: your name
 * @Date: 2022-03-01 09:25:46
 * @LastEditTime: 2022-03-03 16:44:00
 * @LastEditors: your name
 * @Description: 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 * @FilePath: \mono-luck-back\database\factories\MemberFactory.php
 */

namespace Database\Factories;

use App\Models\Member;
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
    protected $model = Member::class;

    public function definition()
    {
        return [
            'member_id'=>$this->faker->uuid(),
            'phone' =>  $this->faker->numerify('##########'),
            'card_id' => $this->faker->numerify('##########'),
            'name' =>  $this->faker->name('10'),
            'membership'=>'暢遊會員',
            'created_at' =>$this->faker->dateTimeBetween('-500 days', '-200 days'),
            'updated_at' =>$this->faker->dateTimeBetween('-200 days', '-20 days'),
            ];
    }

  
}
