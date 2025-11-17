<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sandbox Testing</title>
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
                    <h1 class="text-3xl font-semibold text-gray-800">Sandbox Testing</h1>
                    <p class="text-gray-500">Test API integrations and check the sandbox environment.</p>
                </div>
                <div>
                    <button class="bg-red-500 text-white py-2 px-6 rounded-lg hover:bg-red-600 flex items-center space-x-2">
                        <i class="fas fa-key"></i>
                        <span>Request Production Access</span>
                    </button>
                </div>
            </div>

            <!-- Statistik Total, Success Rate, Avg Response Time, Today's Tests -->
            <div class="grid grid-cols-4 gap-6 mt-6">
                <div class="p-6 rounded-lg border-2 border-red-500">
                    <h2 class="text-2xl font-semibold">247</h2>
                    <p class="text-sm">Total Tests</p>
                    <p class="text-xs">+12 from last week</p>
                </div>

                <div class="p-6 rounded-lg border-2 border-green-500">
                    <h2 class="text-2xl font-semibold">94.5%</h2>
                    <p class="text-sm">Success Rate</p>
                    <p class="text-xs">94.5% completion</p>
                </div>

                <div class="p-6 rounded-lg border-2 border-blue-500">
                    <h2 class="text-2xl font-semibold">145ms</h2>
                    <p class="text-sm">Avg Response Time</p>
                    <p class="text-xs">Excellent performance</p>
                </div>

                <div class="p-6 rounded-lg border-2 border-indigo-500">
                    <h2 class="text-2xl font-semibold">23</h2>
                    <p class="text-sm">Today's Tests</p>
                    <p class="text-xs">Active testing</p>
                </div>
            </div>

            <!-- API Testing Console and Test Case Progress -->
            <div class="mt-8 grid grid-cols-3 gap-6">
                <!-- API Testing Console (Left Side) -->
                <div class="col-span-2 bg-white shadow-lg rounded-lg p-6">
                    <h2 class="text-2xl font-semibold mb-4">API Testing Console</h2>
                    <div class="space-y-4">
                        <!-- API Endpoint Selection -->
                        <div>
                            <label for="apiEndpoint" class="block text-sm font-medium text-gray-700">Select API Endpoint</label>
                            <select id="apiEndpoint" name="apiEndpoint" class="block w-full mt-2 p-2 border rounded-md bg-gray-50">
                                <option>Payment Gateway API</option>
                                <option>QRIS Integration API</option>
                                <option>Switching Service API</option>
                                <option>Biller Management API</option>
                            </select>
                        </div>

                        <!-- Endpoint Display (POST /api/v2/payment/create) -->
                        <div class="mt-4">
                            <label for="endpoint" class="block text-sm font-medium text-gray-700">Endpoint</label>
                            <input type="text" id="endpoint" name="endpoint" value="POST /api/v2/payment/create" class="block w-full mt-2 p-2 rounded-md bg-gray-50 border" readonly />
                        </div>

                        <!-- Request Body -->
                        <div class="mt-4">
                            <label for="requestBody" class="block text-sm font-medium text-gray-700">Request Body</label>
                            <!-- Copy Button -->
                            <div class="flex justify-end">
                                <button class="text-gray-500 text-sm flex items-center space-x-1 hover:text-gray-700">
                                    <i class="fas fa-copy"></i>
                                    <span>Copy</span>
                                </button>
                            </div>

                            <textarea id="requestBody" name="requestBody" rows="6" class="block w-full mt-2 p-4 rounded-lg bg-gray-900 text-gray-100 text-sm font-mono border border-gray-300">
{
    "merchant_id": "MID123456",
    "amount": 150000,
    "currency": "IDR",
    "customer_email": "test@example.com",
    "description": "Test Payment"
}
                            </textarea>
                        </div>

                        <!-- Run Test Button (Updated Style) -->
                        <button class="w-full mt-2 bg-gradient-to-r from-red-500 to-red-600 text-white py-3 rounded-full flex items-center justify-center space-x-2 shadow-md hover:opacity-90 transition">
                            <i class="fas fa-play"></i>
                            <span>Run Test</span>
                        </button>
                    </div>
                </div>

                <!-- Test Case Progress (Right Side) -->
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <div class="flex justify-between items-center">
                        <h2 class="text-2xl font-semibold mb-4">Test Case Progress</h2>
                        <button class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">Run Test</button>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-center space-x-4">
                            <div class="w-full p-4 border rounded-lg bg-green-50">
                                <div class="flex items-center space-x-2">
                                    <i class="fa fa-check-circle text-green-500"></i>
                                    <h3 class="text-lg">Payment Gateway - Create Transaction</h3>
                                </div>
                                <p class="text-sm">Completed - 120ms</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4">
                            <div class="w-full p-4 border rounded-lg bg-yellow-50">
                                <div class="flex items-center space-x-2">
                                    <i class="fa fa-clock text-yellow-500"></i>
                                    <h3 class="text-lg">QRIS - Generate Dynamic QR</h3>
                                </div>
                                <p class="text-sm">Completed - 98ms</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4">
                            <div class="w-full p-4 border rounded-lg bg-red-50">
                                <div class="flex items-center space-x-2">
                                    <i class="fa fa-times-circle text-red-500"></i>
                                    <h3 class="text-lg">Payment Gateway - Refund Transaction</h3>
                                </div>
                                <p class="text-sm">Failed - 245ms</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 text-center">
                        <button class="text-blue-600 hover:text-blue-800">View All</button>
                    </div>
                </div>
            </div>

            <!-- Testing Tips (Below Test Case Progress) -->
            <div class="bg-white shadow-lg rounded-lg p-6 mt-8">
                <h2 class="text-2xl font-semibold mb-4">Testing Tips</h2>
                <div class="space-y-2">
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-check-circle text-blue-500"></i>
                        <p class="text-sm">Gunakan sandbox API key untuk testing</p>
                    </div>
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-check-circle text-blue-500"></i>
                        <p class="text-sm">Sandbox tidak memproses transaksi real</p>
                    </div>
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-check-circle text-blue-500"></i>
                        <p class="text-sm">Batasi 100 request per menit</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>
</html>
