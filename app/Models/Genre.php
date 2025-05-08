<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nama_genre'];
    public $timestamp   = true;

    //relasi
    public function book()
    {
        return $this->hasMany(Book::class);
    }
}
