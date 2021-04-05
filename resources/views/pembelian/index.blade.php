@extends('tmplt.header')

@push('style')
    <style>

    </style>
@endpush
@section('content')
<div>
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                <span>

                </span></h3>
            </div>
        </div>

        <div class="clearfix"></div>


        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h3>Pembelian</h3>
                    </div>
                <div class="x_content">
                    <form id="formTransaksi" class="form" action="{{url('pembelian')}}" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" id="id_user" name="id_user" value="" required="required" >
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kode Pembelian</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                          <input type="text" required="required" class="form-control col-md-7 col-xs-12" value="{{ $kode}}" name="kode_masuk" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tanggal</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                      <input type="date" value="{{date('Y-m-d')}}" name="tanggal" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">

                                        <div class="col-md-6 col-sm-6 col-md-offset-3">
                                            <button class="btn btn-primary" href="#addBrg" data-toggle="modal" data-target="#barangModal" type="button"> <i class="fa fa-plus"></i> Tambah Barang</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Toko / Distributor
                                        </label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <select class="form-control" id="select2" name="pemasok_id">
                                                <option hidden disabled selected value> -- select an option -- </option>
                                                @foreach (\App\Pemasok::all() as $row)
                                                <option value="{{ $row->id }}">
                                                {{ $row->nama_pemasok}}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h4>Barang</h4>
                        {{-- <button class="btn btn-primary" href="#addBrg" data-toggle="modal" data-target="#barangModal" type="button"> <i class="fa fa-plus"></i> Pilih Barang</button>
                        <div class="clearfix"></div> --}}
                    </div>
                    <div class="x_content">
                        <div class="table-responsive">
                            <table class="table table-stripped text-gray-800" id="tblbarang" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Kode</th>
                                        <th>Nama Barang</th>
                                        <th>Harga</th>
                                        <th>Jumlah Beli</th>
                                        <th>Total</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- <tr>
                                        <td colspan="6" style="text-align:center;font-style: italic">Belum ada data</td>
                                    </tr> --}}
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="5" "><center>Jumlah Total</center> </th>
                                        <th colspan="2" ">Rp. <span id='totalHarga'>0</span></th>
                                        <input type="text" id="totalHargaInput" name="total" value="0">
                                    </tr>
                                </tfoot>
                            </table>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="col-md-10"></div>
                                <div class="col-md-2"><button class="btn btn-primary col-sm-12 col-md-12" type="submit"> <i class="fa fa-save"></i> Simpan</button></div>

                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@include('pembelian.form')
@push('script')
    <script>
        $(function(){
            var totalHarga = 0;
            $('#dtPemasok').DataTable();
            $('#dtBarang').DataTable();
            $('#select2').select2();

            $('#dtBarang').on("click",".add-barang",function(){
            let barisDipilih = $(this).closest("tr");
            let produk = barisDipilih.find("td:eq(2)").text();
            let kode = barisDipilih.find("td:eq(1)").text();
            let nama = barisDipilih.find("td:eq(3)").text();
            let harga = barisDipilih.find("td:eq(5)").text();
            let id = barisDipilih.find("#id_barang").val();
            let total = parseFloat(harga)*1;
            let tbody = $("#tblbarang tbody tr td").text();
            let act = "<input type='button' value='x' class='btn btn-sm btn-danger conf-modal' data-toggle='modal' data-target='#confModal'>";


            let nbORder = document.getElementsByClassName('nbOrder');
            for (let i = 0; i < nbORder.length ; i++){
                if(nbORder[i].innerText == nama){
                    Swal.fire({
                    icon: 'error',
                    title: 'Ayaan euy...',
                    })
                    $('#barangModal').modal('hide');
                    return;
                }
            }
            let newData = "<tr><td>"+kode+"<input type='text' class='form-control' name='barang_id[]' value='"+id+"' readonly></td>";
            newData += "<td class='nbOrder'>"+nama+"</td>";
            newData += "<td>"+harga+"<input class='form-control' type='text' name='harga_beli[]' value='"+harga+"' readonly></td>";
            newData += "<td><input type='number' class='form-control' name='jumlah[]' value='1' min='1' class='jumlah'></td>";
            newData += "<td><span class='subTotal'>"+total+"</span></td>";
            newData += "<td>"+act+"</td></tr>";


            // if(tbody == 'Belum ada data') $('#tblbarang tbody tr').remove();


            $('#tblbarang tbody').append(newData);
            totalHarga += parseFloat(harga);
            $('#totalHarga').text(totalHarga);
            $('#totalHargaInput').val(totalHarga);
            $('#barangModal').modal('hide');
            });

            $('#tblbarang').on('change','.jumlah',function(){
                let qty = parseInt($(this).closest('tr').find('.jumlah').val());
                let hargaBarang = parseInt($(this).closest('tr').find('td:eq(2)').text());
                let subAwal = parseInt($(this).closest('tr').find('.subTotal').text());
                let subTotal = qty * hargaBarang;
                totalHarga += subTotal - subAwal;
                $(this).closest('tr').find('.subTotal').text(subTotal);
                $('#totalHarga').text(totalHarga);
                $('#totalHargaInput').val(totalHarga);
            });

            $('#tblbarang').on('click','.conf-modal',function(){
                let subAwal = parseFloat($(this).closest('tr').find('.subTotal').text());
                totalHarga-=subAwal;

                crow = $(this).closest('tr').remove();
                $('#totalHarga').text(totalHarga);
                $('#totalHargaInput').val(totalHarga);
            });

        })
    </script>
@endpush
