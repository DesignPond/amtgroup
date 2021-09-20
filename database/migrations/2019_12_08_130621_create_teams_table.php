<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->nullable();
            $table->tinyInteger('visible')->nullable();
            $table->unsignedInteger('sort_order')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('team_translations', function(Blueprint $table)
        {
            $table->increments('id');
            $table->bigInteger('team_id')->unsigned();
            $table->string('position')->nullable();
            $table->text('biography')->nullable();
            $table->text('publications')->nullable();
            $table->text('interventions')->nullable();
            $table->string('locale')->index();
            $table->unique(['team_id','locale']);
            $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('teams');
        Schema::dropIfExists('team_translations');
        Schema::enableForeignKeyConstraints();
    }
}
