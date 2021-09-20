<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug')->index();
            $table->text('content');
            $table->tinyInteger('visible')->nullable();
            $table->tinyInteger('isHome')->nullable();
            $table->unsignedInteger('sort_order')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('page_translations', function(Blueprint $table)
        {
            $table->increments('id');
            $table->bigInteger('page_id')->unsigned();
            $table->string('title');
            $table->string('menu');
            $table->text('extract');
            $table->string('locale')->index();
            $table->unique(['page_id','locale']);
            $table->foreign('page_id')->references('id')->on('pages')->onDelete('cascade');
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
        Schema::dropIfExists('pages');
        Schema::dropIfExists('page_translations');
        Schema::enableForeignKeyConstraints();
    }
}
