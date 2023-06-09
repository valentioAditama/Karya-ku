<?php

namespace App\Models;

use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory, UuidTrait;

    public $incrementing = false;
    protected $keyType = 'string';

    protected $table = 'content';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_user',
        'title',
        'sub_title',
        'category',
        'description',
        'status'
    ];

    // relation table
    public function thumbnail()
    {
        return $this->hasOne(ThumbnailContent::class);
    }

    public function image()
    {
        return $this->hasOne(ImageContent::class);
    }

    public function video()
    {
        return $this->hasOne(VideoContent::class);
    }
}
