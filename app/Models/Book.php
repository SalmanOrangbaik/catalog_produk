<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nama_buku', 'harga', 'stok', 'deskripsi', 'id_penulis', 'id_kategori', 'id_genre', 'foto'];
    public $timestamps  = true;

    public function penulis()
    {
        return $this->belongsTo(Penulis::class, 'id_penulis');
    }
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }
    public function genre()
    {
        return $this->belongsTo(Genre::class, 'id_genre');
    }

    public function deleteImage()
    {
        if ($this->foto && file_exists(public_path('storage/buku' . $this->foto))) {
            return unlink(public_path('storage/buku' . $this->foto));
        }
    }
}
