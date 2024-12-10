<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css')
    @vite('resources/js/login.js')
</head>

<body class="bg-[#f2f5f8] flex justify-center items-center min-h-screen">
    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md">
        <h2 class="text-3xl font-bold text-[#040406] text-center mb-8">Welcome Back</h2>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6" role="alert">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="space-y-6">
            @csrf

            <!-- Email Input -->
            <div>
                <label for="email" class="block text-sm font-medium text-[#040406]">Email</label>
                <input type="email" name="email" id="email" placeholder="Enter your email"
                    class="w-full mt-1 px-4 py-2 border border-[#d2b1a7] rounded-lg shadow-sm focus:ring-2 focus:ring-[#5d7eac] focus:outline-none text-[#040406]"
                    required>
                @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Password Input -->
            <div>
                <label for="password" class="block text-sm font-medium text-[#040406]">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter your password"
                    class="w-full mt-1 px-4 py-2 border border-[#d2b1a7] rounded-lg shadow-sm focus:ring-2 focus:ring-[#5d7eac] focus:outline-none text-[#040406]"
                    required>
                @error('password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Show Password -->
            <div class="flex items-center">
                <input type="checkbox" id="show-password" class="h-4 w-4 text-[#5d7eac] border-[#d2b1a7] rounded">
                <label for="show-password" class="ml-2 block text-sm text-[#040406]">Show Password</label>
            </div>

            <!-- Submit Button -->
            <button type="submit"
                class="w-full bg-gradient-to-r from-[#5d7eac] to-[#b4ba78] hover:from-[#b4ba78] hover:to-[#5d7eac] text-white font-semibold py-2 rounded-lg shadow-lg transition-all duration-300">
                Sign In
            </button>
        </form>

        <!-- Register Link -->
        <p class="text-center text-[#040406] mt-6">
            Don't have an account? <a href="{{ route('register') }}" class="text-[#5d7eac] hover:underline">Register</a>
        </p>
    </div>
</body>

</html>
