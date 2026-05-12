@extends('layouts.page')
@section('title', 'Hotel dan Penginapan')
@section('page-title', 'Hotel dan Penginapan')

@section('page-content')

<div class="mb-4">
    <h3 style="font-weight:700; color:#1B3A6B;">
        10 Hotel dan Penginapan Terpopuler
    </h3>
</div>

@php
$hotel = [

    [
        'no' => '1',
        'nama' => 'Gerage Sangkan Hotel dan Spa',
        'foto' => asset('images/hotel/grage-sangkan.jpg'),
        'alamat' => 'Jl. Raya Sangkanhurip No.1 Desa Sangkanhurip Kec Cigandamekar',
        'telp' => '(0232) 614534',
    ],

    [
        'no' => '2',
        'nama' => 'Grand Cordela Hotel',
        'foto' => asset('images/hotel/grand-cordela.jpg'),
        'alamat' => 'Jl. Siliwangi No.91, Purwawinangun, Kec. Kuningan, Kabupaten Kuningan, Jawa Barat 45511.',
        'telp' => '(0232) 872272',
    ],

    [
        'no' => '3',
        'nama' => 'Tirta Sanita Spa Resort (B. III)',
        'foto' => asset('images/hotel/tirta-sanita.jpg'),
        'alamat' => 'Jl. Panawuwan No. 98 Kec Cigandamekar - Kuningan',
        'telp' => '(0232) 613061',
        'website' => 'www.tirtasanita.com',
    ],

    [
        'no' => '4',
        'nama' => 'Hotel Sangkan Indah (B.I)',
        'foto' => asset('images/hotel/sangkan-indah.jpg'),
        'alamat' => 'Komplek Pemandian Air Panas Alam No.304 Desa Sangkanhurip',
        'telp' => '(0232) 613191 - 613378',
    ],

    [
        'no' => '5',
        'nama' => 'Hotel Adikarama',
        'foto' => asset('images/hotel/adikarama.jpg'),
        'alamat' => 'Jl. Panawuwan No. 128 Desa Panawuwan Kec Cigandamekar - Kuningan',
        'telp' => '(0232) 613666',
    ],

    [
        'no' => '6',
        'nama' => 'Hotel Ayong (B.I)',
        'foto' => asset('images/hotel/ayong.jpg'),
        'alamat' => 'Jl. Linggajati No. 4 Kec. Cilimus',
        'telp' => '(0232) 613188',
    ],

    [
        'no' => '7',
        'nama' => 'Villa Linggajati Indah',
        'foto' => asset('images/hotel/villa-linggajati.jpg'),
        'alamat' => 'Jl. Linggajati No.4 Desa Linggasana Kec. Cilimus - Kuningan',
        'telp' => '(0232) 613188',
    ],

    [
        'no' => '8',
        'nama' => 'Hotel Mata Air',
        'foto' => asset('images/hotel/mata-air.jpg'),
        'alamat' => 'Jl. Linggajati No.208 Desa Sangkanhurip Kec. Cigandamekar - Kuningan',
        'telp' => '(0923) 615131',
    ],

    [
        'no' => '9',
        'nama' => 'Anugerah Villa',
        'foto' => asset('images/hotel/anugerah-villa.jpg'),
        'alamat' => 'Jl. Linggasana Kec. Cilimus - Kuningan',
        'telp' => '(0232) 613604',
        'email' => 'anugerahvilla@yahoo.com',
    ],

    [
        'no' => '10',
        'nama' => 'Hotel Linggajati',
        'foto' => asset('images/hotel/hotel-linggajati.jpg'),
        'alamat' => 'Jl. Linggarjati Desa Linggasana Kec. Cilimus - Kuningan',
        'telp' => '(0232) 613185',
    ],

];
@endphp

<div class="d-flex flex-column gap-4">

    @foreach($hotel as $h)

    <div class="rounded-3 overflow-hidden"
         style="background:#F8FAFC; border:1px solid #E2E8F0;">

        {{-- FOTO --}}
        <img src="{{ $h['foto'] }}"
             alt="{{ $h['nama'] }}"
             style="
                width:100%;
                height:240px;
                object-fit:cover;
             ">

        <div class="p-3 p-md-4">

            <div class="d-flex align-items-center gap-3 mb-3">

                <div style="
                    width:42px;
                    height:42px;
                    background:#1B3A6B;
                    color:white;
                    border-radius:50%;
                    display:flex;
                    align-items:center;
                    justify-content:center;
                    font-weight:700;
                    flex-shrink:0;
                ">
                    {{ $h['no'] }}
                </div>

                <div style="
                    font-weight:700;
                    font-size:1rem;
                    color:#1B3A6B;
                ">
                    {{ $h['nama'] }}
                </div>

            </div>

            <div style="
                font-size:0.92rem;
                color:#475569;
                line-height:1.9;
            ">

                <div>
                    <strong>Alamat:</strong>
                    {{ $h['alamat'] }}
                </div>

                <div>
                    <strong>Telp/Fax:</strong>
                    {{ $h['telp'] }}
                </div>

                @if(isset($h['website']))
                <div>
                    <strong>Website:</strong>
                    {{ $h['website'] }}
                </div>
                @endif

                @if(isset($h['email']))
                <div>
                    <strong>E-Mail:</strong>
                    {{ $h['email'] }}
                </div>
                @endif

            </div>

        </div>

    </div>

    @endforeach

</div>

<p class="text-muted mt-4" style="font-size:0.75rem;">
    Sumber: Dinas Pariwisata Kabupaten Kuningan
</p>

@endsection