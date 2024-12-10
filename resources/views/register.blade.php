<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    @vite('resources/css/app.css')
    @vite('resources/js/register.js')
</head>

<body class="bg-[#f2f5f8] flex justify-center items-center min-h-screen">
    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md">
        <h2 class="text-3xl font-bold text-[#040406] text-center mb-8">Create Account</h2>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6" role="alert">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}" class="space-y-6">
            @csrf

            <!-- Username Input -->
            <div>
                <label for="username" class="block text-sm font-medium text-[#040406]">Username</label>
                <input type="text" name="username" id="username" placeholder="Enter your username"
                    class="w-full mt-1 px-4 py-2 border border-[#d2b1a7] rounded-lg shadow-sm focus:ring-2 focus:ring-[#5d7eac] focus:outline-none text-[#040406]" required>
                @error('username')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Email Input -->
            <div>
                <label for="email" class="block text-sm font-medium text-[#040406]">Email</label>
                <input type="email" name="email" id="email" placeholder="Enter your email"
                    class="w-full mt-1 px-4 py-2 border border-[#d2b1a7] rounded-lg shadow-sm focus:ring-2 focus:ring-[#5d7eac] focus:outline-none text-[#040406]" required>
                @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Full Name Input -->
            <div>
                <label for="full_name" class="block text-sm font-medium text-[#040406]">Full Name</label>
                <input type="text" name="full_name" id="full_name" placeholder="Enter your full name"
                    class="w-full mt-1 px-4 py-2 border border-[#d2b1a7] rounded-lg shadow-sm focus:ring-2 focus:ring-[#5d7eac] focus:outline-none text-[#040406]" required>
                @error('full_name')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Password Input -->
            <div>
                <label for="password" class="block text-sm font-medium text-[#040406]">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter your password"
                    class="w-full mt-1 px-4 py-2 border border-[#d2b1a7] rounded-lg shadow-sm focus:ring-2 focus:ring-[#5d7eac] focus:outline-none text-[#040406]" required>
                @error('password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Confirm Password Input -->
            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-[#040406]">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm your password"
                    class="w-full mt-1 px-4 py-2 border border-[#d2b1a7] rounded-lg shadow-sm focus:ring-2 focus:ring-[#5d7eac] focus:outline-none text-[#040406]" required>
            </div>

            <!-- Submit Button -->
            <button type="submit"
                class="w-full bg-gradient-to-r from-[#5d7eac] to-[#b4ba78] hover:from-[#b4ba78] hover:to-[#5d7eac] text-white font-semibold py-2 rounded-lg shadow-lg transition-all duration-300">
                Register
            </button>
        </form>

        <!-- Login Link -->
        <p class="text-center text-[#040406] mt-6">
            Already have an account? <a href="{{ route('login') }}" class="text-[#5d7eac] hover:underline">Login</a>
        </p>
    </div>
</body>

</html>
