<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('type', 20)->nullable();
            $table->string('etat')->default('publie');
            $table->integer('categorie_id')->nullable()->unsigned()->index();
            $table->string('titre');
            $table->string('nom')->nullable()->index();
            $table->text('extrait')->nullable();
            $table->text('texte')->nullable();
            $table->dateTime('date')->nullable();
            $table->string('seo_title')->nullable();
            $table->text('seo_description')->nullable();
            $table->timestamps();
        });

        Schema::create('article_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id')->nullable()->unsigned();
            $table->string('slug')->unique();
            $table->string('nom');
            $table->text('description')->nullable();
            $table->integer('order')->nullable()->unsigned();
            $table->string('seo_title')->nullable();
            $table->text('seo_description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
        Schema::dropIfExists('article_categories');
    }
}
