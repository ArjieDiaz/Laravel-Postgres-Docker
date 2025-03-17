<script src="https://cdn.tailwindcss.com"></script>
<nav class="bg-gray-1000 shadow border-b border-orange-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <div class="flex-shrink-0 flex items-center">
                    <a class="text-xl font-bold text-white-700" href="{{ route('products.index') }}">
                        Product Management
                    </a>
                </div>
                <div class="hidden sm:-my-px sm:ml-6 sm:flex sm:space-x-8">
                    <a href="{{ route('dashboard') }}" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-white-700 hover:text-orange-400 hover:border-orange-400">
                        Dashboard
                    </a>
                    <a href="{{ route('products.index') }}" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-white-700 hover:text-orange-400 hover:border-orange-400">
                        Products
                    </a>
                    <a href="{{ route('profile.edit') }}" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-white-700 hover:text-orange-400 hover:border-orange-400">
                        Profile
                    </a>
                </div>
            </div>
            <div class="flex items-center">
                <a class="text-white bg-red-500 hover:bg-red-600 px-3 py-2 rounded" href="{{ route('logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</nav>
