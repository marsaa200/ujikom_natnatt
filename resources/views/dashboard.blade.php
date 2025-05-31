<x-app-layout>


    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-[#84AE92] p-8 rounded-2xl shadow-xl text-white text-center mb-8">
                <h3 class="text-2xl font-bold mb-2">Selamat Datang di Sistem Informasi Anda!</h3>
                <p class="text-lg">Anda telah berhasil login. Jelajahi fitur-fitur dan kelola data Anda dengan mudah.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white dark:bg-gray-800 shadow-lg rounded-2xl p-7 transition-transform duration-300 hover:scale-[1.02] hover:shadow-2xl">
                    <div class="flex items-start space-x-5">
                        <div class="p-4 bg-[#84AE92] rounded-full shadow-md">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13 16h-1v-4h-1m1-4h.01M12 8v.01M12 20a8 8 0 100-16 8 8 0 000 16z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-extrabold text-gray-800 dark:text-gray-100 mb-1">Informasi Akun</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Kelola detail profil Anda dan preferensi keamanan.</p>
                            <p class="text-sm font-semibold text-[#84AE92] mt-2">Status Login: Aktif</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-800 shadow-lg rounded-2xl p-7 transition-transform duration-300 hover:scale-[1.02] hover:shadow-2xl">
                    <div class="flex items-start space-x-5">
                        <div class="p-4 bg-[#84AE92] rounded-full shadow-md">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 10h11M9 21V3m9 4h3M18 20h3" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-extrabold text-gray-800 dark:text-gray-100 mb-1">Log Aktivitas</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Telusuri riwayat interaksi Anda dengan sistem.</p>
                            <a href="#" class="text-sm font-semibold text-[#84AE92] hover:underline mt-2 inline-block">Lihat Statistik Harian &rarr;</a>
                        </div>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-800 shadow-lg rounded-2xl p-7 transition-transform duration-300 hover:scale-[1.02] hover:shadow-2xl">
                    <div class="flex items-start space-x-5">
                        <div class="p-4 bg-[#84AE92] rounded-full shadow-md">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M11 17a4 4 0 004-4V5a4 4 0 10-8 0v8a4 4 0 004 4zm0 0v2m0 2h.01" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-extrabold text-gray-800 dark:text-gray-100 mb-1">Pengaturan Keamanan</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Pastikan keamanan akun Anda selalu terjaga.</p>
                            <p class="text-sm font-semibold text-[#84AE92] mt-2">Terakhir Login: {{ now()->format('d F Y, H:i') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>