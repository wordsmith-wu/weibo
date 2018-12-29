<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
<<<<<<< HEAD
    use HandlesAuthorization;

    public function update(User $currentUser, User $user)
    {
        return $currentUser->id === $user->id;
    }
=======
  use HandlesAuthorization;

  public function update(User $currentUser, User $user)
  {
    return $currentUser->id === $user->id;
  }

  public function destroy(User $currentUser, User $user)
  {
  	return $currentUser->is_admin && $currentUser->id !== $user->id;
  }
>>>>>>> user-crud
}
