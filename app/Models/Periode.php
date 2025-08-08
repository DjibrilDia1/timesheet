<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Periode extends Model
{
    protected $table = "";

    protected $fillable = [
        'date_debut',
        'date_fin',
        'employe_id',
    ];

    public static function  genererNouvellePeriode($dateDebut, $dateFin, $employeId)
    {
        return self::create([
            'date_debut' => $dateDebut,
            'date_fin' => $dateFin,
            'employe_id' => $employeId,
        ]);
    }

    public function employe()
    {
        return $this->belongsTo(User::class, 'employe_id');
    }   
    
}
