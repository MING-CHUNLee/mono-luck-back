<?php
/*
 * @Author: your name
 * @Date: 2022-03-01 09:25:46
 * @LastEditTime: 2022-03-03 17:47:01
 * @LastEditors: Please set LastEditors
 * @Description: 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 * @FilePath: \mono-luck-back\database\factories\LockerFactory.php
 */

namespace Database\Factories;
use App\Models\Locker;
use App\Models\Members;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Locker>
 */

  global $a ;
  global $b ;
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
                'locker_id' =>$this->faker->unique()->numberBetween(0, 33),
                'Num' => $this->faker->numerify('####################'),
                'created_at' =>$this->faker->dateTime($max = 'now', $timezone = null),
                'updated_at' =>$this->faker->dateTime($max = 'now', $timezone = null),

        ];
        
      
    }
}
