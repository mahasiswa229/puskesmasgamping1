<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Tumbuh Kembang</title>
    
    <link rel="manifest" href="{{ asset('manifest.json') }}">
    <meta name="theme-color" content="#0f766e">
    <link rel="apple-touch-icon" href="{{ asset('logo-192.png') }}">

    <!-- KABEL CDN TAILWIND (Jalan Pintas Anti-Error) -->
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
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded-2xl shadow-lg text-center max-w-sm w-full mx-4">
        <h1 class="text-2xl font-bold text-primary-teal mb-2">HealthMonitor</h1>
        <p class="text-gray-500 mb-6">Tailwind & Vite sudah aktif!</p>
        
        <button class="bg-primary-teal text-white w-full py-3 rounded-lg font-semibold shadow-md">
            Lanjut Koding 🚀
        </button>
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