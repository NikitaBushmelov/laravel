<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @property string $isbn
 * @property string $titol
 * @property string $categoria
 * @property float $preu
 * @property string $editorial
 * @property string $autor
 * @property Prestec[] $prestecs
 */
class Llibre extends Model
{
    protected $table = 'llibre';
    protected $primaryKey = 'isbn';
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = ['titol', 'categoria', 'preu', 'editorial', 'autor'];
    public function prestecs()
    {
        return $this->hasMany('App\Prestec', 'ISBN', 'isbn');
    }
    use HasFactory;
    public $timestamps = false;
}
