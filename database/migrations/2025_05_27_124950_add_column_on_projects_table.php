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
        Schema::table('projects', function (Blueprint $table) {
            // aggiungo la colonna e la constrain
            $table->foreignId("type_id")->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            // elimino la constrain
            $table->dropforeign("projects_type_id_foreign");
            // elimino la colonna
            $table->dropColumn("type_id");
        });
    }
};
