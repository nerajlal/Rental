<div id="login-modal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50">
    <div class="w-full max-w-md bg-white rounded-lg shadow-2xl p-8 m-4">
        <div class="flex justify-between items-center border-b pb-4 mb-6">
            <h2 class="text-2xl font-bold text-gray-800">Admin Login</h2>
            <button id="close-login-modal" class="text-gray-500 hover:text-gray-700">
                <i class="fas fa-times w-6 h-6"></i>
            </button>
        </div>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                <strong class="font-bold">Error!</strong>
                <span class="block sm:inline">{{ $errors->first() }}</span>
            </div>
        @endif

        <form method="POST" action="{{ url('/admin/login') }}">
            @csrf
            <div class="mb-4">
                <label for="modal-username" class="block text-gray-700 text-sm font-bold mb-2">Username</label>
                <input type="text" name="username" id="modal-username" class="shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-primary" required autofocus value="{{ old('username') }}">
            </div>
            <div class="mb-6">
                <label for="modal-password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                <input type="password" name="password" id="modal-password" class="shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 mb-3 leading-tight focus:outline-none focus:ring-2 focus:ring-primary" required>
            </div>
            <div class="flex items-center justify-end">
                <button type="submit" class="bg-primary hover:bg-primaryHover text-white font-bold py-2 px-6 rounded-lg focus:outline-none focus:shadow-outline transition duration-300">
                    Sign In
                </button>
            </div>
        </form>
    </div>
</div>
