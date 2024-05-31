<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable=[
        'nom',
        'description',
        'type',
        'image',
    ];
    public function commentaires(){
    return $this->HasFactory(Commentaire::class,'id_article');
    }
}

