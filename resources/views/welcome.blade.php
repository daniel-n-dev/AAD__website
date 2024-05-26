<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>

<!--Header-->

<div data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="700"="fade-down" class="navbar bg-base-100">
  <div class="navbar-start">
    <div class="dropdown">
      <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
      </div>
      <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
        <li><a>Home</a></li>
        <li>
          <a>Services</a>
        </li>
        <li><a>About us</a></li>
      </ul>
    </div>
    <a class=""><img src="/img/AADLogo.png" alt="Company Logo"></a>
  </div>
  
  <div class="navbar-end">
  <div class="navbar-end hidden lg:flex">
    <ul class="menu menu-horizontal px-1 ">
      <li class="hover:bg-[#5B61DC]  hover:text-white"><a>Home</a></li>
      <li class="hover:bg-[#5B61DC] hover:text-white"><a>Services</a></li>
      <li class="hover:bg-[#5B61DC] hover:text-white"><a>About</a></li>
    </ul>
    </div>
  <button class="btn bg-[#5B61DC] text-white hover:bg-violet-700">Contact Us</button>
</div>
  </div>
</div>


<!--Hero-->

<div class="grid gap-8 p-10 md:grid-cols-2 md:items-center lt:mt-20">
<div class="text-center md:text-left" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="700">
  <h1 class="font-bold text-2xl px-5 py-2 lg:text-6xl">Innovative <span class="text-[#5B61DC]">Software Solutions</span> for Modern Businesses</h1>
  <p class="px-5 py-2">Empowering your business with cutting-edge technology</p>
  <button class="btn bg-[#5B61DC] text-white hover:bg-violet-700 md:ml-5">Get in touch</button>
</div>
<div class= "ml-5" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="700">
<dotlottie-player src="https://lottie.host/49b52c3f-a9a9-4291-8f9f-088471c136b1/Jb7jgrzrAz.json" background="transparent" speed="1"" loop autoplay></dotlottie-player>
</div>
</div>


<!--Service-->

<div class="bg-[#172A38]"> 
  <h2 class="font-bold text-4xl pt-10 text-center text-[#5B61DC]" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="700">SERVICES</h2>
  <div class="block lg:flex pb-10">
<div class="items-center px-5" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="700">
  <img class="m-auto"src="/img/service1.png" alt="">
  <h2 class="text-[#5B61DC] text-lg font-bold text-center">Web Development</h2>
  <p class="text-base text-center text-white  2xl:px-16 lg:text-sm">We build responsive, user-centric websites and web applications that provide a seamless experience across all devices.</p>
</div>
<div class="items-center px-5" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="700">
  <img class="m-auto"src="/img/service2.png" alt="">
  <h2 class="text-[#5B61DC] text-lg font-bold text-center">Mobile Development</h2>
  <p class="text-base text-center text-white  2xl:px-16 lg:text-sm">We build responsive, user-centric websites and web applications that provide a seamless experience across all devices.</p>
</div>
<div class="items-center px-5" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="700">
  <img class="m-auto"src="/img/service3.png" alt="">
  <h2 class="text-[#5B61DC] text-lg font-bold text-center">Custom Software Development</h2>
  <p class="text-base text-center text-white  2xl:px-16 lg:text-sm">We build responsive, user-centric websites and web applications that provide a seamless experience across all devices.</p>
</div>
</div>
</div>


<!--About Us-->

<div class="bg-[#5B61DC] p-5 md:flex md:justify-center md:items-center md:px-5 md:h-96 xl:px-72">
<div class="text-center p-2 md:text-right" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="700">
  <h1 class="text-7xl font-bold text-white">About us</h1>
</div>
<div class="text-center py-2 px-2 text-white md:text-left" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="700">
  <p>AAD Software Services is dedicated to delivering innovative and reliable software solutions that empower businesses to thrive in the digital age. Our mission is to provide top-notch 
    custom software, mobile apps, and web development services tailored to meet the unique needs of our clients.</p><br>
<p>We envision becoming a leading technology partner, recognized for our commitment to excellence, customer satisfaction, and sustainable practices.</p>
</div>
</div>


<!--Contact Us-->

<div class="max-w-screen-lg mx-auto p-5" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="700">
    <div class="grid grid-cols-1 md:grid-cols-12 border">
        <div class="bg-[#172A38] md:col-span-4 p-10 text-white">
            <p class="mt-4 text-sm leading-7 font-regular uppercase">
                Contact
            </p>
            <h3 class="text-3xl sm:text-4xl leading-normal font-extrabold tracking-tight">
                Get In <span class="text-[#5B61DC]">Touch</span>
            </h3>
            <p class="mt-4 leading-7 text-gray-200">
            At AAD Software Services, we are committed to delivering exceptional software solutions tailored to your unique needs. Whether you have a question, need support, or are looking to discuss a new project, our dedicated team is here to assist you. 
            </p>
           
        </div>
        <form class="md:col-span-8 p-10">
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-first-name">
                        First Name
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                        id="grid-first-name" type="text" placeholder="Jane">
                 
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-last-name">
                        Last Name
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-last-name" type="text" placeholder="Phoenix">
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-password">
                        Email Address
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-email" type="email" placeholder="********@*****.**">
                </div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-password">
                        Your Message
                    </label>
                    <textarea rows="10"
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"></textarea>
                </div>
                <div class="flex justify-between w-full px-3">
                    <button
                        class="shadow bg-[#5B61DC] hover:bg-violet-700 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-6 rounded"
                        type="submit">
                        Send Message
                    </button>
                </div>

            </div>

        </form>

    </div>
</div>


<!--Footer-->

<div>
<footer class="bg-[#5B61DC] p-5 md:flex md:justify-around">
  <div class="flex justify-center" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="700">
<img src="/img/AADALT.png" alt="">
</div>
<div class="flex justify-center" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="700">
<img class="px-1 scale-75" src="/img/facebook.png" alt="">
<img class="px-1 scale-75" src="/img/insta.png" alt="">
<img class="px-1 scale-75" src="/img/google.png" alt="">
</div>
</div>
</footer>
<div class="bg-[#5B61DC] text-center p-2 text-[#172A38] text-xs">
  <p>© 2024 AAD Software Services. All rights reserved.</p>
</div>



<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
</body>
</html>

