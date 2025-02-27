<?php

namespace App\Models;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'body',
        'img',
        'user_id'
    ];

    //? Definisco la Many to Many in Article
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    //*Get the user that owns the article.
    public function user()
    {
        return $this->belongsTo(User::class); //* Questo metodo ci restituisce l'utente collegato all' articolo
    }
}
