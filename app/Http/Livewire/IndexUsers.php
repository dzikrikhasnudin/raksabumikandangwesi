<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class IndexUsers extends Component
{

    use WithPagination;

    public $name;
    public $email;
    public $role;

    public function render()
    {
        if (!Gate::allows('user_show')) {
            abort(404);
        }

        $users = User::latest()->with('roles')->paginate(5);
        $roles = Role::all();

        return view('users.index', [
            'users' => $users,
            'roles' => $roles
        ]);
    }

    public function editUser($user_id)
    {
        $user = User::find($user_id);
        $user['role'] = $user->getRoleNames()->first();
        $this->emit('getUser', $user);
    }

    public function destroy($id)
    {
        if ($id) {
            $data = User::find($id);
            $data->delete();
        }
    }
}
