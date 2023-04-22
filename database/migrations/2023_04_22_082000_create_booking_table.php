<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('booking', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->datetime('time_from')->nullable();
             $table->datetime('time_to')->nullable();
                $table->text('additional_information')->nullable();
                $table->softDeletes();

                $table->index(['deleted_at']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking');
    }
}
