<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddVolunteersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteers', function (Blueprint $table) {
            $table->increments('id');
						$table->string('firstName',60);
						$table->string('lastName',60);
						$table->string('email',60);
						// $table->string('password',60);
						$table->text('description');
						$table->integer('activity')->unsigned()->nullable()->default(null);
						$table->foreign('activity')->references('id')->on('activities')->onDelete('cascade');
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
        Schema::dropIfExists('volunteers');
    }
}
