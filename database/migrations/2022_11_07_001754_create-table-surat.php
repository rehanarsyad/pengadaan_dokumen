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
        Schema::create('surats', function (Blueprint $table) {
            $table->id();
            $table->string('letter_number');
            $table->string('date_signin');
            $table->string('hour');
            $table->string('activity');
            $table->string('location');
            $table->string('odp_invite');
            $table->string('assistant_officer')->nullable();
            $table->string('officer')->nullable();
            $table->string('protokol_team')->nullable();
            $table->string('clothes')->nullable();
            $table->string('description')->nullable();
            $table->string('tipe')->nullable();
            $table->integer('created_by')->nullable();
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
};
