<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Elmer Sulitas | Portfolio</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>
<body class="bg-gray-900 text-white font-sans">

  <!-- Navbar -->
  <nav class="fixed w-full bg-gray-800 bg-opacity-80 shadow-md z-50">
    <div class="container mx-auto flex items-center justify-between p-4">
      <a href="#" class="flex items-center space-x-2">
        <img src="<?= base_url('img/logo2.png') ?>" alt="Logo" class="w-20 h-10">
        
      </a>
      <ul class="hidden md:flex space-x-6">
        <li><a href="#about" class="hover:text-cyan-400">About</a></li>
        <li><a href="#projects" class="hover:text-cyan-400">Projects</a></li>
        <li><a href="#contact" class="hover:text-cyan-400">Contact</a></li>
      </ul>
    </div>
  </nav>

    <!-- Hero Section -->
  <section class="h-screen flex items-center justify-center bg-cover bg-center relative"
           style="background-image: url('<?= base_url('img/bg-pc.jpg') ?>'); background-attachment: fixed;">
    <div class="absolute inset-0 bg-black bg-opacity-70"></div>
    <div class="relative text-center px-6">
      <h1 class="text-4xl md:text-6xl font-extrabold mb-4">Hello, I'm 
        <span class="text-cyan-400">Elmer Sulitas</span>
      </h1>
      <h2 class="text-lg md:text-2xl mb-6">Computer Science Graduate | Developer | Creative Thinker</h2>
      <div class="space-x-4">
        <a href="#projects" class="bg-cyan-400 text-black font-bold px-6 py-3 rounded-lg shadow-lg hover:bg-cyan-300 transition">View My Work</a>
        <a href="#contact" class="bg-gray-700 px-6 py-3 rounded-lg shadow-lg hover:bg-gray-600 transition">Hire Me!</a>
      </div>
    </div>
  </section>


  <!-- About Section -->
  <section id="about" class="py-20 bg-gray-800">
    <div class="container mx-auto px-6 text-center">
      <h2 class="text-3xl font-bold mb-6">About Me</h2>
      <p class="max-w-2xl mx-auto text-gray-300">
        I am a dedicated and adaptable developer with a strong foundation in computer science. I specialize in computer system servicing and troubleshooting, both in hardware and software, as well as network troubleshooting and support. As a Computer Science graduate and a CSS NCII passer, I bring both academic knowledge and certified technical skills to my work. I am passionate about problem-solving, ensuring efficient system performance, and continuously improving my expertise to keep up with evolving technologies.
      </p>
    </div>
  </section>

  <!-- Projects Section -->
  <!-- Projects Section -->
<section id="projects" class="py-20 bg-gray-900 text-white">
  <div class="container mx-auto px-6 text-center">
    <h2 class="text-3xl font-bold mb-10">Projects</h2>

    <!-- Single Project Card -->
    <div class="max-w-3xl mx-auto bg-gray-800 rounded-lg shadow-lg overflow-hidden hover:scale-105 transition">
      <img src="<?= base_url('img/proj.jpg') ?>" alt="Student Grading Portal" class="w-full h-56 object-cover">
      
      <div class="p-6 text-left">
        <span class="inline-block px-3 py-1 text-sm bg-cyan-400 text-black font-semibold rounded-full mb-4">Web Development</span>
        
        <h3 class="text-2xl font-bold text-cyan-400 mb-2">Student Grading Portal</h3>
        
        <p class="text-gray-300 mb-4">
          A web application built with CodeIgniter that allows teachers to input, manage, and generate student grades efficiently. 
          This project was part of my thesis and showcases my skills in PHP, MySQL, and frontend design.
        </p>

        <ul class="list-disc list-inside text-gray-400 mb-4">
          <li>Secure Login System</li>
          <li>Automated Grade Calculation</li>
          <li>Printable Reports</li>
        </ul>

        <div class="flex flex-wrap gap-2 mb-4">
          <span class="px-3 py-1 bg-gray-700 rounded-full text-sm">CodeIgniter 4</span>
          <span class="px-3 py-1 bg-gray-700 rounded-full text-sm">MySQL</span>
          <span class="px-3 py-1 bg-gray-700 rounded-full text-sm">TailwindCSS</span>
        </div>

        <p class="italic text-gray-400">
          "This system made grading faster and more organized for our professors." – Project Feedback
        </p>
      </div>
    </div>
  </div>
