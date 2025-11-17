<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developer Dashboard</title>
    @vite('resources/css/app.css') <!-- Vite untuk menyertakan file CSS yang sudah di-compile -->
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <div class="w-64 bg-gray-800 text-white">
            <div class="py-6 px-4">
                <h2 class="text-2xl font-semibold">Dashboard</h2>
                <nav class="mt-4">
                    <ul>
                        <li><a href="#" class="block py-2 text-gray-300 hover:text-white">API Overview</a></li>
                        <li><a href="#" class="block py-2 text-gray-300 hover:text-white">Sandbox Testing</a></li>
                        <li><a href="#" class="block py-2 text-gray-300 hover:text-white">Test Case Progress</a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-6">
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h1 class="text-3xl font-bold text-gray-800">API Dashboard</h1>

                <!-- Statistik API dan Testing -->
                <div class="grid grid-cols-3 gap-6 mt-6">
                    <!-- Box 1: API Overview -->
                    <div class="bg-green-500 text-white p-4 rounded-lg">
                        <h2 class="text-xl">{{ $data['total_apis'] }} Total APIs</h2>
                        <p>API overview dengan total, uptime, dan response time</p>
                    </div>

                    <!-- Box 2: Test Progress -->
                    <div class="bg-blue-500 text-white p-4 rounded-lg">
                        <h2 class="text-xl">{{ $data['tests_completed'] }} Tests Completed</h2>
                        <p>Progress status test dan tingkat keberhasilan</p>
                    </div>

                    <!-- Box 3: Active API -->
                    <div class="bg-yellow-500 text-white p-4 rounded-lg">
                        <h2 class="text-xl">{{ $data['active_apis'] }} Active APIs</h2>
                        <p>API yang sedang aktif</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
