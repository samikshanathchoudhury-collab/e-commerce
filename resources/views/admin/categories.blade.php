<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Categories Management</title>
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
      <a href ="{{ url('/categories') }}" class="block px-4 py-2 rounded-lg bg-indigo-100 text-indigo-600 font-medium">Categories</a>
      <a href ="{{ url('/products') }}" class="block px-4 py-2 rounded-lg hover:bg-gray-100">Products</a>
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
        <h1 class="text-2xl font-semibold">Categories Management</h1>
        <p class="text-gray-500">Manage product categories</p>
      </div>

      <button onclick="openForm()"
        class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700">
        + Add New Category
      </button>
    </div>

    <!-- CREATE CATEGORY FORM -->
    <div id="createForm" class="hidden bg-white p-6 rounded-xl shadow mb-8">
      <h2 class="text-lg font-semibold mb-4">Create New Category</h2>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

        <div>
          <label class="text-sm text-gray-600">Category Name</label>
          <input type="text" placeholder="Enter category name"
            class="w-full border rounded-lg px-4 py-2 mt-1">
        </div>

        <div>
          <label class="text-sm text-gray-600">Slug</label>
          <input type="text" placeholder="auto-generated-slug"
            class="w-full border rounded-lg px-4 py-2 mt-1">
        </div>

        <div class="md:col-span-2">
          <label class="text-sm text-gray-600">Description</label>
          <textarea rows="3" placeholder="Category description"
            class="w-full border rounded-lg px-4 py-2 mt-1"></textarea>
        </div>

        <div>
          <label class="text-sm text-gray-600">Category Image</label>
          <input type="file" class="w-full border rounded-lg px-3 py-2 mt-1">
        </div>

        <div class="flex items-center gap-2 mt-6">
          <input type="checkbox" checked>
          <label class="text-sm text-gray-600">Active Category</label>
        </div>

      </div>

      <div class="mt-6 flex gap-3">
        <button class="bg-indigo-600 text-white px-5 py-2 rounded-lg">
          Save Category
        </button>
        <button onclick="closeForm()" class="px-5 py-2 border rounded-lg">
          Cancel
        </button>
      </div>
    </div>

    <!-- SEARCH -->
    <div class="bg-white p-4 rounded-xl shadow mb-4">
      <input type="text" placeholder="Search categories..."
        class="w-full border rounded-lg px-4 py-2">
    </div>

    <!-- TABLE (SCROLLABLE) -->
    <div class="bg-white rounded-xl shadow overflow-x-auto">
      <table class="w-full text-sm">
        <thead class="bg-gray-50 text-gray-600">
          <tr>
            <th class="p-4">Image</th>
            <th>Name</th>
            <th>Slug</th>
            <th>Status</th>
            <th class="text-center">Actions</th>
          </tr>
        </thead>

        <tbody class="divide-y">

          <!-- SAMPLE ROWS -->
          <tr>
            <td class="p-4">
              <div class="w-12 h-12 bg-gray-200 rounded-lg flex items-center justify-center">Img</div>
            </td>
            <td>Necklaces</td>
            <td class="text-gray-500">necklaces</td>
            <td><span class="px-3 py-1 text-xs rounded-full bg-green-100 text-green-600">Active</span></td>
            <td class="text-center space-x-3">
              <button class="text-indigo-600">Edit</button>
              <button class="text-red-500">Delete</button>
            </td>
          </tr>

          <tr>
            <td class="p-4"><div class="w-12 h-12 bg-gray-200 rounded-lg flex items-center justify-center">Img</div></td>
            <td>Rings</td>
            <td class="text-gray-500">rings</td>
            <td><span class="px-3 py-1 text-xs rounded-full bg-green-100 text-green-600">Active</span></td>
            <td class="text-center space-x-3">
              <button class="text-indigo-600">Edit</button>
              <button class="text-red-500">Delete</button>
            </td>
          </tr>

          <!-- EXTRA ROWS JUST TO SHOW SCROLL -->
          <tr>
            <td class="p-4"><div class="w-12 h-12 bg-gray-200 rounded-lg flex items-center justify-center">Img</div></td>
            <td>Earrings</td>
            <td class="text-gray-500">earrings</td>
            <td><span class="px-3 py-1 text-xs rounded-full bg-gray-200 text-gray-600">Inactive</span></td>
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

<!-- JS -->
<script>
  function openForm() {
    document.getElementById('createForm').classList.remove('hidden');
    document.getElementById('createForm').scrollIntoView({ behavior: 'smooth' });
  }

  function closeForm() {
    document.getElementById('createForm').classList.add('hidden');
  }
</script>

</body>
</html>
