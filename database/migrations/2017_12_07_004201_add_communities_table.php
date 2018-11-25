<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCommunitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('communities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',60);
            $table->string('lider_name',60);
            $table->integer('lider_phone');
            $table->text('direction');
            $table->text('description');
						// $table->integer('activities')->unsigned()->nullable()->default(null);
						// $table->foreign('activities')->references('activities_id')
						// 															->on('activities_communities')
						// 															->onDelete('cascade');
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
        Schema::dropIfExists('communities');
    }
}
