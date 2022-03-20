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
        Schema::create('aboutus_certificates', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullabe();
            $table->longText('description')->nullabe();
            $table->string('image')->nullabe();
            $table->string('certificateOne')->nullabe();
            $table->string('certificateTwo')->nullabe();
            $table->string('certificateThree')->nullabe();
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
        Schema::dropIfExists('aboutus_certificates');
    }
};
