<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <div class="w-64 bg-gray-800 text-white">
            <div class="py-6 px-4">
                <h2 class="text-2xl font-semibold">Developer Dashboard</h2>
                <nav class="mt-4">
                    <ul>
                        <li><a href="/dashboard" class="block py-2 text-gray-300 hover:text-white">Dashboard Overview</a></li>
                        <li><a href="/api" class="block py-2 text-gray-300 hover:text-white">API</a></li>
                        <li><a href="/sandbox" class="block py-2 text-gray-300 hover:text-white">Sandbox Testing</a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-6">
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h1 class="text-3xl font-bold text-gray-800">API Overview</h1>
                <div class="grid grid-cols-2 gap-6 mt-6">
                    <div class="bg-green-500 text-white p-4 rounded-lg">
                        <h2 class="text-xl">{{ $data['total_apis'] }} Total APIs</h2>
                        <p>Total API yang tersedia untuk penggunaan</p>
                    </div>

                    <div class="bg-blue-500 text-white p-4 rounded-lg">
                        <h2 class="text-xl">{{ $data['endpoints'] }} Endpoints</h2>
                        <p>Jumlah endpoints yang tersedia dalam API</p>
                    </div>

                    <div class="bg-yellow-500 text-white p-4 rounded-lg">
                        <h2 class="text-xl">{{ $data['uptime'] }} Uptime</h2>
                        <p>Uptime API yang terjaga 100%</p>
                    </div>

                    <div class="bg-red-500 text-white p-4 rounded-lg">
                        <h2 class="text-xl">{{ $data['avg_response'] }} Avg Response</h2>
                        <p>Waktu rata-rata respon dari API</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
