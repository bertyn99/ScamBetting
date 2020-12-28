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
        'id_equipe_1',
        'id_equipe_2',
        'cote_1',
        'cote_2'
    ];
    public function jeu()
    {
        return $this->belongsTo(Jeu::class, 'id_jeu');
    }
    public function equipe()
    {
        return $this->belongsTo(Equipe::class, 'id_equipe');
    }
}
