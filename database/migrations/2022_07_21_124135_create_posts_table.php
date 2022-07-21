<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->comment("文章");
            $table->id();
            $table->string('title')->unique()->comment("title");
            $table->text("content")->comment("content");
            $table->unsignedBigInteger("author")->comment("author");
            $table->timestamps();
            $table->softDeletes();

            $table->foreign("author")->references("id")->on("users");
            $table->index("title");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
