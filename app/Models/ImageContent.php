<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageContent extends Model
{
    use HasFactory, UuidTrait;

    public $incrementing = false;
    protected $keyType = 'string';
}
