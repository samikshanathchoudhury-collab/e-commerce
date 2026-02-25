<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Products Management</title>
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
      <a href ="{{ url('/products') }}" class="block px-4 py-2 rounded-lg bg-indigo-100 text-indigo-600 font-medium">Products</a>
      <a href ="{{ url('/orders') }}" class="block px-4 py-2 rounded-lg hover:bg-gray-100">Orders</a>
       <a href ="{{ url('/inventory') }}" class="block px-4 py-2 rounded-lg hover:bg-gray-100">Inventory</a>
        <a href ="{{ url('/users') }}" class="block px-4 py-2 rounded-lg hover:bg-gray-100">Users</a>
    </nav>
  </aside>

  <!-- MAIN -->
  <main class="flex-1 p-8 overflow-y-auto">

    <!-- HEADER -->
    <div class="flex justify-between items-center mb-6">
      <div>
        <h1 class="text-2xl font-semibold">Products Management</h1>
        <p class="text-gray-500">Manage your product catalog</p>
      </div>

      <button onclick="openProductForm()"
        class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700">
        + Add New Product
      </button>
    </div>

    <!-- CREATE PRODUCT FORM -->
    <div id="productForm" class="hidden bg-white p-6 rounded-xl shadow mb-8">

      <h2 class="text-lg font-semibold mb-4">Create New Product</h2>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

        <div>
          <label class="text-sm text-gray-600">Product Name</label>
          <input type="text" class="w-full border rounded-lg px-4 py-2 mt-1">
        </div>

        <div>
          <label class="text-sm text-gray-600">Slug</label>
          <input type="text" class="w-full border rounded-lg px-4 py-2 mt-1">
        </div>

        <div class="md:col-span-2">
          <label class="text-sm text-gray-600">Short Description</label>
          <textarea rows="3" class="w-full border rounded-lg px-4 py-2 mt-1"></textarea>
        </div>

        <div>
          <label class="text-sm text-gray-600">Category</label>
          <select class="w-full border rounded-lg px-4 py-2 mt-1">
            <option>Select Category</option>
            <option>Necklaces</option>
            <option>Rings</option>
            <option>Earrings</option>
          </select>
        </div>

        <div>
          <label class="text-sm text-gray-600">Product Image</label>
          <input type="file" class="w-full border rounded-lg px-3 py-2 mt-1">
        </div>

        <div>
          <label class="text-sm text-gray-600">Price (₹)</label>
          <input type="number" class="w-full border rounded-lg px-4 py-2 mt-1">
        </div>

        <div>
          <label class="text-sm text-gray-600">Stock Quantity</label>
          <input type="number" class="w-full border rounded-lg px-4 py-2 mt-1">
        </div>

        <div class="flex items-center gap-2 mt-6">
          <input type="checkbox" checked>
          <label class="text-sm text-gray-600">Publish Product</label>
        </div>

      </div>

      <div class="mt-6 flex gap-3">
        <button class="bg-indigo-600 text-white px-5 py-2 rounded-lg">
          Create Product
        </button>
        <button onclick="closeProductForm()" class="px-5 py-2 border rounded-lg">
          Cancel
        </button>
      </div>

    </div>

    <!-- SEARCH -->
    <div class="bg-white p-4 rounded-xl shadow mb-4">
      <input type="text" placeholder="Search products..."
        class="w-full border rounded-lg px-4 py-2">
    </div>

    <!-- PRODUCTS TABLE -->
    <div class="bg-white rounded-xl shadow overflow-x-auto">
      <table class="w-full text-sm">
        <thead class="bg-gray-50 text-gray-600">
          <tr>
            <th class="p-4">Image</th>
            <th>Product</th>
            <th>Category</th>
            <th>Price</th>
            <th>Status</th>
            <th class="text-center">Actions</th>
          </tr>
        </thead>

        <tbody class="divide-y">

          <tr>
            <td class="p-4">
              <div class="w-12 h-12 bg-gray-200 rounded-lg flex items-center justify-center">Img</div>
            </td>
            <td>Black Beads Necklace</td>
            <td class="text-gray-500">Necklaces</td>
            <td>₹799</td>
            <td>
              <span class="px-3 py-1 text-xs rounded-full bg-green-100 text-green-600">Active</span>
            </td>
            <td class="text-center space-x-3">
              <button class="text-indigo-600">Edit</button>
              <button class="text-red-500">Delete</button>
            </td>
          </tr>

          <tr>
            <td class="p-4">
              <div class="w-12 h-12 bg-gray-200 rounded-lg flex items-center justify-center">Img</div>
            </td>
            <td>Gold Ring</td>
            <td class="text-gray-500">Rings</td>
            <td>₹1,299</td>
            <td>
              <span class="px-3 py-1 text-xs rounded-full bg-gray-200 text-gray-600">Inactive</span>
            </td>
            <td class="text-center space-x-3">
              <button class="text-indigo-600">Edit</button>
              <button class="text-red-500">Delete</button>
            </td>
          </tr>

        </tbody>
      </table>
    </div>

  </main>
</div>

<script>
  function openProductForm() {
    document.getElementById('productForm').classList.remove('hidden');
    document.getElementById('productForm').scrollIntoView({ behavior: 'smooth' });
  }

  function closeProductForm() {
    document.getElementById('productForm').classList.add('hidden');
  }
</script>

</body>
</html>
