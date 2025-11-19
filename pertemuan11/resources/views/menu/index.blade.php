@extends('layouts.app')

@section('title', 'Menu')

@section('content')
<section class="bg-gradient-to-br from-green-50 to-green-100 py-8 sm:py-12 rounded-lg shadow-lg">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-4xl font-bold tracking-tight text-green-900 sm:text-5xl">Menu & Harga</h2>
            <p class="mt-4 text-lg leading-8 text-green-700">Pilih menu favoritmu dan pesan langsung.</p>
        </div>

        <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 gap-8 max-w-6xl mx-auto">
            <ul class="space-y-4 text-lg font-semibold text-green-900">
                @foreach(array_slice($menuItems, 0, 6) as $item)
                <li class="flex items-center justify-between bg-white p-4 rounded-lg shadow">
                    <span>{{ $item['name'] }}</span>
                    <span class="flex items-center">
                        <span class="text-green-700 font-extrabold mr-3">Rp {{ $item['price'] }}</span>
                        <button onclick="tambahKeranjang('{{ $item['name'] }}', '{{ $item['price'] }}')" 
                                class="px-3 py-1 rounded-lg bg-green-600 text-white hover:bg-green-700 transition">
                            Pesan
                        </button>
                    </span>
                </li>
                @endforeach
            </ul>

            <ul class="space-y-4 text-lg font-semibold text-green-900">
                @foreach(array_slice($menuItems, 6) as $item)
                <li class="flex items-center justify-between bg-white p-4 rounded-lg shadow">
                    <span>{{ $item['name'] }}</span>
                    <span class="flex items-center">
                        <span class="text-green-700 font-extrabold mr-3">Rp {{ $item['price'] }}</span>
                        <button onclick="tambahKeranjang('{{ $item['name'] }}', '{{ $item['price'] }}')" 
                                class="px-3 py-1 rounded-lg bg-green-600 text-white hover:bg-green-700 transition">
                            Pesan
                        </button>
                    </span>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    async function tambahKeranjang(nama, harga) {
        try {
            const response = await fetch('{{ route("add.to.cart") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify({
                    item_name: nama,
                    item_price: harga
                })
            });

            const data = await response.json();
            if (data.success) {
                alert('Item berhasil ditambahkan ke keranjang!');
            }
        } catch (error) {
            console.error('Error:', error);
            alert('Terjadi kesalahan saat menambahkan item.');
        }
    }
</script>
@endsection