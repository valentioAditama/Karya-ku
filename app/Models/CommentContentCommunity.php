<?php

namespace App\Models;

use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentContentCommunity extends Model
{
    use HasFactory, UuidTrait;

    public $incrementing = false;
    protected $keyType = 'string';

    protected $table = 'comment_content_community';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_content_community',
        'id_user',
        'comment',
        'status'
    ];

    public function content()
    {
        return $this->belongsTo(ContentCommunity::class, 'id_community');
    }
}
