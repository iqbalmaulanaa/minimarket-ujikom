@extends('tmplt.header')
@push('style')

@endpush
@section('content')
<div>
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Data Produk
          <span>

          </span></h3>
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <button class="btn btn-primary" href="#add" data-mode="add" data-toggle="modal" data-target="#formModal" type="button"> <i class="fa fa-plus"></i> Tambah</button>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
                @include('tmplt.feedback')
                <div class="table-responsive">
                    <table class="table text-gray-800" id="dtprod" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Kode</th>
                            <th>Produk</th>
                            <th>Nama Barang</th>
                            <th>Satuan</th>
                            <th>Harga Jual</th>
                            <th>Stok</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($barang as $row2)
                            <tr>
                                <td>{{ !empty($i) ? ++$i : $i = 1 }}</th>
                                <td>{{ $row2->kode_barang }}</td>
                                <td>{{ $row2->produk->produk }}</td>
                                <td>{{ $row2->nama_barang }}</td>
                                <td>{{ $row2->satuan }}</td>
                                <td>{{ $row2->harga_jual }}</td>
                                <td>{{ $row2->stok }}</td>
                                <td>
                                    <a href="#" data-toggle="modal" data-target="#formModal" data-mode="edit"
                                    data-id="{{$row2->id}}"
                                    data-produk="{{$row2->produk_id}}"
                                    data-nama="{{$row2->nama_barang}}"
                                    data-kode="{{$row2->kode_barang}}"
                                    data-satuan="{{$row2->satuan}}"
                                    data-harga="{{$row2->harga_jual}}"
                                    data-stok="{{$row2->stok}}"
                                    class="btn btn-sm btn-warning"><i class='fa fa-edit'></i></a>
                                    <a href="#dlt" data-toggle="modal" data-target="#deleteModal"
                                    data-id="{{$row2->id}}"
                                    data-nama="{{$row2->nama_barang}}"
                                    class="btn btn-sm btn-danger"><i class='fa fa-trash'></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
@include('barang.form')
@push('script')
<script>
    $(function(){
        $('#dtprod').DataTable();
        $('#formModal').on('show.bs.modal', function(event){
            var button = $(event.relatedTarget);
            var id = button.data('id');
            var mode = button.data('mode');
            var produk = button.data('produk');
            var kode = button.data('kode');
            var nama = button.data('nama');
            var satuan = button.data('satuan');
            var harga = button.data('harga');
            var stok = button.data('stok');
            var modal = $(this);
            if(mode=='edit'){
                modal.find('.modal-title').text('Edit Data Barang');
                modal.find('.modal-body #inputProduk').val(produk);
                modal.find('.modal-body #inputKode').val(kode);
                modal.find('.modal-body #inputNama').val(nama);
                modal.find('.modal-body #inputSatuan').val(satuan);
                modal.find('.modal-body #inputHarga').val(harga);
                modal.find('.modal-body #inputStok').val(stok);
                modal.find('.modal-body #method').html('{{method_field("PUT")}}<input type="hidden" id="id" name="id" value="'+id+'">');

            }
            else{
                modal.find('.modal-title').text('Tambah Data Barang');
                modal.find('.modal-body #inputProduk').val('');
                modal.find('.modal-body #inputKode').val('');
                modal.find('.modal-body #inputNama').val('');
                modal.find('.modal-body #inputSatuan').val('');
                modal.find('.modal-body #inputHarga').val('');
                modal.find('.modal-body #inputStok').val('');
                modal.find('.modal-body #method').html('');
            }
        });
        $('#deleteModal').on('show.bs.modal', function(event){
            var button = $(event.relatedTarget);
            var id = button.data('id');
            var produk = button.data('nama');
            var modal = $(this);
            modal.find('.modal-body #dataHapus').html(produk);
            modal.find('.modal-body #idHapus').val(id);
        });
    })
</script>
@endpush
