<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Website Modern</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-poppins bg-gradient-to-r from-gray-100 to-white text-gray-800">
  <nav class="bg-gradient-to-r from-yellow-100 to-yellow-200 py-4 text-center shadow-lg rounded-b-xl">
    <a href="javascript:void(0)" onclick="showContent('home')" class="text-gray-800 text-lg font-semibold mx-4 hover:text-yellow-600 transition-colors">Home</a>
    <a href="javascript:void(0)" onclick="showContent('about')" class="text-gray-800 text-lg font-semibold mx-4 hover:text-yellow-600 transition-colors">About</a>
    <a href="javascript:void(0)" onclick="showContent('contact')" class="text-gray-800 text-lg font-semibold mx-4 hover:text-yellow-600 transition-colors">Contact</a>
  </nav>
  <div class="max-w-3xl mx-auto my-10 px-6 py-8 text-center" id="content">
    <h2 class="text-3xl font-semibold">Welcome To The Home Page</h2>
    <p class="mt-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam doloribus non, voluptatum commodi nam corrupti quasi error mollitia necessitatibus. Rem distinctio maiores, obcaecati autem velit enim sint culpa deleniti quo!.</p>
  </div>

  <script>
    function showContent(page) {
      let content = document.getElementById("content");
      if (page === "home") {
        content.innerHTML = `
          <h2 class="text-3xl font-semibold">Welcome To The Home Page</h2>
          <p class="mt-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam doloribus non, voluptatum commodi nam corrupti quasi error mollitia necessitatibus. Rem distinctio maiores, obcaecati autem velit enim sint culpa deleniti</p>
        `;
    } else if (page === "about") {
  content.innerHTML = `
    <div class="mt-4 flex flex-col items-center text-center gap-6 text-left">
        <h2 class="text-4xl font-bold text-black-200 mb-2">About Me</h2>
        <img src="{{ asset('image/arle.jpg') }}" alt="Foto Saya" class="w-44 h-44 rounded-full shadow-lg">
        <div>
          <p class="text-2xl font-bold text-black-400">Abyan Faiz Muammar</p>
        </div>
        <div>
          <p class="text-black-400">Saya Istrinya Yae Miko</p>
        </div>
    </div>
  `;
} else if (page === "contact") {
  content.innerHTML = `
    <div class="mt-8 max-w-3xl mx-auto px-6">
      <h2 class="text-4xl font-bold text-black-200 mb-6 text-center">Kontak Saya</h2>
      <div class="bg-white p-8 rounded-xl shadow-lg">
        <form class="space-y-6">
          <div>
            <label for="name" class="block text-lg font-semibold text-black-200 text-left">Nama</label>
            <input type="text" id="name" placeholder="Masukkan nama" class="w-full p-4 rounded-lg border border-[#444] focus:outline-none focus:ring-2 focus:ring-yellow-400 transition duration-300 text-gray-200">
          </div>
          <div>
            <label for="email" class="block text-lg font-semibold text-black-200 text-left">Email</label>
            <input type="email" id="email" placeholder="Masukkan email" class="w-full p-4 rounded-lg border border-[#444] focus:outline-none focus:ring-2 focus:ring-yellow-400 transition duration-300 text-gray-200">
          </div>
          <div>
            <label for="message" class="block text-lg font-semibold text-black-200 text-left">Pesan</label>
            <textarea id="message" placeholder="Tulis pesan..." class="w-full p-4 rounded-lg border border-[#444] focus:outline-none focus:ring-2 focus:ring-yellow-400 transition duration-300 text-gray-200"></textarea>
          </div>
          <button type="submit" class="w-full py-3 bg-gradient-to-r from-yellow-100 to-yellow-200 text-gray-800 font-semibold rounded-lg hover:bg-yellow-400 transition duration-300">Send Message</button>
        </form>
      </div>
    </div>
  `;
}
    }
  </script>
</body>
</html>
