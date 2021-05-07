<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        if (!Schema::hasTable('quiz_models')) {
            Schema::create('quiz_models', function (Blueprint $table) {
                $table->bigIncrements('quiz_id');
                
                $table->string('quiz_name', 255);
                $table->string('quiz_class_url',255);
                $table->string('quiz_subject_url',255);
                $table->string('quiz_subsubject_url',255);
                $table->string('quizthumbnail_link',255);
                $table->text('quiz_link');
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
        Schema::dropIfExists('quiz_models');
    }
}
