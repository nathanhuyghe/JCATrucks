<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Truck extends Model
{
    use HasFactory;

    protected $fillable = [
        'typeVoertuig',
        'opbouwSoort',
        'merk',
        'type',
        'prijs',
        'bouwjaar',
        'eersteRegistratie',
        'kilometerstand',
        'cabine',
        'vermogen',
        'emissienorm',
        'motortype',
        'versnellingsbak',
        'aantalVersnellingen',
        'trekvermogen',
        'chasishoogte',
        'tachograaf',
        'wielbasis',
        'achteras',
        'leeggewicht',
        'laadvermogen',
        'totaalgewicht',
        'voorasRemmen',
        'voorasVering',
        'maxAslast',
        'achterasRemmen',
        'achterasVering',
        'materiaalOpbouw',
        'opbouwMerk',
        'lengte',
        'breedte',
        'hoogte',
        'opbouwBouwjaar',
        'wanddikte',
        'laadklepType',
        'laadklepCapaciteit',
        'laadklepMerk',
        'laadklepBouwjaar',
        'materiaalVloer',
        'doorlaadhoogte',
        'opties'
    ];

    public function users(){
        return $this->belongsToMany(User::class);
    }
}
