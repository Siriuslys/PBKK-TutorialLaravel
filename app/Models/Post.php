<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model{

    use HasFactory;

    protected $fillable = ['title', 'author', 'strapline', 'slug','body'];

    public function author(): BelongsTo{

        return $this->belongsTo(User::class);
    
    }

    public function category(): BelongsTo{

        return $this->belongsTo(Category::class);
    
    }
}

?>