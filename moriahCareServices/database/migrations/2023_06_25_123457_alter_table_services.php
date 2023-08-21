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
       Schema::table('services',function(Blueprint $table){
        $table->string('card_id')->after('url');
        $table->string('card_id2')->after('card_id');
       });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('services',function(Blueprint $table){
        $table->dropColumn('card_id');
       });
    }

   
};
