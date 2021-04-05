<div>
    <div class="modal fade" id="pemasokModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Pilih Pemasok</h4>
                </div>
                <div class="modal-body">
                    <table class="table text-gray-800" id="dtPemasok" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Kode Pemasok</th>
                            <th>Nama Pemasok</th>
                            <th>No Telp</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach (\App\Pemasok::all() as $row)
                            <tr>
                                <td>{{ !empty($i) ? ++$i : $i = 1 }}</td>
                                <td>{{ $row->kode_pemasok }}</td>
                                <td>{{ $row->nama_pemasok }}</td>
                                <td>{{ $row->no_telp }}</td>
                                <td>
                                    <input id="idpmsk" type="hidden" name="" value="{{ $row->id}}">
                                    <button class="add-pemasok btn btn-primary">Add</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="barangModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Pilih Barang</h4>
                </div>
                <div class="modal-body">
                        <table class="table text-gray-800" id="dtBarang" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Kode Barang</th>
                                <th>Produk</th>
                                <th>Nama Barang</th>
                                <th>Satuan</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach (\App\Barang::all() as $row)
                                <tr>
                                    <td>{{ !empty($j) ? ++$j : $j = 1 }}</td>
                                    <td>{{ $row->kode_barang }}</td>
                                    <td>{{ $row->produk->produk }}</td>
                                    <td>{{ $row->nama_barang }}</td>
                                    <td>{{ $row->satuan }}</td>
                                    <td>{{ $row->harga_jual }}</td>
                                    <td>{{ $row->stok }}</td>
                                    <td>
                                        <input id="id_barang" type="hidden" name="" value="{{ $row->id}}">
                                        <button class="add-barang btn btn-primary">Add</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                </div>

            </div>
        </div>
    </div>

</div>
