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
        Schema::create('table_nos', function (Blueprint $table) {
            $table->id();
            $table->integer('table_no');
            $table->string('customer_name');
            $table->time('in_time');
            $table->time('out_time');
            $table->integer('total');
            $table->string('payment_type');
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
        Schema::dropIfExists('table_nos');
    }
};
