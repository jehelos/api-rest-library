<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use PharIo\Manifest\Author;

class Book extends Model
{
    protected $fillable = [
        'author_id',
        'genre_id',
        'title',
        'isbn',
        'pages',
        'stock',
    ];
    public function author(): belongsTo
    {
        return $this->belongsTo(Author::class);
    }
    public function genre(): belongsTo{
        return $this->belongsTo(Genre::class);
    }
    public function loans(): hasMany
    {
        return $this->hasMany(Loan::class);
    }
}
