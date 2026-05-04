@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-50 p-8">
    <div class="max-w-7xl mx-auto">
        <!-- Header -->
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-2xl font-semibold">Presets</h1>
            <a href="#" class="text-blue-600 hover:text-blue-700">See more</a>
        </div>

        <!-- Analogic Section -->
        <div class="bg-white rounded-xl shadow-sm p-6 mb-8">
            <div class="flex items-center gap-2 mb-6">
                <div class="bg-blue-50 p-2 rounded-lg">
                    <svg class="w-5 h-5 text-blue-600" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/>
                    </svg>
                </div>
                <h2 class="text-lg font-medium">Analogic</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Analogic Palette 1 -->
                <div class="rounded-lg overflow-hidden hover:shadow-lg transition-all duration-300 cursor-pointer">
                    <div class="flex h-20">
                        <div class="flex-1 bg-[#FF1493] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #FF1493
                            </div>
                        </div>
                        <div class="flex-1 bg-[#8B008B] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #8B008B
                            </div>
                        </div>
                        <div class="flex-1 bg-[#4B0082] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #4B0082
                            </div>
                        </div>
                        <div class="flex-1 bg-[#9400D3] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #9400D3
                            </div>
                        </div>
                        <div class="flex-1 bg-[#483D8B] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #483D8B
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Analogic Palette 2 -->
                <div class="rounded-lg overflow-hidden hover:shadow-lg transition-all duration-300 cursor-pointer">
                    <div class="flex h-20">
                        <div class="flex-1 bg-[#FF69B4] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #FF69B4
                            </div>
                        </div>
                        <div class="flex-1 bg-[#FFB6C1] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #FFB6C1
                            </div>
                        </div>
                        <div class="flex-1 bg-[#98FB98] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #98FB98
                            </div>
                        </div>
                        <div class="flex-1 bg-[#32CD32] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #32CD32
                            </div>
                        </div>
                        <div class="flex-1 bg-[#006400] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #006400
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Analogic Palette 3 -->
                <div class="rounded-lg overflow-hidden hover:shadow-lg transition-all duration-300 cursor-pointer">
                    <div class="flex h-20">
                        <div class="flex-1 bg-[#FF1493] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #FF1493
                            </div>
                        </div>
                        <div class="flex-1 bg-[#90EE90] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #90EE90
                            </div>
                        </div>
                        <div class="flex-1 bg-[#228B22] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #228B22
                            </div>
                        </div>
                        <div class="flex-1 bg-[#CD5C5C] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #CD5C5C
                            </div>
                        </div>
                        <div class="flex-1 bg-[#8B0000] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #8B0000
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Analogic Palette 4 -->
                <div class="rounded-lg overflow-hidden hover:shadow-lg transition-all duration-300 cursor-pointer">
                    <div class="flex h-20">
                        <div class="flex-1 bg-[#8A2BE2] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #8A2BE2
                            </div>
                        </div>
                        <div class="flex-1 bg-[#DDA0DD] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #DDA0DD
                            </div>
                        </div>
                        <div class="flex-1 bg-[#F0E68C] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #F0E68C
                            </div>
                        </div>
                        <div class="flex-1 bg-[#BDB76B] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #BDB76B
                            </div>
                        </div>
                        <div class="flex-1 bg-[#556B2F] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #556B2F
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Complementary Section -->
        <div class="bg-white rounded-xl shadow-sm p-6 mb-8">
            <div class="flex items-center gap-2 mb-6">
                <div class="bg-purple-50 p-2 rounded-lg">
                    <svg class="w-5 h-5 text-purple-600" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/>
                    </svg>
                </div>
                <h2 class="text-lg font-medium">Complementary</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Complementary Palette 1 -->
                <div class="rounded-lg overflow-hidden hover:shadow-lg transition-all duration-300 cursor-pointer">
                    <div class="flex h-20">
                        <div class="flex-1 bg-[#4B0082] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #4B0082
                            </div>
                        </div>
                        <div class="flex-1 bg-[#6A5ACD] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #6A5ACD
                            </div>
                        </div>
                        <div class="flex-1 bg-[#98FB98] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #98FB98
                            </div>
                        </div>
                        <div class="flex-1 bg-[#F0FFF0] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #F0FFF0
                            </div>
                        </div>
                        <div class="flex-1 bg-[#eeeeee] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #EEEEEE
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Complementary Palette 2 -->
                <div class="rounded-lg overflow-hidden hover:shadow-lg transition-all duration-300 cursor-pointer">
                    <div class="flex h-20">
                        <div class="flex-1 bg-[#2F4F4F] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #2F4F4F
                            </div>
                        </div>
                        <div class="flex-1 bg-[#4682B4] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #4682B4
                            </div>
                        </div>
                        <div class="flex-1 bg-[#87CEEB] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #87CEEB
                            </div>
                        </div>
                        <div class="flex-1 bg-[#FFA500] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #FFA500
                            </div>
                        </div>
                        <div class="flex-1 bg-[#FF4500] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #FF4500
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Complementary Palette 3 -->
                <div class="rounded-lg overflow-hidden hover:shadow-lg transition-all duration-300 cursor-pointer">
                    <div class="flex h-20">
                        <div class="flex-1 bg-[#40E0D0] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #40E0D0
                            </div>
                        </div>
                        <div class="flex-1 bg-[#ebebeb] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #EBEBEB
                            </div>
                        </div>
                        <div class="flex-1 bg-[#FFE4E1] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #FFE4E1
                            </div>
                        </div>
                        <div class="flex-1 bg-[#FA8072] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #FA8072
                            </div>
                        </div>
                        <div class="flex-1 bg-[#FF69B4] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #FF69B4
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Complementary Palette 4 -->
                <div class="rounded-lg overflow-hidden hover:shadow-lg transition-all duration-300 cursor-pointer">
                    <div class="flex h-20">
                        <div class="flex-1 bg-[#001F3F] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #001F3F
                            </div>
                        </div>
                        <div class="flex-1 bg-[#40E0D0] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #40E0D0
                            </div>
                        </div>
                        <div class="flex-1 bg-[#F5FFFA] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #F5FFFA
                            </div>
                        </div>
                        <div class="flex-1 bg-[#FFA07A] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #FFA07A
                            </div>
                        </div>
                        <div class="flex-1 bg-[#FF4500] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #FF4500
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mono Section -->
        <div class="bg-white rounded-xl shadow-sm p-6 mb-8">
            <div class="flex items-center gap-2 mb-6">
                <div class="bg-green-50 p-2 rounded-lg">
                    <svg class="w-5 h-5 text-green-600" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/>
                    </svg>
                </div>
                <h2 class="text-lg font-medium">Mono</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Mono Palette 1 -->
                <div class="rounded-lg overflow-hidden hover:shadow-lg transition-all duration-300 cursor-pointer">
                    <div class="flex h-20">
                        <div class="flex-1 bg-[#006400] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #006400
                            </div>
                        </div>
                        <div class="flex-1 bg-[#228B22] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #228B22
                            </div>
                        </div>
                        <div class="flex-1 bg-[#32CD32] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #32CD32
                            </div>
                        </div>
                        <div class="flex-1 bg-[#90EE90] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #90EE90
                            </div>
                        </div>
                        <div class="flex-1 bg-[#98FB98] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #98FB98
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mono Palette 2 -->
                <div class="rounded-lg overflow-hidden hover:shadow-lg transition-all duration-300 cursor-pointer">
                    <div class="flex h-20">
                        <div class="flex-1 bg-[#8B0000] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #8B0000
                            </div>
                        </div>
                        <div class="flex-1 bg-[#B22222] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #B22222
                            </div>
                        </div>
                        <div class="flex-1 bg-[#DC143C] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #DC143C
                            </div>
                        </div>
                        <div class="flex-1 bg-[#FF4500] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #FF4500
                            </div>
                        </div>
                        <div class="flex-1 bg-[#FF6347] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #FF6347
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mono Palette 3 -->
                <div class="rounded-lg overflow-hidden hover:shadow-lg transition-all duration-300 cursor-pointer">
                    <div class="flex h-20">
                        <div class="flex-1 bg-[#E6E6FA] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #E6E6FA
                            </div>
                        </div>
                        <div class="flex-1 bg-[#6A5ACD] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #6A5ACD
                            </div>
                        </div>
                        <div class="flex-1 bg-[#483D8B] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #483D8B
                            </div>
                        </div>
                        <div class="flex-1 bg-[#191970] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #191970
                            </div>
                        </div>
                        <div class="flex-1 bg-[#000080] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #000080
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mono Palette 4 -->
                <div class="rounded-lg overflow-hidden hover:shadow-lg transition-all duration-300 cursor-pointer">
                    <div class="flex h-20">
                        <div class="flex-1 bg-[#FFE4B5] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #FFE4B5
                            </div>
                        </div>
                        <div class="flex-1 bg-[#FFA500] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #FFA500
                            </div>
                        </div>
                        <div class="flex-1 bg-[#FF8C00] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #FF8C00
                            </div>
                        </div>
                        <div class="flex-1 bg-[#D2691E] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #D2691E
                            </div>
                        </div>
                        <div class="flex-1 bg-[#8B4513] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #8B4513
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Triadic Section -->
        <div class="bg-white rounded-xl shadow-sm p-6 mb-8">
            <div class="flex items-center gap-2 mb-6">
                <div class="bg-orange-50 p-2 rounded-lg">
                    <svg class="w-5 h-5 text-orange-600" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/>
                    </svg>
                </div>
                <h2 class="text-lg font-medium">Triadic</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Triadic Palette 1 -->
                <div class="rounded-lg overflow-hidden hover:shadow-lg transition-all duration-300 cursor-pointer">
                    <div class="flex h-20">
                        <div class="flex-1 bg-[#FF0000] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #FF0000
                            </div>
                        </div>
                        <div class="flex-1 bg-[#00FF00] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #00FF00
                            </div>
                        </div>
                        <div class="flex-1 bg-[#0000FF] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #0000FF
                            </div>
                        </div>
                        <div class="flex-1 bg-[#AA0000] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #AA0000
                            </div>
                        </div>
                        <div class="flex-1 bg-[#00AA00] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #00AA00
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Triadic Palette 2 -->
                <div class="rounded-lg overflow-hidden hover:shadow-lg transition-all duration-300 cursor-pointer">
                    <div class="flex h-20">
                        <div class="flex-1 bg-[#FF6B6B] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #FF6B6B
                            </div>
                        </div>
                        <div class="flex-1 bg-[#6BFF6B] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #6BFF6B
                            </div>
                        </div>
                        <div class="flex-1 bg-[#6B6BFF] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #6B6BFF
                            </div>
                        </div>
                        <div class="flex-1 bg-[#FFD700] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #FFD700
                            </div>
                        </div>
                        <div class="flex-1 bg-[#7B68EE] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #7B68EE
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Triadic Palette 3 -->
                <div class="rounded-lg overflow-hidden hover:shadow-lg transition-all duration-300 cursor-pointer">
                    <div class="flex h-20">
                        <div class="flex-1 bg-[#FF1493] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #FF1493
                            </div>
                        </div>
                        <div class="flex-1 bg-[#14FF93] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #14FF93
                            </div>
                        </div>
                        <div class="flex-1 bg-[#9314FF] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #9314FF
                            </div>
                        </div>
                        <div class="flex-1 bg-[#FF4500] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #FF4500
                            </div>
                        </div>
                        <div class="flex-1 bg-[#00FF7F] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #00FF7F
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Triadic Palette 4 -->
                <div class="rounded-lg overflow-hidden hover:shadow-lg transition-all duration-300 cursor-pointer">
                    <div class="flex h-20">
                        <div class="flex-1 bg-[#FF8C00] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #FF8C00
                            </div>
                        </div>
                        <div class="flex-1 bg-[#00FF8C] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #00FF8C
                            </div>
                        </div>
                        <div class="flex-1 bg-[#8C00FF] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #8C00FF
                            </div>
                        </div>
                        <div class="flex-1 bg-[#4169E1] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #4169E1
                            </div>
                        </div>
                        <div class="flex-1 bg-[#32CD32] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #32CD32
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tetradic Section -->
        <div class="bg-white rounded-xl shadow-sm p-6 mb-8">
            <div class="flex items-center gap-2 mb-6">
                <div class="bg-pink-50 p-2 rounded-lg">
                    <svg class="w-5 h-5 text-pink-600" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/>
                    </svg>
                </div>
                <h2 class="text-lg font-medium">Tetradic</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Tetradic Palette 1 -->
                <div class="rounded-lg overflow-hidden hover:shadow-lg transition-all duration-300 cursor-pointer">
                    <div class="flex h-20">
                        <div class="flex-1 bg-[#FFB6C1] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #FFB6C1
                            </div>
                        </div>
                        <div class="flex-1 bg-[#98FB98] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #98FB98
                            </div>
                        </div>
                        <div class="flex-1 bg-[#87CEEB] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #87CEEB
                            </div>
                        </div>
                        <div class="flex-1 bg-[#DDA0DD] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #DDA0DD
                            </div>
                        </div>
                        <div class="flex-1 bg-[#F0E68C] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #F0E68C
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tetradic Palette 2 -->
                <div class="rounded-lg overflow-hidden hover:shadow-lg transition-all duration-300 cursor-pointer">
                    <div class="flex h-20">
                        <div class="flex-1 bg-[#E6E6FA] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #E6E6FA
                            </div>
                        </div>
                        <div class="flex-1 bg-[#F0FFF0] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #F0FFF0
                            </div>
                        </div>
                        <div class="flex-1 bg-[#FFE4E1] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #FFE4E1
                            </div>
                        </div>
                        <div class="flex-1 bg-[#E0FFFF] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #E0FFFF
                            </div>
                        </div>
                        <div class="flex-1 bg-[#FFF0F5] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #FFF0F5
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tetradic Palette 3 -->
                <div class="rounded-lg overflow-hidden hover:shadow-lg transition-all duration-300 cursor-pointer">
                    <div class="flex h-20">
                        <div class="flex-1 bg-[#FFC0CB] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #FFC0CB
                            </div>
                        </div>
                        <div class="flex-1 bg-[#B0E0E6] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #B0E0E6
                            </div>
                        </div>
                        <div class="flex-1 bg-[#D8BFD8] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #D8BFD8
                            </div>
                        </div>
                        <div class="flex-1 bg-[#FFE4B5] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #FFE4B5
                            </div>
                        </div>
                        <div class="flex-1 bg-[#F5DEB3] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #F5DEB3
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tetradic Palette 4 -->
                <div class="rounded-lg overflow-hidden hover:shadow-lg transition-all duration-300 cursor-pointer">
                    <div class="flex h-20">
                        <div class="flex-1 bg-[#F0F8FF] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #F0F8FF
                            </div>
                        </div>
                        <div class="flex-1 bg-[#F8F8FF] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #F8F8FF
                            </div>
                        </div>
                        <div class="flex-1 bg-[#FDF5E6] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #FDF5E6
                            </div>
                        </div>
                        <div class="flex-1 bg-[#FFDAB9] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #FFDAB9
                            </div>
                        </div>
                        <div class="flex-1 bg-[#E6E6FA] group relative">
                            <div class="opacity-0 group-hover:opacity-100 absolute inset-0 flex items-center justify-center bg-black/50 text-white text-sm transition-opacity">
                                #E6E6FA
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Add click handler for copying color codes
    const colorElements = document.querySelectorAll('.group');
    colorElements.forEach(element => {
        element.addEventListener('click', function(e) {
            const colorCode = this.querySelector('div').textContent.trim();
            navigator.clipboard.writeText(colorCode).then(() => {
                showNotification('Color code copied!');
            }).catch(err => {
                showNotification('Failed to copy color code');
            });
            e.stopPropagation();
        });
    });
});

