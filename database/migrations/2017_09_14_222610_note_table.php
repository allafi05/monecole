<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NoteTable extends Migration
{
    
    public function up()
    {
        Schema::create('notes', function(Blueprint $table) { 
            $table->increments('id'); 
            $table->string('matiere'); 
            $table->integer('coeficient'); 
            $table->double('note'); 
            $table->timestamps(); 
            
        });
    }

    public function down()
    {
        Schema::drop('notes');
    }
}
