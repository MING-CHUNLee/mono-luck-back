<?php
/*
 * @Author: your name
 * @Date: 2022-02-25 16:53:04
 * @LastEditTime: 2022-02-25 16:53:32
 * @LastEditors: your name
 * @Description: 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 * @FilePath: \mono-luck-back\mono-luck-back\database\migrations\2022_02_25_085304_create_registions_table.php
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registions', function (Blueprint $table) {
            $table->id('id');
            $table->String('locker_id',10)->unique();
            $table->Char('member_id',36)->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registions');
    }
};
