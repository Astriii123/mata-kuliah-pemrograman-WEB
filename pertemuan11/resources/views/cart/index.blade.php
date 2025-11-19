@extends('layouts.app')

@section('title', 'Keranjang')

@section('content')
<section class="bg-white rounded-lg shadow-lg p-8">
    <h2 class="text-4xl font-extrabold text-center mb-8 text-green-800">🛒 Keranjang Pesanan</h2>
    
    <div class="max-w-4xl mx-auto">
        <div class="bg-green-50 rounded-lg shadow p-6 mb-6">
            <h3 class="text-2xl font-bold mb-4 text-green-900">Pesanan Anda:</h3>
            <ul id="listKeranjang" class="min-h-[100px] space-y-2">
                <!-- Cart items will be loaded here -->
            </ul>
            <div class="mt-4 flex justify-between items-center border-t pt-4">
                <p class="font-bold text-lg text-green-900">Total: Rp <span id="totalHarga">0</span></p>
                <button onclick="clearCart()" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded">
                    Kosongkan Keranjang
                </button>
            </div>
        </div>

        <div class="bg-white border border-green-200 rounded-lg shadow p-6">
            <h3 class="text-2xl font-semibold mb-4 text-green-900">Informasi Pemesan</h3>
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium mb-2 text-green-800">Nama Lengkap</label>
                    <input id="nama" type="text" placeholder="Masukkan nama Anda" 
                           class="w-full px-4 py-2 border border-green-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>
                <div>
                    <label class="block text-sm font-medium mb-2 text-green-800">Nomor WhatsApp</label>
                    <input id="nomor" type="text" placeholder="Contoh: 081234567890" 
                           class="w-full px-4 py-2 border border-green-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>
            </div>

            <button onclick="pesanWA()" 
                    class="mt-6 w-full bg-green-600 hover:bg-green-700 text-white py-3 rounded-lg font-semibold text-lg transition">
                📱 Kirim Pesanan via WhatsApp
            </button>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    async function loadKeranjang() {
        try {
            const response = await fetch('{{ route("get.cart") }}');
            const data = await response.json();
            renderKeranjang(data.cart, data.total);
        } catch (error) {
            console.error('Error:', error);
        }
    }

    function renderKeranjang(cart, total) {
        const container = document.getElementById('listKeranjang');
        
        if (Object.keys(cart).length === 0) {
            container.innerHTML = '<li class="text-center text-gray-500 py-4">Belum ada pesanan.</li>';
        } else {
            let html = '';
            Object.values(cart).forEach(item => {
                html += `
                    <li class="flex justify-between items-center bg-white p-3 rounded border">
                        <span class="font-semibold text-green-800">${item.name}</span>
                        <div class="flex items-center gap-4">
                            <span class="text-green-700">x${item.quantity}</span>
                            <span class="text-green-900 font-bold">Rp ${(item.price * item.quantity).toLocaleString()}</span>
                        </div>
                    </li>
                `;
            });
            container.innerHTML = html;
        }
        
        document.getElementById('totalHarga').innerText = total.toLocaleString();
    }

    async function clearCart() {
        if (!confirm('Yakin ingin mengosongkan keranjang?')) return;

        try {
            const response = await fetch('{{ route("clear.cart") }}', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                }
            });

            const data = await response.json();
            if (data.success) {
                loadKeranjang();
                alert('Keranjang berhasil dikosongkan!');
            }
        } catch (error) {
            console.error('Error:', error);
        }
    }

    async function pesanWA() {
        const nama = document.getElementById('nama').value;
        const nomor = document.getElementById('nomor').value;

        if (!nama || !nomor) {
            alert("Lengkapi nama dan nomor HP terlebih dahulu!");
            return;
        }

        try {
            const response = await fetch('{{ route("send.order") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify({
                    nama: nama,
                    nomor: nomor
                })
            });

            const data = await response.json();
            
            if (data.success) {
                window.open(data.whatsapp_url, '_blank');
                loadKeranjang(); // Refresh cart after order
            } else {
                alert(data.message);
            }
        } catch (error) {
            console.error('Error:', error);
            alert('Terjadi kesalahan saat mengirim pesanan.');
        }
    }

    // Load cart on page load
    document.addEventListener('DOMContentLoaded', loadKeranjang);
</script>
@endsection