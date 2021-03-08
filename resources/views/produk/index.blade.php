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
                <div class="table-responsive">
                    <table class="table text-gray-800" id="dtprod" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Produk</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($produk as $row)
                            <tr>
                                <td>{{ !empty($i) ? ++$i : $i = 1 }}</th>
                                <td>{{ $row->produk }}</td>
                                <td>
                                    <a href="#" data-toggle="modal" data-target="#formModal" data-mode="edit" data-id="{{$row->id}}" data-produk="{{$row->produk}}" class="btn btn-sm btn-warning"><i class='fa fa-edit'></i></a>
                                    <a href="#dlt" data-toggle="modal" data-target="#deleteModal" data-id="{{$row->id}}" data-produk="{{$row->produk}}" class="btn btn-sm btn-danger"><i class='fa fa-trash'></i></a>
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
@include('produk.form')
@push('script')
<script>
    $(function(){
        $('#dtprod').DataTable();
        $('#formModal').on('show.bs.modal', function(event){
            var button = $(event.relatedTarget);
            var id = button.data('id');
            var mode = button.data('mode');
            var produk = button.data('produk');
            var modal = $(this);
            if(mode=='edit'){
                modal.find('.modal-title').text('Edit Data Produk');
                modal.find('.modal-body #inputProduk').val(produk);
                modal.find('.modal-body #method').html('{{method_field("PUT")}}<input type="hidden" id="id" name="id" value="'+id+'">');

            }
            else{
                modal.find('.modal-title').text('Tambah Data Produk');
                modal.find('.modal-body #inputProduk').val('');
                modal.find('.modal-body #method').html('');
            }
        });
        $('#deleteModal').on('show.bs.modal', function(event){
            var button = $(event.relatedTarget);
            var id = button.data('id');
            var produk = button.data('produk');
            var modal = $(this);
            modal.find('.modal-body #dataHapus').html(produk);
            modal.find('.modal-body #idHapus').val(id);
        });
    })
</script>
@endpush
