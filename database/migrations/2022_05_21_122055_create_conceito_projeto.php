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
        Schema::create('conceito_projeto', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->integer("conceito_id");
            $table->foreign("conceito_id")
                ->references("id")
                ->on("conceitos");

            $table->integer("projeto_id");
            $table->foreign("projeto_id")
                ->references("id")
                ->on("projetos");
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conceito_projeto');
    }
};
