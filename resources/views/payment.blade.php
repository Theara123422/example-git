<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar with Search and Dropdown</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        .dropdown {
            max-height: 800px; /* Limit dropdown height */
            overflow-y: auto; /* Enable scrolling if too many results */
            z-index: 50; /* Ensure it stays on top of other elements */
        }
        .dropdown-item {
            display: flex;
            align-items: center;
            padding: 8px;
            border-bottom: 1px solid #e5e7eb;
        }
        .dropdown-item img {
            width: 40px;
            height: 40px;
            margin-right: 10px;
        }
        .container{
            display: flex;
            flex-direction: row;
            gap: 5px;
            font-size: 12px;
        }
        .container input, .container textarea{
            font-size: 12px;
        }
    </style>

    <!-- style overflow  -->
    <style>
        /* Custom Scrollbar Styling */
        .custom-scrollbar::-webkit-scrollbar {
            width: 12px; /* Width of the scrollbar */
        }

        .custom-scrollbar::-webkit-scrollbar-track {
            background: #f1f1f1; /* Track color (background of the scrollbar) */
            border-radius: 10px; /* Rounded edges for the track */
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: linear-gradient(to bottom, #F7B500, #FF8800); /* Gradient from yellow to orange */
            border-radius: 10px; /* Rounded edges for the thumb */
            border: 2px solid #f1f1f1; /* Optional: Adds a subtle border to match the track */
        }

        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(to bottom, #e0a400, #e07a00); /* Darker gradient on hover */
        }

        /* For Firefox (simpler styling as it doesn't support gradients yet) */
        .custom-scrollbar {
            scrollbar-width: thin; /* Makes scrollbar thinner */
            scrollbar-color: #FF8800 #f1f1f1; /* Thumb color and track color */
        }
    </style>
</head>
<body>
    <nav class="bg-gradient-to-r from-[#F7B500] to-[#FF8800] pr-5 pl-5">
        <div class="container mx-auto flex items-center justify-between">
            <!-- Search Form with Dropdown -->
            <div class="relative flex items-center">
                <input
                    type="text"
                    id="searchInput"
                    placeholder="Search..."
                    class="w-[500px] px-4 py-2 rounded-md border-none focus:outline-none focus:ring-2 focus:ring-white/50"
                    onkeyup="filterProducts()"​ autocomplete="off"
                >
                <!-- Dropdown for search results -->
                <div id="dropdown" class="border-2 border-[#FF8800] absolute top-full left-0 w-[500px] bg-white shadow-lg rounded-md mt-2 hidden dropdown">
                    <!-- Results will be populated here dynamically -->
                </div>
            </div>

            <!-- User Profile at End -->
            <div class="flex items-center space-x-4">
                <span class="text-white font-medium">John Doe</span>
                <img
                    src="only1.1.png"
                    alt="User profile"
                    class="w-12 h-12 rounded-full border-2 border-white"
                >
            </div>
        </div>
    </nav>

    <form action="" method="post" class="container w-[100%] mx-auto mt-2">
        <div class="w-[75%]">
            <div class="overflow-auto h-[600px] relative custom-scrollbar">
                <table class="table-auto w-full text-black">
                    <thead class="bg-gradient-to-r from-[#F7B500] to-[#FF8800] sticky top-0 z-10">
                        <tr>
                            <th class="px-4 py-2 text-left">Photo</th>
                            <th class="w-40 px-4 py-2 text-left">Code</th>
                            <th class="w-40 px-4 py-2 text-left">Name</th>
                            <th class="px-4 py-2 text-left">CTN</th>
                            <th class="px-4 py-2 text-left">QTY</th>
                            <th class="px-4 py-2 text-left">Unit Price</th>
                            <th class="px-4 py-2 text-left">Sub Total</th>
                            <th class="w-40 px-4 py-2 text-left">Remark</th>
                            <th class="px-4 py-2 text-left">Action</th>
                        </tr>
                    </thead>
                    <tbody class="overflow-y-auto">
                        <!-- Sample Row 1 -->
                        <tr class="border-b hover:bg-gray-100">
                            <td class="px-4 py-2">
                                <img src="only1.1.png" alt="Product" class="w-10 h-10 object-cover rounded">
                            </td>
                            <td class="px-4 py-2">EZE0411</td>
                            <td class="px-4 py-2">
                                <p class="text-xs text-black">English</p>
                                <p class="text-xs text-black">我非常爱</p>
                            </td>
                            <td class="px-4 py-2">
                                <input type="text" value="0" class="w-full text-black text-sm rounded px-2 py-1 bg-white border-b border-gray-300 focus:outline-none" placeholder="CTN">
                            </td>
                            <td class="px-4 py-2">
                                <input type="text" class="w-full text-black text-sm bg-white border-b border-gray-300 rounded px-2 py-1 focus:outline-none" placeholder="QTY">
                            </td>
                            <td class="px-4 py-2">
                                <div class="relative w-full">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-2">$</span>
                                    <input type="text" value="0" class="w-full text-black text-sm bg-white border-b border-gray-300 rounded pl-5 pr-2 py-1 focus:outline-none" placeholder="Unit-Price">
                                </div>
                            </td>
                            <td class="px-4 py-2">
                                <div class="relative w-full">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-2">$</span>
                                    <input type="text" value="0" class="w-full text-black text-sm bg-white border-b border-gray-300 rounded pl-5 pr-2 py-1 focus:outline-none" placeholder="Total">
                                </div>
                            </td>
                            <td class="px-4 py-2">
                                <textarea class="w-full h-12 text-black text-sm border-b border-gray-300 rounded px-2 py-1 resize-none focus:outline-none" placeholder="Enter remark"></textarea>
                            </td>
                            <td class="px-4 py-2">
                                <button class="text-red-600 text-2xl px-2 py-1 rounded"><ion-icon name="close-outline"></ion-icon></button>
                            </td>
                        </tr>
                        <tr class="border-b hover:bg-gray-100">
                            <td class="px-4 py-2">
                                <img src="only1.1.png" alt="Product" class="w-10 h-10 object-cover rounded">
                            </td>
                            <td class="px-4 py-2">EZE0411</td>
                            <td class="px-4 py-2">
                                <p class="text-xs text-black">English</p>
                                <p class="text-xs text-black">我非常爱</p>
                            </td>
                            <td class="px-4 py-2">
                                <input type="text" value="0" class="w-full text-black text-sm rounded px-2 py-1 bg-white border-b border-gray-300 focus:outline-none" placeholder="CTN">
                            </td>
                            <td class="px-4 py-2">
                                <input type="text" class="w-full text-black text-sm bg-white border-b border-gray-300 rounded px-2 py-1 focus:outline-none" placeholder="QTY">
                            </td>
                            <td class="px-4 py-2">
                                <div class="relative w-full">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-2">$</span>
                                    <input type="text" value="0" class="w-full text-black text-sm bg-white border-b border-gray-300 rounded pl-5 pr-2 py-1 focus:outline-none" placeholder="Unit-Price">
                                </div>
                            </td>
                            <td class="px-4 py-2">
                                <div class="relative w-full">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-2">$</span>
                                    <input type="text" value="0" class="w-full text-black text-sm bg-white border-b border-gray-300 rounded pl-5 pr-2 py-1 focus:outline-none" placeholder="Total">
                                </div>
                            </td>
                            <td class="px-4 py-2">
                                <textarea class="w-full h-12 text-black text-sm border-b border-gray-300 rounded px-2 py-1 resize-none focus:outline-none" placeholder="Enter remark"></textarea>
                            </td>
                            <td class="px-4 py-2">
                                <button class="text-red-600 text-2xl px-2 py-1 rounded"><ion-icon name="close-outline"></ion-icon></button>
                            </td>
                        </tr>
                        <tr class="border-b hover:bg-gray-100">
                            <td class="px-4 py-2">
                                <img src="only1.1.png" alt="Product" class="w-10 h-10 object-cover rounded">
                            </td>
                            <td class="px-4 py-2">EZE0411</td>
                            <td class="px-4 py-2">
                                <p class="text-xs text-black">English</p>
                                <p class="text-xs text-black">我非常爱</p>
                            </td>
                            <td class="px-4 py-2">
                                <input type="text" value="0" class="w-full text-black text-sm rounded px-2 py-1 bg-white border-b border-gray-300 focus:outline-none" placeholder="CTN">
                            </td>
                            <td class="px-4 py-2">
                                <input type="text" class="w-full text-black text-sm bg-white border-b border-gray-300 rounded px-2 py-1 focus:outline-none" placeholder="QTY">
                            </td>
                            <td class="px-4 py-2">
                                <div class="relative w-full">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-2">$</span>
                                    <input type="text" value="0" class="w-full text-black text-sm bg-white border-b border-gray-300 rounded pl-5 pr-2 py-1 focus:outline-none" placeholder="Unit-Price">
                                </div>
                            </td>
                            <td class="px-4 py-2">
                                <div class="relative w-full">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-2">$</span>
                                    <input type="text" value="0" class="w-full text-black text-sm bg-white border-b border-gray-300 rounded pl-5 pr-2 py-1 focus:outline-none" placeholder="Total">
                                </div>
                            </td>
                            <td class="px-4 py-2">
                                <textarea class="w-full h-12 text-black text-sm border-b border-gray-300 rounded px-2 py-1 resize-none focus:outline-none" placeholder="Enter remark"></textarea>
                            </td>
                            <td class="px-4 py-2">
                                <button class="text-red-600 text-2xl px-2 py-1 rounded"><ion-icon name="close-outline"></ion-icon></button>
                            </td>
                        </tr>
                        <tr class="border-b hover:bg-gray-100">
                            <td class="px-4 py-2">
                                <img src="only1.1.png" alt="Product" class="w-10 h-10 object-cover rounded">
                            </td>
                            <td class="px-4 py-2">EZE0411</td>
                            <td class="px-4 py-2">
                                <p class="text-xs text-black">English</p>
                                <p class="text-xs text-black">我非常爱</p>
                            </td>
                            <td class="px-4 py-2">
                                <input type="text" value="0" class="w-full text-black text-sm rounded px-2 py-1 bg-white border-b border-gray-300 focus:outline-none" placeholder="CTN">
                            </td>
                            <td class="px-4 py-2">
                                <input type="text" class="w-full text-black text-sm bg-white border-b border-gray-300 rounded px-2 py-1 focus:outline-none" placeholder="QTY">
                            </td>
                            <td class="px-4 py-2">
                                <div class="relative w-full">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-2">$</span>
                                    <input type="text" value="0" class="w-full text-black text-sm bg-white border-b border-gray-300 rounded pl-5 pr-2 py-1 focus:outline-none" placeholder="Unit-Price">
                                </div>
                            </td>
                            <td class="px-4 py-2">
                                <div class="relative w-full">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-2">$</span>
                                    <input type="text" value="0" class="w-full text-black text-sm bg-white border-b border-gray-300 rounded pl-5 pr-2 py-1 focus:outline-none" placeholder="Total">
                                </div>
                            </td>
                            <td class="px-4 py-2">
                                <textarea class="w-full h-12 text-black text-sm border-b border-gray-300 rounded px-2 py-1 resize-none focus:outline-none" placeholder="Enter remark"></textarea>
                            </td>
                            <td class="px-4 py-2">
                                <button class="text-red-600 text-2xl px-2 py-1 rounded"><ion-icon name="close-outline"></ion-icon></button>
                            </td>
                        </tr>
                        <tr class="border-b hover:bg-gray-100">
                            <td class="px-4 py-2">
                                <img src="only1.1.png" alt="Product" class="w-10 h-10 object-cover rounded">
                            </td>
                            <td class="px-4 py-2">EZE0411</td>
                            <td class="px-4 py-2">
                                <p class="text-xs text-black">English</p>
                                <p class="text-xs text-black">我非常爱</p>
                            </td>
                            <td class="px-4 py-2">
                                <input type="text" value="0" class="w-full text-black text-sm rounded px-2 py-1 bg-white border-b border-gray-300 focus:outline-none" placeholder="CTN">
                            </td>
                            <td class="px-4 py-2">
                                <input type="text" class="w-full text-black text-sm bg-white border-b border-gray-300 rounded px-2 py-1 focus:outline-none" placeholder="QTY">
                            </td>
                            <td class="px-4 py-2">
                                <div class="relative w-full">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-2">$</span>
                                    <input type="text" value="0" class="w-full text-black text-sm bg-white border-b border-gray-300 rounded pl-5 pr-2 py-1 focus:outline-none" placeholder="Unit-Price">
                                </div>
                            </td>
                            <td class="px-4 py-2">
                                <div class="relative w-full">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-2">$</span>
                                    <input type="text" value="0" class="w-full text-black text-sm bg-white border-b border-gray-300 rounded pl-5 pr-2 py-1 focus:outline-none" placeholder="Total">
                                </div>
                            </td>
                            <td class="px-4 py-2">
                                <textarea class="w-full h-12 text-black text-sm border-b border-gray-300 rounded px-2 py-1 resize-none focus:outline-none" placeholder="Enter remark"></textarea>
                            </td>
                            <td class="px-4 py-2">
                                <button class="text-red-600 text-2xl px-2 py-1 rounded"><ion-icon name="close-outline"></ion-icon></button>
                            </td>
                        </tr>
                        <tr class="border-b hover:bg-gray-100">
                            <td class="px-4 py-2">
                                <img src="only1.1.png" alt="Product" class="w-10 h-10 object-cover rounded">
                            </td>
                            <td class="px-4 py-2">EZE0411</td>
                            <td class="px-4 py-2">
                                <p class="text-xs text-black">English</p>
                                <p class="text-xs text-black">我非常爱</p>
                            </td>
                            <td class="px-4 py-2">
                                <input type="text" value="0" class="w-full text-black text-sm rounded px-2 py-1 bg-white border-b border-gray-300 focus:outline-none" placeholder="CTN">
                            </td>
                            <td class="px-4 py-2">
                                <input type="text" class="w-full text-black text-sm bg-white border-b border-gray-300 rounded px-2 py-1 focus:outline-none" placeholder="QTY">
                            </td>
                            <td class="px-4 py-2">
                                <div class="relative w-full">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-2">$</span>
                                    <input type="text" value="0" class="w-full text-black text-sm bg-white border-b border-gray-300 rounded pl-5 pr-2 py-1 focus:outline-none" placeholder="Unit-Price">
                                </div>
                            </td>
                            <td class="px-4 py-2">
                                <div class="relative w-full">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-2">$</span>
                                    <input type="text" value="0" class="w-full text-black text-sm bg-white border-b border-gray-300 rounded pl-5 pr-2 py-1 focus:outline-none" placeholder="Total">
                                </div>
                            </td>
                            <td class="px-4 py-2">
                                <textarea class="w-full h-12 text-black text-sm border-b border-gray-300 rounded px-2 py-1 resize-none focus:outline-none" placeholder="Enter remark"></textarea>
                            </td>
                            <td class="px-4 py-2">
                                <button class="text-red-600 text-2xl px-2 py-1 rounded"><ion-icon name="close-outline"></ion-icon></button>
                            </td>
                        </tr>
                        <tr class="border-b hover:bg-gray-100">
                            <td class="px-4 py-2">
                                <img src="only1.1.png" alt="Product" class="w-10 h-10 object-cover rounded">
                            </td>
                            <td class="px-4 py-2">EZE0411</td>
                            <td class="px-4 py-2">
                                <p class="text-xs text-black">English</p>
                                <p class="text-xs text-black">我非常爱</p>
                            </td>
                            <td class="px-4 py-2">
                                <input type="text" value="0" class="w-full text-black text-sm rounded px-2 py-1 bg-white border-b border-gray-300 focus:outline-none" placeholder="CTN">
                            </td>
                            <td class="px-4 py-2">
                                <input type="text" class="w-full text-black text-sm bg-white border-b border-gray-300 rounded px-2 py-1 focus:outline-none" placeholder="QTY">
                            </td>
                            <td class="px-4 py-2">
                                <div class="relative w-full">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-2">$</span>
                                    <input type="text" value="0" class="w-full text-black text-sm bg-white border-b border-gray-300 rounded pl-5 pr-2 py-1 focus:outline-none" placeholder="Unit-Price">
                                </div>
                            </td>
                            <td class="px-4 py-2">
                                <div class="relative w-full">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-2">$</span>
                                    <input type="text" value="0" class="w-full text-black text-sm bg-white border-b border-gray-300 rounded pl-5 pr-2 py-1 focus:outline-none" placeholder="Total">
                                </div>
                            </td>
                            <td class="px-4 py-2">
                                <textarea class="w-full h-12 text-black text-sm border-b border-gray-300 rounded px-2 py-1 resize-none focus:outline-none" placeholder="Enter remark"></textarea>
                            </td>
                            <td class="px-4 py-2">
                                <button class="text-red-600 text-2xl px-2 py-1 rounded"><ion-icon name="close-outline"></ion-icon></button>
                            </td>
                        </tr>
                        <tr class="border-b hover:bg-gray-100">
                            <td class="px-4 py-2">
                                <img src="only1.1.png" alt="Product" class="w-10 h-10 object-cover rounded">
                            </td>
                            <td class="px-4 py-2">EZE0411</td>
                            <td class="px-4 py-2">
                                <p class="text-xs text-black">English</p>
                                <p class="text-xs text-black">我非常爱</p>
                            </td>
                            <td class="px-4 py-2">
                                <input type="text" value="0" class="w-full text-black text-sm rounded px-2 py-1 bg-white border-b border-gray-300 focus:outline-none" placeholder="CTN">
                            </td>
                            <td class="px-4 py-2">
                                <input type="text" class="w-full text-black text-sm bg-white border-b border-gray-300 rounded px-2 py-1 focus:outline-none" placeholder="QTY">
                            </td>
                            <td class="px-4 py-2">
                                <div class="relative w-full">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-2">$</span>
                                    <input type="text" value="0" class="w-full text-black text-sm bg-white border-b border-gray-300 rounded pl-5 pr-2 py-1 focus:outline-none" placeholder="Unit-Price">
                                </div>
                            </td>
                            <td class="px-4 py-2">
                                <div class="relative w-full">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-2">$</span>
                                    <input type="text" value="0" class="w-full text-black text-sm bg-white border-b border-gray-300 rounded pl-5 pr-2 py-1 focus:outline-none" placeholder="Total">
                                </div>
                            </td>
                            <td class="px-4 py-2">
                                <textarea class="w-full h-12 text-black text-sm border-b border-gray-300 rounded px-2 py-1 resize-none focus:outline-none" placeholder="Enter remark"></textarea>
                            </td>
                            <td class="px-4 py-2">
                                <button class="text-red-600 text-2xl px-2 py-1 rounded"><ion-icon name="close-outline"></ion-icon></button>
                            </td>
                        </tr>
                        <tr class="border-b hover:bg-gray-100">
                            <td class="px-4 py-2">
                                <img src="only1.1.png" alt="Product" class="w-10 h-10 object-cover rounded">
                            </td>
                            <td class="px-4 py-2">EZE0411</td>
                            <td class="px-4 py-2">
                                <p class="text-xs text-black">English</p>
                                <p class="text-xs text-black">我非常爱</p>
                            </td>
                            <td class="px-4 py-2">
                                <input type="text" value="0" class="w-full text-black text-sm rounded px-2 py-1 bg-white border-b border-gray-300 focus:outline-none" placeholder="CTN">
                            </td>
                            <td class="px-4 py-2">
                                <input type="text" class="w-full text-black text-sm bg-white border-b border-gray-300 rounded px-2 py-1 focus:outline-none" placeholder="QTY">
                            </td>
                            <td class="px-4 py-2">
                                <div class="relative w-full">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-2">$</span>
                                    <input type="text" value="0" class="w-full text-black text-sm bg-white border-b border-gray-300 rounded pl-5 pr-2 py-1 focus:outline-none" placeholder="Unit-Price">
                                </div>
                            </td>
                            <td class="px-4 py-2">
                                <div class="relative w-full">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-2">$</span>
                                    <input type="text" value="0" class="w-full text-black text-sm bg-white border-b border-gray-300 rounded pl-5 pr-2 py-1 focus:outline-none" placeholder="Total">
                                </div>
                            </td>
                            <td class="px-4 py-2">
                                <textarea class="w-full h-12 text-black text-sm border-b border-gray-300 rounded px-2 py-1 resize-none focus:outline-none" placeholder="Enter remark"></textarea>
                            </td>
                            <td class="px-4 py-2">
                                <button class="text-red-600 text-2xl px-2 py-1 rounded"><ion-icon name="close-outline"></ion-icon></button>
                            </td>
                        </tr>
                        <tr class="border-b hover:bg-gray-100">
                            <td class="px-4 py-2">
                                <img src="only1.1.png" alt="Product" class="w-10 h-10 object-cover rounded">
                            </td>
                            <td class="px-4 py-2">EZE0411</td>
                            <td class="px-4 py-2">
                                <p class="text-xs text-black">English</p>
                                <p class="text-xs text-black">我非常爱</p>
                            </td>
                            <td class="px-4 py-2">
                                <input type="text" value="0" class="w-full text-black text-sm rounded px-2 py-1 bg-white border-b border-gray-300 focus:outline-none" placeholder="CTN">
                            </td>
                            <td class="px-4 py-2">
                                <input type="text" class="w-full text-black text-sm bg-white border-b border-gray-300 rounded px-2 py-1 focus:outline-none" placeholder="QTY">
                            </td>
                            <td class="px-4 py-2">
                                <div class="relative w-full">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-2">$</span>
                                    <input type="text" value="0" class="w-full text-black text-sm bg-white border-b border-gray-300 rounded pl-5 pr-2 py-1 focus:outline-none" placeholder="Unit-Price">
                                </div>
                            </td>
                            <td class="px-4 py-2">
                                <div class="relative w-full">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-2">$</span>
                                    <input type="text" value="0" class="w-full text-black text-sm bg-white border-b border-gray-300 rounded pl-5 pr-2 py-1 focus:outline-none" placeholder="Total">
                                </div>
                            </td>
                            <td class="px-4 py-2">
                                <textarea class="w-full h-12 text-black text-sm border-b border-gray-300 rounded px-2 py-1 resize-none focus:outline-none" placeholder="Enter remark"></textarea>
                            </td>
                            <td class="px-4 py-2">
                                <button class="text-red-600 text-2xl px-2 py-1 rounded"><ion-icon name="close-outline"></ion-icon></button>
                            </td>
                        </tr>
                        <tr class="border-b hover:bg-gray-100">
                            <td class="px-4 py-2">
                                <img src="only1.1.png" alt="Product" class="w-10 h-10 object-cover rounded">
                            </td>
                            <td class="px-4 py-2">EZE0411</td>
                            <td class="px-4 py-2">
                                <p class="text-xs text-black">English</p>
                                <p class="text-xs text-black">我非常爱</p>
                            </td>
                            <td class="px-4 py-2">
                                <input type="text" value="0" class="w-full text-black text-sm rounded px-2 py-1 bg-white border-b border-gray-300 focus:outline-none" placeholder="CTN">
                            </td>
                            <td class="px-4 py-2">
                                <input type="text" class="w-full text-black text-sm bg-white border-b border-gray-300 rounded px-2 py-1 focus:outline-none" placeholder="QTY">
                            </td>
                            <td class="px-4 py-2">
                                <div class="relative w-full">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-2">$</span>
                                    <input type="text" value="0" class="w-full text-black text-sm bg-white border-b border-gray-300 rounded pl-5 pr-2 py-1 focus:outline-none" placeholder="Unit-Price">
                                </div>
                            </td>
                            <td class="px-4 py-2">
                                <div class="relative w-full">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-2">$</span>
                                    <input type="text" value="0" class="w-full text-black text-sm bg-white border-b border-gray-300 rounded pl-5 pr-2 py-1 focus:outline-none" placeholder="Total">
                                </div>
                            </td>
                            <td class="px-4 py-2">
                                <textarea class="w-full h-12 text-black text-sm border-b border-gray-300 rounded px-2 py-1 resize-none focus:outline-none" placeholder="Enter remark"></textarea>
                            </td>
                            <td class="px-4 py-2">
                                <button class="text-red-600 text-2xl px-2 py-1 rounded"><ion-icon name="close-outline"></ion-icon></button>
                            </td>
                        </tr>
                        <tr class="border-b hover:bg-gray-100">
                            <td class="px-4 py-2">
                                <img src="only1.1.png" alt="Product" class="w-10 h-10 object-cover rounded">
                            </td>
                            <td class="px-4 py-2">EZE0411</td>
                            <td class="px-4 py-2">
                                <p class="text-xs text-black">English</p>
                                <p class="text-xs text-black">我非常爱</p>
                            </td>
                            <td class="px-4 py-2">
                                <input type="text" value="0" class="w-full text-black text-sm rounded px-2 py-1 bg-white border-b border-gray-300 focus:outline-none" placeholder="CTN">
                            </td>
                            <td class="px-4 py-2">
                                <input type="text" class="w-full text-black text-sm bg-white border-b border-gray-300 rounded px-2 py-1 focus:outline-none" placeholder="QTY">
                            </td>
                            <td class="px-4 py-2">
                                <div class="relative w-full">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-2">$</span>
                                    <input type="text" value="0" class="w-full text-black text-sm bg-white border-b border-gray-300 rounded pl-5 pr-2 py-1 focus:outline-none" placeholder="Unit-Price">
                                </div>
                            </td>
                            <td class="px-4 py-2">
                                <div class="relative w-full">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-2">$</span>
                                    <input type="text" value="0" class="w-full text-black text-sm bg-white border-b border-gray-300 rounded pl-5 pr-2 py-1 focus:outline-none" placeholder="Total">
                                </div>
                            </td>
                            <td class="px-4 py-2">
                                <textarea class="w-full h-12 text-black text-sm border-b border-gray-300 rounded px-2 py-1 resize-none focus:outline-none" placeholder="Enter remark"></textarea>
                            </td>
                            <td class="px-4 py-2">
                                <button class="text-red-600 text-2xl px-2 py-1 rounded"><ion-icon name="close-outline"></ion-icon></button>
                            </td>
                        </tr>
                        <tr class="border-b hover:bg-gray-100">
                            <td class="px-4 py-2">
                                <img src="only1.1.png" alt="Product" class="w-10 h-10 object-cover rounded">
                            </td>
                            <td class="px-4 py-2">EZE0411</td>
                            <td class="px-4 py-2">
                                <p class="text-xs text-black">English</p>
                                <p class="text-xs text-black">我非常爱</p>
                            </td>
                            <td class="px-4 py-2">
                                <input type="text" value="0" class="w-full text-black text-sm rounded px-2 py-1 bg-white border-b border-gray-300 focus:outline-none" placeholder="CTN">
                            </td>
                            <td class="px-4 py-2">
                                <input type="text" class="w-full text-black text-sm bg-white border-b border-gray-300 rounded px-2 py-1 focus:outline-none" placeholder="QTY">
                            </td>
                            <td class="px-4 py-2">
                                <div class="relative w-full">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-2">$</span>
                                    <input type="text" value="0" class="w-full text-black text-sm bg-white border-b border-gray-300 rounded pl-5 pr-2 py-1 focus:outline-none" placeholder="Unit-Price">
                                </div>
                            </td>
                            <td class="px-4 py-2">
                                <div class="relative w-full">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-2">$</span>
                                    <input type="text" value="0" class="w-full text-black text-sm bg-white border-b border-gray-300 rounded pl-5 pr-2 py-1 focus:outline-none" placeholder="Total">
                                </div>
                            </td>
                            <td class="px-4 py-2">
                                <textarea class="w-full h-12 text-black text-sm border-b border-gray-300 rounded px-2 py-1 resize-none focus:outline-none" placeholder="Enter remark"></textarea>
                            </td>
                            <td class="px-4 py-2">
                                <button class="text-red-600 text-2xl px-2 py-1 rounded"><ion-icon name="close-outline"></ion-icon></button>
                            </td>
                        </tr>
                        <tr class="border-b hover:bg-gray-100">
                            <td class="px-4 py-2">
                                <img src="only1.1.png" alt="Product" class="w-10 h-10 object-cover rounded">
                            </td>
                            <td class="px-4 py-2">EZE0411</td>
                            <td class="px-4 py-2">
                                <p class="text-xs text-black">English</p>
                                <p class="text-xs text-black">我非常爱</p>
                            </td>
                            <td class="px-4 py-2">
                                <input type="text" value="0" class="w-full text-black text-sm rounded px-2 py-1 bg-white border-b border-gray-300 focus:outline-none" placeholder="CTN">
                            </td>
                            <td class="px-4 py-2">
                                <input type="text" class="w-full text-black text-sm bg-white border-b border-gray-300 rounded px-2 py-1 focus:outline-none" placeholder="QTY">
                            </td>
                            <td class="px-4 py-2">
                                <div class="relative w-full">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-2">$</span>
                                    <input type="text" value="0" class="w-full text-black text-sm bg-white border-b border-gray-300 rounded pl-5 pr-2 py-1 focus:outline-none" placeholder="Unit-Price">
                                </div>
                            </td>
                            <td class="px-4 py-2">
                                <div class="relative w-full">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-2">$</span>
                                    <input type="text" value="0" class="w-full text-black text-sm bg-white border-b border-gray-300 rounded pl-5 pr-2 py-1 focus:outline-none" placeholder="Total">
                                </div>
                            </td>
                            <td class="px-4 py-2">
                                <textarea class="w-full h-12 text-black text-sm border-b border-gray-300 rounded px-2 py-1 resize-none focus:outline-none" placeholder="Enter remark"></textarea>
                            </td>
                            <td class="px-4 py-2">
                                <button class="text-red-600 text-2xl px-2 py-1 rounded"><ion-icon name="close-outline"></ion-icon></button>
                            </td>
                        </tr>
                        <tr class="border-b hover:bg-gray-100">
                            <td class="px-4 py-2">
                                <img src="only1.1.png" alt="Product" class="w-10 h-10 object-cover rounded">
                            </td>
                            <td class="px-4 py-2">EZE0411</td>
                            <td class="px-4 py-2">
                                <p class="text-xs text-black">English</p>
                                <p class="text-xs text-black">我非常爱</p>
                            </td>
                            <td class="px-4 py-2">
                                <input type="text" value="0" class="w-full text-black text-sm rounded px-2 py-1 bg-white border-b border-gray-300 focus:outline-none" placeholder="CTN">
                            </td>
                            <td class="px-4 py-2">
                                <input type="text" class="w-full text-black text-sm bg-white border-b border-gray-300 rounded px-2 py-1 focus:outline-none" placeholder="QTY">
                            </td>
                            <td class="px-4 py-2">
                                <div class="relative w-full">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-2">$</span>
                                    <input type="text" value="0" class="w-full text-black text-sm bg-white border-b border-gray-300 rounded pl-5 pr-2 py-1 focus:outline-none" placeholder="Unit-Price">
                                </div>
                            </td>
                            <td class="px-4 py-2">
                                <div class="relative w-full">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-2">$</span>
                                    <input type="text" value="0" class="w-full text-black text-sm bg-white border-b border-gray-300 rounded pl-5 pr-2 py-1 focus:outline-none" placeholder="Total">
                                </div>
                            </td>
                            <td class="px-4 py-2">
                                <textarea class="w-full h-12 text-black text-sm border-b border-gray-300 rounded px-2 py-1 resize-none focus:outline-none" placeholder="Enter remark"></textarea>
                            </td>
                            <td class="px-4 py-2">
                                <button class="text-red-600 text-2xl px-2 py-1 rounded"><ion-icon name="close-outline"></ion-icon></button>
                            </td>
                        </tr>
                        <tr class="border-b hover:bg-gray-100">
                            <td class="px-4 py-2">
                                <img src="only1.1.png" alt="Product" class="w-10 h-10 object-cover rounded">
                            </td>
                            <td class="px-4 py-2">EZE0411</td>
                            <td class="px-4 py-2">
                                <p class="text-xs text-black">English</p>
                                <p class="text-xs text-black">我非常爱</p>
                            </td>
                            <td class="px-4 py-2">
                                <input type="text" value="0" class="w-full text-black text-sm rounded px-2 py-1 bg-white border-b border-gray-300 focus:outline-none" placeholder="CTN">
                            </td>
                            <td class="px-4 py-2">
                                <input type="text" class="w-full text-black text-sm bg-white border-b border-gray-300 rounded px-2 py-1 focus:outline-none" placeholder="QTY">
                            </td>
                            <td class="px-4 py-2">
                                <div class="relative w-full">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-2">$</span>
                                    <input type="text" value="0" class="w-full text-black text-sm bg-white border-b border-gray-300 rounded pl-5 pr-2 py-1 focus:outline-none" placeholder="Unit-Price">
                                </div>
                            </td>
                            <td class="px-4 py-2">
                                <div class="relative w-full">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-2">$</span>
                                    <input type="text" value="0" class="w-full text-black text-sm bg-white border-b border-gray-300 rounded pl-5 pr-2 py-1 focus:outline-none" placeholder="Total">
                                </div>
                            </td>
                            <td class="px-4 py-2">
                                <textarea class="w-full h-12 text-black text-sm border-b border-gray-300 rounded px-2 py-1 resize-none focus:outline-none" placeholder="Enter remark"></textarea>
                            </td>
                            <td class="px-4 py-2">
                                <button class="text-red-600 text-2xl px-2 py-1 rounded"><ion-icon name="close-outline"></ion-icon></button>
                            </td>
                        </tr>
                        <tr class="border-b hover:bg-gray-100">
                            <td class="px-4 py-2">
                                <img src="only1.1.png" alt="Product" class="w-10 h-10 object-cover rounded">
                            </td>
                            <td class="px-4 py-2">EZE0411</td>
                            <td class="px-4 py-2">
                                <p class="text-xs text-black">English</p>
                                <p class="text-xs text-black">我非常爱</p>
                            </td>
                            <td class="px-4 py-2">
                                <input type="text" value="0" class="w-full text-black text-sm rounded px-2 py-1 bg-white border-b border-gray-300 focus:outline-none" placeholder="CTN">
                            </td>
                            <td class="px-4 py-2">
                                <input type="text" class="w-full text-black text-sm bg-white border-b border-gray-300 rounded px-2 py-1 focus:outline-none" placeholder="QTY">
                            </td>
                            <td class="px-4 py-2">
                                <div class="relative w-full">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-2">$</span>
                                    <input type="text" value="0" class="w-full text-black text-sm bg-white border-b border-gray-300 rounded pl-5 pr-2 py-1 focus:outline-none" placeholder="Unit-Price">
                                </div>
                            </td>
                            <td class="px-4 py-2">
                                <div class="relative w-full">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-2">$</span>
                                    <input type="text" value="0" class="w-full text-black text-sm bg-white border-b border-gray-300 rounded pl-5 pr-2 py-1 focus:outline-none" placeholder="Total">
                                </div>
                            </td>
                            <td class="px-4 py-2">
                                <textarea class="w-full h-12 text-black text-sm border-b border-gray-300 rounded px-2 py-1 resize-none focus:outline-none" placeholder="Enter remark"></textarea>
                            </td>
                            <td class="px-4 py-2">
                                <button class="text-red-600 text-2xl px-2 py-1 rounded"><ion-icon name="close-outline"></ion-icon></button>
                            </td>
                        </tr>
                        <tr class="border-b hover:bg-gray-100">
                            <td class="px-4 py-2">
                                <img src="only1.1.png" alt="Product" class="w-10 h-10 object-cover rounded">
                            </td>
                            <td class="px-4 py-2">EZE0411</td>
                            <td class="px-4 py-2">
                                <p class="text-xs text-black">English</p>
                                <p class="text-xs text-black">我非常爱</p>
                            </td>
                            <td class="px-4 py-2">
                                <input type="text" value="0" class="w-full text-black text-sm rounded px-2 py-1 bg-white border-b border-gray-300 focus:outline-none" placeholder="CTN">
                            </td>
                            <td class="px-4 py-2">
                                <input type="text" class="w-full text-black text-sm bg-white border-b border-gray-300 rounded px-2 py-1 focus:outline-none" placeholder="QTY">
                            </td>
                            <td class="px-4 py-2">
                                <div class="relative w-full">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-2">$</span>
                                    <input type="text" value="0" class="w-full text-black text-sm bg-white border-b border-gray-300 rounded pl-5 pr-2 py-1 focus:outline-none" placeholder="Unit-Price">
                                </div>
                            </td>
                            <td class="px-4 py-2">
                                <div class="relative w-full">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-2">$</span>
                                    <input type="text" value="0" class="w-full text-black text-sm bg-white border-b border-gray-300 rounded pl-5 pr-2 py-1 focus:outline-none" placeholder="Total">
                                </div>
                            </td>
                            <td class="px-4 py-2">
                                <textarea class="w-full h-12 text-black text-sm border-b border-gray-300 rounded px-2 py-1 resize-none focus:outline-none" placeholder="Enter remark"></textarea>
                            </td>
                            <td class="px-4 py-2">
                                <button class="text-red-600 text-2xl px-2 py-1 rounded"><ion-icon name="close-outline"></ion-icon></button>
                            </td>
                        </tr>
                        <!-- Add more rows to trigger overflow for testing -->
                    </tbody>
                </table>
                <div class="sticky bottom-0 bg-gray-200 w-full px-4 py-2 flex justify-end gap-6 border-t border-gray-300 z-10">
                    <div class="text-black font-bold">
                        <span>Total CTN:</span>
                        <span id="total-ctn" class="ml-2">0</span>
                    </div>
                    <div class="text-black font-bold">
                        <span>Total QTY:</span>
                        <span id="total-qty" class="ml-2">0</span>
                    </div>
                    <div class="text-black font-bold">
                        <span>Total Sub Total:</span>
                        <span id="total-subtotal" class="ml-2">$0</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-[25%] p-4 rounded-lg shadow-lg gap-4 flex flex-col">
            <div class="flex justify-between items-center">
                <label class="text-gray-700 text-sm font-medium w-1/3">Date</label>
                <p id="dynamic-date" class="text-lg font-semibold text-gray-800"></p>
            </div>

            <div class="flex justify-between items-center">
                <label class="text-gray-700 text-sm font-medium w-1/3">Pi-Num</label>
                <input type="text" class="w-2/3 p-2 rounded-md bg-white border-b border-gray-300 focus:outline-none text-right" dir="rtl" placeholder="PI Number">
            </div>

            <div class="flex justify-between items-center">
                <label class="text-gray-700 text-sm font-medium w-1/3">Name(EN)</label>
                <input type="text" class="w-2/3 p-2 rounded-md bg-white border-b border-gray-300 focus:outline-none text-right" dir="rtl" placeholder="Name English">
            </div>

            <div class="flex justify-between items-center">
                <label class="text-gray-700 text-sm font-medium w-1/3">Name(CN)</label>
                <input type="text" class="w-2/3 p-2 rounded-md bg-white border-b border-gray-300 focus:outline-none text-right" dir="rtl" placeholder="名称中国">
            </div>

            <div class="flex justify-between items-center">
                <label class="text-gray-700 text-sm font-medium w-1/3">Company</label>
                <select class="w-2/3 p-2 rounded-md bg-white border-b border-gray-300 focus:outline-none text-right" dir="rtl">
                    <option value="">Select Company</option>
                    <option value="company1">Company 1</option>
                    <option value="company2">Company 2</option>
                </select>
            </div>

            <div class="flex justify-between items-center">
                <label class="text-gray-700 text-sm font-medium w-1/3">Total-qty</label>
                <input type="text" class="w-2/3 p-2 rounded-md bg-white border-b border-gray-300 focus:outline-none text-right" dir="rtl" value="0" disabled>
            </div>

            <div class="flex justify-between items-center">
                <label class="text-gray-700 text-sm font-medium w-1/3">Total(0)</label>
                <div class="relative w-2/3">
                    <input
                      type="text"
                      class="w-full p-2 pr-6 rounded-md bg-white border-b border-gray-300 focus:outline-none text-right"
                      dir="rtl"
                      value="0"
                      disabled
                    >
                    <span class="absolute inset-y-0 right-0 flex items-center pr-3">$</span>
                </div>
            </div>

            <div class="flex justify-between items-center">
                <label class="text-gray-700 text-sm font-medium w-1/3">Discount</label>
                <div class="relative w-2/3">
                    <input
                      type="text"
                      class="w-full p-2 pr-6 rounded-md bg-white border-b border-gray-300 focus:outline-none text-right"
                      dir="rtl"
                      value="0"
                      pattern="[0-9]*"
                      inputmode="numeric"
                      onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                    >
                    <span class="absolute inset-y-0 right-0 flex items-center pr-3">$</span>
                </div>
            </div>

            <div class="flex justify-between items-center">
                <label class="text-gray-700 text-sm font-medium w-1/3">Extra Charge</label>
                <div class="relative w-2/3">
                    <input
                      type="text"
                      class="w-full p-2 pr-6 rounded-md bg-white border-b border-gray-300 focus:outline-none text-right"
                      dir="rtl"
                      value="0"
                      pattern="[0-9]*"
                      inputmode="numeric"
                      onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                    >
                    <span class="absolute inset-y-0 right-0 flex items-center pr-3">$</span>
                </div>
            </div>

            <div class="flex justify-between items-center">
                <label class="text-gray-700 text-sm font-medium w-1/3">Grand Total</label>
                <div class="relative w-2/3">
                    <input
                      type="text"
                      class="w-full p-2 pr-6 rounded-md bg-white border-b border-gray-300 focus:outline-none text-right"
                      dir="rtl"
                      value="0"
                      disabled
                    >
                    <span class="absolute inset-y-0 right-0 flex items-center pr-3">$</span>
                </div>
            </div>

            <button type="button" class="w-full mt-4 p-2 bg-gradient-to-r from-[#F7B500] to-[#FF8800] text-white rounded-md font-medium hover:from-[#e0a400] hover:to-[#e67a00] transition-colors flex items-center justify-center gap-2">
              Save (CTRL + Enter)
            </button>
          </div>
    </form>

    <script>
        // Sample product data (based on your screenshot)
        const products = [
            { name: "ពេលរំហួត", code: "EZE0411", price: "1.21 $", image: "path/to/kitchen.jpg" },
            { name: "3 basket C", code: "EZE112774", price: "1.21 $", image: "path/to/basketC.jpg" },
            { name: "5basket", code: "EZE112764", price: "1.21 $", image: "path/to/5basket.jpg" },
            { name: "6basket", code: "EZE112765", price: "1.21 $", image: "path/to/6basket.jpg" },
            { name: "Anti-rain Film", code: "EZE116899", price: "1.21 $", image: "path/to/antirain.jpg" },
            { name: "Bathroom", code: "EZE115502", price: "1.21 $", image: "path/to/bathroom.jpg" },
        ];

        function filterProducts() {
            const searchInput = document.getElementById("searchInput").value.toLowerCase();
            const dropdown = document.getElementById("dropdown");
            dropdown.innerHTML = ''; // Clear previous results

            // If search input is empty, hide the dropdown and return
            if (searchInput === '') {
                dropdown.classList.add('hidden');
                return;
            }

            dropdown.classList.remove('hidden'); // Show dropdown

            // Filter products based on name or code
            const filteredProducts = products.filter(product =>
                product.name.toLowerCase().includes(searchInput) ||
                product.code.toLowerCase().includes(searchInput)
            );

            // If no results, show a message
            if (filteredProducts.length === 0) {
                dropdown.innerHTML = '<div class="p-4 text-gray-500">No results found</div>';
                return;
            }

            // Populate dropdown with filtered products
            filteredProducts.forEach(product => {
                const div = document.createElement('div');
                div.className = 'dropdown-item hover:bg-gray-100 cursor-pointer';
                div.innerHTML = `
                    <img src="${product.image}" alt="${product.name}" class="w-10 h-10 object-cover">
                    <div>
                        <p class="text-sm font-semibold">${product.code}</p>
                        <p class="text-xs text-gray-500">${product.name}</p>
                        <p class="text-xs text-gray-500">${product.name}</p>
                    </div>
                `;
                dropdown.appendChild(div);
            });
        }

        // Hide dropdown when clicking outside
        document.addEventListener('click', function(event) {
            const searchInput = document.getElementById("searchInput");
            const dropdown = document.getElementById("dropdown");
            if (!searchInput.contains(event.target)) {
                dropdown.classList.add('hidden');
            }
        });
    </script>
    <!-- input type text input number only -->
    <script>
        document.querySelector('input').addEventListener('input', function (e) {
          this.value = this.value.replace(/[^0-9]/g, '');
        });
    </script>

    <script>
        // Function to format the current date as DD-MMM-YYYY
        function formatDate() {
        const date = new Date();
        const day = String(date.getDate()).padStart(2, '0'); // Ensures 2 digits
        const monthNames = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        const month = monthNames[date.getMonth()]; // Gets month abbreviation
        const year = date.getFullYear();
        return `${day}-${month}-${year}`;
        }

        // Set the formatted date in the <p> element
        document.getElementById('dynamic-date').textContent = formatDate();
    </script>
</body>
</html>
