<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'client_group', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('client_id')->unsigned();
                $table->integer('group_id')->unsigned();
                $table->softDeletes();
                $table->timestamps();
            }
        );

        Schema::table(
            'client_group', function (Blueprint $table) {
                $table->foreign('client_id')->references('id')->on('clients');
                $table->foreign('group_id')->references('id')->on('groups');

            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_group');
    }
}
