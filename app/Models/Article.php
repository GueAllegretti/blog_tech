<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'user_id',
    ];
    
    //relaziono gli oggetti di classe article con gli oggetti di classe user
    public function user(){
        return $this->belongsTo(User::class);
    }
}
