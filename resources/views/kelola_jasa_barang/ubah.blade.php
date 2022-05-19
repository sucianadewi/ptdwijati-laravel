@extends('../layout.template')
@section('title', 'Mengubah Data Jasa & Barang')

@section('content')
    <div class="row row-card-no-pd">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ url('jasa/' . $model->id_jasa_barang) }}" method="POST">
                        @csrf
                        @method('put')

                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" id="nama" name="nama"
                                class="form-control input-pill @error('nama') is-invalid @enderror"
                                value="{{ $model->nama }}" required>
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="stok">Stok</label>
                            <input type="text" id="stok" name="stok"
                                class="form-control input-pill @error('stok') is-invalid @enderror"
                                value="{{ $model->stok }}" required>
                            @error('stok')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="number" id="harga" name="harga"
                                class="form-control input-pill @error('harga') is-invalid @enderror"
                                value="{{ $model->harga }}" required>
                            @error('harga')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mt-4 text-right">
                            <a href="{{ url('jasa') }}" class="btn btn-danger btn-round"><span class="btn-label mr-2"><i
                                        class="fa fa-arrow-circle-left"></i></span>Kembali</a>
                            <button type="submit" class="btn btn-info btn-round"><i class="fa fa-save mr-2"></i>
                                Simpan</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
