<?php


namespace App\Models;

/**
* Class Product
 * @package App\Models
*
 * @property int $id
* @property string $name
* @property string $description
 * @property $price
* @property boolean $in_stock
*/

class Product
{
    protected $fillable = [
        'имя',
        'описание',
        'цена',
        'в_наличии'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

}
