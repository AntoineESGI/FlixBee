<?php
/**
 * Created by PhpStorm.
 * User: antoinem
 * Date: 21/02/2019
 * Time: 12:39
 */

namespace App;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model implements Authenticatable
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    use BasicAuthenticatable;

    protected $fillable = [
        'name',
        'firstname',
        'address',
        'country',
        'email',
        'phoneNumber',
        'password',
        'company_companyCode'
    ];

    public $timestamps = false;

}