<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('car_features', function (Blueprint $table) {
            $table->boolean('backup_camera')->default(false)->after('heated_seats');
        });
    }

    public function down(): void
    {
        Schema::table('car_features', function (Blueprint $table) {
            $table->dropColumn('backup_camera');
        });
    }
};
