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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('last_name', 255);
            $table->string('college_degree', 255);
            $table->integer('age');
            $table->date('contract_date');
            $table->string('image', 255);
            $table->string('identify_document', 255);
            $table->unsignedBigInteger('course_id');
            $table->timestamps();//Registra el tiempo de creación de la tabla
            //A continuación se indica hacia donde apuntan estas foráneas
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade')->onUpdate('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
};
