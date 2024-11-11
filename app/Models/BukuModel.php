<?php
namespace App\Models;
use CodeIgniter\Model;
class BukuModel extends Model
{
protected $table = 'buku';
protected $primaryKey = 'kdbuku';
protected $useAutoIncrement = false;
protected $returnType = 'object';
protected $allowedFields = ['kdbuku', 'judul', 'penulis', 'penerbit', 'tahun', 'halaman',
'kata', 'isbn'];
}