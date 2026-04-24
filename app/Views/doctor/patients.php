<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div id="patient-screen" class="flex flex-col h-full w-full bg-gray-50 flex-1 relative">
            <div class="flex-1 overflow-auto pb-20">
                <div class="bg-white px-6 py-4 border-b border-gray-100 flex items-center sticky top-0 z-10">
                    <button onclick="window.location.href='<?= base_url('doctor') ?>'" class="p-2 -ml-2 rounded-full hover:bg-gray-100 transition-all mr-2 md:">
                        <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" /></svg>
                    </button>
                    <h1 class="text-xl font-bold text-gray-800">Database Pasien</h1>
                </div>
                <!-- Search Bar -->
                <div class="bg-white px-6 py-4 border-b border-gray-100">
                     <div class="relative">
                        <svg class="absolute left-4 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                        <input type="text" placeholder="Cari nama pasien, ID, atau no RM..." class="w-full pl-12 pr-4 py-3.5 bg-gray-50 border border-gray-200 rounded-xl text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500/50 transition-all">
                    </div>
                </div>
                <div class="px-6 py-6 space-y-4">
                     <div class="bg-white rounded-2xl p-4 shadow-sm border border-gray-100 flex items-center justify-between card-hover">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4 text-blue-600 font-bold">BS</div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Budi Santoso</h4>
                                <p class="text-sm text-gray-500 mt-1">Laki-laki, 34 Tahun</p>
                                <p class="text-xs text-blue-500 mt-1 font-medium cursor-pointer hover:underline">Lihat Riwayat Medis</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-2xl p-4 shadow-sm border border-gray-100 flex items-center justify-between card-hover">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-pink-100 rounded-full flex items-center justify-center mr-4 text-pink-600 font-bold">AS</div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Ani Susanti</h4>
                                <p class="text-sm text-gray-500 mt-1">Perempuan, 28 Tahun</p>
                                <p class="text-xs text-blue-500 mt-1 font-medium cursor-pointer hover:underline">Lihat Riwayat Medis</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Mobile Bottom Nav -->
</div>
<?= $this->include('components/bottom_nav') ?>
<?= $this->endSection() ?>
