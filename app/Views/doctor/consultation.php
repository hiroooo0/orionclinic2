<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div id="consultation-screen" class="flex flex-col h-full w-full bg-gray-50 flex-1 relative">
            <div class="flex-1 overflow-auto pb-20">
                <div class="bg-white px-6 py-4 border-b border-gray-100 flex items-center sticky top-0 z-10">
                    <button onclick="window.location.href='<?= base_url('doctor') ?>'" class="p-2 -ml-2 rounded-full hover:bg-gray-100 transition-all mr-2 md:">
                        <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" /></svg>
                    </button>
                    <h1 class="text-xl font-bold text-gray-800">Jadwal Konsultasi</h1>
                </div>
                <!-- Filter Tabs -->
                <div class="bg-white px-6 py-3 flex space-x-4 border-b border-gray-100">
                    <button class="px-4 py-2 text-blue-600 font-semibold border-b-2 border-blue-600">Hari Ini</button>
                    <button class="px-4 py-2 text-gray-500 font-medium hover:text-gray-700">Mendatang</button>
                    <button class="px-4 py-2 text-gray-500 font-medium hover:text-gray-700">Selesai</button>
                </div>
                <div class="px-6 py-6 space-y-4">
                     <!-- Patient 1 -->
                     <div class="bg-white rounded-2xl p-4 shadow-sm border border-gray-100 flex items-center justify-between card-hover">
                        <div class="flex items-center">
                            <img src="<?= base_url('assets/profile.png') ?>"  alt="Patient" class="w-14 h-14 rounded-full mr-4 object-cover border border-gray-200">
                            <div>
                                <h4 class="font-semibold text-gray-800">Budi Santoso</h4>
                                <p class="text-sm text-gray-500 mt-1">Sakit Kepala, Demam (+2 hari)</p>
                                <p class="text-xs text-gray-400 mt-1">ID: #PT-88992</p>
                            </div>
                        </div>
                        <div class="flex flex-col items-end">
                            <span class="bg-blue-100 text-blue-700 text-xs px-3 py-1 rounded-full font-medium mb-2">Pukul 14:00</span>
                            <button onclick="window.location.href='<?= base_url('doctor/chat') ?>'" class="bg-blue-600 text-white text-sm px-5 py-2 rounded-lg font-semibold hover:bg-blue-700 transition">Masuk Chat</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Mobile Bottom Nav -->
</div>
<?= $this->include('components/bottom_nav') ?>
<?= $this->endSection() ?>
