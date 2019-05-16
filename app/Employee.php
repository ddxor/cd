<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employee extends Model
{
    protected $table = 'employees';

    /**
     * Define the M:1 relationship between an employee and a company.
     *
     * @return BelongsTo
     */
    public function company() : BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}
