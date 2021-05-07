<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideoToComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        if (!Schema::hasTable('video_to_comics')) {
            Schema::create('video_to_comics', function (Blueprint $table) {
                $table->bigIncrements('video_to_comics_id')->autoIncrement();
                $table->string('comicstovideo_name', 255);
                $table->string('comicstovideo_thumbnail', 255);
                $table->string('comicstovideo_pdf_file', 255);
                $table->string('languagetovideo', 15);
                $table->text('url_slug',255);
                $table->longText('comictovideo_description')->nullable();
                $table->mediumText('comicstovideo_tags_for_search');
                $table->text('video_to_comics_iframe_code')->nullable();
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
        
        if (Schema::hasTable('video_to_comics')) {
            Schema::dropIfExists('video_to_comics');
        }
        
        
    }
}
