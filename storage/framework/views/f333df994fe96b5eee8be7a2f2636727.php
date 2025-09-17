<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <title>Pharmacy Inventory Dashboard</title>
</head>

<body class="bg-gray-100 min-h-screen">

    <aside class="fixed top-0 left-0 h-full w-64 bg-blue-700 text-white flex flex-col">
        <div class="px-6 py-4 text-2xl font-bold border-b border-blue-600">
            Pharmacy IMS
        </div>
        <nav class="flex-1 px-5 py-6 space-y-3 overflow-y-auto">
            <a href="/dashboard" class="block py-2 px-3 rounded bg-blue-600">Dashboard</a>
            <a href="/inventory" class="block py-2 px-3 rounded hover:bg-blue-600">Inventory</a>
            <a href="/reports" class="block py-2 px-3 rounded hover:bg-blue-600">Reports</a>
            <a href="/settings" class="block py-2 px-3 rounded hover:bg-blue-600">Settings</a>
        </nav>
        <a href="/" class="m-4 py-2 px-4 bg-red-500 text-center rounded hover:bg-red-600">Logout</a>
    </aside>


    <main class="ml-64 p-6">

        <header class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Dashboard</h1>
            <div class="flex items-center space-x-3">
                <a href="<?php echo e(route('admin.login')); ?>" class="text-gray-700 hover:underline">
                    Hello, Admin
                </a>
                <img src="https://i.pinimg.com/736x/7b/8c/d8/7b8cd8b068e4b9f80b4bcf0928d7d499.jpg"
                    alt="User" class="w-10 h-10 rounded-full border" />
            </div>

        </header>


        <section class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
            <div class="bg-white p-4 rounded shadow text-center">
                <h2 class="text-lg font-semibold text-gray-700">Total Medicines</h2>
                <p class="mt-6 text-2xl font-bold text-blue-600">120</p>
            </div>
            <div class="bg-white p-4 rounded shadow text-center">
                <h2 class="text-lg font-semibold text-gray-700">Stock Value</h2>
                <p class="mt-6 text-2xl font-bold text-green-600">₵45,000</p>
            </div>
            <div class="bg-white p-4 rounded shadow text-center">
                <h2 class="text-lg font-semibold text-gray-700">Expiring Soon</h2>
                <p class="mt-6 text-2xl font-bold text-yellow-500">8</p>
            </div>
            <div class="bg-white p-4 rounded shadow text-center">
                <h2 class="text-lg font-semibold text-gray-700">Out of Stock</h2>
                <p class="mt-6 text-2xl font-bold text-red-500">5</p>
            </div>
        </section>


        <section class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">

            <div class="bg-white p-6 rounded shadow">
                <h2 class="text-xl font-bold text-gray-800 mb-4">Stock Overview</h2>
                <canvas id="stockChart"></canvas>
            </div>


            <div class="bg-white p-6 rounded shadow">
                <h2 class="text-xl font-bold text-gray-800 mb-4">Category Distribution</h2>
                <canvas id="categoryChart"></canvas>
            </div>
        </section>


        <section class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div class="bg-white p-6 rounded shadow">
                <h2 class="text-xl font-bold text-gray-800 mb-4">Sales Overview</h2>
                <canvas id="salesChart"></canvas>
            </div>
            <div class="bg-white p-6 rounded shadow">
                <h2 class="text-xl font-bold text-gray-800 mb-4">Purchases Overview</h2>
                <canvas id="purchaseChart"></canvas>
            </div>
        </section>


        <section class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">

            <div class="bg-white p-6 rounded shadow">
                <h2 class="text-xl font-bold text-gray-800 mb-4">Top-Selling Products</h2>
                <table class="w-full border-collapse border border-gray-200 text-sm">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="border p-2">Drug</th>
                            <th class="border p-2">Category</th>
                            <th class="border p-2">Sold</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border p-2">Paracetamol</td>
                            <td class="border p-2">Pain Relief</td>
                            <td class="border p-2">500</td>
                        </tr>
                        <tr>
                            <td class="border p-2">Vitamin C</td>
                            <td class="border p-2">Supplement</td>
                            <td class="border p-2">300</td>
                        </tr>
                        <tr>
                            <td class="border p-2">Ibuprofen</td>
                            <td class="border p-2">Anti-inflammatory</td>
                            <td class="border p-2">250</td>
                        </tr>
                    </tbody>
                </table>
            </div>


            <div class="bg-white p-6 rounded shadow">
                <h2 class="text-xl font-bold text-gray-800 mb-4">System Notifications</h2>
                <ul class="space-y-3 text-sm text-gray-700">
                    <li class="p-2 bg-yellow-50 border-l-4 border-yellow-400">⚠️ 5 products are running low</li>
                    <li class="p-2 bg-red-50 border-l-4 border-red-400">❌ 2 products are out of stock</li>
                    <li class="p-2 bg-blue-50 border-l-4 border-blue-400">📦 Pending supplier delivery</li>
                    <li class="p-2 bg-green-50 border-l-4 border-green-400">✅ Last backup completed successfully</li>
                </ul>
            </div>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        new Chart(document.getElementById('stockChart'), {
            type: 'bar',
            data: {
                labels: ['Paracetamol', 'Amoxicillin', 'Ibuprofen', 'Vitamin C'],
                datasets: [{
                    label: 'Stock Quantity',
                    data: [200, 120, 80, 150],
                    backgroundColor: ['#3b82f6', '#10b981', '#f59e0b', '#ef4444'],
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });


        new Chart(document.getElementById('categoryChart'), {
            type: 'pie',
            data: {
                labels: ['Pain Relief', 'Antibiotics', 'Vitamins', 'Diabetes'],
                datasets: [{
                    data: [40, 25, 20, 15],
                    backgroundColor: ['#3b82f6', '#10b981', '#f59e0b', '#ef4444'],
                }]
            }
        });


        new Chart(document.getElementById('salesChart'), {
            type: 'line',
            data: {
                labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                datasets: [{
                    label: 'Sales (₵)',
                    data: [1200, 1500, 900, 1700, 2000, 1800, 2200],
                    borderColor: '#3b82f6',
                    fill: false
                }]
            }
        });


        new Chart(document.getElementById('purchaseChart'), {
            type: 'line',
            data: {
                labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
                datasets: [{
                    label: 'Purchases (₵)',
                    data: [5000, 7000, 6000, 8000],
                    borderColor: '#10b981',
                    fill: false
                }]
            }
        });
    </script>
</body>

</html><?php /**PATH C:\Users\Allotey Edwin\Desktop\pharmacy-ims\resources\views/layouts/dashboard.blade.php ENDPATH**/ ?>