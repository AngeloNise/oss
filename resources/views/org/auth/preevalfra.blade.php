@extends('layout.orglayout')
@section('content')
    
@endsection


<!--<div class="form-container">
        <h2>Upload Your Documents</h2>
        <h2>FRA Pre-Evaluation</h2>
        <form action="{ { route('documents.store') }}" method="POST" enctype="multipart/form-data">
            @ csrf
            <div class="form-group">
                <label for="letter_of_intent">Letter of Intent:</label>
                <input type="file" name="letter_of_intent" accept=".pdf,.docx">
            </div>
            <div class="form-group">
                <label for="application_form">Application Form:</label>
                <input type="file" name="application_form" accept=".pdf,.docx">
            </div>
            <div class="form-group">
                <label for="pre_numbered_tickets">Pre Numbered Tickets:</label>
                <input type="file" name="pre_numbered_tickets" accept=".pdf,.docx">
            </div>
            <div class="form-group">
                <label for="official_receipts">Official Receipts:</label>
                <input type="file" name="official_receipts" accept=".pdf,.docx">
            </div>
            <div class="form-group">
                <label for="control_sheets">Control Sheets:</label>
                <input type="file" name="control_sheets" accept=".pdf,.docx">
            </div>
            <div class="form-group">
                <label for="reservation_slip">Reservation Slip:</label>
                <input type="file" name="reservation_slip" accept=".pdf,.docx">
            </div>
            <div class="form-group">
                <label for="goods_services_inspection">Goods/Services Inspection:</label>
                <input type="file" name="goods_services_inspection" accept=".pdf,.docx">
            </div>
            <div class="form-group">
                <label for="statement_of_projected_net">Statement of Projected Net:</label>
                <input type="file" name="statement_of_projected_net" accept=".pdf,.docx">
            </div>
            <button type="submit">Upload</button>
        </form>
    </div>-->

<!-- migrations documents
    < ?php
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
-->