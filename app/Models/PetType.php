<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class PetType extends Model
{
    use HasFactory;

    /**
     * The pets that belong to the PetType
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function pets(): BelongsToMany
    {
        return $this->belongsToMany(Pet::class, 'pet_pet_type_table', 'pet_type_id', 'pet_id');
    }
}
