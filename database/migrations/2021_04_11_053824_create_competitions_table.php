<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompetitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        if (!Schema::hasTable('competitions')) {
            Schema::create('competitions', function (Blueprint $table) {
                $table->bigIncrements('competitions_id');
              
                $table->boolean('competition_enabled')->nullable()->default(false);
             
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
        
        if (Schema::hasTable('competitions')) {
            Schema::dropIfExists('competitions');
        }        
    }
}
