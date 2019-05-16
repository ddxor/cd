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

    /**
     * Get the public facing URL of the asset; in this case a logo.
     *
     * @return string
     */
    public function getLogoURLAttribute() : string
    {
        return url(env('PUBLIC_UPLOAD_DIR_EXTERNAL_PATH') . $this->logo_path);
    }
}
