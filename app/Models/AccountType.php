<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static insert(array $types)
 */
class AccountType extends Model
{
    protected $fillable= ['name'];
}
