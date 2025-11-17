<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Catalog</title>
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
                    <h1 class="text-3xl font-semibold text-gray-800">API Catalog</h1>
                    <p class="text-gray-500">Explore all available API services.</p>
                </div>
                <div>
                    <button class="bg-red-500 text-white py-2 px-6 rounded-lg hover:bg-red-600 flex items-center space-x-2">
                        <i class="fas fa-key"></i>
                        <span>Request Production Access</span>
                    </button>
                </div>
            </div>

            <!-- Stats (Total APIs, Endpoints, Uptime, Avg Response) -->
            <div class="grid grid-cols-4 gap-6 mt-6">
                <div class="p-6 rounded-lg border-2 border-red-500">
                    <h2 class="text-2xl font-semibold">4</h2>
                    <p class="text-sm">Total APIs</p>
                </div>

                <div class="p-6 rounded-lg border-2 border-blue-500">
                    <h2 class="text-2xl font-semibold">41</h2>
                    <p class="text-sm">Endpoints</p>
                </div>

                <div class="p-6 rounded-lg border-2 border-green-500">
                    <h2 class="text-2xl font-semibold">100%</h2>
                    <p class="text-sm">Uptime</p>
                </div>

                <div class="p-6 rounded-lg border-2 border-purple-500">
                    <h2 class="text-2xl font-semibold">&lt;200ms</h2>
                    <p class="text-sm">Avg Response</p>
                </div>
            </div>

            <!-- List of APIs -->
            <div class="space-y-6 mt-8">
                <!-- API 1 -->
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h2 class="text-2xl font-semibold text-gray-800">Payment Gateway API <span class="text-blue-500 text-sm">v2.1</span> <span class="text-green-500 text-sm">stable</span></h2>
                    <p class="text-sm text-gray-600 mt-2">Proses pembayaran digital dengan berbagai metode pembayaran.</p>
                    
                    <div class="mt-4 flex justify-between">
                        <!-- Methods Section -->
                        <div class="flex items-center space-x-4">
                            <p class="text-sm font-semibold">Methods</p>
                            <div class="border border-gray-300 p-2 rounded-md text-xs text-gray-700">
                                POST, GET
                            </div>
                        </div>

                        <!-- Authentication Section -->
                        <div class="flex items-center space-x-4">
                            <p class="text-sm font-semibold">Authentication</p>
                            <div class="border border-gray-300 p-2 rounded-md text-xs text-gray-700">
                                API Key
                            </div>
                        </div>

                        <!-- Rate Limit Section -->
                        <div class="flex items-center space-x-4">
                            <p class="text-sm font-semibold">Rate Limit</p>
                            <div class="border border-gray-300 p-2 rounded-md text-xs text-gray-700">
                                1000 req/min
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 flex space-x-4">
                        <a href="#" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">Overview</a>
                        <a href="#" class="bg-gray-100 text-gray-700 py-2 px-4 rounded-lg hover:bg-gray-200">Endpoints</a>
                        <a href="#" class="bg-gray-100 text-gray-700 py-2 px-4 rounded-lg hover:bg-gray-200">Examples</a>
                    </div>
                </div>

                <!-- API 2 -->
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h2 class="text-2xl font-semibold text-gray-800">Switching Service API <span class="text-blue-500 text-sm">v3.0</span> <span class="text-green-500 text-sm">stable</span></h2>
                    <p class="text-sm text-gray-600 mt-2">Routing dan switching untuk multi-channel payment.</p>
                    
                    <div class="mt-4 flex justify-between">
                        <!-- Methods Section -->
                        <div class="flex items-center space-x-4">
                            <p class="text-sm font-semibold">Methods</p>
                            <div class="border border-gray-300 p-2 rounded-md text-xs text-gray-700">
                                POST, GET
                            </div>
                        </div>

                        <!-- Authentication Section -->
                        <div class="flex items-center space-x-4">
                            <p class="text-sm font-semibold">Authentication</p>
                            <div class="border border-gray-300 p-2 rounded-md text-xs text-gray-700">
                                API Key
                            </div>
                        </div>

                        <!-- Rate Limit Section -->
                        <div class="flex items-center space-x-4">
                            <p class="text-sm font-semibold">Rate Limit</p>
                            <div class="border border-gray-300 p-2 rounded-md text-xs text-gray-700">
                                1000 req/min
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 flex space-x-4">
                        <a href="#" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">Overview</a>
                        <a href="#" class="bg-gray-100 text-gray-700 py-2 px-4 rounded-lg hover:bg-gray-200">Endpoints</a>
                        <a href="#" class="bg-gray-100 text-gray-700 py-2 px-4 rounded-lg hover:bg-gray-200">Examples</a>
                    </div>
                </div>

                <!-- API 3 -->
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h2 class="text-2xl font-semibold text-gray-800">QRIS Integration API <span class="text-blue-500 text-sm">v1.5</span> <span class="text-green-500 text-sm">stable</span></h2>
                    <p class="text-sm text-gray-600 mt-2">Integrate QRIS payments and generate QR codes dynamically.</p>
                    
                    <div class="mt-4 flex justify-between">
                        <!-- Methods Section -->
                        <div class="flex items-center space-x-4">
                            <p class="text-sm font-semibold">Methods</p>
                            <div class="border border-gray-300 p-2 rounded-md text-xs text-gray-700">
                                POST, GET
                            </div>
                        </div>

                        <!-- Authentication Section -->
                        <div class="flex items-center space-x-4">
                            <p class="text-sm font-semibold">Authentication</p>
                            <div class="border border-gray-300 p-2 rounded-md text-xs text-gray-700">
                                API Key
                            </div>
                        </div>

                        <!-- Rate Limit Section -->
                        <div class="flex items-center space-x-4">
                            <p class="text-sm font-semibold">Rate Limit</p>
                            <div class="border border-gray-300 p-2 rounded-md text-xs text-gray-700">
                                1000 req/min
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 flex space-x-4">
                        <a href="#" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">Overview</a>
                        <a href="#" class="bg-gray-100 text-gray-700 py-2 px-4 rounded-lg hover:bg-gray-200">Endpoints</a>
                        <a href="#" class="bg-gray-100 text-gray-700 py-2 px-4 rounded-lg hover:bg-gray-200">Examples</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
