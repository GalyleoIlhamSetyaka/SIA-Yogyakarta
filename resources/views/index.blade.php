<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yogyakarta Airport</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <nav class="bg-blue-500 p-4 sticky top-0 z-50">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="flex items-center">
                <img src="{{ asset('img/index/TAG.png') }}" alt="Logo" class="h-14 w-18 mr-2">
            </a>
            <div class="hidden md:flex space-x-4">
                <a href="/" class="text-white">Home</a>
                <a href="/about" class="text-white">About</a>
                <a href="/contact" class="text-white">Contact</a>
                <a href="/login" class="text-white">Login</a>
            </div>
            <div class="md:hidden">
                <button class="text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </nav>
    <section class="pt-16">
        <div class="h-screen flex items-center">
            <div class="container mx-auto flex justify-between items-center">
                <div class="w-1/2">
                    <div class="absolute top-0 left-0 w-full h-screen bg-[url('{{ asset('img/index/YIA.png') }}')] bg-cover bg-center" style="filter: blur(5px); filter: contrast(-200); filter: brightness(-50); "></div>
                    <h1 class="text-6xl font-bold text-blue-500 relative z-10">Welcome to Yogyakarta International Airport</h1>
                    <p class="text-xl mt-4 text-white relative z-10">The airport is located in the heart of Yogyakarta, Indonesia. It is the third-busiest airport in the country based on the aircraft movements and passenger movements.</p>
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4 relative z-10">Learn More</button> 
                </div>
            </div>
        </div>
    </section>
</body>
</html>