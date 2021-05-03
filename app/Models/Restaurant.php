<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Restaurant extends Model
{
    use HasFactory;

    // protected $table = 'restaurants';

    // public $primaryKey = 'id';

    // public $timestamps = true;
    
    
    public function menus()
    {
        return $this->hasMany(Menu::class);
    }

    public function foods()
    {
        return $this->hasManyThrough(Food::class, Menu::class);
    }
    
}