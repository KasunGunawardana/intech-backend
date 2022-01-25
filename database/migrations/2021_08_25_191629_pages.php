<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('heading');
            $table->text('url');
            $table->text('meta_title');
            $table->text('meta_description');
            $table->text('keywords');
            $table->text('content');
            $table->boolean('show_nav')->default(true);
            $table->boolean('static')->default(false);
            $table->boolean('contained_box')->default(true);
            $table->decimal('order');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('pages');
    }
}
