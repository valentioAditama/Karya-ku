<?php

namespace App\Models;

use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ContentCommunity extends Model
{
    use HasFactory, UuidTrait;

    public $incrementing = false;
    protected $keyType = 'string';

    protected $table = 'content_community';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_user',
        'id_community',
        'description',
        'status'
    ];

    public function comments()
    {
        return $this->hasMany(CommentContentCommunity::class, 'id_content_community');
    }

    public function users(): HasMany
    {
        return $this->hasMany(User::class, 'id');
    }
}
