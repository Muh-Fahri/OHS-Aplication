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
        Schema::create('inciden__notifications', function (Blueprint $table) {
            $table->id();
            $table->date('report_date');
            $table->text('event_title');
            $table->dateTime('date_time');
            $table->string('date_type');
            $table->string('location');
            $table->string('status');
            $table->string('reporter');
            $table->string('remarks')->nullable();
            $table->string('next_action')->nullable();
            $table->string('next_user');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inciden__notifications');
    }
};
