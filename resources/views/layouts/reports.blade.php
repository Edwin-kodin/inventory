<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Pharmacy IMS - Reports</title>
</head>

<body class="bg-gray-100 min-h-screen">

    <aside class="fixed top-0 left-0 h-full w-64 bg-blue-700 text-white flex flex-col">
        <div class="px-6 py-4 text-2xl font-bold border-b border-blue-600">Pharmacy IMS</div>
        <nav class="flex-1 px-5 py-6 space-y-3 overflow-y-auto">
            <a href="/dashboard" class="block py-2 px-3 rounded hover:bg-blue-600">Dashboard</a>
            <a href="/inventory" class="block py-2 px-3 rounded hover:bg-blue-600">Inventory</a>
            <a href="/reports" class="block py-2 px-3 rounded bg-blue-600">Reports</a>
            <a href="/settings" class="block py-2 px-3 rounded hover:bg-blue-600">Settings</a>
        </nav>
        <a href="/" class="m-4 py-2 px-4 bg-red-500 text-center rounded hover:bg-red-600">Logout</a>
    </aside>


    <main class="ml-64 p-6 space-y-8">

        <header class="flex justify-start items-center space-x-4">
            <h1 class="text-2xl font-bold text-gray-800">Reports & Analytics</h1>
            <div class="flex space-x-2">
                <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Export PDF</button>
                <button class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Export Excel</button>
                <button class="bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-700">Export CSV</button>
            </div>
        </header>



        <
            <section class="bg-white p-6 rounded shadow">
            <h2 class="text-xl font-semibold mb-4">Filter Reports</h2>
            <form class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <input type="date" class="border rounded p-2 w-full" placeholder="From Date">
                <input type="date" class="border rounded p-2 w-full" placeholder="To Date">
                <select class="border rounded p-2 w-full">
                    <option>All Categories</option>
                    <option>Pain Relief</option>
                    <option>Antibiotics</option>
                    <option>Supplements</option>
                </select>
                <button type="submit" class="bg-blue-600 text-white rounded px-4 py-2 hover:bg-blue-700">Apply</button>
            </form>
            </section>


            <section class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="bg-white p-4 rounded shadow">
                    <h3 class="text-sm text-gray-600">Total Stock</h3>
                    <p class="text-2xl font-bold text-blue-600">560</p>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <h3 class="text-sm text-gray-600">Low Stock</h3>
                    <p class="text-2xl font-bold text-yellow-600">12</p>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <h3 class="text-sm text-gray-600">Expired Items</h3>
                    <p class="text-2xl font-bold text-red-600">5</p>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <h3 class="text-sm text-gray-600">Stock Value (₵)</h3>
                    <p class="text-2xl font-bold text-green-600">₵12,450</p>
                </div>
            </section>


            <section class="bg-white p-6 rounded shadow">
                <h2 class="text-xl font-semibold mb-4">Inventory Report</h2>
                <table class="w-full border-collapse border border-gray-200">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="border p-2">Drug</th>
                            <th class="border p-2">Category</th>
                            <th class="border p-2">Stock</th>
                            <th class="border p-2">Expiry</th>
                            <th class="border p-2">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-gray-50">
                            <td class="border p-2">Paracetamol</td>
                            <td class="border p-2">Pain Relief</td>
                            <td class="border p-2">200</td>
                            <td class="border p-2">2025-10-10</td>
                            <td class="border p-2 text-green-600 font-medium">In Stock</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="border p-2">Ibuprofen</td>
                            <td class="border p-2">Anti-inflammatory</td>
                            <td class="border p-2">10</td>
                            <td class="border p-2">2025-09-20</td>
                            <td class="border p-2 text-yellow-600 font-medium">Low Stock</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="border p-2">Amoxicillin</td>
                            <td class="border p-2">Antibiotic</td>
                            <td class="border p-2">0</td>
                            <td class="border p-2">2024-12-01</td>
                            <td class="border p-2 text-red-600 font-medium">Expired</td>
                        </tr>
                    </tbody>
                </table>
            </section>


            <section class="bg-white p-6 rounded shadow">
                <h2 class="text-xl font-semibold mb-4">Stock vs Expiry Trends</h2>
                <canvas id="trendChart"></canvas>
            </section>
    </main>


    <script>
        const trendCtx = document.getElementById('trendChart').getContext('2d');
        new Chart(trendCtx, {
            type: 'bar',
            data: {
                labels: ['Paracetamol', 'Ibuprofen', 'Amoxicillin'],
                datasets: [{
                        label: 'Stock Levels',
                        data: [200, 10, 0],
                        backgroundColor: '#3b82f6'
                    },
                    {
                        label: 'Near Expiry',
                        data: [0, 5, 12],
                        backgroundColor: '#ef4444'
                    }
                ]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom'
                    }
                }
            }
        });
    </script>
</body>

</html>