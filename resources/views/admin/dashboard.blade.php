<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

<div class="flex min-h-screen">

  <!-- SIDEBAR -->
  <aside class="w-64 bg-white shadow-md">
    <div class="p-6 text-xl font-bold text-indigo-600">
      Eve Accessories Admin
    </div>

    <nav class="px-4 space-y-2">
      <a href ="{{ url('/dashboard') }}" class="block px-4 py-2 rounded-lg bg-indigo-100 text-indigo-600 font-medium">Dashboard</a>
      <a href ="{{ url('/categories') }}" class="block px-4 py-2 rounded-lg hover:bg-gray-100">Categories</a>
      <a href ="{{ url('/products') }}" class="block px-4 py-2 rounded-lg hover:bg-gray-100">Products</a>
      <a href ="{{ url('/orders') }}" class="block px-4 py-2 rounded-lg hover:bg-gray-100">Orders</a>
       <a href ="{{ url('/inventory') }}" class="block px-4 py-2 rounded-lg hover:bg-gray-100">Inventory</a>
        <a href ="{{ url('/users') }}" class="block px-4 py-2 rounded-lg hover:bg-gray-100">Users</a>
    </nav>
  </aside>

  <!-- MAIN CONTENT -->
  <main class="flex-1 p-8">

    <!-- HEADING -->
    <div class="mb-8">
      <h1 class="text-2xl font-semibold">Dashboard Overview</h1>
      <p class="text-gray-500">Welcome back, Admin 👋</p>
    </div>

    <!-- STATS CARDS -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">

      <div class="bg-white p-6 rounded-xl shadow">
        <p class="text-gray-500">Total Revenue</p>
        <h2 class="text-2xl font-bold mt-2">₹0.00</h2>
        <p class="text-sm text-gray-400 mt-1">This month</p>
      </div>

      <div class="bg-white p-6 rounded-xl shadow">
        <p class="text-gray-500">Total Orders</p>
        <h2 class="text-2xl font-bold mt-2">0</h2>
        <p class="text-sm text-gray-400 mt-1">Pending / Processing</p>
      </div>

      <div class="bg-white p-6 rounded-xl shadow">
        <p class="text-gray-500">Total Products</p>
        <h2 class="text-2xl font-bold mt-2">1</h2>
        <p class="text-sm text-gray-400 mt-1">Active in stock</p>
      </div>

      <div class="bg-white p-6 rounded-xl shadow">
        <p class="text-gray-500">Total Users</p>
        <h2 class="text-2xl font-bold mt-2">1</h2>
        <p class="text-sm text-gray-400 mt-1">Registered</p>
      </div>

    </div>

    <!-- MIDDLE SECTION -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">

      <!-- LOW STOCK -->
      <div class="bg-white p-6 rounded-xl shadow lg:col-span-2">
        <h2 class="font-semibold text-lg mb-4">Low Stock Alert</h2>
        <p class="text-gray-500 text-sm">All products are well stocked ✅</p>
      </div>

      <!-- QUICK STATS -->
      <div class="bg-white p-6 rounded-xl shadow">
        <h2 class="font-semibold text-lg mb-4">Quick Status</h2>
        <ul class="text-sm text-gray-600 space-y-2">
          <li>✔ No pending orders</li>
          <li>✔ Inventory stable</li>
          <li>✔ System running fine</li>
        </ul>
      </div>

    </div>

    <!-- RECENT ORDERS -->
    <div class="bg-white p-6 rounded-xl shadow mb-8">
      <h2 class="font-semibold text-lg mb-4">Recent Orders</h2>

      <table class="w-full text-sm text-left">
        <thead>
          <tr class="text-gray-500 border-b">
            <th class="py-2">Order ID</th>
            <th>Customer</th>
            <th>Status</th>
            <th>Total</th>
          </tr>
        </thead>
        <tbody>
          <tr class="border-b">
            <td class="py-3">#---</td>
            <td>---</td>
            <td class="text-gray-400">No orders yet</td>
            <td>₹0.00</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- TOP SELLING PRODUCTS -->
    <div class="bg-white p-6 rounded-xl shadow">
      <h2 class="font-semibold text-lg mb-4">Top Selling Products</h2>
      <p class="text-gray-500 text-sm">No data available</p>
    </div>

  </main>
</div>

</body>
</html>
