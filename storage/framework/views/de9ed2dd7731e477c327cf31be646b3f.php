<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Admin Login</title>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h1 class="text-2xl font-bold text-center text-blue-600 mb-6">Admin Login</h1>

        <form onsubmit="return adminLogin(event)">
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Username</label>
                <input type="text" id="adminUser" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:ring-blue-200" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Password</label>
                <input type="password" id="adminPass" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:ring-blue-200" required>
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition">
                Login
            </button>
        </form>
        <p class="text-sm text-center mt-4 text-gray-600">
            Go back to
            <a href="<?php echo e(route('dashboard')); ?>" class="text-blue-600 hover:underline">Dashboard</a>
        </p>

    </div>

    <script>
        function adminLogin(event) {
            event.preventDefault();

            const username = document.getElementById("adminUser").value;
            const password = document.getElementById("adminPass").value;

            // Example simple check (you can replace with backend check)
            if (username === "admin" && password === "admin123") {
                alert("Welcome Admin!");
                window.location.href = "admin-dashboard.html"; // Create this page later
            } else {
                alert("Invalid admin credentials!");
            }
        }
    </script>
</body>

</html><?php /**PATH C:\Users\Allotey Edwin\Desktop\pharmacy-ims\resources\views/layouts/admin-login.blade.php ENDPATH**/ ?>