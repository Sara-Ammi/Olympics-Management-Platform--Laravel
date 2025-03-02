<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('lieus', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nom');
            $table->integer('capacite');
        });

        DB::table('lieus')->insert([
            ['nom' => 'Stade de france, 93200','capacite' => '3'],
            ['nom' => 'Picine olympique, 93200','cpacite' => '2500'],
            ['nom' => 'Stade Roland-Garros, 75016','cpacite' => '10000'],
        ]);
        
    }
    
    public function down(): void
    {
        Schema::dropIfExists('lieus');
    }
};