function showNotification(message) {
    const existingNotification = document.querySelector('.notification-toast');
    if (existingNotification) {
        existingNotification.remove();
    }

    // Create new notification
    const notification = document.createElement('div');
    notification.className = 'notification-toast fixed bottom-4 right-4 bg-gray-900 text-white px-4 py-2 rounded-lg shadow-lg z-50';
    notification.textContent = message;
    
    document.body.appendChild(notification);

    // Remove notification after 2 seconds
    setTimeout(() => {
        if (notification) {
            notification.remove();
        }
    }, 2000);
}
</script>

<style>
.group {
    transition: all 0.3s ease;
}

.group:hover {
    transform: scale(1.05);
    z-index: 10;
}

/* Notification animation */
.notification-toast {
    animation: slideIn 0.3s ease-out forwards;
}

@keyframes slideIn {
    from {
        transform: translateY(100%);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

.transition-all {
    transition-property: all;
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    transition-duration: 300ms;
}

.hover\:shadow-lg:hover {
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
    }

    .bg-black\/50 {
        background-color: rgba(0, 0, 0, 0.5);
    }

    .opacity-0 {
        opacity: 0;
    }

    .group-hover\:opacity-100:hover {
        opacity: 1;
    }

    .text-sm {
        font-size: 0.800rem;
        line-height: 1.25rem;
    }

    .inset-0 {
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
    }
</style>

@push('scripts')
<script>
    function copyPaletteColors(palette) {
        const colors = Array.from(palette.querySelectorAll('.group'))
            .map(group => group.querySelector('div').textContent.trim())
            .join(', ');
        
        navigator.clipboard.writeText(colors).then(() => {
            showNotification('Palette colors copied!');
        }).catch(() => {
            showNotification('Failed to copy palette colors');
        });
    }

    document.querySelectorAll('.rounded-lg').forEach(palette => {
        palette.addEventListener('dblclick', function(e) {
            e.preventDefault();
            copyPaletteColors(this);
        });
    });

    document.querySelectorAll('.rounded-lg').forEach(palette => {
        palette.addEventListener('mouseenter', function() {
            this.classList.add('palette-hover');
        });
        
        palette.addEventListener('mouseleave', function() {
            this.classList.remove('palette-hover');
        });
    });
</script>
@endpush

@endsection