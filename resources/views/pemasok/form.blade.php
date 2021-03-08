<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">Tambah Data</h4>
        </div>
        <div class="modal-body">
                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ url('pemasok')}}" method="POST">
                {{ csrf_field() }}
                <div id="method"></div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kode Pemasok<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                        <input type="text" id="inputKode" name="kode_pemasok" required="required" class="form-control col-md-8 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Pemasok<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                        <input type="text" id="inputNama" name="nama_pemasok" required="required" class="form-control col-md-8 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                        <input type="text" id="inputAlamat" name="alamat" required="required" class="form-control col-md-8 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Kota<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                        <input type="text" id="inputKota" name="kota" required="required" class="form-control col-md-8 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">No. Telp<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                        <input type="text" id="inputTelp" name="no_telp" required="required" class="form-control col-md-8 col-xs-12">
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
                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ url('pemasok')}}" method="POST">
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
