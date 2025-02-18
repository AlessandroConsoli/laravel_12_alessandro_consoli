<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('article_tag', function (Blueprint $table) {
            $table->id();

            //*Article ID
            $table->unsignedBigInteger('article_id');  //?Creo la colonna article_id
            $table->foreign('article_id')->references('id')->on('articles');

            //*Tag ID
            $table->unsignedBigInteger('tag_id');  //?Creo la colonna tag_id
            $table->foreign('tag_id')->references('id')->on('tags');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article_tag');
    }
};
