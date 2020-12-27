<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MakeQuestionsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create('questions', function(Blueprint $table){
			$table->Increments('id');
			$table->string('judul');    		
			$table->string('isi');
			// $table->date('tanggal_dibuat');
			// $table->date('tanggal_diperbaharui');
			// $table->int('jawaban_tepat_id');
			// $table->int('profil_id');
			$table->timestamps(); 
    	});

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
