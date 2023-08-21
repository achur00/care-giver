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
        schema::table('services', function(Blueprint $table){
            $table->renameColumn('url','image');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $table->renameColumn('image','url');
    }
};
