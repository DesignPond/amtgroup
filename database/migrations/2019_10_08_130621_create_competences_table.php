<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompetencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competences', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('icon')->nullable();
            $table->tinyInteger('visible')->nullable();
            $table->unsignedInteger('sort_order')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('competence_translations', function(Blueprint $table)
        {
            $table->increments('id');
            $table->bigInteger('competence_id')->unsigned();
            $table->string('title');
            $table->text('content');
            $table->string('locale')->index();
            $table->unique(['competence_id','locale']);
            $table->foreign('competence_id')->references('id')->on('competences')->onDelete('cascade');
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
        Schema::dropIfExists('competences');
        Schema::dropIfExists('competence_translations');
        Schema::enableForeignKeyConstraints();
    }
}
