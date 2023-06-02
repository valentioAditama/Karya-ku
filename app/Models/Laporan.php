<?php

namespace App\Models;

use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory, UuidTrait;

    public $incrementing = false;
    protected $keyType = 'string';

    protected $table = 'laporan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_user',
        'comment'
    ];

    // relation to manny tables 
    // To Users 
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
