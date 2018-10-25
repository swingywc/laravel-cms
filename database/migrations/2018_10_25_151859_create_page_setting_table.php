<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePageSettingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_setting', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug')->unique();
            $table->string('view');
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->text('keyword')->nullable();
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
        Schema::dropIfExists('page_setting');
    }
}
