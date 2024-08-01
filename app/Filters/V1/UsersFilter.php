<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class UsersFilter extends ApiFilter{
    protected $safeParams = [
        'name' => ['lk'],
        'email' => ['lk'],
        'departmentId' => ['eq'],
        'siteId' => ['eq'],
    ];

    protected $columnMap = [
        'departmentId' => 'department_id',
        'siteId' => 'site_id',
    ];

    protected $operatorMap = [
        'lk' => 'like',
        'eq' => '='
    ];
}