<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $judul }} - Tugas Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>body { font-family: 'Inter', sans-serif; }</style>
</head>
<body class="bg-[#0b0f19] text-gray-200 min-h-screen flex flex-col relative overflow-x-hidden">
    
    <div class="absolute top-[20%] right-[-10%] w-[50vw] h-[50vw] rounded-full bg-pink-900/20 blur-[120px] pointer-events-none"></div>
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#1f29370a_1px,transparent_1px),linear-gradient(to_bottom,#1f29370a_1px,transparent_1px)] bg-[size:24px_24px] pointer-events-none opacity-50"></div>

    <header class="relative z-10 w-full max-w-7xl mx-auto px-6 py-5">
        <nav class="flex items-center justify-between bg-white/5 backdrop-blur-md border border-white/10 rounded-2xl px-6 py-4 shadow-lg">
            <div class="flex items-center gap-2">
                <span class="text-2xl">🚀</span>
                <span class="text-lg font-bold text-white">TugasWeb-P9</span>
            </div>
            <div class="flex items-center gap-4 text-sm font-medium">
                <a href="/" class="px-4 py-2 text-gray-400 hover:text-white transition">Beranda</a>
                <a href="/about" class="px-4 py-2 text-gray-400 hover:text-white transition hidden sm:inline-block">Tentang Kami</a>
                <a href="/contact" class="px-4 py-2 bg-white/10 text-white rounded-lg transition">Kontak</a>
            </div>
        </nav>
    </header>

    <main class="relative z-10 flex-grow flex flex-col items-center justify-center px-6 py-12 max-w-3xl mx-auto w-full">
        
        <h1 class="text-5xl font-extrabold tracking-tight text-white mb-10 text-center">
            <span class="bg-gradient-to-r from-pink-400 to-rose-400 bg-clip-text text-transparent">
                {{ $judul }}
            </span>
        </h1>

        <div class="w-full bg-white/5 backdrop-blur-md border border-white/10 rounded-3xl p-10 shadow-2xl flex flex-col items-center text-center">
            
            <div class="w-20 h-20 bg-pink-500/10 border border-pink-500/20 text-pink-400 rounded-2xl flex items-center justify-center text-4xl mb-6 shadow-[0_0_30px_rgba(236,72,153,0.15)]">
                ✉️
            </div>
            
            <h2 class="text-2xl font-bold text-white mb-3">Punya Pertanyaan?</h2>
            <p class="text-gray-400 mb-8 max-w-md">Silakan hubungi kami melalui alamat email di bawah ini terkait teknis setup Laravel dan dokumentasi tugas.</p>
            
            <div class="flex items-center gap-4 bg-[#0b0f19] border border-white/10 px-6 py-4 rounded-xl w-full max-w-md justify-center shadow-inner">
                <span class="text-gray-500 text-sm">Email Aktif:</span>
                <a href="mailto:admin@tugas9.com" class="text-pink-400 font-semibold hover:text-pink-300 transition text-lg tracking-wide">
                    admin@tugas9.com
                </a>
            </div>
        </div>

        <a href="/" class="mt-10 inline-flex items-center gap-2 px-6 py-3 bg-white/5 hover:bg-white/10 border border-white/10 text-white rounded-xl transition">
            &larr; Kembali ke Beranda
        </a>
    </main>

</body>
</html>