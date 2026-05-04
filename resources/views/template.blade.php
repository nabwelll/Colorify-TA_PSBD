@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-50 p-8">
    <div class="max-w-7xl mx-auto">
        <!-- Header with Tabs -->
        <div class="mb-8">
            <h1 class="text-2xl font-semibold mb-4">Templates</h1>
            <div class="flex space-x-6 border-b border-gray-200">
                <a href="#" class="text-blue-600 border-b-2 border-blue-600 pb-4 px-2">Popular</a>
                <a href="#" class="text-gray-500 hover:text-gray-700 pb-4 px-2">Random</a>
                <a href="#" class="text-gray-500 hover:text-gray-700 pb-4 px-2">New</a>
            </div>
        </div>

        <!-- Filter Dropdown -->
        <div class="flex justify-end mb-8">
            <div class="relative">
                <select id="themeSelect" class="appearance-none bg-white border border-gray-200 rounded-lg px-4 py-2 pr-8 hover:border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="earth">Earth</option>
                    <option value="neon">Neon</option>
                    <option value="pastel">Pastel</option>
                </select>
                <div class="absolute right-3 top-1/2 transform -translate-y-1/2">
                    <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- Template Content -->
        <div id="templateContent">
            @include('components.templates.earth')
        </div>
    </div>
</div>

<script>
document.getElementById('themeSelect').addEventListener('change', function() {
    fetch(`/templates/${this.value}`)
        .then(response => response.text())
        .then(html => {
            document.getElementById('templateContent').innerHTML = html;
        });
});
</script>
@endsection