<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class Profile extends Component
{
    public $name, $email, $nohp, $alamat;

    public function mount(){
        if(!Auth::user()){
            return redirect()->route('login');
        }

        $this->nohp = Auth::user()->nohp;
        $this->alamat = Auth::user()->alamat;
        $this->name = Auth::user()->name;
        $this->email = Auth::user()->email;
    }

    public function updateProfile(){
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        $user = User::where('id', Auth::user()->id)->first();
        $user->name = $this->name;
        $user->email = $this->email;
        $user->nohp = $this->nohp;
        $user->alamat = $this->alamat;
        $user->update();

        $this->emit('masukkanKeranjang');

        session()->flash('message', 'Profile berhasil diupdate!');

        return redirect()->route('profile');
    }

    public function deleteProfile(){
        $user = User::where('id', Auth::user()->id)->first();
        $user->delete();

        $this->emit('masukkanKeranjang');

        return redirect()->route('login');
    }

    public function render()
    {
        return view('livewire.profile', [
            'user' => Auth::user()
        ]);
    }
}
