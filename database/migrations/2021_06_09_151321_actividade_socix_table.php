<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ActividadeSocixTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividade_socix', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("actividade_id");
            $table->unsignedBigInteger("socix_id");
            $table->foreign("actividade_id")->references("id")->on("actividades")->onUpdate('cascade')->onDelete('cascade');
            $table->foreign("socix_id")->references("id")->on("socixs")->onUpdate('cascade')->onDelete('cascade');
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
                Schema::dropIfExists('actividade_socix');

                DB::statement('SET FOREIGN_KEY_CHECKS=1');                

    }
}
