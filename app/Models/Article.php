<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['name','body','user_id', 'photo'];

public function user()
    {
        return $this->belongsTo(User::class);
    }
public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
public function scopeRechercher($query)
    {
        $q = request('q');

        $query->where('name', 'like', "%$q%")
        ->OrWhere('body', 'like', "%$q%");
    }
public function getPublicationAttribute()
    {
        return $this->created_at->diffForHumans();
    }    

public function getNameMarkedAttribute()
    {
        $q=request('q');

        return str_replace($q,"<mark>".$q."</mark>",$this->name);
    }
}
