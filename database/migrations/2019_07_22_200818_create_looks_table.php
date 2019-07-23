<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('looks', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->integer('order');
            $table->string('image_url');
            $table->unsignedInteger('event_id');
            $table->timestamps();

            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('looks')) {
            Schema::table('looks', function (Blueprint $table) {
                $table->dropForeign(['event_id']);
            });
        }
        Schema::dropIfExists('looks');
    }
}
