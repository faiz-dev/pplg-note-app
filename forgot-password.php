<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <link rel="stylesheet" href="https://cdn.hugeicons.com/font/hgi-stroke-rounded.css" />
  <style>
    * {
      font-family: 'Inter', sans-serif;
    }
  </style>
</head>
<title>Login</title>
</head>

<body>
  <div class="max-w-[490px] mx-auto mt-[100px] px-6">
    <!-- // top section -->
    <div class="flex flex-col">
      <h1 class="fs-4xl text-[32px] font-bold">Forgot Password</h1>
      <p class="text-[#9DABBE]">No worries! Enter your email address below and we will send you a code to reset your password</p>
    </div>

    <!-- // form section -->
    <form action="./index.php" method="post" class="flex flex-col gap-4 mt-6">
        <div class="flex flex-col gap-2">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" class="p-2 bg-[#f8fafc] rounded border border-[#9DABBE]" placeholder="Enter your email">
        </div>
        <button type="submit" class="bg-[#7C3AED] text-white font-bold p-2 mt-4 hover:bg-[#6b21a8] transition shadow-lg rounded">Send reset link</button>
      </form>

      <!-- // bottom section -->
      <p class="text-center mt-6">Remember your password? <a href="./index.php" class="text-[#7C3AED] font-bold">Sign In</a></p>
  </div>

</body>

</html>