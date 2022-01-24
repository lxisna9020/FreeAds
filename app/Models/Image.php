<?php

namespace App\Models;
use App\Models\Ad;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable = ["image", "type", "ad_id"];
    public function ad() {
        return $this->belongsTo(Ad::class);
    }
}

