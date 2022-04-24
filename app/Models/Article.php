<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    /**
     * Relation belong to a category
    */

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
