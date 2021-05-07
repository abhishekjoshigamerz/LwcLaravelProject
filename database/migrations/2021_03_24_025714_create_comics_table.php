<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        if (!Schema::hasTable('comics')) {
            Schema::create('comics', function (Blueprint $table) {
                $table->bigIncrements('comics_id')->unsigned(); 
                $table->string('comics_name', 255);
                $table->string('comics_thumbnail', 255);
                $table->string('language', 15);
                $table->text('url_slug',255);
                $table->integer('comics_category_id');
                $table->integer('comics_subject_id');
                $table->text('comic_link_flapbook');
                $table->longText('comic_description')->nullable();
                $table->mediumText('comics_tags_for_search');
                $table->timestamps();
            });
        }
        
     
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        if (Schema::hasTable('comics')) {
            Schema::dropIfExists('comics');
        }
        
        
    }
}
