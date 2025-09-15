<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Pharmacy Inventory Dashboard</title>
</head>

<body class="flex bg-gray-100 min-h-screen">
    <!-- Sidebar -->
    <aside class="w-64 bg-blue-700 text-white flex flex-col">
        <div class="px-6 py-4 text-2xl font-bold border-b border-blue-600">
            Pharmacy IMS
        </div>
        <nav class="flex-1 px-4 py-6 space-y-3">
            <a href="#" class="block py-2 px-3 rounded hover:bg-blue-600">Dashboard</a>
            <a href="#" class="block py-2 px-3 rounded hover:bg-blue-600">Inventory</a>
            <a href="#" class="block py-2 px-3 rounded hover:bg-blue-600">Reports</a>
            <a href="#" class="block py-2 px-3 rounded hover:bg-blue-600">Settings</a>
        </nav>
        <a href="login.html" class="m-4 py-2 px-4 bg-red-500 text-center rounded hover:bg-red-600">Logout</a>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-6">
        <!-- Topbar -->
        <header class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Dashboard</h1>
            <div class="flex items-center space-x-3">
                <span class="text-gray-700">Hello, Admin</span>
                <img src="https://via.placeholder.com/40" alt="User" class="w-10 h-10 rounded-full border" />
            </div>
        </header>

        <!-- Analytics Cards -->
        <section class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
            <div class="bg-white p-4 rounded shadow text-center">
                <h2 class="text-lg font-semibold text-gray-700">Total Medicines</h2>
                <p class="text-2xl font-bold text-blue-600">120</p>
            </div>
            <div class="bg-white p-4 rounded shadow text-center">
                <h2 class="text-lg font-semibold text-gray-700">Stock Value</h2>
                <p class="text-2xl font-bold text-green-600">$45,000</p>
            </div>
            <div class="bg-white p-4 rounded shadow text-center">
                <h2 class="text-lg font-semibold text-gray-700">Expiring Soon</h2>
                <p class="text-2xl font-bold text-yellow-500">8</p>
            </div>
            <div class="bg-white p-4 rounded shadow text-center">
                <h2 class="text-lg font-semibold text-gray-700">Out of Stock</h2>
                <p class="text-2xl font-bold text-red-500">5</p>
            </div>
        </section>

        <!-- Inventory Table -->
        <section class="bg-white p-6 rounded shadow mb-6">
            <h2 class="text-xl font-bold text-gray-800 mb-4">Inventory</h2>
            <table class="w-full border-collapse border border-gray-200">
                <thead>
                    <tr class="bg-gray-100 text-left">
                        <th class="border border-gray-200 p-2">#</th>
                        <th class="border border-gray-200 p-2">Medicine Name</th>
                        <th class="border border-gray-200 p-2">Category</th>
                        <th class="border border-gray-200 p-2">Stock</th>
                        <th class="border border-gray-200 p-2">Expiry Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border border-gray-200 p-2">1</td>
                        <td class="border border-gray-200 p-2">Paracetamol</td>
                        <td class="border border-gray-200 p-2">Pain Relief</td>
                        <td class="border border-gray-200 p-2">200</td>
                        <td class="border border-gray-200 p-2">2026-01-12</td>
                    </tr>
                    <tr>
                        <td class="border border-gray-200 p-2">2</td>
                        <td class="border border-gray-200 p-2">Amoxicillin</td>
                        <td class="border border-gray-200 p-2">Antibiotic</td>
                        <td class="border border-gray-200 p-2">120</td>
                        <td class="border border-gray-200 p-2">2025-11-05</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <!-- Reports -->
        <section class="bg-white p-6 rounded shadow">
            <h2 class="text-xl font-bold text-gray-800 mb-4">Reports</h2>
            <p class="text-gray-600 mb-4">Generate detailed reports about your pharmacy inventory.</p>
            <button class="bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700">Generate Report</button>
        </section>
    </main>
</body>

</html>