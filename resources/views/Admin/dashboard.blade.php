@extends('Layout.app')
@section('content')
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 mb-8">

            <!-- CARD 1 -->
            <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                <h3 class="text-lg font-semibold text-gray-700">Total User</h3>
                <p class="text-3xl font-bold text-blue-700 mt-2">120</p>
            </div>

            <!-- CARD 2 -->
            <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                <h3 class="text-lg font-semibold text-gray-700">Total Undangan</h3>
                <p class="text-3xl font-bold text-green-600 mt-2">85</p>
            </div>

            <!-- CARD 3 -->
            <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                <h3 class="text-lg font-semibold text-gray-700">User Aktif</h3>
                <p class="text-3xl font-bold text-yellow-600 mt-2">47</p>
            </div>

            <!-- CARD 4 -->
            <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                <h3 class="text-lg font-semibold text-gray-700">Pendapatan</h3>
                <p class="text-3xl font-bold text-purple-600 mt-2">Rp 3.200.000</p>
            </div>
        </div>

        <!-- Bagian konten lain -->
        <div class="bg-white p-6 rounded-lg shadow">
            <h2 class="text-xl font-bold text-gray-700 mb-3">Aktivitas Terbaru</h2>

            <ul class="space-y-3 text-gray-600">
                <li>• User baru mendaftar</li>
                <li>• User membuat undangan baru</li>
                <li>• Admin memperbarui pengaturan sistem</li>
            </ul>
        </div>
@endsection