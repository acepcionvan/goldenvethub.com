<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('appointment_requests', function (Blueprint $table) {
            if (! Schema::hasColumn('appointment_requests', 'preferred_time')) {
                $table->string('preferred_time')->after('preferred_date');
            }

            if (Schema::hasColumn('appointment_requests', 'preferred_location')) {
                $table->dropColumn('preferred_location');
            }
        });
    }

    public function down(): void
    {
        Schema::table('appointment_requests', function (Blueprint $table) {
            if (! Schema::hasColumn('appointment_requests', 'preferred_location')) {
                $table->string('preferred_location')->after('preferred_date');
            }

            if (Schema::hasColumn('appointment_requests', 'preferred_time')) {
                $table->dropColumn('preferred_time');
            }
        });
    }
};
