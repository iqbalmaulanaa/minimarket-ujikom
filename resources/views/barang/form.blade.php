<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">Tambah Data</h4>
        </div>
        <div class="modal-body">
                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ url('barang')}}" method="POST">
                {{ csrf_field() }}
                <div id="method"></div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kode Barang<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                        <input type="text" id="inputKode" name="kode_barang" required="required" class="form-control col-md-8 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Produk<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                        {{-- <input type="text" id="inputProduk" name="produk_id" required="required" class="form-control col-md-8 col-xs-12"> --}}
                        <select name="produk_id" id="inputProduk" class="form-control">
                            @foreach (\App\Produk::all() as $row)
                            <option value="{{ $row->id }}">
                            {{ $row->produk}}
                            </option>
                            @endforeach
                        </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Barang<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                        <input type="text" id="inputNama" name="nama_barang" required="required" class="form-control col-md-8 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Satuan<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                        <input type="text" id="inputSatuan" name="satuan" required="required" class="form-control col-md-8 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Harga Jual<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                        <input type="text" id="inputHarga" name="harga_jual" required="required" class="form-control col-md-8 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Stok<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                        <input type="text" id="inputStok" name="stok" required="required" class="form-control col-md-8 col-xs-12">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" type="reset">Reset</button>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">Hapus Data</h4>
        </div>
        <div class="modal-body">
                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ url('barang')}}" method="POST">
                {{ csrf_field() }}
                {{ method_field('delete') }}

                <div class="form-group">
                    <input type="hidden" name="id" id="idHapus">
                    Apakah data <b id="dataHapus"></b> ini akan dihapus?
                </div>
        </div>
        <div class="modal-footer">
            <button class="btn" type="button" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-danger">Delete</button>
        </div>
        </form>
        </div>
    </div>
</div>
