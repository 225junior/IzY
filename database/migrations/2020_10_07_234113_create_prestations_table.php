<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		// creation de Domaines table
		Schema::create('domaines', function (Blueprint $table) {
            $table->increments('id');
            $table->string('libelle');
            $table->boolean('active')->default(false);
            $table->timestamps();
		});



        Schema::create('services', function (Blueprint $table) {
	        $table->increments('id');
			$table->string('libelle');
			$table->unsignedInteger('domaine_id');
			$table->foreign('domaine_id')->references('id')->on('domaines')->onDelete('cascade')->onUpdate('cascade');
			$table->boolean('active')->default(false);
            $table->timestamps();
		});



		Schema::create('tarifications', function (Blueprint $table) {
	        $table->increments('id');
			$table->double('montant', 5, 2);
            $table->timestamps();
			$table->boolean('active')->default(false);
		});



		Schema::create('ligne_tarifs', function (Blueprint $table) {
	        $table->increments('id');
			$table->string('libelle');
			$table->unsignedInteger('tarification_id');
            $table->foreign('tarification_id')->references('id')->on('tarifications')->onDelete('cascade')->onUpdate('cascade');
			$table->unsignedInteger('service_id');
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade')->onUpdate('cascade');
			$table->boolean('active')->default(false);
            $table->timestamps();
		});

		//creation de type_cards
		Schema::create('type_cards',function(Blueprint $table){
			$table->increments('id');
			$table->string('libelle');
			$table->boolean('active')->default(false);
			$table->timestamps();
		});

		// creation de Prestataires table
		Schema::create('prestataires', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('prenoms');
			$table->string('tel');
			$table->date('date_naiss');
			$table->unsignedInteger('quartier_id');
			$table->foreign('quartier_id')->references('id')->on('quartiers')->onDelete('cascade')->onUpdate('cascade');
			$table->unsignedInteger('type_card_id');
			$table->foreign('type_card_id')->references('id')->on('type_cards')->onDelete('cascade')->onUpdate('cascade');
            $table->boolean('active')->default(false);
            $table->timestamps();
        });

        // creation de la table abonnements
        Schema::create('abonnements', function (Blueprint $table) {
            $table->increments('id');
			$table->string('libelle');
			$table->dateTime('date_debut', 0);
			$table->dateTime('date_fin', 0);
            $table->unsignedInteger('prestataire_id');
            $table->foreign('prestataire_id')->references('id')->on('prestataires')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('ligne_tarif_id');
            $table->foreign('ligne_tarif_id')->references('id')->on('ligne_tarifs')->onDelete('cascade')->onUpdate('cascade');
            $table->boolean('active')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('domaines');
        Schema::dropIfExists('services');
        Schema::dropIfExists('tarifications');
        Schema::dropIfExists('ligne_tarifs');
        Schema::dropIfExists('prestataires');
        Schema::dropIfExists('abonnements');
        Schema::dropIfExists('type_cards');
    }
}
