<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div id="doctor-screen" class="flex flex-col h-full bg-gray-50">
            <div class="flex-1 overflow-auto pb-20"><!-- Header -->
                <div class="bg-white px-6 py-4 border-b border-gray-100 flex items-center"><button
                        onclick="window.location.href='<?= base_url('patient') ?>'"
                        class="p-2 -ml-2 rounded-full hover:bg-gray-100 transition-all mr-2">
                        <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg></button>
                    <h1 class="text-lg font-bold text-gray-800">Konsultasi Dokter</h1>
                </div><!-- Specialization Filter -->
                <div class="px-6 py-4 bg-white">
                    <div class="flex space-x-3 overflow-x-auto pb-2 -mx-6 px-6"><button
                            class="flex-shrink-0 px-4 py-2 bg-blue-600 text-white rounded-full text-sm font-medium">Semua</button>
                        <button
                            class="flex-shrink-0 px-4 py-2 bg-gray-100 text-gray-700 rounded-full text-sm font-medium hover:bg-gray-200 transition-all">Umum</button>
                        <button
                            class="flex-shrink-0 px-4 py-2 bg-gray-100 text-gray-700 rounded-full text-sm font-medium hover:bg-gray-200 transition-all">Anak</button>
                        <button
                            class="flex-shrink-0 px-4 py-2 bg-gray-100 text-gray-700 rounded-full text-sm font-medium hover:bg-gray-200 transition-all">Jantung</button>
                        <button
                            class="flex-shrink-0 px-4 py-2 bg-gray-100 text-gray-700 rounded-full text-sm font-medium hover:bg-gray-200 transition-all">Kulit</button>
                    </div>
                </div><!-- Doctor List -->
                <div class="px-6 py-4 space-y-4 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-6 md:space-y-0"><!-- Doctor Card 1 -->
                    <div onclick="showScreen('chat-screen')"
                        class="bg-white rounded-2xl p-4 shadow-sm card-hover cursor-pointer">
                        <div class="flex items-start">
                            <div
                                class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
                                <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor"
                                    viewbox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center justify-between">
                                    <h4 class="font-semibold text-gray-800">Dr. Sarah Wijaya</h4>
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewbox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg><span class="text-sm text-gray-600 ml-1">4.9</span>
                                    </div>
                                </div>
                                <p class="text-sm text-gray-500">Dokter Umum</p>
                                <p class="text-xs text-gray-400 mt-1">10 tahun pengalaman</p>
                                <div class="flex items-center justify-between mt-3">
                                    <div class="flex items-center"><span
                                            class="w-2 h-2 bg-green-500 rounded-full mr-2"></span> <span
                                            class="text-xs text-green-600 font-medium">Online</span>
                                    </div><span class="text-blue-600 font-bold">Rp 50.000</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- Doctor Card 2 -->
                    <div onclick="showScreen('chat-screen')"
                        class="bg-white rounded-2xl p-4 shadow-sm card-hover cursor-pointer">
                        <div class="flex items-start">
                            <div
                                class="w-16 h-16 bg-teal-100 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
                                <svg class="w-10 h-10 text-teal-600" fill="none" stroke="currentColor"
                                    viewbox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center justify-between">
                                    <h4 class="font-semibold text-gray-800">Dr. Andi Pratama, Sp.A</h4>
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewbox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg><span class="text-sm text-gray-600 ml-1">4.8</span>
                                    </div>
                                </div>
                                <p class="text-sm text-gray-500">Spesialis Anak</p>
                                <p class="text-xs text-gray-400 mt-1">8 tahun pengalaman</p>
                                <div class="flex items-center justify-between mt-3">
                                    <div class="flex items-center"><span
                                            class="w-2 h-2 bg-green-500 rounded-full mr-2"></span> <span
                                            class="text-xs text-green-600 font-medium">Online</span>
                                    </div><span class="text-blue-600 font-bold">Rp 100.000</span>
                                </div>
                            </div>
                        </div>
                    </div><!-- Doctor Card 3 -->
                    <div onclick="showScreen('chat-screen')"
                        class="bg-white rounded-2xl p-4 shadow-sm card-hover cursor-pointer">
                        <div class="flex items-start">
                            <div
                                class="w-16 h-16 bg-purple-100 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
                                <svg class="w-10 h-10 text-purple-600" fill="none" stroke="currentColor"
                                    viewbox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center justify-between">
                                    <h4 class="font-semibold text-gray-800">Dr. Maya Sari, Sp.JP</h4>
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewbox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg><span class="text-sm text-gray-600 ml-1">4.9</span>
                                    </div>
                                </div>
                                <p class="text-sm text-gray-500">Spesialis Jantung</p>
                                <p class="text-xs text-gray-400 mt-1">15 tahun pengalaman</p>
                                <div class="flex items-center justify-between mt-3">
                                    <div class="flex items-center"><span
                                            class="w-2 h-2 bg-gray-300 rounded-full mr-2"></span> <span
                                            class="text-xs text-gray-500 font-medium">Offline</span>
                                    </div><span class="text-blue-600 font-bold">Rp 150.000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Bottom Navigation (same as home) -->
            <div
                class="absolute bottom-0 left-0 right-0 bg-white border-t border-gray-100 px-6 py-3 flex justify-between items-center md:">
                <button onclick="window.location.href='<?= base_url('patient') ?>'"
                    class="nav-item flex flex-col items-center py-1 px-4 text-gray-400">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg><span class="text-xs mt-1 font-medium">Beranda</span> </button> <button
                    onclick="window.location.href='<?= base_url('patient/consultation') ?>'" class="nav-item active flex flex-col items-center py-1 px-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                    </svg><span class="text-xs mt-1 font-medium">Konsultasi</span> </button> <button
                    onclick="window.location.href='<?= base_url('patient/prescription') ?>'"
                    class="nav-item flex flex-col items-center py-1 px-4 text-gray-400">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                    </svg><span class="text-xs mt-1 font-medium">Obat</span> </button> <button
                    onclick="window.location.href='<?= base_url('patient/profile') ?>'"
                    class="nav-item flex flex-col items-center py-1 px-4 text-gray-400">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg><span class="text-xs mt-1 font-medium">Profil</span> </button>
            </div>
        </div><!-- Chat Screen -->
</div>
<?= $this->include('components/bottom_nav') ?>
<?= $this->endSection() ?>
