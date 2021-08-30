<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mov_name');
            $table->string('mov_file_dir');
            $table->string('thumb_dir');
            $table->date('upload_by');
            $table->integer('number_view');
            $table->integer('bookmarks');
            $table->integer('updated_by')->unsigned();
            $table->foreign('updated_by')->references('id')->on('user')->onDelete('no action');
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
        Schema::dropIfExists('mov');
    }
}
