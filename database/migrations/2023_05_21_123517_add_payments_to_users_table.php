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
        Schema::table('users', function (Blueprint $table) {
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('personal_code')->nullable();
            $table->string('phone')->nullable();
            $table->string('company')->nullable();
            $table->string('payer_name')->nullable();
            $table->string('payer_address')->nullable();
            $table->string('manager_first')->nullable();
            $table->string('manager_last')->nullable();
            $table->string('manager_phone')->nullable();
            $table->string('manager_mail')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
