<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menuType extends Model
{
    use HasFactory;
    protected $table = "menuType";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','type'];

    public function menu() {
        return $this->hasMany(menu::class);
    }
}
