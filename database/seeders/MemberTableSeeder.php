<?php
/*
 * @Author: your name
 * @Date: 2022-03-01 09:25:46
 * @LastEditTime: 2022-03-03 16:43:39
 * @LastEditors: your name
 * @Description: 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 * @FilePath: \mono-luck-back\database\seeders\MemberTableSeeder.php
 */

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MemberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Member::factory()->count(15)->create();
    }
}
