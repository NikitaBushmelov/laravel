<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $DNI
 * @property string $nom
 * @property int $telefon
 * @property string $correu
 * @property Prestec[] $prestecs
 */
class usuari extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'usuari';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'DNI';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['nom', 'telefon', 'correu'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function prestecs()
    {
        return $this->hasMany('App\Prestec', 'DNI', 'DNI');
    }
    use HasFactory;
    public $timestamps = false;
}
