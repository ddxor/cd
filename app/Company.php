<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    protected $table = 'companies';

    /**
     * Define the 1:M relationship between Company and Employee(s)
     *
     * @return HasMany
     */
    public function employees() : HasMany
    {
        return $this->hasMany(Employee::class);
    }
}
