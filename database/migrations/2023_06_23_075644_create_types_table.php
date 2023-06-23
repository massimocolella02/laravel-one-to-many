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
        Schema::create('types', function (Blueprint $table) {
            $table->id();
            $table->integer('project_id')->unsigned();
            $table->string('front_end');
            $table->string('back_end');
            $table->string('full_stack');
            $table->string('design');
            $table->timestamps();

            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('types');
        Schema::table('types', function (Blueprint $table){
            $table->dropForeign('types_project_id_foreign');
            $table->dropColumn('project_id');
        });
    }
};
