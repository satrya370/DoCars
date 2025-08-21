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
        Schema::create('destinations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('package_id');
            $table->string('name');
            $table->text('description');
            $table->time('start_time')->default('08:00');
            $table->smallInteger('day')->default('1');
            $table->timestamps();

            $table->foreign('package_id')
                ->references('id')->on('packages')
                ->onDelete('cascade');

            $table->index(['package_id', 'day']);
            $table->index(['package_id', 'day', 'start_time']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('destinations');
    }
};
