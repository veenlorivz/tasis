@extends('layouts.main')
@section('title')
    Data Absensi
@endsection
@section('judul')
    Data Absensi XII (duabelas)
@endsection
@section('content')
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        Id
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Nama
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Nis
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Hari/Tanggal
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Keterangan
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($siswa as $sis)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $loop->iteration }}
                        </th>
                        <td class="py-4 px-6">
                            {{ $sis->nama }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $sis->nis }}
                        </td>
                        <td class="py-4 px-6">
                            $2999
                        </td>
                        <td class="py-4 px-6">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
