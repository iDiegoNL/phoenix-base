<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param \App\Models\User $user
     * @return bool
     */
    public function viewAny(User $user): bool
    {
        return $user->can('manage users');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\User $model
     * @return bool
     */
    public function update(User $user, User $model): bool
    {
        return $user->can('manage users') &&
            $user->roleLevel() >= $model->roleLevel();
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\User $model
     * @return bool
     */
    public function delete(User $user, User $model): bool
    {
        return $user->can('delete users') &&
            $user->roleLevel() >= $model->roleLevel() &&
            $user->id !== $model->id;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\User $model
     * @return bool
     */
    public function restore(User $user, User $model): bool
    {
        return $user->can('delete users') &&
            $user->roleLevel() >= $model->roleLevel();
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\User $model
     * @return bool
     */
    public function forceDelete(User $user, User $model): bool
    {
        return $user->can('delete users') &&
            $user->roleLevel() >= $model->roleLevel() &&
            $user->id !== $model->id;
    }
}
