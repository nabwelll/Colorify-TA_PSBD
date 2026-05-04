@extends('layouts.app')

@section('content')
<div class="p-6">
    <h1 class="text-3xl font-bold text-blue-600 mb-6">🎨 My Palettes</h1>

    <table class="w-full text-left table-auto border-collapse mb-8">
        <thead>
            <tr class="bg-gray-100">
                <th class="border px-4 py-2">Collection Name</th>
                <th class="border px-4 py-2">Palette Name</th>
                <th class="border px-4 py-2">Color</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td class="border px-4 py-2">{{ $item->collection_name }}</td>
                    <td class="border px-4 py-2">{{ $item->palette_name }}</td>
                    <td class="border px-4 py-2">
                        {{-- Asumsikan colors disimpan dalam format JSON atau string koma --}}
                        @php
                            $colors = json_decode($item->colors) ?? explode(',', $item->colors);
                        @endphp

                        <div class="flex space-x-2">
                            @foreach ($colors as $color)
                                <div class="w-6 h-6 rounded" style="background-color: {{ $color }}"></div>
                            @endforeach
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
