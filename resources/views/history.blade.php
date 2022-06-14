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
        <a href="#" class="inline-flex items-center text-sm font-medium bread">Histori</a>
      </div>
    </li>
    </ol>
    </nav>
</div>

    <div class="header">
            <hr><h1>Histori Pesanan</h1><hr>
        </div>
        <div>
            <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th width= "25%">Tanggal</th>
                    <th width= "40%">Status</th>
                    <th width= "25%">Jumlah Harga</th>
                </tr>
                <tr></tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                 @foreach($pesanans as $pesanan)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $pesanan->tanggal }}</td>
                    <td>@if($pesanan->status == 1)
                        Lanjutkan Pembayaran
                        @else
                        Pengiriman 
                        @endif</td>
                    <td>Rp. {{ number_format($pesanan->jumlah_harga) }}</td>
                    <td><a href="{{ url('historydetail') }}/{{ $pesanan->id }}" class="button">Detail</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </x-slot>
</x-app-layout>
