<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camp_benefits', function (Blueprint $table) {
            $table->id();
            //cara lama ke.1 foreign key ada 2 cara
            //$table->bigInteger('camp_id')->unsigned();

            //cara lama ke.2 foreign key ada 2 cara
            //$table->unsignedBigInteger('camp_id');

            //pakai cara cepat
            $table->foreignId('camp_id')->constrained();
            $table->string('name');
            $table->timestamps();

            //cara lama ke.1 dan 2 lanjutan 
            //$table->foreign('camp_id')->('id')->on('camps')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('camp_benefits');
    }
};
