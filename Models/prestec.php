<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $codi
 * @property string $ISBN
 * @property string $DNI
 * @property string $data_prestec
 * @property string $data_retorn
 * @property boolean $retornat
 * @property Usuari $usuari
 * @property Llibre $llibre
 */
class prestec extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'prestec';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'codi';

    /**
     * @var array
     */
    protected $fillable = ['ISBN', 'DNI', 'data_prestec', 'data_retorn', 'retornat'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function usuari()
    {
        return $this->belongsTo('App\Usuari', 'DNI', 'DNI');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function llibre()
    {
        return $this->belongsTo('App\Llibre', 'ISBN', 'isbn');
    }
    use HasFactory;
    public $timestamps = false;
}
