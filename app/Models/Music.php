<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    use HasFactory;
    protected $fillable = [
        "title","penyanyi","publication_date", "durasi", "category_id"
    ];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }
}
