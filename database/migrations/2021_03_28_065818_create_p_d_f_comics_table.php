<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePDFComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        if (!Schema::hasTable('p_d_f_comics')) {
            Schema::create('p_d_f_comics', function (Blueprint $table) {
                $table->bigIncrements('pdfcomics_id');
                $table->string('comics_name', 255);
                $table->string('comics_thumbnail', 255);
                $table->string('comics_pdf_file', 255);
                $table->string('language', 15);
                $table->text('url_slug',255);
                $table->integer('comics_category_id');
                $table->integer('comics_subject_id'); 
                $table->longText('comic_description')->nullable();
                $table->mediumText('comics_tags_for_search');
                // $table->mobile_image_folder_data('comics_image_folder_path');
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
        
        if (Schema::hasTable('p_d_f_comics')) {
            Schema::dropIfExists('p_d_f_comics');
        }
        
        
    }
}
