<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;

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
     * @return mixed
     */
    public function getLogoURLAttribute()
    {
        if (Storage::disk('public')->exists($this->logo_path)) {
            return Storage::disk('public')->url($this->logo_path);
        }

        return null;
    }

    /**
     * Delete the associated company logo when deleting this entity.
     *
     * @return void
     */
    protected static function boot() : void
    {
        parent::boot();

        static::deleting(function(Company $company) {
            if (Storage::disk('public')->exists($company->logo_path)) {
                Storage::disk('public')->delete($company->logo_path);
            }
        });
    }
}
