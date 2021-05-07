<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        if (!Schema::hasTable('subjects')) {
            Schema::create('subjects', function (Blueprint $table) {
                $table->bigIncrements('subject_id');
                $table->integer('class_subject_id');
                $table->text('subject_name');
                $table->text('subject_url');
                $table->text('cover_image_url');
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
        
        if (Schema::hasTable('subjects')) {
            Schema::dropIfExists('subjects');
        }
        
        
    }
}
