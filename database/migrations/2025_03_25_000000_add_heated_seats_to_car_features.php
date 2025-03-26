<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('car_features', function (Blueprint $table) {
            $table->boolean('heated_seats')->default(false)->after('navigation_system');
        });
    }

    public function down(): void
    {
        Schema::table('car_features', function (Blueprint $table) {
            $table->dropColumn('heated_seats');
        });
    }
};
