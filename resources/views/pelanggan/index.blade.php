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
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No. Telp</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($pelanggan as $row)
                            <tr>
                                <td>{{ !empty($i) ? ++$i : $i = 1 }}</th>
                                <td>{{ $row->kode_pelanggan }}</td>
                                <td>{{ $row->nama }}</td>
                                <td>{{ $row->alamat }}</td>
                                <td>{{ $row->no_telp }}</td>
                                <td>{{ $row->email }}</td>
                                <td>
                                    <a href="#" data-toggle="modal" data-target="#formModal" data-mode="edit"
                                    data-id="{{$row->id}}"
                                    data-alamat="{{$row->alamat}}"
                                    data-nama="{{$row->nama}}"
                                    data-kode="{{$row->kode_pelanggan}}"
                                    data-telp="{{$row->no_telp}}"
                                    data-email="{{$row->email}}"
                                    class="btn btn-sm btn-warning"><i class='fa fa-edit'></i></a>
                                    <a href="#dlt" data-toggle="modal" data-target="#deleteModal"
                                    data-id="{{$row->id}}"
                                    data-nama="{{$row->nama}}"
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
@include('pelanggan.form')
@push('script')
<script>
    $(function(){
        $('#dtprod').DataTable();
        $('#formModal').on('show.bs.modal', function(event){
            var button = $(event.relatedTarget);
            var id = button.data('id');
            var mode = button.data('mode');
            var alamat = button.data('alamat');
            var kode = button.data('kode');
            var nama = button.data('nama');
            var email = button.data('email');
            var telp = button.data('telp');
            var modal = $(this);
            if(mode=='edit'){
                modal.find('.modal-title').text('Edit Data Barang');
                modal.find('.modal-body #inputAlamat').val(alamat);
                modal.find('.modal-body #inputKode').val(kode);
                modal.find('.modal-body #inputNama').val(nama);
                modal.find('.modal-body #inputTelp').val(telp);
                modal.find('.modal-body #inputEmail').val(email);
                modal.find('.modal-body #method').html('{{method_field("PUT")}}<input type="hidden" id="id" name="id" value="'+id+'">');

            }
            else{
                modal.find('.modal-title').text('Tambah Data Barang');
                modal.find('.modal-body #inputAlamat').val('');
                modal.find('.modal-body #inputKode').val('');
                modal.find('.modal-body #inputNama').val('');
                modal.find('.modal-body #inputTelp').val('');
                modal.find('.modal-body #inputEmail').val('');
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
