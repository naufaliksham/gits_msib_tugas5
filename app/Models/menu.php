<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    use HasFactory;
    protected $table = "menu";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','name','typeId','description'];

    public function menutype() {
        return $this->belongsTo(menuType::class);
    }
}
