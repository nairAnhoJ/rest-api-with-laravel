<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class TicketsFilter extends ApiFilter{
    protected $safeParams = [
        'number' => ['lk'],
        'userId' => ['eq'],
        'subject' => ['lk'],
        'status' => ['eq'],
    ];

    protected $columnMap = [
        'userId' => 'user_id',
    ];

    protected $operatorMap = [
        'lk' => 'like',
        'eq' => '='
    ];
}