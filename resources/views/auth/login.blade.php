<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <main class="flex justify-center items-center p-8 w-full h-screen bg-gray-100">
        <section class="flex flex-col gap-6 p-8 w-96 bg-white rounded-lg shadow-md max-sm:w-full">
            <h1 class="text-2xl font-bold text-black">Login</h1>
            <form class="flex flex-col gap-6" action="{{ route('login') }}" method="POST">
                @csrf
                <div class="flex flex-col gap-2">
                    <label for="email" class="h-5 text-sm font-bold leading-5 text-gray-700">
                        Email
                    </label>
                    <input type="email" name="email" id="email" placeholder="Enter your email" class="px-3.5 py-2 w-full text-base bg-white rounded border shadow h-[38px] text-zinc-400" />
                </div>
                <div class="flex flex-col gap-2">
                    <label for="password" class="h-5 text-sm font-bold leading-5 text-gray-700">
                        Password
                    </label>
                    <input type="password" name="password" id="password" placeholder="Enter your password" class="px-3.5 py-2 w-full text-base bg-white rounded border shadow h-[38px] text-zinc-400" />
                </div>
                <div class="flex justify-center">
                    <button type="submit" class="px-4 py-2 text-base font-bold text-white bg-blue-500 rounded">
                        Sign In
                    </button>
                </div>
            </form>
            <div class="flex justify-center">
                <a href="{{ route('register') }}" class="text-blue-500">Register</a>
            </div>
        </section>
    </main>
</body>
</html>