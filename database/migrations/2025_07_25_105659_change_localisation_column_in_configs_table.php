<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('configs', function (Blueprint $table) {
          
           $table->string("imageenteteservice")->nullable();


            $table->integer("experience")->nullable();
            $table->integer("client")->nullable();
            $table->integer("pourcetage")->nullable();
            $table->integer("sponsor")->nullable();
            $table->integer("projet")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('configs', function (Blueprint $table) {
            //
        });
    }
};
