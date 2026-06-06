<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - HealthMonitor</title>
    
    <link rel="manifest" href="{{ asset('manifest.json') }}">
    <meta name="theme-color" content="#0f766e">
    <link rel="apple-touch-icon" href="{{ asset('logo-192.png') }}">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary-teal': '#0f766e',
                        'primary-light': '#ccfbf1'
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-slate-50 flex items-center justify-center min-h-screen font-sans">

    <div class="w-full max-w-md p-6">
        
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-primary-teal mb-4 flex items-center justify-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-8 h-8">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-3-3v6" />
                </svg>
                HealthMonitor
            </h1>
            <h2 class="text-2xl font-bold text-gray-800">Selamat Datang</h2>
            <p class="text-gray-500 text-sm mt-1">Silakan masuk ke akun Anda</p>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 mb-8">
            <form action="#" method="POST">
                
                <div class="mb-5">
                    <label class="block text-gray-700 text-sm font-medium mb-2">Username</label>
                    <div class="relative">
                        <div class="absolute left-4 top-3.5 text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>
                        </div>
                        <input type="text" placeholder="Masukkan username" class="w-full pl-11 pr-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:border-primary-teal focus:ring-1 focus:ring-primary-teal transition-colors text-sm">
                    </div>
                </div>

                <div class="mb-5">
                    <label class="block text-gray-700 text-sm font-medium mb-2">Kata Sandi</label>
                    <div class="relative">
                        <div class="absolute left-4 top-3.5 text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                            </svg>
                        </div>
                        <input type="password" placeholder="Masukkan kata sandi" class="w-full pl-11 pr-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:border-primary-teal focus:ring-1 focus:ring-primary-teal transition-colors text-sm">
                    </div>
                </div>

                <div class="flex justify-end mb-6">
                    <a href="#" class="text-sm text-primary-teal hover:text-teal-800 font-medium">Lupa Kata Sandi?</a>
                </div>

                <button type="button" class="w-full bg-primary-teal hover:bg-teal-800 text-white font-semibold py-3 px-4 rounded-xl flex items-center justify-center gap-2 transition-colors shadow-md">
                    Masuk
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15M12 9l3 3m0 0-3 3m3-3H2.25" />
                    </svg>
                </button>
            </form>
        </div>

        <div class="text-center text-gray-400 text-xs font-medium">
            Versi Aplikasi 2.4.0
        </div>

    </div>

    <script>
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', () => {
                navigator.serviceWorker.register('/sw.js').catch(err => console.log('SW error: ', err));
            });
        }
    </script>
</body>
</html>