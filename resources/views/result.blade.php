<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Report</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-r from-blue-100 to-purple-200 min-h-screen flex items-center justify-center">

    <div class="bg-white shadow-2xl rounded-2xl p-8 max-w-3xl w-full transform transition duration-500 hover:scale-105">
        <div class="text-center mb-8">
            <h1 class="text-4xl font-extrabold text-gray-800 mb-2 tracking-wide">Result Report</h1>
            <p class="text-gray-500 text-lg">Your Academic Performance</p>
        </div>

        <div class="mb-8">
            <h2 class="text-2xl font-semibold text-gray-700 mb-4 border-b pb-2">Subject Grades</h2>
            <div class="space-y-3">
                <div class="flex justify-between items-center">
                    <span class="text-gray-600 font-medium">Bangla:</span>
                    <span class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full font-semibold">
                        {{ $bangla }} - {{ $banglaGrade }}
                    </span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-gray-600 font-medium">English:</span>
                    <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full font-semibold">
                        {{ $english }} - {{ $englishGrade }}
                    </span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-gray-600 font-medium">Math:</span>
                    <span class="bg-purple-100 text-purple-600 px-3 py-1 rounded-full font-semibold">
                        {{ $math }} - {{ $mathGrade }}
                    </span>
                </div>
            </div>
        </div>

        <div class="mb-8 border-t pt-6">
            <h2 class="text-2xl font-semibold text-gray-700 mb-4">Total Summary</h2>
            <div class="flex justify-between mb-2">
                <span class="text-gray-600 font-medium">Total Marks:</span>
                <span class="text-gray-800 font-bold">{{ $totalMarks }}</span>
            </div>
            <div class="flex justify-between items-center">
                <span class="text-gray-600 font-medium">Overall Grade:</span>
                <span class="bg-gradient-to-r from-green-400 to-green-600 text-white px-4 py-2 rounded-full shadow-md font-bold">
                    {{ $overallGrade }}
                </span>
            </div>
        </div>

        <div class="text-center">
            <button onclick="window.print()"
                class="bg-gradient-to-r from-blue-500 to-indigo-600 hover:from-blue-600 hover:to-indigo-700 text-white font-bold px-6 py-2 rounded-full shadow-lg transform transition hover:scale-105">
                Print Report
            </button>
        </div>
    </div>

</body>

</html>