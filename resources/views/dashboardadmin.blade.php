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

            <!-- Content Area -->
            <div class="p-8">
                <h2 class="text-3xl font-semibold mb-6 text-[#5d7eac]">Welcome to the Admin Dashboard</h2>
                <p class="text-lg text-[#040406]">Here you can manage users, settings, reports, and much more.</p>

                <!-- Stats or Content -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-semibold text-[#5d7eac]">Total Users</h3>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-semibold text-[#5d7eac]">Active Sessions</h3>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-semibold text-[#5d7eac]">Reports Generated</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
