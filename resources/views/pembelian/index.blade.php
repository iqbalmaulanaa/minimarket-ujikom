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
                <h3>Pembelian
                <span>

                </span></h3>
            </div>
        </div>

        <div class="clearfix"></div>


        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h4>Data Pemasok</h4>
                        <button class="btn btn-primary" href="#add" data-mode="add" data-toggle="modal" data-target="#pemasokModal" type="button"> <i class="fa fa-plus"></i> Pilih Pemasok</button>
                        <div class="clearfix"></div>
                    </div>
                <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                        <input type="hidden" id="id_pemasok" name="id_pemasok" required="required" >
                        <input type="hidden" id="id_user" name="id_user" value="" required="required" >
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Kode Pemasok <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="kode_pemasok" name="kode_pemasok" required="required" class="form-control col-md-7 col-xs-12" readonly required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Pemasok <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="nama_pemasok" name="last-name" required="required" class="form-control col-md-7 col-xs-12" readonly required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">No. Telepon <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="no_telp" class="form-control col-md-7 col-xs-12" required="required" type="text" readonly required="required">
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h4>Data Barang</h4>
                        <button class="btn btn-primary" href="#addBrg" data-toggle="modal" data-target="#barangModal" type="button"> <i class="fa fa-plus"></i> Pilih Barang</button>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="table-responsive">
                            <table class="table text-gray-800" id="tblbarang" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Kode</th>
                                        <th>Nama Barang</th>
                                        <th>Harga</th>
                                        <th>Jumlah Beli</th>
                                        <th>Total</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
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
            $('#okModal').modal({backdrop : 'static',keyboard : false});
            $('#okModal').modal('hide');
            $('#dtPemasok').DataTable();
            $('#dtBarang').DataTable();


            $('#dtPemasok').on("click",".add-pemasok",function(){
                let barisDipilih = $(this).closest("tr");
                let nama = barisDipilih.find("td:eq(2)").text();
                let nisn = barisDipilih.find("td:eq(1)").text();
                let kelas = barisDipilih.find("td:eq(3)").text();
                let id = barisDipilih.find("#idpmsk").val();


                $('#nama_pemasok').val(nama);
                $('#kode_pemasok').val(nisn);
                $('#no_telp').val(kelas);
                $('#id_pemasok').val(id);



                $('#pemasokModal').modal('hide');

                $('#tblbayar tbody tr').remove();
            });


            $('#dtBarang').on("click",".add-barang",function(){
                let barisDipilih;
                barisDipilih = $(this).closest("tr");
                let produk = barisDipilih.find("td:eq(2)").text();
                let kode = barisDipilih.find("td:eq(1)").text();
                let nama = barisDipilih.find("td:eq(3)").text();
                let harga = barisDipilih.find("td:eq(5)").text();
                let id = barisDipilih.find("#id_barang").val();
                let total = parseFloat(harga)*1;
                let act = "<input type='button' value='x' class='btn btn-sm btn-danger conf-modal' data-toggle='modal' data-target='#confModal'>";
                var num = 1;

                let addRow = "<tr><td>"+num+"<input type='hidden' name='id_barang[]' value='"+id+"'></td>";
                addRow += "<td><input type='text' name='kode_barang[]' value='"+kode+"' readonly class='form-control kode'></td>";
                addRow += "<td><input type='text' name='nama_barang[]' value='"+nama+"' readonly class='form-control nama'></td>";
                addRow += "<td><input type='text' name='harga[]' value='"+harga+"' readonly class='form-control harga'></td>";
                addRow += "<td><input type='number' name='jumlah_beli[]' value='1' class='form-control jumlah'></td>";
                addRow += "<td><input type='text' name='total[]' value='"+total+"' readonly class='form-control total'></td>";
                addRow += "<td>"+act+"</td></tr>";
                num++;
                // let totalBayar = parseFloat($('#totalBayar').text());
                // let harga = parseFloat(nominal);
                // totalBayar += harga;
                // $('#totalBayar').text(totalBayar);
                $('#tblbarang tbody').append(addRow);

                $('#barangModal').modal('hide');

            });
            $('.jumlah').on("change",function(){
                barisDipilih = $(this).closest("tr");
                let harga = barisDipilih.find(".harga").val();
                let jumlah = barisDipilih.find(".jumlah").val();
                let total = parseFloat(harga) * parseInt(jumlah)
                barisDipilih.find(".total").val(total);
            });

        //    $('#card-data-spp').on("click",".conf-modal",function(){
        //         let rowSlc = $(this).closest('tr');
        //         let tahun = rowSlc.find(".tahun").val();
        //         let bulan = rowSlc.find(".bulan").val();
        //         let no = rowSlc.find(".nominal").val();

        //         $('#confModal').on("click",".delete-row",function(){
        //             rowSlc.remove();
        //             let kurang = parseFloat($('#totalBayar').text());
        //             let hargaa = parseFloat($('#tblbayar .nominal').val());

        //             let baris = "<tr><td>#</td>";
        //             baris += "<td>"+bulan+"</td>";
        //             baris += "<td>"+tahun+"</td>";
        //             baris += "<td>"+no+"</td>";
        //             baris += "<td><button class='add-spp btn btn-primary'>Add</button></td></tr>";
        //             $('#dtSpp tr:first').after(baris);

        //             kurang -= hargaa;
        //             $('#totalBayar').text(kurang);
        //             $('#confModal').modal('hide');
        //         });
        //    });

        })
    </script>
@endpush
