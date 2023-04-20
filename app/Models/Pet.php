<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Pet extends Model
{
    use HasFactory;

    /**
     * Get the user that owns the Pet
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * The types that belong to the Pet
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function types(): BelongsToMany
    {
        return $this->belongsToMany(PetType::class, 'pet_pet_type_table', 'pet_id', 'pet_type_id');
    }
}
