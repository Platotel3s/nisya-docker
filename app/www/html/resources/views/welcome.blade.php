<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | Laravel CRUD Application</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50">
    <nav class="bg-blue-600 text-white shadow-lg">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center space-x-2">
                    <i class="fas fa-cube text-2xl"></i>
                    <span class="text-xl font-semibold">LaraCRUD</span>
                </div>

                <div class="hidden md:flex space-x-6">
                    <a href="#" class="hover:text-blue-200 transition">Dashboard</a>
                    <a href="#" class="hover:text-blue-200 transition">Items</a>
                    <a href="#" class="hover:text-blue-200 transition">Users</a>
                    <a href="#" class="hover:text-blue-200 transition">Settings</a>
                </div>

                <div class="flex items-center space-x-4">
                    <button class="bg-blue-700 hover:bg-blue-800 px-4 py-2 rounded-lg transition">
                        <i class="fas fa-user mr-2"></i>Login
                    </button>
                    <button class="md:hidden">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>
    <section class="bg-gradient-to-r from-blue-500 to-indigo-700 text-white py-16">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Laravel CRUD Application</h1>
            <p class="text-xl mb-8 max-w-2xl mx-auto">A powerful admin dashboard to manage your application data with Create, Read, Update, and Delete operations.</p>
            <div class="flex justify-center space-x-4">
                <button class="bg-white text-blue-600 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">
                <a href="{{route('index.buku')}}">
                    <i class="fas fa-rocket mr-2"></i>Get Started
                </a>
                </button>
                <button class="bg-transparent border-2 border-white px-6 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition">
                    <i class="fas fa-book mr-2"></i>Documentation
                </button>
            </div>
        </div>
    </section>
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">CRUD Operations Made Easy</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Create Card -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-lg transition">
                    <div class="w-14 h-14 bg-green-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-plus text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Create</h3>
                    <p class="text-gray-600">Easily add new records to your database with intuitive forms and validation.</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-lg transition">
                    <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-eye text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Read</h3>
                    <p class="text-gray-600">View and search through your data with powerful filtering and pagination.</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-lg transition">
                    <div class="w-14 h-14 bg-yellow-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-edit text-yellow-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Update</h3>
                    <p class="text-gray-600">Modify existing records with inline editing or detailed edit forms.</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-lg transition">
                    <div class="w-14 h-14 bg-red-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-trash text-red-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Delete</h3>
                    <p class="text-gray-600">Safely remove records with confirmation dialogs and backup options.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow text-center">
                    <div class="text-4xl font-bold text-blue-600 mb-2">1,248</div>
                    <div class="text-gray-600">Total Items</div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow text-center">
                    <div class="text-4xl font-bold text-green-600 mb-2">842</div>
                    <div class="text-gray-600">Active Users</div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow text-center">
                    <div class="text-4xl font-bold text-purple-600 mb-2">56</div>
                    <div class="text-gray-600">Categories</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Recent Activity -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-8">Recent Activity</h2>

            <div class="max-w-4xl mx-auto">
                <div class="border-l-2 border-blue-500 pl-4 ml-3 space-y-8">
                    <!-- Activity Item -->
                    <div class="relative">
                        <div class="absolute -left-7 mt-1.5 w-4 h-4 rounded-full bg-blue-500"></div>
                        <div class="p-4 bg-gray-50 rounded-lg">
                            <div class="flex justify-between items-center mb-2">
                                <span class="font-semibold">New user registered</span>
                                <span class="text-sm text-gray-500">2 hours ago</span>
                            </div>
                            <p class="text-gray-600">John Doe joined the system</p>
                        </div>
                    </div>

                    <!-- Activity Item -->
                    <div class="relative">
                        <div class="absolute -left-7 mt-1.5 w-4 h-4 rounded-full bg-green-500"></div>
                        <div class="p-4 bg-gray-50 rounded-lg">
                            <div class="flex justify-between items-center mb-2">
                                <span class="font-semibold">Item created</span>
                                <span class="text-sm text-gray-500">5 hours ago</span>
                            </div>
                            <p class="text-gray-600">New product "Premium Widget" was added</p>
                        </div>
                    </div>

                    <!-- Activity Item -->
                    <div class="relative">
                        <div class="absolute -left-7 mt-1.5 w-4 h-4 rounded-full bg-yellow-500"></div>
                        <div class="p-4 bg-gray-50 rounded-lg">
                            <div class="flex justify-between items-center mb-2">
                                <span class="font-semibold">Item updated</span>
                                <span class="text-sm text-gray-500">Yesterday</span>
                            </div>
                            <p class="text-gray-600">Product "Standard Widget" details were modified</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-xl font-semibold mb-4">LaraCRUD</h3>
                    <p class="text-gray-400">A powerful Laravel-based CRUD application for managing your data with ease.</p>
                </div>

                <div>
                    <h3 class="text-xl font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Dashboard</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Items Management</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">User Administration</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Settings</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-xl font-semibold mb-4">Get In Touch</h3>
                    <p class="text-gray-400 mb-2">1234 Laravel Street, Dev City</p>
                    <p class="text-gray-400 mb-2">contact@laracrud.example</p>
                    <p class="text-gray-400">+1 (555) 123-4567</p>
                </div>
            </div>

            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2023 LaraCRUD. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
