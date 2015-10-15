<?php

namespace App\Database\Migrations;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Jumilla\Versionia\Laravel\Support\Migration;

//@@ Step 16 @@//
class App_1_0 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //@@ Step 16 @@//
        //{{
        Schema::create('todos', function(Blueprint $table) {
            $table->increments('id');
            $table->text('title');
            $table->integer('status');	// 1:still 2:done
//            $table->timestamps();
		});
        //}}
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //@@ Step 16 @@//
        Schema::dropIfExists('todos');
    }
}
