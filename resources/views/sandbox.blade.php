<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sandbox Testing</title>
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
                <h1 class="text-3xl font-bold text-gray-800">Sandbox Testing</h1>
                <div class="grid grid-cols-2 gap-6 mt-6">
                    <div class="bg-green-500 text-white p-4 rounded-lg">
                        <h2 class="text-xl">{{ $data['total_tests'] }} Total Tests</h2>
                        <p>Jumlah total tes yang telah dilakukan</p>
                    </div>

                    <div class="bg-blue-500 text-white p-4 rounded-lg">
                        <h2 class="text-xl">{{ $data['success_rate'] }} Success Rate</h2>
                        <p>Persentase keberhasilan tes di sandbox</p>
                    </div>

                    <div class="bg-yellow-500 text-white p-4 rounded-lg">
                        <h2 class="text-xl">{{ $data['avg_response_time'] }} Avg Response Time</h2>
                        <p>Waktu respons rata-rata dari pengujian sandbox</p>
                    </div>

                    <div class="bg-red-500 text-white p-4 rounded-lg">
                        <h2 class="text-xl">{{ $data['active_tests'] }} Active Tests</h2>
                        <p>Jumlah tes yang sedang aktif saat ini</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
