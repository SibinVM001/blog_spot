<?php
/*******************************
    Author : Sibin V M
    Title : Migrations for Blog Model
    Created Date : 10-06-2022
********************************/

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id('id'); // unique id as primary key
            $table->text('title'); // post title
            $table->text('image')->nullable(); // post image file name for storing
            $table->text('image_title')->nullable(); // post image original name
            $table->text('content'); // post content
            $table->timestamps(); // created_date and updated_date
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
