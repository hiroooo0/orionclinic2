<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div id="prescription-screen" class="flex flex-col h-full bg-gray-50">
            <div class="flex-1 overflow-auto pb-20"><!-- Header -->
                <div class="bg-white px-6 py-4 border-b border-gray-100 flex items-center"><button
                        onclick="window.location.href='<?= base_url('patient') ?>'"
                        class="p-2 -ml-2 rounded-full hover:bg-gray-100 transition-all mr-2">
                        <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg></button>
                    <h1 class="text-lg font-bold text-gray-800">Resep &amp; Obat</h1>
                </div><!-- Tabs -->
                <div class="bg-white px-6 py-3 flex space-x-4 border-b border-gray-100"><button
                        class="px-4 py-2 text-blue-600 font-semibold border-b-2 border-blue-600">Resep Aktif</button>
                    <button class="px-4 py-2 text-gray-500 font-medium hover:text-gray-700">Riwayat</button>
                </div><!-- Prescription Card -->
                <div class="px-6 py-4">
                    <div class="bg-white rounded-2xl shadow-sm overflow-">
                        <div class="p-4 border-b border-gray-100">
                            <div class="flex items-center justify-between mb-2"><span
                                    class="text-xs font-medium text-blue-600 bg-blue-50 px-3 py-1 rounded-full">Aktif</span>
                                <span class="text-xs text-gray-400">15 Jan 2025</span>
                            </div>
                            <h4 class="font-semibold text-gray-800">Resep dari Dr. Sarah Wijaya</h4>
                            <p class="text-sm text-gray-500">Konsultasi: Demam &amp; Sakit Kepala</p>
                        </div><!-- Medicine List -->
                        <div class="divide-y divide-gray-100">
                            <div class="p-4 flex items-center">
                                <div
                                    class="w-12 h-12 bg-teal-100 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
                                    <svg class="w-6 h-6 text-teal-600" fill="none" stroke="currentColor"
                                        viewbox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h5 class="font-medium text-gray-800">Paracetamol 500mg</h5>
                                    <p class="text-xs text-gray-500">3x1 setelah makan</p>
                                </div><span class="text-sm font-semibold text-gray-800">10 tablet</span>
                            </div>
                            <div class="p-4 flex items-center">
                                <div
                                    class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
                                    <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor"
                                        viewbox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h5 class="font-medium text-gray-800">Vitamin C 500mg</h5>
                                    <p class="text-xs text-gray-500">1x1 setelah makan</p>
                                </div><span class="text-sm font-semibold text-gray-800">10 tablet</span>
                            </div>
                        </div>
                        <div class="p-4 bg-gray-50">
                            <div class="flex items-center justify-between mb-4"><span class="text-gray-600">Total</span>
                                <span class="text-xl font-bold text-gray-800">Rp 45.000</span>
                            </div><button class="w-full btn-primary text-white py-3.5 rounded-xl font-semibold"> Pesan
                                Obat Sekarang </button>
                        </div>
                    </div>
                </div>
            </div>
</div>
<?= $this->include('components/bottom_nav') ?>
<?= $this->endSection() ?>
