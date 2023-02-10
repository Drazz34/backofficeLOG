<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $table = "tags";
    protected $primaryKey = "id";
    protected $fillable = array("nom");
    public $timestamps = false;

    public function jeux() 
    {
        return $this->belongsToMany(Jeu::class, 'pivot_tags'); // pivot_tags = nom de la table
    }
}
