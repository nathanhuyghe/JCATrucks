<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrucksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trucks', function (Blueprint $table) {
            $table->id();
            $table->enum('typeVoertuig', ['Vrachtwagen', 'Bestelwagen'])->nullable();
            $table->string('opbouwSoort')->nullable();
            $table->string('merk')->nullable();
            $table->string('type')->nullable();
            $table->double('prijs', 8, 2)->nullable();
            $table->integer('bouwjaar')->nullable();
            $table->date('eersteRegistratie')->nullable();
            $table->integer('kilometerstand')->nullable();
            $table->string('cabine')->nullable();
            $table->integer('vermogen')->nullable();
            $table->integer('emissienorm')->nullable();
            $table->string('motortype')->nullable();
            $table->string('versnellingsbak')->nullable();
            $table->string('aantalVersnellingen')->nullable();
            $table->integer('trekvermogen')->nullable();
            $table->integer('chasishoogte')->nullable();
            $table->string('tachograaf')->nullable();
            $table->integer('wielbasis')->nullable();
            $table->integer('achteras')->nullable();
            $table->integer('leeggewicht')->nullable();
            $table->integer('laadvermogen')->nullable();
            $table->integer('totaalgewicht')->nullable();
            $table->string('voorasRemmen')->nullable();
            $table->string('voorasVering')->nullable();
            $table->integer('maxAslast')->nullable();
            $table->string('achterasRemmen')->nullable();
            $table->string('achterasVering')->nullable();
            $table->string('materiaalOpbouw')->nullable();
            $table->string('opbouwMerk')->nullable();
            $table->integer('lengte')->nullable();
            $table->integer('breedte')->nullable();
            $table->integer('hoogte')->nullable();
            $table->date('opbouwBouwjaar')->nullable();
            $table->integer('wanddikte')->nullable();
            $table->string('laadklepType')->nullable();
            $table->string('laadklepCapaciteit')->nullable();
            $table->string('laadklepMerk')->nullable();
            $table->date('laadklepBouwjaar')->nullable();
            $table->string('materiaalVloer')->nullable();
            $table->integer('doorlaadhoogte')->nullable();
            $table->string('opties')->nullable();
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
        Schema::dropIfExists('trucks');
    }
}
