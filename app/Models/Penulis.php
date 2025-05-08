<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penulis extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nama_penulis', 'jenis_kelamin', 'tanggal_lahir', 'alamat'];
    public $timestamp   = true;
    protected $table    = 'penulis';

    //relasi
    public function book()
    {
        return $this->hasMany(Book::class);
    }
}
