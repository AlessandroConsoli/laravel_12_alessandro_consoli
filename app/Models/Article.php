<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    //*Get the user that owns the article.
    public function user()
    {
        return $this->belongsTo(User::class); //* Questo metodo ci restituisce l'utente collegato all' articolo
    }
}
