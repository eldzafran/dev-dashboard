<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Overview</title>
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
                <h1 class="text-3xl font-bold text-gray-800">Dashboard Overview</h1>
                <!-- Statistik Total, Success Rate, Active APIs, Last Test Date -->
                <div class="grid grid-cols-4 gap-6 mt-6">
                    <div class="p-6 rounded-lg border-2 border-red-500">
                        <h2 class="text-2xl font-semibold">{{ $data['total_tests'] }}</h2>
                        <p class="text-sm">Total Tests</p>
                        <p class="text-xs">+12 from last week</p>
                    </div>

                    <div class="p-6 rounded-lg border-2 border-green-500">
                        <h2 class="text-2xl font-semibold">{{ $data['success_rate'] }}</h2>
                        <p class="text-sm">Success Rate</p>
                    </div>

                    <div class="p-6 rounded-lg border-2 border-blue-500">
                        <h2 class="text-2xl font-semibold">{{ $data['active_apis'] }}</h2>
                        <p class="text-sm">Active APIs</p>
                        <p class="text-xs">Operational all systems</p>
                    </div>

                    <div class="p-6 rounded-lg border-2 border-indigo-500">
                        <h2 class="text-2xl font-semibold">{{ $data['last_test_date'] }}</h2>
                        <p class="text-sm">Last Test Date</p>
                        <p class="text-xs">Active testing session</p>
                    </div>
                </div>

                <!-- Test Case Progress and Active API Services in Separate Containers -->
                <div class="mt-8 grid grid-cols-2 gap-6">
                    <!-- Test Case Progress (Left Side) -->
                    <div class="bg-white shadow-lg rounded-lg p-6">
                        <h2 class="text-2xl font-semibold mb-4">Test Case Progress</h2>
                        <div class="space-y-4">
                            @foreach($data['test_case_progress'] as $test)
                                <div class="flex items-center space-x-4">
                                    <div class="w-full p-4 border rounded-lg {{ $test['result'] == 'success' ? 'bg-green-200' : 'bg-red-200' }}">
                                        <h3 class="text-lg">{{ $test['name'] }}</h3>
                                        <p class="text-sm">{{ $test['status'] }} - {{ $test['time'] }}</p>
                                        <div class="mt-2 bg-gray-300 rounded-full h-2">
                                            <div class="bg-green-500 h-2 rounded-full" style="width: 100%"></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Active API Services (Right Side) -->
                    <div class="bg-white shadow-lg rounded-lg p-6">
                        <h2 class="text-2xl font-semibold mb-4">Active API Services</h2>
                        <div class="space-y-4">
                            @foreach($data['active_api_services'] as $service)
                                <div class="flex items-center space-x-4">
                                    <div class="w-full p-4 border rounded-lg bg-blue-100">
                                        <h3 class="text-lg">{{ $service['name'] }} (v{{ $service['version'] }})</h3>
                                        <p class="text-sm">{{ $service['calls'] }} calls - Status: <span class="text-green-500">{{ $service['status'] }}</span></p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Request Production Access Button -->
                <div class="mt-6">
                    <button class="bg-red-500 text-white py-2 px-6 rounded-lg hover:bg-red-600">Request Production Access</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
