<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type'); // Chien     Chat    Volaille-Oiseau      Nac
            $table->string('ageanimal'); // Jeune Adulte
            $table->string('taille'); // Petit Moyen Grand
            $table->string('sexe'); //  Male Femelle
            $table->string('region')->default('NULL'); // liste des regions
            $table->mediumText('description'); 
            $table->double('price');
            $table->boolean('toplist')->default(0);
            $table->foreignId('user_id')->default(1);//->constrained(); //->onDelete('cascade'); //du coup, si on supprime user ID, on supprime ses annonces pour ne pas laisser de reliquats! 
            $table->tinyInteger('status')->default(1); // details: 0 inactive  1 active  2 suspendue
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
        Schema::dropIfExists('ads');
    }
}
