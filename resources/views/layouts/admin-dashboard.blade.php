<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Pharmacy Admin Dashboard</title>
</head>

<body class="flex bg-gray-100 min-h-screen">

    <!-- Sidebar -->
    <aside class="w-64 bg-blue-600 text-white flex flex-col p-5">
        <h2 class="text-2xl font-bold mb-8">Pharma Admin</h2>
        <nav class="flex flex-col space-y-4">
            <a href="#" class="hover:bg-blue-500 p-2 rounded">📊 Dashboard</a>
            <a href="#" class="hover:bg-blue-500 p-2 rounded">👥 Users & Roles</a>
            <a href="#" class="hover:bg-blue-500 p-2 rounded">📦 Inventory</a>
            <a href="#" class="hover:bg-blue-500 p-2 rounded">💰 Sales</a>
            <a href="#" class="hover:bg-blue-500 p-2 rounded">📑 Reports</a>
            <a href="#" class="hover:bg-blue-500 p-2 rounded">🚨 Notifications</a>
            <a href="#" class="hover:bg-blue-500 p-2 rounded">📚 Suppliers</a>
            <a href="#" class="hover:bg-blue-500 p-2 rounded">⚙️ Settings</a>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-6">
        <!-- Topbar -->
        <header class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Dashboard</h1>
            <div class="flex items-center space-x-3">
                <span class="text-gray-700">Hello, Admin</span>
                <img src="https://i.pinimg.com/736x/7b/8c/d8/7b8cd8b068e4b9f80b4bcf0928d7d499.jpg"
                    alt="User" class="w-10 h-10 rounded-full border" />
                <button onclick="logout()" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Logout</button>
            </div>
        </header>

        <!-- Overview Cards -->
        <section class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <h3 class="text-gray-500">Total Stock Value</h3>
                <p class="text-2xl font-bold text-blue-600">$50,000</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <h3 class="text-gray-500">Low Stock</h3>
                <p class="text-2xl font-bold text-red-600">12</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <h3 class="text-gray-500">Near Expiry</h3>
                <p class="text-2xl font-bold text-yellow-500">8</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <h3 class="text-gray-500">Today’s Sales</h3>
                <p class="text-2xl font-bold text-green-600">$2,450</p>
            </div>
        </section>

        <!-- Charts + Alerts -->
        <section class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
            <!-- Sales Trend -->
            <div class="bg-white p-4 rounded-lg shadow col-span-2">
                <h3 class="text-lg font-semibold mb-2">Sales Trends</h3>
                <canvas id="salesChart" class="w-full h-60"></canvas>
            </div>

            <!-- Alerts -->
            <div class="bg-white p-4 rounded-lg shadow">
                <h3 class="text-lg font-semibold mb-2">Notifications</h3>
                <ul class="space-y-2 text-sm text-gray-700">
                    <li class="p-2 bg-red-100 rounded">⚠️ Low stock: Paracetamol</li>
                    <li class="p-2 bg-yellow-100 rounded">⌛ Near expiry: Amoxicillin</li>
                    <li class="p-2 bg-blue-100 rounded">🛒 Pending supplier order</li>
                    <li class="p-2 bg-green-100 rounded">✅ Backup completed</li>
                </ul>
            </div>
        </section>

        <!-- Modules (placeholders for big features) -->
        <section class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <!-- Users & Roles -->
            <div class="bg-white p-4 rounded-lg shadow">
                <h3 class="text-lg font-semibold mb-2">👥 User & Role Management</h3>
                <p class="text-sm text-gray-600">Add staff, assign roles, view activity logs.</p>
                <button class="mt-3 bg-blue-600 text-white px-3 py-1 rounded">Manage Users</button>
            </div>

            <!-- Inventory -->
            <div class="bg-white p-4 rounded-lg shadow">
                <h3 class="text-lg font-semibold mb-2">📦 Inventory Management</h3>
                <p class="text-sm text-gray-600">Manage medicines, stock levels, batch tracking, and expiries.</p>
                <button class="mt-3 bg-blue-600 text-white px-3 py-1 rounded">Go to Inventory</button>
            </div>

            <!-- Sales -->
            <div class="bg-white p-4 rounded-lg shadow">
                <h3 class="text-lg font-semibold mb-2">💰 Sales & Transactions</h3>
                <p class="text-sm text-gray-600">View sales history, POS, receipts, and discounts.</p>
                <button class="mt-3 bg-blue-600 text-white px-3 py-1 rounded">View Sales</button>
            </div>

            <!-- Reports -->
            <div class="bg-white p-4 rounded-lg shadow">
                <h3 class="text-lg font-semibold mb-2">📑 Reports</h3>
                <p class="text-sm text-gray-600">Generate sales, inventory, and financial reports.</p>
                <button class="mt-3 bg-blue-600 text-white px-3 py-1 rounded">Generate Reports</button>
            </div>
        </section>
    </main>

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Example Sales Chart
        const ctx = document.getElementById("salesChart").getContext("2d");
        new Chart(ctx, {
            type: "line",
            data: {
                labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
                datasets: [{
                    label: "Sales ($)",
                    data: [500, 700, 1200, 800, 950, 1300, 1450],
                    borderColor: "rgb(37, 99, 235)",
                    fill: false,
                    tension: 0.3
                }]
            }
        });

        function logout() {
            alert("Logging out...");
            window.location.href = "admin-login.html"; // back to login
        }
    </script>

</body>

</html>