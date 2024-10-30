<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  @vite('resources/css/app.css')
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">

  
  <div class="w-full max-w-xs p-6 bg-white rounded-lg shadow-md">
    <form class="space-y-4">
      <div>
        <label for="username" class="block text-sm font-semibold text-gray-700">Username :</label>
        <input type="text" id="username" class="w-full px-4 py-2 mt-1 border rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
      </div>
      <div>
        <label for="password" class="block text-sm font-semibold text-gray-700">Password :</label>
        <input type="password" id="password" class="w-full px-4 py-2 mt-1 border rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
      </div>
      <button type="submit" class="w-full py-2 mt-4 font-semibold text-white bg-green-500 rounded-md hover:bg-green-600 focus:outline-none">LOGIN</button>
    </form>
  </div>

</body>
</html>
