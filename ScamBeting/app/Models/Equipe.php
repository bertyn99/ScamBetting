<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    use HasFactory;

    protected $table = 'equipes';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom_equipe',
        'id_jeu'
    ];
    public function jeu()
    {
        return $this->belongsTo(Jeu::class, 'id_jeu');
    }
    public function paris()
    {
        return $this->HasMany(Paris::class, 'paris_equipe')->withPivot('cote');
    }
}
