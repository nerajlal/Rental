<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temporarily Unavailable</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="max-w-xl mx-auto p-8 text-center bg-white shadow-lg rounded-2xl">
        <div class="mb-8">
            <i class="fas fa-exclamation-triangle text-6xl text-orange-500 mb-4 animate-bounce"></i>
            <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-2">Temporarily Unavailable</h1>
            <p class="text-xl text-gray-600">We apologize for the inconvenience.</p>
        </div>
        
        <p class="text-lg text-gray-700 mb-6">
            We're currently performing scheduled maintenance to improve our service for you. We expect to be back online shortly.
        </p>
        
        <div class="mb-8">
            <div class="relative pt-1">
                <div class="flex mb-2 items-center justify-between">
                    <div>
                        <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-orange-600 bg-orange-200">
                            Maintenance in Progress
                        </span>
                    </div>
                </div>
                <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-orange-200">
                    <div style="width: 50%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-orange-500 animate-pulse"></div>
                </div>
            </div>
        </div>
        
        <a href="/" class="inline-block bg-orange-600 text-white px-6 py-3 rounded-full text-lg font-semibold hover:bg-orange-700 transition duration-300">
            Go to Homepage
        </a>
    </div>
</body>
</html>