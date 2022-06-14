<x-app-layout>
    <x-slot name="header">

<!-- breadcrumb -->
<div class="container">
<nav class="flex" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-3">
    <li class="inline-flex items-center">
      <a href="{{ url('dashboard')}}" class="inline-flex items-center text-sm font-medium bread">
        <svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
        Halaman Utama</a>
    </li>
    <li>
      <div class="flex items-center">
        <svg class="w-6 h-6 text-gray-400" fill="#B26B00" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
        <a href="#" class="inline-flex items-center text-sm font-medium bread">Keranjang</a>
      </div>
    </li>
    </ol>
    </nav>
</div>

<!-- detail produk -->
    <div class="col-md-12">
            <hr><h1 class="header">Keranjang</h1><hr>
        <div class="card">
            <div class="card-body">
            @if(!empty($pesanan))
            <p align="right">Tanggal Pesan : {{ $pesanan->tanggal }}</p>
            <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Total Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php $no = 1; ?>
                @foreach($pesanan_details as $pesanan_detail)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>
                            <img src="{{ url('uploads') }}/{{ $pesanan_detail->barang->gambar }}" width="100" alt="...">
                        </td>
                        <td>{{ $pesanan_detail->barang->nama_barang }}</td>
                        <td>{{ $pesanan_detail->jumlah }} pcs</td>
                        <td align="right">Rp. {{ number_format($pesanan_detail->barang->harga) }}</td>
                        <td align="right">Rp. {{ number_format($pesanan_detail->jumlah_harga) }}</td>
                        <td>
                        <form action="{{ url('checkout') }}/{{ $pesanan_detail->id }}" method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                            <button type="submit" class="button-red" onclick="return confirm('Anda yakin akan menghapus data ?');">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                <tr>
                    <td colspan="5" align="right"><strong>Total Harga :</strong></td>
                    <td align="right"><strong>Rp. {{ number_format($pesanan->jumlah_harga) }}</strong></td>
                    <td>
                        @if(!empty($pesanan_detail))
                        <a href="{{ url('konfirmasi-checkout') }}" class="button" onclick="return confirm('Anda yakin akan Check Out ?');">
                        Check Out
                        </a>
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>
        @endif
            </div>
        </div>
    </div>
    </x-slot>
</x-app-layout>
