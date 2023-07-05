<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Gate;
use RealRashid\SweetAlert\Facades\Alert;

class UpdateUser extends Component
{
    public $name;
    public $email;
    public $role;
    public $userId;

    protected $listeners = [
        'getUser' => 'showUser'
    ];

    public function render()
    {
        return view('users.update');
    }

    public function showUser($user)
    {
        $this->userId = $user['id'];
        $this->name = $user['name'];
        $this->email = $user['email'];
        $this->role = $user['role'];
    }

    public function updateRole()
    {
        if (!Gate::allows('user_update')) {
            abort(404);
        }

        $user = User::find($this->userId);

        if ($user->getRoleNames()->first() !== 'SuperAdmin') {
            $user->syncRoles($this->role);
            Alert::toast('Role berhasil diubah', 'success');
        } else {
            Alert::toast('Role SuperAdmin tidak dapat diubah', 'error');
        }

        return redirect()->route('user.index');
    }

    public function resetInput()
    {
        $this->name = null;
        $this->email = null;
        $this->role = null;
    }
}
