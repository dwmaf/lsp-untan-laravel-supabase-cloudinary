<?php

namespace App\Policies;

use App\Models\User;
use App\Models\penerima_sertif;
use Illuminate\Auth\Access\Response;

class PenerimaSertifPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, penerima_sertif $penerimaSertif): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, penerima_sertif $penerimaSertif): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, penerima_sertif $penerimaSertif): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, penerima_sertif $penerimaSertif): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, penerima_sertif $penerimaSertif): bool
    {
        //
    }
}
