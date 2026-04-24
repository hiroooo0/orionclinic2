<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div id="history-screen" class="flex flex-col h-full bg-gray-50">
            <div class="flex-1 overflow-auto pb-6"><!-- Header -->
                <div class="bg-white px-6 py-4 border-b border-gray-100 flex items-center"><button
                        onclick="window.location.href='<?= base_url('patient') ?>'"
                        class="p-2 -ml-2 rounded-full hover:bg-gray-100 transition-all mr-2">
                        <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg></button>
                    <h1 class="text-lg font-bold text-gray-800">Riwayat Kesehatan</h1>
                </div><!-- Timeline -->
                <div class="px-6 py-4">
                    <div class="relative">
                        <div class="absolute left-4 top-0 bottom-0 w-0.5 bg-gray-200"></div>
                        <div class="relative pl-10 pb-8">
                            <div
                                class="absolute left-2.5 w-4 h-4 bg-blue-600 rounded-full border-4 border-white shadow">
                            </div>
                            <div class="bg-white rounded-2xl p-4 shadow-sm">
                                <div class="flex items-center justify-between mb-2"><span
                                        class="text-xs font-medium text-blue-600 bg-blue-50 px-2 py-1 rounded-full">Konsultasi</span>
                                    <span class="text-xs text-gray-400">15 Jan 2025</span>
                                </div>
                                <h4 class="font-semibold text-gray-800">Dr. Sarah Wijaya</h4>
                                <p class="text-sm text-gray-500 mt-1">Demam &amp; Sakit Kepala</p>
                                <p class="text-xs text-gray-400 mt-2">Diagnosis: Common Cold</p>
                            </div>
                        </div>
                        <div class="relative pl-10 pb-8">
                            <div
                                class="absolute left-2.5 w-4 h-4 bg-teal-600 rounded-full border-4 border-white shadow">
                            </div>
                            <div class="bg-white rounded-2xl p-4 shadow-sm">
                                <div class="flex items-center justify-between mb-2"><span
                                        class="text-xs font-medium text-teal-600 bg-teal-50 px-2 py-1 rounded-full">Resep
                                        Obat</span> <span class="text-xs text-gray-400">15 Jan 2025</span>
                                </div>
                                <h4 class="font-semibold text-gray-800">2 Jenis Obat</h4>
                                <p class="text-sm text-gray-500 mt-1">Paracetamol, Vitamin C</p>
                                <p class="text-xs text-gray-400 mt-2">Status: Selesai</p>
                            </div>
                        </div>
                        <div class="relative pl-10 pb-8">
                            <div
                                class="absolute left-2.5 w-4 h-4 bg-purple-600 rounded-full border-4 border-white shadow">
                            </div>
                            <div class="bg-white rounded-2xl p-4 shadow-sm">
                                <div class="flex items-center justify-between mb-2"><span
                                        class="text-xs font-medium text-purple-600 bg-purple-50 px-2 py-1 rounded-full">Konsultasi</span>
                                    <span class="text-xs text-gray-400">10 Jan 2025</span>
                                </div>
                                <h4 class="font-semibold text-gray-800">Dr. Andi Pratama, Sp.A</h4>
                                <p class="text-sm text-gray-500 mt-1">Konsultasi Tumbuh Kembang Anak</p>
                                <p class="text-xs text-gray-400 mt-2">Pasien: Anisa Santoso</p>
                            </div>
                        </div>
                        <div class="relative pl-10">
                            <div
                                class="absolute left-2.5 w-4 h-4 bg-green-600 rounded-full border-4 border-white shadow">
                            </div>
                            <div class="bg-white rounded-2xl p-4 shadow-sm">
                                <div class="flex items-center justify-between mb-2"><span
                                        class="text-xs font-medium text-green-600 bg-green-50 px-2 py-1 rounded-full">Medical
                                        Check Up</span> <span class="text-xs text-gray-400">5 Jan 2025</span>
                                </div>
                                <h4 class="font-semibold text-gray-800">Check Up Tahunan</h4>
                                <p class="text-sm text-gray-500 mt-1">Hasil: Normal</p><button
                                    class="mt-3 text-sm text-blue-600 font-medium">Lihat Hasil Lengkap →</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Profile Screen -->
</div>
<?= $this->include('components/bottom_nav') ?>
<?= $this->endSection() ?>
