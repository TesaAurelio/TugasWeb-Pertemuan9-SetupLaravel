<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang - Tugas Laravel</title>
    <!-- Tailwind CDN Bonus -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>body { font-family: 'Inter', sans-serif; }</style>
</head>
<body class="bg-[#0b0f19] text-gray-200 min-h-screen flex flex-col justify-between relative overflow-x-hidden">
    
    <!-- Efek Cahaya Dekoratif Latar Belakang -->
    <div class="absolute top-[-10%] left-[-10%] w-[50vw] h-[50vw] rounded-full bg-blue-900/20 blur-[120px] pointer-events-none"></div>
    <div class="absolute bottom-[-10%] right-[-10%] w-[50vw] h-[50vw] rounded-full bg-purple-900/20 blur-[120px] pointer-events-none"></div>
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#1f29370a_1px,transparent_1px),linear-gradient(to_bottom,#1f29370a_1px,transparent_1px)] bg-[size:24px_24px] pointer-events-none opacity-50"></div>

    <!-- 1. HEADER & NAVBAR -->
    <header class="relative z-10 w-full max-w-7xl mx-auto px-6 py-5">
        <nav class="flex items-center justify-between bg-white/5 backdrop-blur-md border border-white/10 rounded-2xl px-6 py-4 shadow-lg">
            <div class="flex items-center gap-2">
                <span class="text-2xl">🚀</span>
                <span class="text-lg font-bold bg-gradient-to-r from-blue-400 to-indigo-400 bg-clip-text text-transparent">TugasWeb-P9</span>
            </div>
            <div class="flex items-center gap-4 text-sm font-medium">
                <a href="#" class="px-4 py-2 bg-white/10 hover:bg-white/20 text-white rounded-lg transition">Beranda</a>
                <a href="/about" class="px-4 py-2 text-gray-400 hover:text-white transition">Tentang Kami</a>
                <a href="/contact" class="px-4 py-2 text-gray-400 hover:text-white transition hidden sm:inline-block">Kontak</a>
            </div>
        </nav>
    </header>

    <!-- 2. HERO SECTION -->
    <main class="relative z-10 flex-grow flex flex-col items-center justify-center text-center px-6 py-12 max-w-5xl mx-auto">
        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-indigo-500/10 border border-indigo-500/30 text-xs font-semibold text-indigo-300 mb-6 shadow-md shadow-indigo-500/5 animate-pulse">
            <span>✨</span> TUGAS RUTIN 9 — SETUP LARAVEL
        </div>

        <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight text-white mb-6">
            <span class="bg-gradient-to-r from-blue-400 via-indigo-400 to-purple-400 bg-clip-text text-transparent">
                {{ $data['judul'] ?? 'Halaman Utama' }}
            </span>
        </h1>

        <p class="text-lg md:text-xl text-gray-400 max-w-2xl mb-10 leading-relaxed">
            {{ $data['deskripsi'] ?? 'Selamat datang di tugas rutin 9 Laravel.' }}
        </p>

        <div class="flex flex-col sm:flex-row gap-4 mb-10">
            <a href="/about" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-500 hover:to-indigo-500 text-white font-semibold rounded-xl shadow-lg shadow-blue-500/25 transition-all transform hover:-translate-y-0.5">
                <span>📂</span> Ke Halaman Tentang
            </a>
            <a href="/contact" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-white/5 hover:bg-white/10 border border-white/10 hover:border-white/25 text-white font-semibold rounded-xl backdrop-blur-md transition-all transform hover:-translate-y-0.5">
                <span>📞</span> Ke Halaman Kontak
            </a>
        </div>
        <p class="text-sm text-gray-500 bg-gray-950/40 px-4 py-2 rounded-lg border border-gray-800/80">
            💡 Coba parameter bonus: <span class="text-indigo-400 font-mono">127.0.0.1:8000/hello/{nama}</span>
        </p>
    </main>

    <!-- 3. DASHBOARD SECTION -->
    <section class="relative z-10 w-full max-w-7xl mx-auto px-6 pb-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white/5 backdrop-blur-md border border-white/10 p-6 rounded-2xl flex flex-col gap-4 shadow-lg">
                <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-blue-500/10 text-blue-400 text