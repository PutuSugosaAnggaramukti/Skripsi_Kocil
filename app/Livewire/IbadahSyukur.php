<?php

namespace App\Livewire;
use Carbon\Carbon;
use Livewire\Component;
use App\Models\ibadah;
use App\Models\User;


class IbadahSyukur extends Component
{
    // public $users, $email, $passwordField, $name,$password;
    public $registerForm = false;
    public $jadwal;
    public $pendeta;
    public $pendetaList;
    public $alamat;
    public $jam;
    public $name;
    public $lingkungan;
    public $no_wa;
    public $pilihPendeta = false;
    public $tanggal;


    public function render()
    {
        return view('livewire.ibadah-syukur')
        ->layout('livewire.umat');
    }

    public function register()
    {
        $this->registerForm = !$this->registerForm;
        
    }

    public function back()
    {
        return redirect(request()->header('Referer'));
    }
    private function resetInputFields(){
        $this->name = '';
        $this->pendeta = '';
        $this->pendetaList = '';
        $this->alamat = '';
        $this->lingkungan = '';
        $this->no_wa = '';
        $this->tanggal = '';
        $this->jam = '';
    }

    public function kirim(){
        $pendetas=User::where('id', $this->pendetaList)->first();
        $namaPendeta=$pendetas->name;
        ibadah::create([
            'user_id'=>auth()->user()->id,
            'nama_kk'=>$this->name,
            'alamat'=>$this->alamat,
            'lingkungan'=>$this->lingkungan,
            'no_wa'=>$this->no_wa,
            'pendeta_id'=>$this->pendetaList,
            'pendeta'=>$namaPendeta,
            'tanggal'=>$this->tanggal,
            'jam'=>$this->jam,
            'status'=>false
        ]);
        session()->flash('berhasilBuat', 'Jadwal Ibadah Syukur Berhasil Dibuat');
        return redirect(request()->header('Referer'));
        $this->mount();
        $this->register();
    }

    public function mount(){
        $this->pendeta = User::where('isPendeta', true)->get();
        $this->jadwal = ibadah::where('user_id', auth()->user()->id)->get();
    }
}
