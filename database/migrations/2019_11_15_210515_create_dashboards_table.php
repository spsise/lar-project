<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDashboardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dashboards', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedInteger('modulo_id');
            $table->foreign('modulo_id')->references('id')->on('modulos');
            $table->integer('status');

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
        $table->dropForeign(['user_id']);
        $table->dropColumn('user_id');
        $table->dropForeign(['modulo_id']);
        $table->dropColumn('modulo_id');
        Schema::dropIfExists('dashboards');
    }
}
