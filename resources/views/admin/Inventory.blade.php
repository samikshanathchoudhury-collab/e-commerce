<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Inventory Management</title>
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
      <a href ="{{ url('/orders') }}" class="block px-4 py-2 rounded-lg hover:bg-gray-100">Orders</a>
       <a href ="{{ url('/inventory') }}" class="block px-4 py-2 rounded-lg bg-indigo-100 text-indigo-600 font-medium">Inventory</a>
        <a href ="{{ url('/users') }}" class="block px-4 py-2 rounded-lg hover:bg-gray-100">Users</a>
    </nav>
  </aside>

  <!-- MAIN -->
  <main class="flex-1 p-8 overflow-y-auto">

    <!-- HEADER -->
    <div class="mb-6">
      <h1 class="text-2xl font-semibold">Inventory Management</h1>
      <p class="text-gray-500">Track and manage product stock levels</p>
    </div>

    <!-- STATS -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">

      <div class="bg-white p-6 rounded-xl shadow border-l-4 border-indigo-500">
        <p class="text-gray-500 text-sm">Total Products</p>
        <h2 class="text-2xl font-bold mt-2">1</h2>
      </div>

      <div class="bg-white p-6 rounded-xl shadow border-l-4 border-green-500">
        <p class="text-gray-500 text-sm">In Stock</p>
        <h2 class="text-2xl font-bold mt-2">1</h2>
      </div>

      <div class="bg-white p-6 rounded-xl shadow border-l-4 border-yellow-500">
        <p class="text-gray-500 text-sm">Low Stock</p>
        <h2 class="text-2xl font-bold mt-2">0</h2>
      </div>

      <div class="bg-white p-6 rounded-xl shadow border-l-4 border-red-500">
        <p class="text-gray-500 text-sm">Out of Stock</p>
        <h2 class="text-2xl font-bold mt-2">0</h2>
      </div>

    </div>

    <!-- FILTERS -->
    <div class="bg-white p-4 rounded-xl shadow mb-6 grid grid-cols-1 md:grid-cols-4 gap-4">
      <input type="text" placeholder="Search product..."
        class="border rounded-lg px-4 py-2">

      <select class="border rounded-lg px-4 py-2">
        <option>All Status</option>
        <option>In Stock</option>
        <option>Low Stock</option>
        <option>Out of Stock</option>
      </select>

      <button class="bg-black text-white rounded-lg px-4 py-2">
        Search
      </button>

      <button class="border rounded-lg px-4 py-2">
        Reset
      </button>
    </div>

    <!-- INVENTORY TABLE -->
    <div class="bg-white rounded-xl shadow overflow-x-auto mb-8">
      <table class="w-full text-sm">
        <thead class="bg-gray-50 text-gray-600">
          <tr>
            <th class="p-4">Product</th>
            <th>SKU</th>
            <th>Stock</th>
            <th>Status</th>
            <th class="text-center">Action</th>
          </tr>
        </thead>

        <tbody class="divide-y">

          <tr>
            <td class="p-4 font-medium">Black Beads Necklace</td>
            <td>BBN-001</td>
            <td>10</td>
            <td>
              <span class="px-3 py-1 text-xs rounded-full bg-green-100 text-green-700">
                In Stock
              </span>
            </td>
            <td class="text-center">
              <button onclick="updateStock()"
                class="bg-indigo-600 text-white px-3 py-1 rounded-lg text-xs">
                Update
              </button>
            </td>
          </tr>

        </tbody>
      </table>
    </div>

    <!-- UPDATE INVENTORY -->
    <div id="updateSection" class="hidden bg-white p-6 rounded-xl shadow">

      <h2 class="text-lg font-semibold mb-4">Update Inventory</h2>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">

        <div>
          <label class="text-sm text-gray-600">Product</label>
          <input type="text" value="Black Beads Necklace"
            class="w-full border rounded-lg px-4 py-2 mt-1" disabled>
        </div>

        <div>
          <label class="text-sm text-gray-600">SKU</label>
          <input type="text" value="BBN-001"
            class="w-full border rounded-lg px-4 py-2 mt-1" disabled>
        </div>

        <div>
          <label class="text-sm text-gray-600">Stock Quantity</label>
          <input type="number"
            class="w-full border rounded-lg px-4 py-2 mt-1">
        </div>

      </div>

      <div class="flex gap-3">
        <button class="bg-green-600 text-white px-5 py-2 rounded-lg">
          Save Changes
        </button>
        <button onclick="closeUpdate()"
          class="border px-5 py-2 rounded-lg">
          Cancel
        </button>
      </div>

    </div>

  </main>
</div>

<script>
  function updateStock() {
    const sec = document.getElementById('updateSection');
    sec.classList.remove('hidden');
    sec.scrollIntoView({ behavior: 'smooth' });
  }

  function closeUpdate() {
    document.getElementById('updateSection').classList.add('hidden');
  }
</script>

</body>
</html>
