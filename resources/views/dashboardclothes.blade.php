<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    @vite('resources/css/app.css')
</head>

<body class="font-poppins bg-[#f2f5f8]">
    <div class="flex h-screen">

        <!-- Sidebar -->
        <x-admin-nav></x-admin-nav>

        <!-- Main Content -->
        <div class="flex-1 bg-[#f2f5f8]">
            <!-- Navbar -->
            <nav class="bg-white shadow-md px-6 py-4">
                <div class="flex justify-between items-center">
                    <div class="text-2xl font-semibold text-[#5d7eac]">
                        Admin Dashboard
                    </div>
                </div>
            </nav>
    </div>

    <div class="container mx-auto">
        @yield('content')
    </div>

</body>

</html>
