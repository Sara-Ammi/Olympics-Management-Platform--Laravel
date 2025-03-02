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
        Schema::create('competitions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('sport_id')->nullable()->constrained();
            $table->foreignId('lieu_id')->nullable()->constrained();
            $table->date('jour');
            $table->string('heure_debut');
            $table->string('heure_fin');
            $table->string('prix');
        });

        DB::table('competitions')->insert([
            ['sport_id' => 1 ,'lieu_id' => 1,'jour' => '29-07-2024','heure_debut' => '12:00' ,'heure_fin' => '14:00','prix' => '45'],
            ['sport_id' => 1 ,'lieu_id' => 3,'jour' => '10-08-2024','heure_debut' => '10:00' ,'heure_fin' => '12:00','prix' => '50'],
            ['sport_id' => 1 ,'lieu_id' => 3,'jour' => '11-08-2024','heure_debut' => '14:00' ,'heure_fin' => '16:00','prix' => '60'],

            ['sport_id' => 2 ,'lieu_id' => 2,'jour' => '30-07-2024','heure_debut' => '10:00' ,'heure_fin' => '12:00','prix' => '80'],
            ['sport_id' => 2 ,'lieu_id' => 2,'jour' => '01-08-2024','heure_debut' => '12:00' ,'heure_fin' => '14:00','prix' => '90'],
            ['sport_id' => 2 ,'lieu_id' => 2,'jour' => '09-08-2024','heure_debut' => '14:00' ,'heure_fin' => '16:00','prix' => '95'],

            ['sport_id' => 3 ,'lieu_id' => 3,'jour' => '25-07-2024','heure_debut' => '15:00' ,'heure_fin' => '17:00','prix' => '50'],
            ['sport_id' => 3 ,'lieu_id' => 1,'jour' => '02-08-2024','heure_debut' => '09:00' ,'heure_fin' => '11:00','prix' => '65'],
            ['sport_id' => 3 ,'lieu_id' => 1,'jour' => '10-08-2024','heure_debut' => '13:00' ,'heure_fin' => '15:00','prix' => '100'],
        ]);
        
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('competitions');
    }
};
