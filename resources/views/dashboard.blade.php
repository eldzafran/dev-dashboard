<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Overview</title>
    @vite('resources/css/app.css')
    <!-- Font Awesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <div class="w-64 bg-gray-800 text-white">
            <div class="py-6 px-4 flex items-center">
                <!-- "Jalin" Font Text -->
                <h2 class="text-3xl font-semibold text-white">Jalin</h2>
            </div>
            <nav class="mt-6">
                <ul>
                    <!-- Dashboard Overview Menu -->
                    <li>
                        <a href="/dashboard" 
                           class="block py-3 px-4 text-sm text-gray-300 hover:bg-red-500 hover:text-white 
                                  {{ request()->is('dashboard') ? 'bg-red-500 text-white' : '' }}">
                            <i class="fas fa-tachometer-alt mr-2"></i> Dashboard Overview
                        </a>
                    </li>
                    <!-- API Catalog Menu -->
                    <li>
                        <a href="/api" 
                           class="block py-3 px-4 text-sm text-gray-300 hover:bg-red-500 hover:text-white 
                                  {{ request()->is('api') ? 'bg-red-500 text-white' : '' }}">
                            <i class="fas fa-cogs mr-2"></i> API Catalog
                        </a>
                    </li>
                    <!-- Sandbox Testing Menu -->
                    <li>
                        <a href="/sandbox" 
                           class="block py-3 px-4 text-sm text-gray-300 hover:bg-red-500 hover:text-white 
                                  {{ request()->is('sandbox') ? 'bg-red-500 text-white' : '' }}">
                            <i class="fas fa-box-open mr-2"></i> Sandbox Testing
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-6">
            <!-- Navbar -->
            <div class="flex items-center justify-between bg-white shadow-md p-4 mb-6">
                <div>
                    <h1 class="text-3xl font-semibold text-gray-800">Dashboard Overview</h1>
                    <p class="text-gray-500">Monitor your API integration and sandbox testing progress</p>
                </div>
                <div>
                    <button class="bg-red-500 text-white py-2 px-6 rounded-lg hover:bg-red-600 flex items-center space-x-2">
                        <i class="fas fa-key"></i>
                        <span>Request Production Access</span>
                    </button>
                </div>
            </div>

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
                    <div class="flex justify-between items-center">
                        <h2 class="text-2xl font-semibold mb-4">Test Case Progress</h2>
                        <!-- Run Test Button -->
                        <button class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">
                            Run Test
                        </button>
                    </div>
                    <div class="space-y-4">
                        @foreach($data['test_case_progress'] as $test)
                            <div class="flex items-center space-x-4">
                                <div class="w-full p-4 border rounded-lg {{ $test['result'] == 'success' ? 'bg-green-50' : ($test['result'] == 'failed' ? 'bg-red-50' : 'bg-yellow-50') }}">
                                    <div class="flex items-center space-x-2">
                                        @if($test['result'] == 'success')
                                            <i class="fa fa-check-circle text-green-500"></i>
                                        @elseif($test['result'] == 'failed')
                                            <i class="fa fa-times-circle text-red-500"></i>
                                        @else
                                            <i class="fa fa-clock text-yellow-500"></i>
                                        @endif
                                        <h3 class="text-lg">{{ $test['name'] }}</h3>
                                    </div>
                                    <p class="text-sm">{{ $test['status'] }} - {{ $test['time'] }}</p>
                                    <div class="mt-2 bg-gray-300 rounded-full h-2">
                                        <div class="bg-green-500 h-2 rounded-full" style="width: 100%"></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- View All Button -->
                    <div class="mt-4 text-center">
                        <button class="text-blue-600 hover:text-blue-800">View All</button>
                    </div>
                </div>

                <!-- Active API Services (Right Side) -->
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <div class="flex justify-between items-center">
                        <h2 class="text-2xl font-semibold mb-4">Active API Services</h2>
                        <!-- View All Button -->
                        <button class="text-blue-600 hover:text-blue-800">View All</button>
                    </div>
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
</body>
</html>
