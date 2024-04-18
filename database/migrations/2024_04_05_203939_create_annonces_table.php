<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnoncesTable extends Migration
{
    public function up()
    {
        Schema::create('annonces', function (Blueprint $table) {
            $table->id();
            $table->string('name_annonce');
            $table->text('description_annonce');
            $table->date('date_annonce');
            $table->string('image')->nullable(); // Nullable since we're allowing PDF files
            $table->string('pdf')->nullable(); // New column for storing PDF files
            $table->integer('épingler');
            $table->boolean('special')->default(false);  
            $table->boolean('carousel')->default(false);  
            $table->boolean('home')->default(false);  
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('annonces');
    }
}    
