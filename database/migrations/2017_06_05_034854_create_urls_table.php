<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUrlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('urls', function (Blueprint $table) {
          $table->increments('id');
          $table->string('title');
          $table->string('url');
          $table->text('description');
          $table->integer('status')->default('0');
          $table->date('dateadd');
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
        Schema::DropIfExists('urls');
    }
}
