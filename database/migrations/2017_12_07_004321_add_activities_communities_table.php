<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddActivitiesCommunitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities_communities', function (Blueprint $table) {
            $table->increments('id');
						$table->integer('status_id')->unsigned()->nullable()->default(0);
						$table->integer('activities_id')->unsigned();
						$table->integer('communities_id')->unsigned();

						$table->foreign('activities_id')->references('id')
																					->on('activities')
																					->onDelete('cascade');

						$table->foreign('communities_id')->references('id')
																					->on('communities')
																					->onDelete('cascade');
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
        Schema::dropIfExists('activities_communities');
    }
}
