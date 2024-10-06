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
            $table->string('user_name')->nullable()->unique()->after('id');
            $table->string('first_name')->after('user_name');
            $table->string('last_name')->after('first_name');
            $table->string('phone_number')->nullable()->after('last_name');
            $table->bigInteger('avatar')->unsigned()->nullable()->after('phone_number');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('first_name');
            $table->dropColumn('last_name');
            $table->dropColumn('phone_number');
            $table->dropColumn('user_name');
            $table->dropColumn('avatar');
        });
    }
};
