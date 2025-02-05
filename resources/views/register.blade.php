<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-6 rounded-lg shadow-md w-full max-w-md">
        <h2 class="text-2xl font-bold text-center mb-4">Register</h2>
        @if ($errors->any())
            <div class="mb-4">
                <ul class="text-red-500">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('register') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="nik" class="block font-semibold">NIK</label>
                <input type="text" name="nik" id="nik" value="{{ old('nik') }}" required
                    class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label for="nama" class="block font-semibold">Nama</label>
                <input type="text" name="nama" id="nama" value="{{ old('nama') }}" required
                    class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label for="username" class="block font-semibold">Username</label>
                <input type="text" name="username" id="username" value="{{ old('username') }}" required
                    class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label for="password" class="block font-semibold">Password</label>
                <input type="password" name="password" id="password" required
                    class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label for="password_confirmation" class="block font-semibold">Konfirmasi Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required
                    class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label for="telp" class="block font-semibold">No. Telepon</label>
                <input type="text" name="telp" id="telp" value="{{ old('telp') }}"
                    class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label for="alamat" class="block font-semibold">Alamat</label>
                <textarea name="alamat" id="alamat" rows="3"
                    class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('alamat') }}</textarea>
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white font-bold py-2 rounded hover:bg-blue-600">
                Register
            </button>
        </form>
    </div>
</body>
</html>
