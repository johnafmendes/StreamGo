<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Author;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'message'
    ];

    public function author(){
        return $this->belongsTo(Author::class);
    }
}
