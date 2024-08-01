<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class DepartmentsFilter extends ApiFilter{
    protected $safeParams = [
        'name' => ['lk']
    ];

    protected $columnMap = [];

    protected $operatorMap = [
        'lk' => 'like'
    ];
}