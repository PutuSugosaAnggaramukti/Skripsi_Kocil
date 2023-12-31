<?php

namespace App\Livewire;
use App\Models\Ibadah;
use Illuminate\Http\Request;
use App\Models\DataSurats;
use Livewire\Component;
use Carbon\Carbon;
use Livewire\WithFileUploads; 

class DataSurat extends Component
{
    use WithFileUploads;
    public $surat;
    public $suratId;
    public $activeButton = null;
    public $uploadSuratpage = false;
    public $namaKK;
    public $no_wa;
    public $alamat;
    public $pendeta;
    public $pendetaId;
    public $userId;
    public $tanggal;
    public $filesurat;
    public $jam;
    public $lingkungan;

    public function toggleButton($button)
    {
        $this->activeButton = $button;
        if ($button === 'terbaru') {
            return redirect(request()->header('Referer'));
        } elseif ($button === 'diterima') {
            $this->surat = Ibadah::where('status', 1)->get();
        } elseif($button == 'ditolak'){
            $this->surat = Ibadah::where('status', 2)->get();
        } elseif($button == 'diupload'){
            $this->surat = Ibadah::where('status', 2)->get();
        }
    }

    public function mount(){
        $this->surat = Ibadah::whereIn('status', [0, 1])->get();
    }

    public function render()
    {
        return view('livewire.data-surat');
    }

    public function terimaProses($suratId){
        Ibadah::where('id',$suratId)
        ->update(['status'=>1]);
        $this->mount();
    }

    public function tolakProses($suratId){
        Ibadah::where('id',$suratId)
        ->update(['status'=>2]);
        $this->mount();
    }

    public function back(){
        $this->uploadSuratpage = !$this->uploadSuratpage;
        $this->mount();
    }

    public function uploadSurat($suratId){
        $surat = Ibadah::find($suratId);
        $this->suratId = $surat->id;
        $this->alamat = $surat->alamat;
        $this->namaKK = $surat->nama_kk;
        $this->lingkungan = $surat->lingkungan;
        $this->jam = $surat->jam;
        $this->pendeta = $surat->pendeta;
        $this->pendetaId = $surat->pendeta_id;
        $this->userId = $surat->user_id;
        $this->no_wa = $surat->no_wa;
        $this->tanggal = Carbon::parse($surat->tanggal)->format('d/m/Y');
        $this->uploadSuratpage = !$this->uploadSuratpage;
    }

    public function uploadSuratproses(){
        $filename = "surat_ibadah_{$this->namaKK}_{$this->suratId}_{$this->jam}.pdf";
        $this->filesurat->storeAs('assets/surat', $filename);
        DataSurats::create([
            'ibadah_id' => $this->suratId,
            'pendeta_id' => $this->pendetaId,
            'user_id'=>$this->userId,
            'surat_link'=>$filename
        ]);
        
        Ibadah::where('id',$this->suratId)
        ->update(['status'=>2]);
        $this->uploadSuratpage = !$this->uploadSuratpage;
        session()->flash('berhasilUpload', 'Surat ibadah berhasil diupload');
        $this->toggleButton('diupload');
    }
}
