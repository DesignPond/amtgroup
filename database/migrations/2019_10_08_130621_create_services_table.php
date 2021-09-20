<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('icon')->nullable();
            $table->tinyInteger('visible')->nullable();
            $table->unsignedInteger('sort_order')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('service_translations', function(Blueprint $table)
        {
            $table->increments('id');
            $table->bigInteger('service_id')->unsigned();
            $table->string('title');
            $table->text('content');
            $table->string('locale')->index();
            $table->unique(['service_id','locale']);
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
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
        Schema::dropIfExists('services');
        Schema::dropIfExists('service_translations');
        Schema::enableForeignKeyConstraints();
    }
}
