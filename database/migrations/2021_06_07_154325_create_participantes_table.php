<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participantes', function (Blueprint $table) {
            $table->id();
            $table->string(('nome'));
            $table->string(('apelidos'));
            $table->enum('tipo_documento', ['dni', 'nif','pasaporte']);
            $table->string(('numero'));
            $table->date(('data_nacemento'));
            $table->integer(('mobil'));
            $table->string(('email'));
            $table->unsignedBigInteger("actividade_id");
             $table->foreign("actividade_id")->references("id")->on("actividades")->onUpdate('cascade')->onDelete('cascade');
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
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        
                Schema::dropIfExists('participantes');

                DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
