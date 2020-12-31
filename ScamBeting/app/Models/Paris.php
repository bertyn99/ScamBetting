<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paris extends Model
{
    use HasFactory;
    protected $table = 'paris';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_jeu',
        'endbet'
    ];
    public function jeu()
    {
        return $this->belongsTo(Jeu::class, 'id_jeu');
    }
    public function equipes()
    {
        return $this->belongsToMany(Equipe::class, 'paris_equipe')->withPivot('cote');
    }
}
