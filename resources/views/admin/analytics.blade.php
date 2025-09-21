<!DOCTYPE html>
<html lang="en">
<head>
    @include('head')
    <title>Analytics - Admin Panel</title>
</head>
<body class="bg-gray-100">

    <div class="flex h-screen">
        @include('admin.sidebar', ['page' => 'analytics'])

        <div class="flex-1 flex flex-col">
            @include('admin.header')

            <main class="flex-1 p-6">
                <h1 class="text-2xl font-bold text-gray-800 mb-6">Analytics</h1>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <p>This feature is coming soon!</p>
                </div>
            </main>
        </div>
    </div>

    @include('admin.footer')
</body>
</html>