</section>

  </section>

  <!-- certification -->
  <section class="py-12 bg-gray-900 text-white">
  <div class="max-w-6xl mx-auto px-6 text-center">
    <h2 class="text-3xl font-bold mb-4">Certifications</h2>
    <p class="text-gray-400 mb-10">Credentials that highlight my skills and professional growth</p>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      
      <!-- Certification Card -->
      <div class="bg-gray-800 p-6 rounded-2xl shadow-lg border border-gray-700">
        <div class="flex items-center justify-between mb-3">
          <span class="text-sm bg-green-600 px-3 py-1 rounded-full">Certification</span>
        </div>
        <h3 class="text-lg font-bold">NCII COMPUTER SYSTEM SERVICING</h3>
        <p class="text-blue-400 font-semibold mt-2">TESDA</p>
        <p class="text-gray-300 mt-3">Official certification demonstrating competence in installing, configuring, and maintaining computer systems and networks.</p>
      </div>

      <!-- Certification Card -->
      <div class="bg-gray-800 p-6 rounded-2xl shadow-lg border border-gray-700">
        <div class="flex items-center justify-between mb-3">
          <span class="text-sm bg-green-600 px-3 py-1 rounded-full">Certification</span>
        </div>
        <h3 class="text-lg font-bold">LEVEL II COMPUTER PROGRAMMER ASSISTANT</h3>
        <p class="text-blue-400 font-semibold mt-2">Royal Institute of Singapore</p>
        <p class="text-gray-300 mt-3">Recognizing proficiency in programming fundamentals, algorithm design, and software development methodologies.</p>
      </div>

      <!-- Certification Card -->
      <div class="bg-gray-800 p-6 rounded-2xl shadow-lg border border-gray-700">
        <div class="flex items-center justify-between mb-3">
          <span class="text-sm bg-green-600 px-3 py-1 rounded-full">Certification</span>
        </div>
        <h3 class="text-lg font-bold">Certificate of Recognition</h3>
        <p class="text-blue-400 font-semibold mt-2">Ascendens Asia International Research Institute (AAIRI)</p>
        <p class="text-gray-300 mt-3">Awarded for recognition of participation and contribution in international research initiatives.</p>
      </div>

      <!-- Certification Card -->
      <div class="bg-gray-800 p-6 rounded-2xl shadow-lg border border-gray-700">
        <div class="flex items-center justify-between mb-3">
          <span class="text-sm bg-green-600 px-3 py-1 rounded-full">Certification</span>
        </div>
        <h3 class="text-lg font-bold">National Service Training Program</h3>
        <p class="text-blue-400 font-semibold mt-2">Civic Welfare Training Program</p>
        <p class="text-gray-300 mt-3">Certification of completion for the National Service Training Program with a focus on civic welfare and community service.</p>
      </div>

    </div>
  </div>
</section>
<!-- ------------------------------------------------------------------------------ -->

  <!-- Contact Section -->
  <section id="contact" class="bg-black text-white py-16 px-6">
  <div class="max-w-4xl mx-auto text-center mb-12">
    <h2 class="text-4xl font-bold mb-4">Contact</h2>
    <p class="text-gray-400">Let’s get in touch! You can reach me through the details below.</p>
  </div>

  <div class="max-w-4xl mx-auto grid md:grid-cols-2 gap-6">

    <!-- Phone -->
    <div class="flex items-center bg-gray-900 p-6 rounded-xl shadow-lg hover:bg-gray-800 transition">
      <div class="bg-cyan-500 p-4 rounded-full mr-4">
        <i class="fas fa-phone text-2xl text-black"></i>
      </div>
      <div>
        <h4 class="text-lg font-semibold">Phone</h4>
        <p class="text-gray-300">+63 956 660 1915</p>
      </div>
    </div>

    <!-- Email -->
    <div class="flex items-center bg-gray-900 p-6 rounded-xl shadow-lg hover:bg-gray-800 transition">
      <div class="bg-cyan-500 p-4 rounded-full mr-4">
        <i class="fas fa-envelope text-2xl text-black"></i>
      </div>
      <div>
        <h4 class="text-lg font-semibold">Email</h4>
        <p class="text-gray-300">sulitaselmer27@gmail.com</p>
      </div>
    </div>

    <!-- Location -->
    <div class="flex items-center bg-gray-900 p-6 rounded-xl shadow-lg hover:bg-gray-800 transition">
      <div class="bg-cyan-500 p-4 rounded-full mr-4">
        <i class="fas fa-map-marker-alt text-2xl text-black"></i>
      </div>
      <div>
        <h4 class="text-lg font-semibold">Location</h4>
        <p class="text-gray-300">North Caloocan City, Metro Manila, Philippines</p>
      </div>
    </div>

    <!-- Social Media -->
    <div class="bg-gray-900 p-6 rounded-xl shadow-lg hover:bg-gray-800 transition">
      <h4 class="text-lg font-semibold mb-4 flex items-center">
        <i class="fas fa-share-alt text-cyan-500 mr-2"></i> Social Media
      </h4>
      <div class="flex space-x-4">
        <a href="https://www.tiktok.com/@sulitas27?_t=ZS-8zsYL1Qioad&_r=1" class="bg-gray-800 hover:bg-cyan-500 p-3 rounded-full transition"><i class="fab fa-tiktok"></i></a>
        <a href="https://www.facebook.com/elmer.sulitas" class="bg-gray-800 hover:bg-cyan-500 p-3 rounded-full transition"><i class="fab fa-facebook-f"></i></a>
        <a href="https://www.instagram.com/elmersulitas/" class="bg-gray-800 hover:bg-cyan-500 p-3 rounded-full transition"><i class="fab fa-instagram"></i></a>
        <a href="https://github.com/elmer21345" class="bg-gray-800 hover:bg-cyan-500 p-3 rounded-full transition"><i class="fab fa-github"></i></a>
       
      </div>
    </div>

  </div>
</section>

<!-- Font Awesome (for icons) -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


</body>
</html>
