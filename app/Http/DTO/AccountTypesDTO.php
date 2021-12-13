<?php

namespace App\Http\DTO;
use Illuminate\Http\Request;
use Spatie\DataTransferObject\DataTransferObject;
use Spatie\DataTransferObject\Exceptions\UnknownProperties;


class AccountTypesDTO extends DataTransferObject
{

    public function __construct(public $name)
    {

    }
}
