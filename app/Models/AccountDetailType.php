<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static insert(array[] $types)
 */
class AccountDetailType extends Model
{
    protected $fillable = ['name','description','account_id'];
}
