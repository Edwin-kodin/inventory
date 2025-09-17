<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Pharmacy IMS - Reports</title>
</head>

<body class="bg-gray-100 min-h-screen font-sans">
    <!-- Sidebar -->
    <aside class="fixed top-0 left-0 h-full w-64 bg-blue-700 text-white flex flex-col">
        <div class="px-6 py-4 text-2xl font-bold border-b border-blue-600">Pharmacy IMS</div>
        <nav class="flex-1 px-5 py-6 space-y-3">
            <a href="/dashboard" class="block py-2 px-3 rounded hover:bg-blue-600">Dashboard</a>
            <a href="/inventory" class="block py-2 px-3 rounded hover:bg-blue-600">Inventory</a>
            <a href="/reports" class="block py-2 px-3 rounded bg-blue-600 font">Reports</a>
            <a href="/settings" class="block py-2 px-3 rounded hover:bg-blue-600-semibold">Settings</a>
        </nav>
        <a href="/" class="m-4 py-2 px-4 bg-red-500 text-center rounded hover:bg-red-600">Logout</a>
    </aside>

    <!-- Main Content -->
    <main class="ml-64 p-6">
        <header class="mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Reports & Analytics</h1>
            <p class="text-gray-600">Generate insights and export reports for better inventory decisions.</p>
        </header>

        <!-- Reports Grid -->
        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Stock Level -->
            <div class="bg-white p-5 rounded shadow hover:shadow-lg transition">
                <h2 class="text-lg font-semibold mb-2">📊 Stock Level Report</h2>
                <p class="text-sm text-gray-600">View available quantities, low stock & out of stock items.</p>
                <canvas id="stockChart" class="my-3" height="300"></canvas>
                <div class="mt-auto justify-center">
                    <button class="mt-3 bg-yellow-600 text-white px-3 py-1 rounded text-sm hover:bg-blue-700">
                        Export CSV
                    </button>
                </div>

            </div>

            <!-- Inventory Valuation -->
            <div class="bg-white p-5 rounded shadow hover:shadow-lg transition flex flex-col">
                <h2 class="text-lg font-semibold mb-2">💰 Inventory Valuation</h2>
                <p class="text-sm text-gray-600">Total value of stock by cost or method (FIFO/LIFO).</p>
                <canvas id="valueChart" class="my-10 flex-grow" height="300"></canvas>
                <div class="mt-10 flex justify-center">
                    <button class="bg-green-600 text-white px-3 py-1 rounded text-sm hover:bg-green-700">
                        Export PDF
                    </button>
                </div>
            </div>


            <!-- Sales Report -->
            <div class="bg-white p-5 rounded shadow hover:shadow-lg transition">
                <h2 class="text-lg font-semibold mb-2">🛒 Sales Report</h2>
                <p class="text-sm text-gray-600">Track sales by product, category, or date.</p>
                <canvas id="salesChart" class="my-10 flex-grow" height=300></canvas>
                <div class="mt-10 flex justify-center">
                    <button class="mt-10 bg-indigo-600 text-white px-3 py-1 rounded text-sm hover:bg-indigo-700">Export Excel</button>
                </div>
            </div>

            <!-- Expiry Report -->
            <div class="bg-white p-5 rounded shadow hover:shadow-lg transition">
                <h2 class="text-lg font-semibold mb-2">⏰ Expiry Report</h2>
                <p class="text-sm text-gray-600">List products close to expiry or already expired.</p>
                <ul class="mt-3 text-sm list-disc pl-5 text-red-600">
                    <li>Amoxicillin - Expired</li>
                    <li>Ibuprofen - Expires Soon</li>
                </ul>
                <button class="mt-3 bg-red-600 text-white px-3 py-1 rounded text-sm hover:bg-red-700">Export CSV</button>
            </div>

            <!-- Damaged/Lost Stock -->
            <div class="bg-white p-5 rounded shadow hover:shadow-lg transition">
                <h2 class="text-lg font-semibold mb-2">⚠️ Damaged/Lost Stock</h2>
                <p class="text-sm text-gray-600">Track wastage, theft, or damaged drugs.</p>
                <canvas id="damageChart" class="my-10 flex-grow"></canvas>
                <div class="mt-auto flex justify-center">
                    <button class="mt-3 bg-yellow-600 text-white px-3 py-1 rounded text-sm hover:bg-yellow-700">Export PDF</button>
                </div>
            </div>

            <!-- Supplier Performance -->
            <div class="bg-white p-5 rounded shadow hover:shadow-lg transition">
                <h2 class="text-lg font-semibold mb-2">🚚 Supplier Performance</h2>
                <p class="text-sm text-gray-600">Evaluate suppliers on delivery & cost efficiency.</p>
                <canvas id="supplierChart" class="my-10 flex-grow" height="300"></canvas>
                <div class="mt-auto flex justify-center">
                    <button class="mt-3 bg-purple-600 text-white px-3 py-1 rounded text-sm hover:bg-purple-700">Export Excel</button>
                </div>
            </div>
        </section>
    </main>

    <!-- Chart Scripts -->
    <script>
        // Stock Chart
        new Chart(document.getElementById('stockChart'), {
            type: 'pie',
            data: {
                labels: ['In Stock', 'Low Stock', 'Out of Stock'],
                datasets: [{
                    data: [350, 45, 12],
                    backgroundColor: ['#22c55e', '#facc15', '#ef4444']
                }]
            }
        });

        // Inventory Valuation Chart
        new Chart(document.getElementById('valueChart'), {
            type: 'bar',
            data: {
                labels: ['FIFO', 'LIFO', 'Weighted Avg'],
                datasets: [{
                    data: [12000, 11000, 11500],
                    backgroundColor: '#3b82f6'
                }]
            }
        });

        // Sales Chart
        new Chart(document.getElementById('salesChart'), {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr'],
                datasets: [{
                    label: 'Sales (₵)',
                    data: [5000, 7000, 6500, 9000],
                    borderColor: '#6366f1',
                    fill: false
                }]
            }
        });

        // Damage Chart
        new Chart(document.getElementById('damageChart'), {
            type: 'doughnut',
            data: {
                labels: ['Damaged', 'Lost'],
                datasets: [{
                    data: [5, 2],
                    backgroundColor: ['#f59e0b', '#ef4444']
                }]
            }
        });

        // Supplier Performance
        new Chart(document.getElementById('supplierChart'), {
            type: 'bar',
            data: {
                labels: ['Supplier A', 'Supplier B', 'Supplier C'],
                datasets: [{
                    label: 'On-time %',
                    data: [95, 88, 76],
                    backgroundColor: '#8b5cf6'
                }]
            }
        });
    </script>
</body>

</html><?php /**PATH C:\Users\Allotey Edwin\Desktop\pharmacy-ims\resources\views/layouts/settings.blade.php ENDPATH**/ ?>