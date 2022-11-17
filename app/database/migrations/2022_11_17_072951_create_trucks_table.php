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
            $table->enum('typeVoertuig', ['Vrachtwagen', 'Bestelwagen']);
            $table->string('opbouwSoort');
            $table->string('merk');
            $table->string('type');
            $table->double('prijs', 8, 2);
            $table->int('bouwjaar');
            $table->date('eersteRegistratie');
            $table->int('kilometerstand');
            $table->string('cabine');
            $table->int('vermogen');
            $table->int('emissienorm');
            $table->string('motortype');
            $table->string('versnellingsbak');
            $table->string('aantalVersnellingen');
            $table->int('trekvermogen');
            $table->int('chasishoogte');
            $table->string('tachograaf');
            $table->int('wielbasis');
            $table->int('achteras');
            $table->int('leeggewicht');
            $table->int('laadvermogen');
            $table->int('totaalgewicht');
            $table->string('voorasRemmen');
            $table->string('voorasVering');
            $table->int('maxAslast');
            $table->string('achterasRemmen');
            $table->string('achterasVering');
            $table->string('materiaalOpbouw');
            $table->string('opbouwMerk');
            $table->int('lengte');
            $table->int('breedte');
            $table->int('hoogte');
            $table->date('opbouwBouwjaar');
            $table->int('wanddikte');
            $table->string('laadklepType');
            $table->string('laadklepCapaciteit');
            $table->string('laadklepMerk');
            $table->date('laadklepBouwjaar');
            $table->string('materiaalVloer');
            $table->int('doorlaadhoogte');
            $table->string('opties');
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
