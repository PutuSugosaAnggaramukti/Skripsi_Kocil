<div>
<div class="row">
        <div class="col-md-12">
        @if (session()->has('berhasilBuat'))
        <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show" class="mt-5">
        <div class="alert alert-success">
        {{ session('berhasilBuat') }}
        </div>
        </div>
        @endif
</div>
</div>
@if($registerForm)
<div>
<livewire:jadwal-ibadah/>
<a href="" wire:click.prevent="back" class="text-decoration-underline">Daftar ibadah syukur</a>
</div>
@else
<div class="mb-5">
<form>
    <h3 class="text-center mb-5">INPUT JADWAL IBADAH</h3>
  <div class="mb-4">
  <label class="form-label" >Nama Kepala Keluarga</label>
    <input type="text" wire:model="name"  class="form-control" />
  </div>

  <div class="mb-4">
  <label class="form-label">Hari/Tanggal</label>
    <input type="date" id="tanggal" wire:model="tanggal" class="form-control" />
  </div>
 
  <div class="mb-4">
  <label class="form-label">Keterangan</label>
    <input type="text" id="tanggal" wire:model="name" class="form-control" />
  </div>

</div>




  <button type="submit" wire:click.prevent="kirim"  class="btn btn-primary btn-block mb-4 rounded-9">Kirim</button>
</form>
<a href="" wire:click.prevent="register" class="text-decoration-underline">Lihat jadwal ibadah syukur</a>
</div>
@endif
</div>
