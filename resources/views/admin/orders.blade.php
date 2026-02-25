<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Orders Management</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

<div class="flex min-h-screen">

  <!-- SIDEBAR -->
  <aside class="w-64 bg-white shadow-md">
    <div class="p-6 text-xl font-bold text-indigo-600">
      Eve Accessories Admin
    </div>

    <nav class="px-4 space-y-2">
      <a href ="{{ url('/dashboard') }}" class="block px-4 py-2 rounded-lg hover:bg-gray-100">Dashboard</a>
      <a href ="{{ url('/categories') }}" class="block px-4 py-2 rounded-lg hover:bg-gray-100">Categories</a>
      <a href ="{{ url('/products') }}" class="block px-4 py-2 rounded-lg hover:bg-gray-100">Products</a>
      <a href ="{{ url('/orders') }}" class="block px-4 py-2 rounded-lg bg-indigo-100 text-indigo-600 font-medium">Orders</a>
       <a href ="{{ url('/inventory') }}" class="block px-4 py-2 rounded-lg hover:bg-gray-100">Inventory</a>
        <a href ="{{ url('/users') }}" class="block px-4 py-2 rounded-lg hover:bg-gray-100">Users</a>
    </nav>
  </aside>

  <!-- MAIN -->
  <main class="flex-1 p-8 overflow-y-auto">

    <!-- HEADER -->
    <div class="flex justify-between items-center mb-6">
      <div>
        <h1 class="text-2xl font-semibold">Orders Management</h1>
        <p class="text-gray-500">View and manage customer orders</p>
      </div>

      <span class="bg-green-600 text-white px-4 py-2 rounded-lg">
        Export Orders
      </span>
    </div>

    <!-- FILTERS -->
    <div class="bg-white p-4 rounded-xl shadow mb-6 grid grid-cols-1 md:grid-cols-4 gap-4">

      <input type="text" placeholder="Search Order ID / Customer"
        class="border rounded-lg px-4 py-2">

      <select class="border rounded-lg px-4 py-2">
        <option>All Status</option>
        <option>Pending</option>
        <option>Processing</option>
        <option>Completed</option>
        <option>Cancelled</option>
      </select>

      <input type="date" class="border rounded-lg px-4 py-2">
      <input type="date" class="border rounded-lg px-4 py-2">

    </div>

    <!-- ORDERS TABLE -->
    <div class="bg-white rounded-xl shadow overflow-x-auto mb-8">
      <table class="w-full text-sm">
        <thead class="bg-gray-50 text-gray-600">
          <tr>
            <th class="p-4">Order ID</th>
            <th>Customer</th>
            <th>Date</th>
            <th>Total</th>
            <th>Status</th>
            <th class="text-center">Action</th>
          </tr>
        </thead>

        <tbody class="divide-y">

          <tr>
            <td class="p-4 font-medium">#ORD001</td>
            <td>Samiksha</td>
            <td>29 Jan 2026</td>
            <td>₹1,499</td>
            <td>
              <span class="px-3 py-1 text-xs rounded-full bg-yellow-100 text-yellow-700">
                Pending
              </span>
            </td>
            <td class="text-center">
              <button onclick="viewOrder()"
                class="bg-black text-white px-3 py-1 rounded-lg text-xs">
                View
              </button>
            </td>
          </tr>

          <tr>
            <td class="p-4 font-medium">#ORD002</td>
            <td>Riya</td>
            <td>28 Jan 2026</td>
            <td>₹2,199</td>
            <td>
              <span class="px-3 py-1 text-xs rounded-full bg-green-100 text-green-700">
                Completed
              </span>
            </td>
            <td class="text-center">
              <button onclick="viewOrder()"
                class="bg-black text-white px-3 py-1 rounded-lg text-xs">
                View
              </button>
            </td>
          </tr>

        </tbody>
      </table>
    </div>

    <!-- ORDER DETAILS -->
    <div id="orderDetails" class="hidden bg-white p-6 rounded-xl shadow">

      <h2 class="text-lg font-semibold mb-4">Order Details</h2>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
        <div>
          <p class="text-sm text-gray-500">Order ID</p>
          <p class="font-medium">#ORD001</p>
        </div>

        <div>
          <p class="text-sm text-gray-500">Customer</p>
          <p class="font-medium">Samiksha</p>
        </div>

        <div>
          <p class="text-sm text-gray-500">Payment</p>
          <p class="font-medium">Cash on Delivery</p>
        </div>

        <div>
          <p class="text-sm text-gray-500">Status</p>
          <select class="border rounded-lg px-3 py-2">
            <option>Pending</option>
            <option>Processing</option>
            <option>Completed</option>
            <option>Cancelled</option>
          </select>
        </div>
      </div>

      <h3 class="font-semibold mb-2">Products</h3>
      <ul class="text-sm text-gray-600 mb-6">
        <li>• Black Beads Necklace × 1</li>
        <li>• Gold Ring × 1</li>
      </ul>

      <div class="flex gap-3">
        <button class="bg-green-600 text-white px-4 py-2 rounded-lg">
          Update Order
        </button>
        <button onclick="closeOrder()"
          class="border px-4 py-2 rounded-lg">
          Close
        </button>
      </div>

    </div>

  </main>
</div>

<script>
  function viewOrder() {
    const details = document.getElementById('orderDetails');
    details.classList.remove('hidden');
    details.scrollIntoView({ behavior: 'smooth' });
  }

  function closeOrder() {
    document.getElementById('orderDetails').classList.add('hidden');
  }
</script>

</body>
</html>
