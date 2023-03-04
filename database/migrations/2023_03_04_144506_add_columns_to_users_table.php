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
            $table->string('roles')->after('profile_photo_path')->default('USER');
            $table->text('address')->after('roles')->nullable();
            $table->string('houseNumber')->after('address')->nullable();
            $table->string('phoneNumber')->after('houseNumber')->nullable();
            $table->string('city')->after('phoneNumber')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('roles');
            $table->dropColumn('address');
            $table->dropColumn('houseNumber');
            $table->dropColumn('phoneNumber');
            $table->dropColumn('city');
        });
    }
};
