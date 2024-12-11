<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Input Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">

    <div class="bg-white shadow-lg rounded-xl w-full max-w-lg p-8 transform transition hover:scale-105 duration-300">

        <div class="text-center mb-6">
            <h1 class="text-3xl font-bold text-gray-800">Result Input Form</h1>
            <p class="text-gray-500 mt-2">Enter your marks to calculate GPA</p>
        </div>

        <form action="{{ route('result.calculate') }}" method="POST" class="space-y-5">
            @csrf

            <div>
                <label for="bangla" class="block text-gray-700 font-medium mb-1">Bangla (Out of 80)</label>
                <input type="number" name="bangla" id="bangla" min="0" max="80" required
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 text-gray-800 focus:ring-2 focus:ring-blue-400 focus:outline-none"
                    placeholder="Enter Bangla marks">
            </div>

            <div>
                <label for="english" class="block text-gray-700 font-medium mb-1">English (Out of 90)</label>
                <input type="number" name="english" id="english" min="0" max="90" required
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 text-gray-800 focus:ring-2 focus:ring-blue-400 focus:outline-none"
                    placeholder="Enter English marks">
            </div>

            <div>
                <label for="math" class="block text-gray-700 font-medium mb-1">Math (Out of 130)</label>
                <input type="number" name="math" id="math" min="0" max="130" required
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 text-gray-800 focus:ring-2 focus:ring-blue-400 focus:outline-none"
                    placeholder="Enter Math marks">
            </div>

            <div class="text-center">
                <button type="submit"
                    class="bg-blue-500 text-white font-semibold px-6 py-3 rounded-lg shadow-md hover:bg-blue-600 transition transform hover:scale-110">
                    Submit Marks
                </button>
            </div>
        </form>

    </div>
</body>

</html>