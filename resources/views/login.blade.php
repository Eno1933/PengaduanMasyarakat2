<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">
    <div class="w-full max-w-sm p-6 bg-white rounded-lg shadow-md">
        <h1 class="mb-6 text-xl font-bold text-center">Login</h1>
        @if ($errors->has('login_error'))
            <div class="mb-4 text-sm text-red-600">{{ $errors->first('login_error') }}</div>
        @endif
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="username" class="block mb-2 text-sm font-medium text-gray-700">Username</label>
                <input type="text" name="username" id="username" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300" placeholder="Masukkan Username" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" id="password" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300" placeholder="Masukkan Password" required>
            </div>
            <button type="submit" class="w-full px-3 py-2 text-white bg-blue-600 rounded-lg hover:bg-blue-700">Login</button>
        </form>
    </div>
</body>
</html>
