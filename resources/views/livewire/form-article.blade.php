<div>
    <form wire:submit.prevent="simpan">
        <div class="form-group">
            <label>
                Judul
            </label>
                <input wire:model="judul" type="text" name="" class="form-control" placeholder="Masukan Judul">
        </div>
        <div class="form-group">
            <label>
                Deskripsi
            </label>
            <textarea wire:model="deskripsi" name="" id="" class="form-control" cols="30" rows="10" placeholder="Masukan Deskripsi"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-info">
                Submit
            </button>
        </div>
    </form>
</div>
