<?php

namespace App\Models;
use App\Models\Image;
use App\Models\Type;
use App\Models\Comment;
use App\Models\Category;
use App\Models\Ageanimal;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ad extends Model
{
    use HasFactory;

    protected $fillable = ["name", "type", "ageanimal", "taille", "sexe", "region", "description", "price", "user_id"];
    
    public function image() {
        return $this->hasOne(Image::class); 
    }
    
    public function User(){
        return $this->belongsTo(User::class);
    }

    /*
    public function comments(){
        return $this->hasMany(Comment::class); 
    }
    public function category(){
        return $this->belongsToMany(Category::class); 
    }
    public function type(){
        return $this->hasOne(Type::class); 
    }
    public function ageanimal(){
        return $this->hasOne(Ageanimal::class); 
    }
    public function taille(){
        return $this->hasOne(Taille::class); 
    }
    public function sexe(){
        return $this->hasOne(Sexe::class); 
    }
    */
}
