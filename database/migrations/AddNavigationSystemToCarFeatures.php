<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNavigationSystemToCarFeatures extends Migration
{
    public function up(): void
    {
        Schema::table('car_features', function (Blueprint $table) {
            $table->boolean('navigation_system')->default(false)->after('bluetooth_connectivity');
        });
    }

    public function down(): void
    {
        Schema::table('car_features', function (Blueprint $table) {
            $table->dropColumn('navigation_system');
        });
    }
}
