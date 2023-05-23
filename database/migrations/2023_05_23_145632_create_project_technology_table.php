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
        Schema::create('project_technology', function (Blueprint $table) {

            $table->id();
            // $table->foreignId('project_id')->constrained()->cascadeOnDelete();
            // $table->foreignId('type_id')->constrained()->cascadeOnDelete();

            $table->unsignedBigInteger('project_id');
            $table->foreign('project_id')
                  ->references('id')
                  ->on('projects')->cascadeOnDelete();

            $table->unsignedBigInteger('type_id');
            $table->foreign('type_id')
                    ->references('id')
                    ->on('types')->cascadeOnDelete();      


            // $table->primary(['project_id', 'type_id']);
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
        Schema::dropIfExists('project_technology');
    }
};
