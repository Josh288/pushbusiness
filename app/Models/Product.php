<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @property $id
 * @property $name
 * @property $description
 * @property $price
 * @property $size
 * @property $color
 * @property $avilable
 * @property $ammount
 * @property $photo
 * @property $status
 * @property $id_user
 * @property $id_sector
 * @property $created_at
 * @property $updated_at
 *
 * @property Catalog[] $catalogs
 * @property Lending[] $lendings
 * @property Purchase[] $purchases
 * @property Sale[] $sales
 * @property Sector $sector
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Product extends Model
{

    static $rules = [
		'name' => 'required',
		'description' => 'required',
		'price' => 'required',
        'size'=> 'required',
        'color'=> 'required',
		'avilable' => 'required',
        'ammount' => 'required',
		'status' => 'required',
		'id_user' => 'required',
		'id_sector' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','description','price','size','color','avilable','ammount',
                            'photo','status','id_user','id_sector'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function catalogs()
    {
        return $this->hasMany('App\Models\Catalog', 'id_product', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lendings()
    {
        return $this->hasMany('App\Models\Lending', 'id_product', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function purchases()
    {
        return $this->hasMany('App\Models\Purchase', 'id_product', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sales()
    {
        return $this->hasMany('App\Models\Sale', 'id_product', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sector()
    {
        return $this->hasOne('App\Models\Sector', 'id', 'id_sector');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'id_user');
    }


}
