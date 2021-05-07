<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTalkingComicsModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        if (!Schema::hasTable('talking_comics_models')) {
            Schema::create('talking_comics_models', function (Blueprint $table) {
                $table->bigIncrements('talking_comics_models_id');
                $table->string('talkcomics_name', 255);
                $table->string('talkcomics_class_url',255);
                $table->string('talkcomics_subject_url',255);
                $table->string('talkcomics_subsubject_url',255);
                $table->string('talkcomicsthumbnail_link',255);
                $table->text('talkcomics_link');
                $table->string('language');
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
        Schema::dropIfExists('talking_comics_models');
    }
}
