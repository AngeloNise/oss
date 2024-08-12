<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->string('letter_of_intent')->nullable();
            $table->string('application_form')->nullable();
            $table->string('pre_numbered_tickets')->nullable();
            $table->string('official_receipts')->nullable();
            $table->string('control_sheets')->nullable();
            $table->string('reservation_slip')->nullable();
            $table->string('goods_services_inspection')->nullable();
            $table->string('statement_of_projected_net')->nullable();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};
