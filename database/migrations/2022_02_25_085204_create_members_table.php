<?php
/*
 * @Author: your name
 * @Date: 2022-02-25 16:52:04
 * @LastEditTime: 2022-02-25 16:53:47
 * @LastEditors: your name
 * @Description: 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 * @FilePath: \mono-luck-back\mono-luck-back\database\migrations\2022_02_25_085204_create_members_table.php
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
        Schema::create('members', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('phone',10)->nullable();
            $table->string('cardId',20)->nullable();
            $table->string('name',40);
            $table->string('membership',20);
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
        Schema::dropIfExists('members');
    }
};
