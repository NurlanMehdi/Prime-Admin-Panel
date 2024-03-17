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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('job_id')->unique();
            $table->string('invoice_number');
            $table->text('description');
            $table->json('customer');
            $table->json('address');
            $table->json('notes');
            $table->string('work_status');
            $table->json('work_timestamps');
            $table->json('schedule');
            $table->decimal('total_amount', 10, 2)->default(0);
            $table->decimal('outstanding_balance', 10, 2)->default(0);
            $table->json('assigned_employees');
            $table->json('tags');
            $table->string('original_estimate_id')->nullable();
            $table->string('lead_source')->nullable();
            $table->json('job_fields');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('company_name');
            $table->string('company_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
};
