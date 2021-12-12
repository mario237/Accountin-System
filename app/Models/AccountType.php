<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static insert(array $types)
 * @method static create(array $array)
 * @method static findOrFail(mixed $id)
 * @property mixed $id
 */
class AccountType extends Model
{
    protected $fillable= ['name'];
}
