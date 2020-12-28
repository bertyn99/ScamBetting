<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jeu extends Model
{
    use HasFactory;

    protected $table = 'jeu';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom_jeu'
    ];
    public function equipes()
    {
        return $this->HasMany(Equipe::class);
    }
    public function paris()
    {
        return $this->HasMany(Paris::class);
    }
}
