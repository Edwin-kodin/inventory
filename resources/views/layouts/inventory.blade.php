<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <title>Pharmacy Inventory</title>
</head>

<body class="bg-gray-100 min-h-screen">
    <!-- Sidebar -->
    <aside class="fixed top-0 left-0 h-full w-64 bg-blue-700 text-white flex flex-col">
        <div class="px-6 py-4 text-2xl font-bold border-b border-blue-600">
            Pharmacy IMS
        </div>
        <nav class="flex-1 px-5 py-6 space-y-3 overflow-y-auto">
            <a href="/dashboard" class="block py-2 px-3 rounded hover:bg-blue-600">Dashboard</a>
            <a href="/inventory" class="block py-2 px-3 rounded bg-blue-600">Inventory</a>
            <a href="/reports" class="block py-2 px-3 rounded hover:bg-blue-600">Reports</a>
            <a href="/settings" class="block py-2 px-3 rounded hover:bg-blue-600">Settings</a>
        </nav>
        <a href="/" class="m-4 py-2 px-4 bg-red-500 text-center rounded hover:bg-red-600">Logout</a>
    </aside>

    <!-- Main Content -->
    <main class="ml-64 p-6">
        <!-- Topbar -->
        <header class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Inventory</h1>
            <button onclick="document.getElementById('addProductModal').classList.remove('hidden')"
                class="bg-blue-600 text-white px-4 py-2 rounded shadow hover:bg-blue-700">
                <i class="fa fa-plus mr-2"></i> Add New Drug
            </button>
        </header>

        <!-- Inventory Table -->
        <section class="bg-white p-6 rounded shadow mb-8">
            <h2 class="text-xl font-bold text-gray-800 mb-4">All Medicines</h2>
            <table class="w-full border-collapse border border-gray-200 text-sm">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="border p-2">#</th>
                        <th class="border p-2">Drug Name</th>
                        <th class="border p-2">Category</th>
                        <th class="border p-2">Supplier</th>
                        <th class="border p-2">Batch No.</th>
                        <th class="border p-2">Mfg Date</th>
                        <th class="border p-2">Expiry Date</th>
                        <th class="border p-2">Stock</th>
                        <th class="border p-2">Cost Price (₵)</th>
                        <th class="border p-2">Selling Price (₵)</th>
                        <th class="border p-2">Status</th>
                        <th class="border p-2 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example Row -->
                    <tr>
                        <td class="border p-2">1</td>
                        <td class="border p-2">Paracetamol</td>
                        <td class="border p-2">Pain Relief</td>
                        <td class="border p-2">Ernest Chemists</td>
                        <td class="border p-2">B123</td>
                        <td class="border p-2">2024-05-01</td>
                        <td class="border p-2">2026-05-01</td>
                        <td class="border p-2">200</td>
                        <td class="border p-2">₵3.00</td>
                        <td class="border p-2">₵5.00</td>
                        <td class="border p-2">
                            <span class="px-2 py-1 text-xs bg-green-100 text-green-700 rounded">In Stock</span>
                        </td>
                        <td class="border p-2 text-center space-x-2">
                            <button class="text-blue-600 hover:underline"><i class="fa fa-pen"></i></button>
                            <button class="text-red-600 hover:underline"><i class="fa fa-trash"></i></button>
                            <button class="text-yellow-600 hover:underline"><i class="fa fa-box"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>

        <!-- Analytics (Reports Placeholder) -->
        <section class="bg-white p-6 rounded shadow">
            <h2 class="text-xl font-bold text-gray-800 mb-4">Reports & Analytics</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-gray-50 p-4 rounded shadow text-center">
                    📊 Stock Movement Report (Inflow vs Outflow)
                </div>
                <div class="bg-gray-50 p-4 rounded shadow text-center">
                    ⏰ Expiry Alerts (Near-expiry & Expired Drugs)
                </div>
            </div>
        </section>
    </main>

    <!-- Add Product Modal -->
    <div id="addProductModal"
        class="hiddens fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
        <div class="bg-white rounded-lg w-1/2 p-6">
            <h2 class="text-xl font-bold mb-4">Add New Drug</h2>
            <form class="space-y-3">
                <input type="text" placeholder="Drug Name" class="w-full border p-2 rounded">
                <input type="text" placeholder="Category" class="w-full border p-2 rounded">
                <input type="text" placeholder="Supplier" class="w-full border p-2 rounded">
                <input type="text" placeholder="Batch No." class="w-full border p-2 rounded">
                <div class="grid grid-cols-2 gap-3">
                    <input type="date" class="border p-2 rounded">
                    <input type="date" class="border p-2 rounded">
                </div>
                <div class="grid grid-cols-2 gap-3">
                    <input type="number" placeholder="Cost Price (₵)" class="border p-2 rounded">
                    <input type="number" placeholder="Selling Price (₵)" class="border p-2 rounded">
                </div>
                <input type="number" placeholder="Stock Quantity" class="w-full border p-2 rounded">
                <div class="flex justify-end space-x-2">
                    <button type="button" onclick="document.getElementById('addProductModal').classList.add('hidden')"
                        class="bg-gray-300 px-4 py-2 rounded">Cancel</button>
                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Save</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>