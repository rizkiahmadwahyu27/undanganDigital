@extends('Layout.app')
@section('content')
    <div class="grid grid-cols-2 h-18 ml-1 mr-1 rounded-2xl bg-white">
        <div class="flex justify-start items-center ml-4">
            <div>
                <button onclick="openModal()">
                    <i data-lucide="user-round-plus" class="w-8 h-8 text-gray-400 hover:text-gray-700"></i>
                </button>
            </div>
        </div>
        <div class="flex justify-end items-center mr-4">
            <input type="text" name="search" id="search" class="rounded-2xl outline-2 outline-gray-200 p-2 hover:outline-gray-500 focus:outline-gray-800" placeholder="cari">
        </div>
    </div>
    <div class="w-full max-w-full overflow-x-auto">
        <div class="max-h-[600px] overflow-y-auto border border-gray-200 rounded-lg">
            <table class="w-full text-left border-collapse">
                <thead class="bg-gray-100 sticky top-0 z-10">
                    <tr>
                        <th class="px-4 py-3 font-semibold text-gray-700 border-b">No</th>
                        <th class="px-4 py-3 font-semibold text-gray-700 border-b">Nama</th>
                        <th class="px-4 py-3 font-semibold text-gray-700 border-b">Kode Templete</th>
                        <th class="px-4 py-3 font-semibold text-gray-700 border-b">Jenis Bayar</th>
                        <th class="px-4 py-3 font-semibold text-gray-700 border-b">Bayar</th>
                        <th class="px-4 py-3 font-semibold text-gray-700 border-b">Aksi</th>
                    </tr>
                </thead>
                @php
                    $no = 1;
                @endphp
                <tbody>
                    @foreach ($data_order as $order)
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-3 border-b">{{$no++}}</td>
                            <td class="px-4 py-3 border-b">{{$order->nama}}</td>
                            <td class="px-4 py-3 border-b">{{$order->kode_template}}</td>
                            <td class="px-4 py-3 border-b">{{$order->jenis_bayar}}</td>
                            <td class="px-4 py-3 border-b">{{$order->bayar}}</td>
                            <td class="px-4 py-3 border-b">
                                <button class="px-3 py-1 bg-blue-500 text-white rounded">Edit</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- BACKDROP -->
    <div id="modalBackdrop" 
        class="fixed inset-0 bg-black/70 hidden z-50 items-center justify-center p-4">
        
        <!-- MODAL BOX -->
        <div id="modalBox"
            class="bg-white w-11/12 sm:w-3/4 md:w-1/2 lg:w-1/3 rounded-xl shadow-lg p-6 transform scale-95 opacity-0 transition-all duration-300">
            
            <!-- HEADER -->
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-lg font-semibold text-gray-700">Tambah Data Order</h2>
                <button onclick="closeModal()" class="text-gray-500 hover:text-gray-700 text-xl">&times;</button>
            </div>
            <form action="{{route('admin.create_order')}}" method="post">
                @csrf
                <!-- CONTENT -->
                <div class="text-gray-600">
                    <!-- Example input -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium">Nama</label>
                        <input type="text" class="w-full mt-1 p-2 border rounded focus:ring focus:ring-blue-200" required name="nama">
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium">Kode Template</label>
                        <input type="text" class="w-full mt-1 p-2 border rounded focus:ring focus:ring-blue-200" required name="kode_template">
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium">Jenis Pembayaran</label>
                        <select required name="jenis_bayar" class="w-full mt-1 p-2 border rounded focus:ring focus:ring-blue-200">
                            <option value="Cash">Cash</option>
                            <option value="Dana">Dana</option>
                            <option value="ShopeePay">ShopeePay</option>
                            <option value="OVO">OVO</option>
                            <option value="Bank BNI">Bank BNI</option>
                            <option value="Bank BCA">Bank BCA</option>
                            <option value="Bank Mandiri">Bank Mandiri</option>
                            <option value="Bank BRI">Bank BRI</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium">Bayar</label>
                        <input type="number" class="w-full mt-1 p-2 border rounded focus:ring focus:ring-blue-200" required name="bayar">
                    </div>
                </div>

                <!-- FOOTER -->
                <div class="flex justify-end gap-3 mt-4">
                    <button onclick="closeModal()" class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400">Close</button>
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Save</button>
                </div>
            </form>
        </div>
    </div>
    
@endsection
<script>
    function openModal() {
        const backdrop = document.getElementById('modalBackdrop');
        const modal = document.getElementById('modalBox');
        backdrop.classList.remove('hidden');
        backdrop.classList.add('flex');
        setTimeout(() => {
            modal.classList.remove('scale-95', 'opacity-0');
            modal.classList.add('scale-100', 'opacity-100');
        }, 10);
    }

    function closeModal() {
        const backdrop = document.getElementById('modalBackdrop');
        const modal = document.getElementById('modalBox');

        modal.classList.add('scale-95', 'opacity-0');
        modal.classList.remove('scale-100', 'opacity-100');

        setTimeout(() => {
            backdrop.classList.add('hidden');
            backdrop.classList.remove('flex');
        }, 200);
    }
</script>