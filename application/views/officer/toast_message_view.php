
<!DOCTYPE html>
<html lang="sw">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Angalizo la Mkopo</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-red-50 to-red-100 min-h-screen flex items-center justify-center px-4 py-6">

  <div class="bg-white rounded-2xl shadow-lg p-8 max-w-lg w-full border border-red-200">
    
    <!-- Icon -->
    <div class="flex justify-center mb-4">
      <div class="bg-red-100 text-red-600 rounded-full p-4">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round"
                d="M12 8v4m0 4h.01M4.93 4.93l14.14 14.14M12 2a10 10 0 100 20 10 10 0 000-20z"/>
        </svg>
      </div>
    </div>

    <!-- Title -->
    <h2 class="text-xl sm:text-2xl font-bold text-red-700 text-center mb-2">
      Angalizo la Mkopo
    </h2>

    <!-- Message -->
    <p class="text-gray-700 text-center text-base sm:text-lg leading-relaxed mb-6">
      Mteja hawezi kuombewa mkopo kwa sababu mkopo wake hujalipwa wote ama umeshapitishwa tayari.
    </p>

    <!-- Button -->
    <div class="flex justify-center">
      <a href="<?= base_url('oficer/loan_application'); ?>"
         class="bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-6 rounded-lg shadow transition duration-200">
        Rudi
      </a>
    </div>

  </div>

</body>
</html>
