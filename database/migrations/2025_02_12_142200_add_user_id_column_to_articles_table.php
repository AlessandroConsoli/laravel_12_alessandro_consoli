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
        Schema::table('articles', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->default(1)->after('img');  
                                        //! Nome della colonna sempre in singolare
    //! Per evitare errori con i record precedenti aggiungere ->nullable oopure ->default(1)

            $table->foreign('user_id')->references('id')->on('users'); //*Creo un "vincolo referenziale tra la tabella articles e la tabella users"
            //? documentazione e formula disponibile sul sito laravel alla voce "foreign key constraints"
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->dropForeign(['user_id']); //* Elimino il vincolo referenziale 
                             //! attenzione ad inserire il valore dentro un array
            $table->dropColumn('user_id');    //* Elimino la colonna dalla tabella articles
        });
    }
};
