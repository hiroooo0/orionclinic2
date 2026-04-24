<!-- Desktop Sidebar -->
<aside class="hidden md:flex flex-col w-72 bg-white border-r border-gray-100 h-full flex-shrink-0 z-40">
    <div class="p-8 flex items-center border-b border-gray-100">
        <img src="<?= base_url('assets/logoorion.png') ?>" alt="Logo" class="w-10 h-10 mr-4 object-contain">
        <h1 class="text-2xl font-bold text-gray-800">Orion Clinic</h1>
    </div>
    <nav class="flex-1 overflow-y-auto p-6 space-y-2">
        <?php if(isset($role) && $role == 'doctor'): ?>
            <button onclick="window.location.href='<?= base_url('doctor') ?>'" class="w-full flex items-center space-x-4 px-4 py-3.5 text-gray-600 rounded-2xl hover:bg-blue-50 hover:text-blue-600 transition-all group">
                <svg class="w-6 h-6 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                <span class="font-medium text-base">Dashboard</span>
            </button>
            <button onclick="window.location.href='<?= base_url('doctor/consultation') ?>'" class="w-full flex items-center space-x-4 px-4 py-3.5 text-gray-600 rounded-2xl hover:bg-blue-50 hover:text-blue-600 transition-all group">
                <svg class="w-6 h-6 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path></svg>
                <span class="font-medium text-base">Jadwal Konsultasi</span>
            </button>
            <button onclick="window.location.href='<?= base_url('doctor/patients') ?>'" class="w-full flex items-center space-x-4 px-4 py-3.5 text-gray-600 rounded-2xl hover:bg-blue-50 hover:text-blue-600 transition-all group">
                <svg class="w-6 h-6 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                <span class="font-medium text-base">Data Pasien</span>
            </button>
             <button onclick="window.location.href='<?= base_url('doctor/profile') ?>'" class="w-full flex items-center space-x-4 px-4 py-3.5 text-gray-600 rounded-2xl hover:bg-blue-50 hover:text-blue-600 transition-all group">
                <svg class="w-6 h-6 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                <span class="font-medium text-base">Profil Dokter</span>
            </button>
        <?php else: ?>
            <button onclick="window.location.href='<?= base_url('patient') ?>'" class="w-full flex items-center space-x-4 px-4 py-3.5 text-gray-600 rounded-2xl hover:bg-blue-50 hover:text-blue-600 transition-all group">
                <svg class="w-6 h-6 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                <span class="font-medium text-base">Beranda</span>
            </button>
            <button onclick="window.location.href='<?= base_url('patient/consultation') ?>'" class="w-full flex items-center space-x-4 px-4 py-3.5 text-gray-600 rounded-2xl hover:bg-blue-50 hover:text-blue-600 transition-all group">
                <svg class="w-6 h-6 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path></svg>
                <span class="font-medium text-base">Konsultasi</span>
            </button>
            <button onclick="window.location.href='<?= base_url('patient/prescription') ?>'" class="w-full flex items-center space-x-4 px-4 py-3.5 text-gray-600 rounded-2xl hover:bg-blue-50 hover:text-blue-600 transition-all group">
                <svg class="w-6 h-6 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                <span class="font-medium text-base">Obat</span>
            </button>
             <button onclick="window.location.href='<?= base_url('patient/profile') ?>'" class="w-full flex items-center space-x-4 px-4 py-3.5 text-gray-600 rounded-2xl hover:bg-blue-50 hover:text-blue-600 transition-all group">
                <svg class="w-6 h-6 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                <span class="font-medium text-base">Profil</span>
            </button>
        <?php endif; ?>
    </nav>
    <div class="p-6 border-t border-gray-100">
        <button onclick="window.location.href='<?= base_url() ?>'" class="w-full flex items-center space-x-4 px-4 py-3 text-red-600 rounded-2xl hover:bg-red-50 transition-all">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
            <span class="font-medium text-base">Keluar</span>
        </button>
    </div>
</aside>
