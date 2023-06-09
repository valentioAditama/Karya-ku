<?php

namespace App\Models;

use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ThumbnailContent extends Model
{
    use HasFactory, UuidTrait;

    public $incrementing = false;
    protected $keyType = 'string';

    protected $table = 'thumbnail_content';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_content',
        'path'
    ];

    // Content
    public function content(): BelongsTo
    {
        return $this->belongsTo(Content::class);
    }
}
