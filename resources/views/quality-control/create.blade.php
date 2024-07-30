<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Data Quality Control') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('quality-control.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <label for="report_id" class="block text-gray-700">Report ID</label>
                            <input type="text" name="report_id" id="report_id" class="w-full border-gray-300 rounded-lg" value="{{ $reportId }}" readonly>
                        </div>
                        <div class="mb-4">
                            <label for="inspektor" class="block text-gray-700">Inspektor</label>
                            <select name="inspektor" id="inspektor" class="w-full border-gray-300 rounded-lg" required>
                                @foreach($users as $id => $name)
                                    <option value="{{ $id }}">{{ $name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="tanggal_pengecekan" class="block text-gray-700">Tanggal Pengecekan</label>
                            <input type="date" name="tanggal_pengecekan" id="tanggal_pengecekan" class="w-full border-gray-300 rounded-lg" required>
                        </div>
                        <div class="mb-4">
                            <label for="area" class="block text-gray-700">Area</label>
                            <select name="area" id="area" class="w-full border-gray-300 rounded-lg" required>
                                <option value="Kiln">Kiln</option>
                                <option value="Cooler">Cooler</option>
                                <option value="Preheater">Preheater</option>
                                <option value="Raw Mill">Raw Mill</option>
                                <option value="Coal Mill">Coal Mill</option>
                                <option value="Crusher">Crusher</option>
                                <option value="Finish Mill">Finish Mill</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="sub_area" class="block text-gray-700">Sub Area</label>
                            <input type="text" name="sub_area" id="sub_area" class="w-full border-gray-300 rounded-lg" required>
                        </div>
                        <div class="mb-4">
                            <label for="eksekutor" class="block text-gray-700">Eksekutor/Kontraktor</label>
                            <select name="eksekutor" id="eksekutor" class="w-full border-gray-300 rounded-lg" required>
                                <option value="PGO">PGO</option>
                                <option value="PT PINTIRO">PT. PINTIRO</option>
                                <option value="PT. Fauzan Jaya Tehnik">PT. Fauzan Jaya Tehnik</option>
                                <option value="PT.PKM">PT.PKM</option>
                                <option value="PT.SHINAGAWA">PT.SHINAGAWA</option>
                                <option value="PT. Balantang Multi Mandiri">PT. Balantang Multi Mandiri</option>
                                <option value="PT. Rajawali Mandiri Conveyor">PT. Rajawali Mandiri Conveyor</option>
                                <option value="PT.PKM">PT. Indoporlen</option>
                                <option value="PT.PKM">PT.PKM</option>
                                <option value="PT.PKM">PT.MBL</option>
                                <option value="PT.PKM">Mekanik Finish Mill 4</option>
                                <option value="PT.PKM">Pem. Mesin Crusher</option>
                                <option value="PT.PKM">Patriatma</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="deskripsi_temuan" class="block text-gray-700">Deskripsi Temuan</label>
                            <textarea name="deskripsi_temuan" id="deskripsi_temuan" class="w-full border-gray-300 rounded-lg" required></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="foto_temuan_sebelum" class="block text-gray-700">Foto Temuan Sebelum</label>
                            <input type="file" name="foto_temuan_sebelum" id="foto_temuan_sebelum" class="w-full border-gray-300 rounded-lg" required>
                        </div>
                        <div class="mb-4">
                            <label for="foto_temuan_sesudah" class="block text-gray-700">Foto Temuan Sesudah</label>
                            <input type="file" name="foto_temuan_sesudah" id="foto_temuan_sesudah" class="w-full border-gray-300 rounded-lg" required>
                        </div>
                        <div class="mb-4">
                            <label for="status" class="block text-gray-700">Status</label>
                            <select name="status" id="status" class="w-full border-gray-300 rounded-lg" required>
                            <option value="Open">Open</option>
                            <option value="Close">Close</option>
                        </select>
                        </div>
                        <div class="mb-4">
                            <label for="close_date" class="block text-gray-700">Close Date</label>
                            <input type="date" name="close_date" id="close_date" class="w-full border-gray-300 rounded-lg">
                        </div>
                        <div class="flex justify-between mb-4">
                            <a href="{{ route('quality-control.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition duration-300">Kembali</a>
                            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition duration-300">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
