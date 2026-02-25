<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Users Management</title>
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
      <a href ="{{ url('/inventory') }}" class="block px-4 py-2 rounded-lg hover:bg-gray-100">Inventory</a>
        <a href ="{{ url('/users') }}" class="block px-4 py-2 rounded-lg bg-indigo-100 text-indigo-600 font-medium">Users</a>
    </nav>
  </aside>

  <!-- MAIN -->
  <main class="flex-1 p-8 overflow-y-auto">

    <!-- HEADER -->
    <div class="mb-6">
      <h1 class="text-2xl font-semibold">Users Management</h1>
      <p class="text-gray-500">View and manage registered users</p>
    </div>

    <!-- STATS -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">

      <div class="bg-white p-6 rounded-xl shadow border-l-4 border-indigo-500">
        <p class="text-sm text-gray-500">Total Users</p>
        <h2 class="text-2xl font-bold mt-2">1</h2>
      </div>

      <div class="bg-white p-6 rounded-xl shadow border-l-4 border-green-500">
        <p class="text-sm text-gray-500">Active Users</p>
        <h2 class="text-2xl font-bold mt-2">1</h2>
      </div>

      <div class="bg-white p-6 rounded-xl shadow border-l-4 border-red-500">
        <p class="text-sm text-gray-500">Blocked Users</p>
        <h2 class="text-2xl font-bold mt-2">0</h2>
      </div>

    </div>

    <!-- SEARCH -->
    <div class="bg-white p-4 rounded-xl shadow mb-6">
      <input type="text" placeholder="Search by name or email"
        class="w-full border rounded-lg px-4 py-2">
    </div>

    <!-- USERS TABLE -->
    <div class="bg-white rounded-xl shadow overflow-x-auto mb-8">
      <table class="w-full text-sm">
        <thead class="bg-gray-50 text-gray-600">
          <tr>
            <th class="p-4">User</th>
            <th>Email</th>
            <th>Role</th>
            <th>Status</th>
            <th class="text-center">Action</th>
          </tr>
        </thead>

        <tbody class="divide-y">

          <tr>
            <td class="p-4 font-medium">Admin User</td>
            <td>admin@eveaccessories.com</td>
            <td>Admin</td>
            <td>
              <span class="px-3 py-1 text-xs rounded-full bg-green-100 text-green-700">
                Active
              </span>
            </td>
            <td class="text-center">
              <button onclick="viewUser()"
                class="bg-black text-white px-3 py-1 rounded-lg text-xs">
                Manage
              </button>
            </td>
          </tr>

        </tbody>
      </table>
    </div>

    <!-- USER DETAILS -->
    <div id="userSection" class="hidden space-y-8">

      <!-- PROFILE INFO -->
      <div class="bg-white p-6 rounded-xl shadow">
        <h2 class="text-lg font-semibold mb-4">Profile Information</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div>
            <label class="text-sm text-gray-600">Name</label>
            <input type="text" value="Admin User"
              class="w-full border rounded-lg px-4 py-2 mt-1">
          </div>

          <div>
            <label class="text-sm text-gray-600">Email</label>
            <input type="email" value="admin@eveaccessories.com"
              class="w-full border rounded-lg px-4 py-2 mt-1">
          </div>
        </div>

        <button class="mt-4 bg-indigo-600 text-white px-4 py-2 rounded-lg">
          Save
        </button>
      </div>

      <!-- UPDATE PASSWORD -->
      <div class="bg-white p-6 rounded-xl shadow">
        <h2 class="text-lg font-semibold mb-4">Update Password</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
          <input type="password" placeholder="Current Password"
            class="border rounded-lg px-4 py-2">
          <input type="password" placeholder="New Password"
            class="border rounded-lg px-4 py-2">
          <input type="password" placeholder="Confirm Password"
            class="border rounded-lg px-4 py-2">
        </div>

        <button class="mt-4 bg-black text-white px-4 py-2 rounded-lg">
          Save
        </button>
      </div>

      <!-- DELETE ACCOUNT -->
      <div class="bg-white p-6 rounded-xl shadow border-l-4 border-red-500">
        <h2 class="text-lg font-semibold text-red-600 mb-2">Delete Account</h2>
        <p class="text-sm text-gray-600 mb-4">
          Once deleted, this user account cannot be recovered.
        </p>

        <button class="bg-red-600 text-white px-4 py-2 rounded-lg">
          Delete Account
        </button>
      </div>

    </div>

  </main>
</div>

<script>
  function viewUser() {
    const sec = document.getElementById('userSection');
    sec.classList.remove('hidden');
    sec.scrollIntoView({ behavior: 'smooth' });
  }
</script>

</body>
</html>
