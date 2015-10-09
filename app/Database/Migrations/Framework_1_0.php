<?php

namespace App\Database\Migrations;

use Jumilla\Versionia\Laravel\Support\Migration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class Framework_1_0 extends Migration
{
    /**
     * Upgrade database.
     *
     * @return void
     */
    public function up()
    {
        $this->createSessionsTable();
//        $this->createCacheTable();
//        $this->createJobsTable();
    }

    /**
     * Downgrade database.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
        Schema::dropIfExists('cache');
        Schema::dropIfExists('sessions');
    }

    /**
     * Create 'sessions' table.
     *
     * @return void
     */
    protected function createSessionsTable()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->unique();
            $table->text('payload');
            $table->integer('last_activity');
        });
    }

    /**
     * Create 'cache' table.
     *
     * @return void
     */
    protected function createCacheTable()
    {
        Schema::create('cache', function (Blueprint $table) {
            $table->string('key')->unique();
            $table->text('value');
            $table->integer('expiration');
        });
    }

    /**
     * Create 'jobs' table.
     *
     * @return void
     */
    protected function createJobsTable()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('queue');
            $table->text('payload');
            $table->tinyInteger('attempts')->unsigned();
            $table->tinyInteger('reserved')->unsigned();
            $table->unsignedInteger('reserved_at')->nullable();
            $table->unsignedInteger('available_at');
            $table->unsignedInteger('created_at');
        });
    }
}
