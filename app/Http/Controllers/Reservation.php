<?php
/**
 * Created by PhpStorm.
 * User: mathi
 * Date: 24/02/2019
 * Time: 21:20
 */

namespace App;


class Reservation
{
    protected $fillable = [
        'arrival',
        'startDate',
        'adresse'
    ];

    public $timestamps = false;
}