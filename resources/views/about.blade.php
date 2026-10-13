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
    
    <div class="absolute top-[-10%] left-[-10%] w-[50vw] h-[50vw] rounded-full bg-emerald-900/20 blur-[120px] pointer-events-none"></div>
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#1f29370a_1px,transparent_1px),linear-gradient(to_bottom,#1f29370a_1px,transparent_1px)] bg-[size:24px_24px] pointer-events-none opacity-50"></div>

    <header class="relative z-10 w-full max-w-7xl mx-auto px-6 py-5">
        <nav class="flex items-center justify-between bg-white/5 backdrop-blur-md border border-white/10 rounded-2xl px-6 py-4 shadow-lg">
            <div class="flex items-center gap-2">
                <span class="text-2xl">🚀</span>
                <span class="text-lg font-bold text-white">TugasWeb-P9</span>
            </div>
            <div class="flex items-center gap-4 text-sm font-medium">
                <a href="/" class="px-4 py-2 text-gray-400 hover:text-white transition">Beranda</a>
                <a href="/about" class="px-4 py-2 bg-white/10 text-white rounded-lg transition">Tentang Kami</a>
                <a href="/contact" class="px-4 py-2 text-gray-400 hover:text-white transition hidden sm:inline-block">Kontak</a>
            </div>
        </nav>
    </header>

    <main class="relative z-10 flex-grow flex flex-col items-center justify-center px-6 py-12 max-w-5xl mx-auto w-full">
        
        <h1 class="text-5xl font-extrabold tracking-tight text-white mb-10 text-center">
            <span class="bg-gradient-to-r from-emerald-400 to-teal-400 bg-clip-text text-transparent">
                {{ $judul }}
            </span>
        </h1>

        <div class="w-full bg-white/5 backdrop-blur-md border border-white/10 rounded-3xl p-8 shadow-2xl">
            <div class="text-center mb-8">
                <p class="text-gray-400">Tim pengembang di balik penyelesaian tugas rutin ini.</p>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                @foreach($anggota as $orang)
                <div class="bg-white/5 border border-white/10 p-6 rounded-2xl flex flex-col items-center gap-4 hover:border-emerald-500/50 hover:bg-white/10 transition-all transform hover:-translate-y-1">
                    <div class="w-16 h-16 rounded-full bg-gradient-to-br from-emerald-400 to-teal-600 flex items-center justify-center text-2xl text-white font-bold shadow-lg">
                        {{ substr($orang, 0, 1) }}
                    </div>
                    <div class="text-center">
                        <h3 class="text-xl font-bold text-white">{{ $orang }}</h3>
                        <span class="text-xs text-emerald-400 bg-emerald-400/10 px-2 py-1 rounded-md mt-2 inline-block border border-emerald-500/20">Mahasiswa</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <a href="/" class="mt-10 inline-flex items-center gap-2 px-6 py-3 bg-white/5 hover:bg-white/10 border border-white/10 text-white rounded-xl transition">
            &larr; Kembali ke Beranda
        </a>
    </main>

</body>
</html> 