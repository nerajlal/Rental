@include('admin.header')
@include('admin.sidebar')

        <!-- Page Content -->
        <main class="p-6 pt-28">
            <!-- Settings Page -->
            <div id="settings-page" class="page">
                <div class="max-w-2xl mx-auto">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">Settings</h2>

                    @if(session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6" role="alert">
                            <strong class="font-bold">Success!</strong>
                            <span class="block sm:inline">{{ session('success') }}</span>
                        </div>
                    @endif

                    <!-- Update Password Form -->
                    <div class="bg-white p-8 rounded-lg shadow-sm border">
                        <h3 class="text-xl font-semibold mb-6">Change Password</h3>
                        <form method="POST" action="{{ url('/admin/settings/password') }}" class="space-y-6">
                            @csrf
                            <div>
                                <label for="current_password" class="block text-sm font-medium text-gray-700">Current Password</label>
                                <input type="password" name="current_password" id="current_password" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-primary focus:border-primary" required>
                                @error('current_password')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="new_password" class="block text-sm font-medium text-gray-700">New Password</label>
                                <input type="password" name="new_password" id="new_password" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-primary focus:border-primary" required>
                                @error('new_password')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="new_password_confirmation" class="block text-sm font-medium text-gray-700">Confirm New Password</label>
                                <input type="password" name="new_password_confirmation" id="new_password_confirmation" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-primary focus:border-primary" required>
                            </div>
                            <div class="flex justify-end">
                                <button type="submit" class="bg-primary hover:bg-primaryHover text-white font-bold py-2 px-6 rounded-lg focus:outline-none focus:shadow-outline transition duration-300">
                                    Update Password
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>

@include('admin.footer')
