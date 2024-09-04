<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

    @vite('resources/css/app.css')

    <title>Document</title>
</head>

<body>
    <header class="fixed top-0 left-0 right-0 z-[9999] bg-transparent w-full">
        <div class="pl-0 lg:pl-[85px] lg:pr-[85px]">
            <div class="flex items-center justify-between">
                <div class="lg:flex-0-0-16 lg:max-w-16 flex items-center pt-[30px]">
                    <ul class="text-sm leading-1.14 flex items-center">
                        <li class="m-0 relative">
                            <a href="#" class="text-base leading-1.11 text-[#333333] p-0 border-none"
                                id="dropdownButton">
                                <img src="image/menu.svg">
                            </a>
                            <ul id="dropdownMenu"
                                class="hidden absolute left-0 mt-4 w-32 bg-white border border-gray-200 shadow-lg">
                                <li class="px-4 py-2 hover:bg-gray-100">
                                    <a href="#">Login</a>
                                </li>
                                <li class="px-4 py-2 hover:bg-gray-100">
                                    <a href="#">Registeration</a>
                                </li>
                                <li class="px-4 py-2 hover:bg-gray-100">
                                    <a href="#">Login</a>
                                </li>
                            </ul>
                        </li>


                        <li class="ml-5 relative">
                            <a href="#"
                                class="text-base text-[#333333] p-0 border-none flex items-center hover:text-opacity-70"
                                id="dropdownEngButton">ENG
                                <img src="image/chevron-down.svg" class="ml-2">
                            </a>
                            <ul id="dropdownEngMenu"
                                class="hidden absolute left-0 mt-4 w-32 bg-white border border-gray-200  shadow-lg z-[3]">
                                <li class="px-4 py-2 hover:bg-gray-100">
                                    <a href="#">English</a>
                                </li>
                                <li class="px-4 py-2 hover:bg-gray-100">
                                    <a href="#">Vietnamese</a>
                                </li>
                                <li class="px-4 py-2 hover:bg-gray-100">
                                    <a href="#">French</a>
                                </li>
                            </ul>
                        </li>

                        <li class="ml-5 relative">
                            <a href="#"
                                class="text-base text-[#333333] p-0 border-none flex items-center hover:text-opacity-70"
                                id="dropdownUsdButton">USD
                                <img src="image/chevron-down.svg" class="ml-2">
                            </a>
                            <ul id="dropdownUsdMenu"
                                class="hidden absolute left-0 mt-4 w-32 bg-white border border-gray-200  shadow-lg z-[3]">
                                <li class="px-4 py-2 hover:bg-gray-100">
                                    <a href="#">USD</a>
                                </li>
                                <li class="px-4 py-2 hover:bg-gray-100">
                                    <a href="#">VND</a>
                                </li>
                                <li class="px-4 py-2 hover:bg-gray-100">
                                    <a href="#">EURO</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
                <div class="lg:flex-0-0-66 lg:max-w-66 flex items-center pt-[30px] justify-center">
                    <ul
                        class="uppercase text-sm leading-4 text-[#333333] font-bold flex mb-0 list-none p-0 items-center">
                        <li class="relative my-0 mx-[18px] group">
                            <a href="#" class="mt-[13px] cursor-pointer p-0 hover:text-[#5ba515]">HOME</a>
                            <ul class="absolute left-0 mt-8 w-48 hidden group-hover:block bg-white shadow-lg rounded">
                                <li class="w-full bg-[#5ba515] h-[2px] "></li>
                                <li class="px-6 py-4"><a href="#" class="block hover:bg-[#5ba515] ">HOME 1</a></li>
                                <li class="px-6 py-4"><a href="#" class="block hover:bg-[#5ba515]">HOME 2</a></li>
                                <li class="px-6 py-4"><a href="#" class="block hover:bg-[#5ba515]">HOME 3</a></li>
                            </ul>
                        </li>
                        <li class="relative my-0 mx-[18px] group">
                            <a href="#" class="mt-[13px] cursor-pointer p-0  hover:text-[#5ba515]">STORE</a>
                            <ul class="absolute left-0 mt-8 w-48 hidden group-hover:block bg-white shadow-lg  rounded">
                                <li class="w-full bg-[#5ba515] h-[2px] "></li>
                                <li class="px-6 py-4"><a href="#" class="block  hover:bg-[#5ba515]">Shop Left
                                        Sidebar</a></li>
                                <li class="px-6 py-4"><a href="#" class="block  hover:bg-[#5ba515]">Single Product</a>
                                </li>
                            </ul>
                        </li>
                        <li class="my-0 mx-[18px]">
                            <a href="#" class="mt-[13px] cursor-pointer p-0  hover:text-[#5ba515]">ABOUT</a>
                        </li>
                        <li class="my-0 mx-[18px] flex items-center justify-center">
                            <a href="#" class="cursor-pointer p-0 flex items-center">
                                <img src="image/logo.png" class="h-auto max-w-full">
                            </a>
                        </li>


                        <li class="relative my-0 mx-[18px] group">
                            <a href="#" class="mt-[13px] cursor-pointer p-0 hover:text-[#5ba515]">BLOG</a>
                            <ul class="absolute left-0 mt-8 w-48 hidden group-hover:block bg-white shadow-lg  rounded">
                                <li class="w-full bg-[#5ba515] h-[2px] "></li>
                                <li class="px-6 py-4"><a href="#" class="block  hover:bg-[#5ba515]">Blog Left
                                        Sidebar</a></li>
                                <li class="px-6 py-4"><a href="#" class="block  hover:bg-[#5ba515]">Blog Detail</a></li>
                            </ul>

                        </li>
                        <li class="relative my-0 mx-[18px] group">
                            <a href="#" class="mt-[13px] cursor-pointer p-0  hover:text-[#5ba515]">PAGES</a>
                            <ul class="absolute left-0 mt-8 w-48 hidden group-hover:block bg-white shadow-lg  rounded">
                                <li class="w-full bg-[#5ba515] h-[2px] "></li>
                                <li class="px-6 py-4"><a href="#" class="block">Cart Page</a></li>
                            </ul>
                        </li>
                        <li class="my-0 mx-[18px]">
                            <a href="#" class="mt-[13px] cursor-pointer p-0  hover:text-[#5ba515]">CONTACT</a>
                        </li>
                    </ul>
                </div>


                <div class="lg:flex-0-0-16 lg:max-w-16 flex items-center pt-[30px] justify-end">
                    <ul class="p-0 text-lg leading-1.11 flex items-center">
                        <li class="m-0 mr-[15px]">
                            <a href="#" class="text-[#333333] border-none p-0 flex items-center hover:opacity-70">
                                <img src="image/search.svg" alt="">
                            </a>
                        </li>
                        <li class="m-0 mr-[15px]">
                            <a href="#"
                                class="text-[#333333] border-none p-0 flex items-center hover:text-opacity-70"><img
                                    src="image/heart.svg" alt=""></a>
                        </li>
                        <li class="m-0">
                            <a href="#"
                                class="text-[#333333] border-none p-0 flex items-center hover:text-opacity-70"><img
                                    src="image/shopping-cart.svg" alt=""></a>
                        </li>
                    </ul>
                </div>
            </div>




        </div>
    </header>

    <section class="relative overflow-hidden">
        <div class="slides">
            <!-- Slide 1 -->
            <div class="slide active">
                <img src="image/bg1.jpg" class="w-full h-auto">
                <div class="font-playfair absolute inset-0 flex items-center pt-[10px] justify-start z-20 w-full">
                    <div class="px-[15px] max-w-none ml-[350px]">
                        <div class="flex flex-col mx-[-15px] my-2 space-y-4 pr-[30px] mb-[15px]">
                            <h1 class="text-black leading-[4.5rem] text-7xl font-bold">Houseplant</h1>
                            <h1 class="text-black leading-[4.5rem] text-7xl font-bold">The Perfect Choice.</h1>
                            <div class="h-1 bg-black w-1/2"></div>
                            <p class="text-xl leading-8">Lorem ipsum dolor sit amet consectetur adipisicing elite.</p>
                            <a href="#"
                                class="flex w-[180px] rounded-[40px] bg-[#5ba515] h-[52px] text-white text-base relative items-center font-bold py-2 px-3 py-md-3 px-md-4">
                                Shop Now
                                <img src="image/arrow-right.svg" class="ml-2">
                            </a>
                            <div class="flex justify-start space-x-4 mt-10 pl-[15px]">
                                <button class="prev bg-transparent text-black px-4 py-2 font-semibold">
                                    <img src="image/left.svg">
                                </button>
                                <button class="next bg-transparent text-black px-4 py-2 font-semibold">
                                    <img src="image/right.svg">
                                </button>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="absolute inset-0 flex items-center justify-end p-4 bottom-[-160px] right-[50px] z-0">
                    <div class="w-1/2 top-5 flex justify-end">
                        <img src="image/bgimage1.png" class="top-5 bottom-0 w-full h-auto">
                    </div>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="slide">
                <img src="image/bg2.jpg" class="w-full h-auto">
                <div class=" absolute inset-0 flex items-center pt-[10px] justify-start z-20 w-full">
                    <div class="px-[15px] max-w-none ml-[350px]">
                        <div class="flex flex-col mx-[-15px] my-2 space-y-4 pr-[30px] mb-[15px]">
                            <p class="text-black  text-2xl tracking-widest font-bold">WELCOME TO BOTANICAL</p>
                            <!-- Satır yüksekliğini 4.5rem'den 4rem'e düşürdük -->
                            <h1 class="text-black leading-[4rem] text-7xl font-bold font-playfair">Plant Gonna Make</h1>
                            <h1 class="text-black leading-[4rem] text-7xl font-bold font-playfair">People Happy.</h1>
                            <p class="text-xl leading-8 font-playfair">Lorem ipsum dolor sit amet consectetur
                                adipisicing elite.</p>
                            <a href="#"
                                class="flex w-[180px] rounded-[40px] bg-[#5ba515] h-[52px] text-white text-base relative items-center font-bold py-2 px-3 py-md-3 px-md-4">
                                Shop Now
                                <img src="image/arrow-right.svg" class="ml-2">
                            </a>
                            <div class="flex justify-start space-x-4 mt-10 pl-[15px]">
                                <button class="prev bg-transparent text-black px-4 py-2 font-semibold">
                                    <img src="image/left.svg">
                                </button>
                                <button class="next bg-transparent text-black px-4 py-2 font-semibold">
                                    <img src="image/right.svg">
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="absolute inset-0 flex items-center justify-end p-4 bottom-[-160px] right-[50px] z-0">
                    <div class="w-3/4 top-5 flex justify-end">
                        <img src="image/bgimage2.png" class="top-4 bottom-0 w-full h-auto">
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="slide">
                <img src="image/bg3.jpg" class="w-full h-auto">
                <div class=" absolute inset-0 flex items-center pt-[10px] justify-start z-20 w-full">
                    <div class="px-[15px] max-w-none ml-[350px]">
                        <div class="flex flex-col mx-[-15px] my-2 space-y-4 pr-[30px] mb-[15px]">
                            <p class="text-black text-2xl tracking-widest font-bold mb-0">WELCOME TO BOTANICAL</p>
                            <h1 class="text-black leading-[4rem] text-7xl font-bold font-playfair mt-[-10px]">Plants for
                                healthy</h1>

                            <p class="text-xl leading-8 font-playfair">Lorem ipsum dolor sit amet consectetur
                                adipisicing elite.</p>
                            <a href="#"
                                class="flex w-[180px] rounded-[40px] bg-[#5ba515] h-[52px] text-white text-base relative items-center font-bold py-2 px-3 py-md-3 px-md-4 mt-32">
                                Shop Now
                                <img src="image/arrow-right.svg" class="ml-2">
                            </a>
                            <div class="flex justify-start space-x-4 mt-10 pl-[15px]">
                                <button class="prev bg-transparent text-black px-4 py-2 font-semibold">
                                    <img src="image/left.svg">
                                </button>
                                <button class="next bg-transparent text-black px-4 py-2 font-semibold">
                                    <img src="image/right.svg">
                                </button>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="absolute inset-0 flex items-center justify-end p-4 bottom-[-160px] right-[50px] z-0">
                    <div class="w-1/2 top-5 flex justify-end mb-[86px]">
                        <img src="image/bgimage3.png" class="top-5 bottom-1 w-full h-auto">
                    </div>
                </div>
            </div>

        </div>


    </section>

    <section class="pt-[110px] mx-auto pb-[60px] max-w-[1200px] font-playfair ">
        <div class="flex flex-wrap mr-[-15px] ml-[-15px] mx-auto">
            <div class="w-1/2 mb-0 flex-0-0-5- max-w-50  ">
                <img src="image/image.jpg" alt="" class="max-w-full h-auto border-none ">
            </div>
            <div class="w-1-2 pr-[20px] flex-0-0-50 max-w-50">
                <h2 class="text-[36px] leading-[27px] text-[#333333] font-bold mb-4">Why choose us ?</h2>
                <div class="h-1 bg-[#5ba515] w-1/5 mb-6"></div>
                <p class="mb-[70px] mt-0">Lorem ipsum is simply dummy text of the printing and typesetting industry,
                    lorem ipsum has been the industry's standard dummy text ever since the 1500s when an unknown printer
                    took a galley ...
                    <a href="" class="text-[#5ba515] italic">Learn More</a>
                </p>

                <ul class="text-[#838383] pl-0">
                    <li class="mb-[35px] justify-start flex">
                        <span class="w-[80px] h-[80px] font-bold ">
                            <img src="image/plant.png" class="w-full h-full object-contain scale-110 ">
                        </span>
                        <div class="ml-4">
                            <h3 class="text-[20px] leading-[22px] text-[#444444] font-bold mb-3">Hand Planted</h3>
                            <p class="mt-0 mb-4">There are many variations of passages of lorem ipsum available, but the
                                majority have suffered alteration in some form.</p>
                        </div>
                    </li>
                    <li class="mb-[35px] justify-start flex">
                        <span class="w-[80px] h-[80px] font-bold ">
                            <img src="image/cactus.png" class="w-full h-full object-contain ">
                        </span>
                        <div class="ml-4">
                            <h3 class="text-[20px] leading-[22px] text-[#444444] font-bold mb-3">Natural Sunlight</h3>
                            <p class="mt-0 mb-4">It is a long established fact that a reader will be distracted by the
                                readable content of a page.</p>
                        </div>
                    </li>
                    <li class="mb-[35px] justify-start flex">
                        <span class="w-[80px] h-[80px] font-bold">
                            <img src="image/air.png" class="w-full h-full object-contain ">
                        </span>
                        <div class="ml-4">
                            <h3 class="text-[20px] leading-[22px] text-[#444444] font-bold mb-3">Clean Air</h3>
                            <p class="mt-0 mb-4">There are many variations of passages of lorem ipsum available, but the
                                majority have suffered.</p>
                        </div>
                    </li>
                </ul>

            </div>


        </div>
    </section>

    <section class="pl-[70px] pr-[70px] mx-auto pb-20  pt-[60px]  text-center">
        <h2 class="font-playfair text-4xl font-bold">Featured Project</h2>

        <div class="flex items-center justify-center my-4">
            <img src="image/star.png">
        </div>
        <p class="text-lg text-gray-700 ">Lorem ipsum is simply dummy text of the printing and typesetting industry.</p>


        <div class="relative flex-col gap-4 ">
            <div class="flex flex-wrap gap-4  mb-[120px] p-2">
                <div class="relative p-2 h-[345px] pl-2 pr-2 group">
                    <div class="box-border border-1 border-[#dee2e6] shadow-md">
                        <div class="w-full relative overflow-hidden">
                            <img src="image/kart1.jpg" class="w-full h-auto align-middle">
                        </div>
                        <div class="flex-col items-center shadow-lg pb-4">
                            <p class="text-[18px] mt-4 mb-2">Sit voluptatem</p>
                            <p class="text-[18px] font-extrabold mt-2">68.00 $</p>
                        </div>
                    </div>
                    <ul
                        class="absolute bottom-12 left-1/2 transform -translate-x-1/2 flex gap-3 opacity-0 translate-y-6 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300">

                        <li>
                            <button
                                class="w-11 h-10 bg-white border border-gray-300 shadow-md flex items-center justify-center rounded-l-full">
                                <img src="image/heart.svg" alt="" class="">
                            </button>
                        </li>
                        <li>
                            <button
                                class="w-11 h-10 bg-white border border-gray-300  shadow-md flex items-center justify-center">
                                <img src="image/shopping-cart.svg" alt="" class="">
                            </button>
                        </li>
                        <li>
                            <button
                                class="w-11 h-10 bg-white border border-gray-300 shadow-md flex items-center justify-center">
                                <img src="image/eye.svg" alt="" class="">
                            </button>
                        </li>
                        <li>
                            <button
                                class="w-11 h-10 bg-white border border-gray-300 shadow-md flex items-center justify-center rounded-r-full">
                                <img src="image/repeat.svg" alt="" class="">
                            </button>
                        </li>
                    </ul>
                </div>

                <div class="relative p-2  h-[345px] pl-2 pr-2 group">
                    <div class="box-border border-1 border-[#dee2e6] shadow-md">
                        <div class="w-full relative overflow-hidden">
                            <img src="image/kart2.jpg" class="w-full h-auto align-middle">
                        </div>
                        <div class="flex-col items-center shadow-lg pb-4">
                            <p class="text-[18px] mt-4 mb-2">Sit voluptatem</p>
                            <p class="text-[18px] font-extrabold mt-2">68.00 $</p>
                        </div>
                    </div>
                    <ul
                        class="absolute bottom-12 left-1/2 transform -translate-x-1/2 flex gap-3 opacity-0 translate-y-6 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300">

                        <li>
                            <button
                                class="w-11 h-10 bg-white border border-gray-300 shadow-md flex items-center justify-center rounded-l-full">
                                <img src="image/heart.svg" alt="" class="">
                            </button>
                        </li>
                        <li>
                            <button
                                class="w-11 h-10 bg-white border border-gray-300  shadow-md flex items-center justify-center">
                                <img src="image/shopping-cart.svg" alt="" class="">
                            </button>
                        </li>
                        <li>
                            <button
                                class="w-11 h-10 bg-white border border-gray-300 shadow-md flex items-center justify-center">
                                <img src="image/eye.svg" alt="" class="">
                            </button>
                        </li>
                        <li>
                            <button
                                class="w-11 h-10 bg-white border border-gray-300 shadow-md flex items-center justify-center rounded-r-full">
                                <img src="image/repeat.svg" alt="" class="">
                            </button>
                        </li>
                    </ul>
                </div>

                <div class="relative p-2  h-[345px] pl-2 pr-2 group">
                    <div class="box-border border-1 border-[#dee2e6] shadow-md">
                        <div class="w-full relative overflow-hidden">
                            <img src="image/kart3.jpg" class="w-full h-auto align-middle">
                        </div>
                        <div class="flex-col items-center shadow-lg pb-4">
                            <p class="text-[18px] mt-4 mb-2">Sit voluptatem</p>
                            <p class="text-[18px] font-extrabold mt-2">68.00 $</p>
                        </div>
                    </div>
                    <ul
                        class="absolute bottom-12 left-1/2 transform -translate-x-1/2 flex gap-3 opacity-0 translate-y-6 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300">

                        <li>
                            <button
                                class="w-11 h-10 bg-white border border-gray-300 shadow-md flex items-center justify-center rounded-l-full">
                                <img src="image/heart.svg" alt="" class="">
                            </button>
                        </li>
                        <li>
                            <button
                                class="w-11 h-10 bg-white border border-gray-300  shadow-md flex items-center justify-center">
                                <img src="image/shopping-cart.svg" alt="" class="">
                            </button>
                        </li>
                        <li>
                            <button
                                class="w-11 h-10 bg-white border border-gray-300 shadow-md flex items-center justify-center">
                                <img src="image/eye.svg" alt="" class="">
                            </button>
                        </li>
                        <li>
                            <button
                                class="w-11 h-10 bg-white border border-gray-300 shadow-md flex items-center justify-center rounded-r-full">
                                <img src="image/repeat.svg" alt="" class="">
                            </button>
                        </li>
                    </ul>
                </div>

                <div class="relative p-2  h-[345px] pl-2 pr-2 group">
                    <div class="box-border border-1 border-[#dee2e6] shadow-md">
                        <div class="w-full relative overflow-hidden">
                            <img src="image/kart4.jpg" class="w-full h-auto align-middle">
                        </div>
                        <div class="flex-col items-center shadow-lg pb-4">
                            <p class="text-[18px] mt-4 mb-2">Sit voluptatem</p>
                            <p class="text-[18px] font-extrabold mt-2">68.00 $</p>
                        </div>
                    </div>
                    <ul
                        class="absolute bottom-12 left-1/2 transform -translate-x-1/2 flex gap-3 opacity-0 translate-y-6 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300">

                        <li>
                            <button
                                class="w-11 h-10 bg-white border border-gray-300 shadow-md flex items-center justify-center rounded-l-full">
                                <img src="image/heart.svg" alt="" class="">
                            </button>
                        </li>
                        <li>
                            <button
                                class="w-11 h-10 bg-white border border-gray-300  shadow-md flex items-center justify-center">
                                <img src="image/shopping-cart.svg" alt="" class="">
                            </button>
                        </li>
                        <li>
                            <button
                                class="w-11 h-10 bg-white border border-gray-300 shadow-md flex items-center justify-center">
                                <img src="image/eye.svg" alt="" class="">
                            </button>
                        </li>
                        <li>
                            <button
                                class="w-11 h-10 bg-white border border-gray-300 shadow-md flex items-center justify-center rounded-r-full">
                                <img src="image/repeat.svg" alt="" class="">
                            </button>
                        </li>
                    </ul>
                </div>

                <div class="relative p-2  h-[345px] pl-2 pr-2 group">
                    <div class="box-border border-1 border-[#dee2e6] shadow-md">
                        <div class="w-full relative overflow-hidden">
                            <img src="image/kart5.jpg" class="w-full h-auto align-middle">
                        </div>
                        <div class="flex-col items-center shadow-lg pb-4">
                            <p class="text-[18px] mt-4 mb-2">Sit voluptatem</p>
                            <p class="text-[18px] font-extrabold mt-2">68.00 $</p>
                        </div>
                    </div>
                    <ul
                        class="absolute bottom-12 left-1/2 transform -translate-x-1/2 flex gap-3 opacity-0 translate-y-6 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300">

                        <li>
                            <button
                                class="w-11 h-10 bg-white border border-gray-300 shadow-md flex items-center justify-center rounded-l-full">
                                <img src="image/heart.svg" alt="" class="">
                            </button>
                        </li>
                        <li>
                            <button
                                class="w-11 h-10 bg-white border border-gray-300  shadow-md flex items-center justify-center">
                                <img src="image/shopping-cart.svg" alt="" class="">
                            </button>
                        </li>
                        <li>
                            <button
                                class="w-11 h-10 bg-white border border-gray-300 shadow-md flex items-center justify-center">
                                <img src="image/eye.svg" alt="" class="">
                            </button>
                        </li>
                        <li>
                            <button
                                class="w-11 h-10 bg-white border border-gray-300 shadow-md flex items-center justify-center rounded-r-full">
                                <img src="image/repeat.svg" alt="" class="">
                            </button>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="flex flex-wrap gap-4  mb-12 p-2 ">
                <div class="relative p-2  h-[345px] pl-2 pr-2 group">
                    <div class="box-border border-1 border-[#dee2e6] shadow-md">
                        <div class="w-full relative overflow-hidden">
                            <img src="image/kart6.jpg" class="w-full h-auto align-middle">
                        </div>
                        <div class="flex-col items-center shadow-lg pb-4">
                            <p class="text-[18px] mt-4 mb-2">Sit voluptatem</p>
                            <p class="text-[18px] font-extrabold mt-2">68.00 $</p>
                        </div>
                    </div>
                    <ul
                        class="absolute bottom-12 left-1/2 transform -translate-x-1/2 flex gap-3 opacity-0 translate-y-6 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300">

                        <li>
                            <button
                                class="w-11 h-10 bg-white border border-gray-300 shadow-md flex items-center justify-center rounded-l-full">
                                <img src="image/heart.svg" alt="" class="">
                            </button>
                        </li>
                        <li>
                            <button
                                class="w-11 h-10 bg-white border border-gray-300  shadow-md flex items-center justify-center">
                                <img src="image/shopping-cart.svg" alt="" class="">
                            </button>
                        </li>
                        <li>
                            <button
                                class="w-11 h-10 bg-white border border-gray-300 shadow-md flex items-center justify-center">
                                <img src="image/eye.svg" alt="" class="">
                            </button>
                        </li>
                        <li>
                            <button
                                class="w-11 h-10 bg-white border border-gray-300 shadow-md flex items-center justify-center rounded-r-full">
                                <img src="image/repeat.svg" alt="" class="">
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="relative p-2  h-[345px] pl-2 pr-2 group">
                    <div class="box-border border-1 border-[#dee2e6] shadow-md">
                        <div class="w-full relative overflow-hidden">
                            <img src="image/kart7.jpg" class="w-full h-auto align-middle">
                        </div>
                        <div class="flex-col items-center shadow-lg pb-4">
                            <p class="text-[18px] mt-4 mb-2">Sit voluptatem</p>
                            <p class="text-[18px] font-extrabold mt-2">68.00 $</p>
                        </div>
                    </div>
                    <ul
                        class="absolute bottom-12 left-1/2 transform -translate-x-1/2 flex gap-3 opacity-0 translate-y-6 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300">

                        <li>
                            <button
                                class="w-11 h-10 bg-white border border-gray-300 shadow-md flex items-center justify-center rounded-l-full">
                                <img src="image/heart.svg" alt="" class="">
                            </button>
                        </li>
                        <li>
                            <button
                                class="w-11 h-10 bg-white border border-gray-300  shadow-md flex items-center justify-center">
                                <img src="image/shopping-cart.svg" alt="" class="">
                            </button>
                        </li>
                        <li>
                            <button
                                class="w-11 h-10 bg-white border border-gray-300 shadow-md flex items-center justify-center">
                                <img src="image/eye.svg" alt="" class="">
                            </button>
                        </li>
                        <li>
                            <button
                                class="w-11 h-10 bg-white border border-gray-300 shadow-md flex items-center justify-center rounded-r-full">
                                <img src="image/repeat.svg" alt="" class="">
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="relative p-2  h-[345px] pl-2 pr-2 group">
                    <div class="box-border border-1 border-[#dee2e6] shadow-md">
                        <div class="w-full relative overflow-hidden">
                            <img src="image/kart8.jpg" class="w-full h-auto align-middle">
                        </div>
                        <div class="flex-col items-center shadow-lg pb-4">
                            <p class="text-[18px] mt-4 mb-2">Sit voluptatem</p>
                            <p class="text-[18px] font-extrabold mt-2">68.00 $</p>
                        </div>
                    </div>
                    <ul
                        class="absolute bottom-12 left-1/2 transform -translate-x-1/2 flex gap-3 opacity-0 translate-y-6 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300">

                        <li>
                            <button
                                class="w-11 h-10 bg-white border border-gray-300 shadow-md flex items-center justify-center rounded-l-full">
                                <img src="image/heart.svg" alt="" class="">
                            </button>
                        </li>
                        <li>
                            <button
                                class="w-11 h-10 bg-white border border-gray-300  shadow-md flex items-center justify-center">
                                <img src="image/shopping-cart.svg" alt="" class="">
                            </button>
                        </li>
                        <li>
                            <button
                                class="w-11 h-10 bg-white border border-gray-300 shadow-md flex items-center justify-center">
                                <img src="image/eye.svg" alt="" class="">
                            </button>
                        </li>
                        <li>
                            <button
                                class="w-11 h-10 bg-white border border-gray-300 shadow-md flex items-center justify-center rounded-r-full">
                                <img src="image/repeat.svg" alt="" class="">
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="relative p-2  h-[345px] pl-2 pr-2 group">
                    <div class="box-border border-1 border-[#dee2e6] shadow-md">
                        <div class="w-full relative overflow-hidden">
                            <img src="image/kart9.jpg" class="w-full h-auto align-middle">
                        </div>
                        <div class="flex-col items-center shadow-lg pb-4">
                            <p class="text-[18px] mt-4 mb-2">Sit voluptatem</p>
                            <p class="text-[18px] font-extrabold mt-2">68.00 $</p>
                        </div>
                    </div>
                    <ul
                        class="absolute bottom-12 left-1/2 transform -translate-x-1/2 flex gap-3 opacity-0 translate-y-6 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300">

                        <li>
                            <button
                                class="w-11 h-10 bg-white border border-gray-300 shadow-md flex items-center justify-center rounded-l-full">
                                <img src="image/heart.svg" alt="" class="">
                            </button>
                        </li>
                        <li>
                            <button
                                class="w-11 h-10 bg-white border border-gray-300  shadow-md flex items-center justify-center">
                                <img src="image/shopping-cart.svg" alt="" class="">
                            </button>
                        </li>
                        <li>
                            <button
                                class="w-11 h-10 bg-white border border-gray-300 shadow-md flex items-center justify-center">
                                <img src="image/eye.svg" alt="" class="">
                            </button>
                        </li>
                        <li>
                            <button
                                class="w-11 h-10 bg-white border border-gray-300 shadow-md flex items-center justify-center rounded-r-full">
                                <img src="image/repeat.svg" alt="" class="">
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="relative p-2  h-[345px] pl-2 pr-2 group">
                    <div class="box-border border-1 border-[#dee2e6] shadow-md">
                        <div class="w-full relative overflow-hidden">
                            <img src="image/kart10.jpg" class="w-full h-auto align-middle">
                        </div>
                        <div class="flex-col items-center shadow-lg pb-4">
                            <p class="text-[18px] mt-4 mb-2">Sit voluptatem</p>
                            <p class="text-[18px] font-extrabold mt-2">68.00 $</p>
                        </div>
                    </div>
                    <ul
                        class="absolute bottom-12 left-1/2 transform -translate-x-1/2 flex gap-3 opacity-0 translate-y-6 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300">

                        <li>
                            <button
                                class="w-11 h-10 bg-white border border-gray-300 shadow-md flex items-center justify-center rounded-l-full">
                                <img src="image/heart.svg" alt="" class="">
                            </button>
                        </li>
                        <li>
                            <button
                                class="w-11 h-10 bg-white border border-gray-300  shadow-md flex items-center justify-center">
                                <img src="image/shopping-cart.svg" alt="" class="">
                            </button>
                        </li>
                        <li>
                            <button
                                class="w-11 h-10 bg-white border border-gray-300 shadow-md flex items-center justify-center">
                                <img src="image/eye.svg" alt="" class="">
                            </button>
                        </li>
                        <li>
                            <button
                                class="w-11 h-10 bg-white border border-gray-300 shadow-md flex items-center justify-center rounded-r-full">
                                <img src="image/repeat.svg" alt="" class="">
                            </button>
                        </li>
                    </ul>
                </div>

            </div>
        </div>



    </section>

    <div class="pt-20 pb-10 px-6 max-w-[1200px]  mx-auto">
        <div class="flex flex-wrap py-10 justify-between mr-[-15px] ml-[-15px] ">
            <div class=" pl-[30px] pr-[30px] pb-[25px] pt-[25px] border rounded-[50px] border-gray-300 ">
                <div class="flex">
                    <span class="text-[43px] leading-[51px]">
                        <img src="image/truck.svg" class="">
                    </span>
                    <div class="pl-2.5 box-border">
                        <h2 class="text-base leading-[18px] font-bold text-[#444444]">Free shipping order</h2>
                        <p class="m-0 box-border">On orders over $100</p>
                    </div>
                </div>
            </div>
            <div class=" pl-[30px] pr-[30px] pb-[25px] pt-[25px] border rounded-[50px] border-gray-300 ">
                <div class="flex ">
                    <span class="text-[43px] leading-[51px]">
                        <img src="image/gift.svg" class="">
                    </span>
                    <div class="pl-2.5 box-border">
                        <h2 class="text-base leading-[18px] font-bold text-[#444444]">Free shipping order</h2>
                        <p class="m-0 box-border">On orders over $100</p>
                    </div>
                </div>
            </div>
            <div class=" pl-[30px] pr-[30px] pb-[25px] pt-[25px] border rounded-[50px] border-gray-300">
                <div class="flex">
                    <span class="text-[43px] leading-[51px]">
                        <img src="image/refresh-cw.svg" class="">
                    </span>
                    <div class="pl-2.5 box-border">
                        <h2 class="text-base leading-[18px] font-bold text-[#444444]">Free shipping order</h2>
                        <p class="m-0 box-border">On orders over $100</p>
                    </div>
                </div>
            </div>
            <div class="pl-[30px] pr-[30px] pb-[25px] pt-[25px] border rounded-[50px] border-gray-300 ">
                <div class="flex">
                    <span class="text-[43px] leading-[51px]">
                        <img src="image/phone.svg" class="">
                    </span>
                    <div class="pl-2.5 box-border">
                        <h2 class="text-base leading-[18px] font-bold text-[#444444]">Free shipping order</h2>
                        <p class="m-0 box-border">On orders over $100</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="text-center">
        <div class="max-w-[1700px] p-10 mx-auto">
            <div class="flex justify-center mx-auto">
                <div class=""><img src="image/product1.jpg" class="mr-4 ml-4"></div>
                <div class=""><img src="image/product2.jpg" class="mr-4 ml-4"></div>
            </div>
        </div>
    </section>

    <section class="pl-[70px] pr-[70px] mx-auto pb-20  pt-[60px]  text-center">
        <h2 class="font-playfair text-4xl font-bold">Daily Deal</h2>

        <div class="flex items-center justify-center my-4">
            <img src="image/star.png">
        </div>
        <p class="text-lg text-gray-700 ">There are many variations of passages of lorem ipsum available.</p>
        <div class="text-center border-box">
            <span class="flex p-4 justify-center items-center">
                <span class="flex flex-col items-center mr-[30px]">
                    <span class="text-[31px] leading-[33px] text-[#5ba515] font-bold bg-transparent p-0">0</span>
                    <span class="text-sm leading-[17px] text-[#b2b2b2]">Hours</span>
                </span>
                <span class="text-[31px] leading-[33px] text-[#5ba515] font-bold bg-transparent p-0">:</span>
                <span class="flex flex-col items-center mr-[30px] ml-[30px]">
                    <span class="text-[31px] leading-[33px] text-[#5ba515] font-bold bg-transparent p-0">0</span>
                    <span class="text-sm leading-[17px] text-[#b2b2b2]">Minutes</span>
                </span>
                <span class="text-[31px] leading-[33px] text-[#5ba515] font-bold bg-transparent p-0">:</span>
                <span class="flex flex-col items-center ml-[30px]">
                    <span class="text-[31px] leading-[33px] text-[#5ba515] font-bold bg-transparent p-0">0</span>
                    <span class="text-sm leading-[17px] text-[#b2b2b2]">Seconds</span>
                </span>
            </span>
        </div>


        <div class="relative flex-col gap-4 ">
            <div class="flex flex-wrap gap-4  mb-[120px] p-2">
                <div class="relative p-2 h-[345px] pl-2 pr-2 group">
                    <div class="box-border border-1 border-[#dee2e6] shadow-md">
                        <div class="w-full relative overflow-hidden">
                            <img src="image/kart1.jpg" class="w-full h-auto align-middle">
                        </div>
                        <div class="flex-col items-center shadow-lg pb-4">
                            <p class="text-[18px] mt-4 mb-2">Sit voluptatem</p>
                            <p class="text-[18px] font-extrabold mt-2">68.00 $</p>
                        </div>
                    </div>
                    <ul
                        class="absolute bottom-12 left-1/2 transform -translate-x-1/2 flex gap-3 opacity-0 translate-y-6 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300">

                        <li>
                            <button
                                class="w-11 h-10 bg-white border border-gray-300 shadow-md flex items-center justify-center rounded-l-full">
                                <img src="image/heart.svg" alt="" class="">
                            </button>
                        </li>
                        <li>
                            <button
                                class="w-11 h-10 bg-white border border-gray-300  shadow-md flex items-center justify-center">
                                <img src="image/shopping-cart.svg" alt="" class="">
                            </button>
                        </li>
                        <li>
                            <button
                                class="w-11 h-10 bg-white border border-gray-300 shadow-md flex items-center justify-center">
                                <img src="image/eye.svg" alt="" class="">
                            </button>
                        </li>
                        <li>
                            <button
                                class="w-11 h-10 bg-white border border-gray-300 shadow-md flex items-center justify-center rounded-r-full">
                                <img src="image/repeat.svg" alt="" class="">
                            </button>
                        </li>
                    </ul>
                </div>

                <div class="relative p-2  h-[345px] pl-2 pr-2 group">
                    <div class="box-border border-1 border-[#dee2e6] shadow-md">
                        <div class="w-full relative overflow-hidden">
                            <img src="image/kart2.jpg" class="w-full h-auto align-middle">
                        </div>
                        <div class="flex-col items-center shadow-lg pb-4">
                            <p class="text-[18px] mt-4 mb-2">Sit voluptatem</p>
                            <p class="text-[18px] font-extrabold mt-2">68.00 $</p>
                        </div>
                    </div>
                    <ul
                        class="absolute bottom-12 left-1/2 transform -translate-x-1/2 flex gap-3 opacity-0 translate-y-6 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300">

                        <li>
                            <button
                                class="w-11 h-10 bg-white border border-gray-300 shadow-md flex items-center justify-center rounded-l-full">
                                <img src="image/heart.svg" alt="" class="">
                            </button>
                        </li>
                        <li>
                            <button
                                class="w-11 h-10 bg-white border border-gray-300  shadow-md flex items-center justify-center">
                                <img src="image/shopping-cart.svg" alt="" class="">
                            </button>
                        </li>
                        <li>
                            <button
                                class="w-11 h-10 bg-white border border-gray-300 shadow-md flex items-center justify-center">
                                <img src="image/eye.svg" alt="" class="">
                            </button>
                        </li>
                        <li>
                            <button
                                class="w-11 h-10 bg-white border border-gray-300 shadow-md flex items-center justify-center rounded-r-full">
                                <img src="image/repeat.svg" alt="" class="">
                            </button>
                        </li>
                    </ul>
                </div>

                <div class="relative p-2  h-[345px] pl-2 pr-2 group">
                    <div class="box-border border-1 border-[#dee2e6] shadow-md">
                        <div class="w-full relative overflow-hidden">
                            <img src="image/kart3.jpg" class="w-full h-auto align-middle">
                        </div>
                        <div class="flex-col items-center shadow-lg pb-4">
                            <p class="text-[18px] mt-4 mb-2">Sit voluptatem</p>
                            <p class="text-[18px] font-extrabold mt-2">68.00 $</p>
                        </div>
                    </div>
                    <ul
                        class="absolute bottom-12 left-1/2 transform -translate-x-1/2 flex gap-3 opacity-0 translate-y-6 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300">

                        <li>
                            <button
                                class="w-11 h-10 bg-white border border-gray-300 shadow-md flex items-center justify-center rounded-l-full">
                                <img src="image/heart.svg" alt="" class="">
                            </button>
                        </li>
                        <li>
                            <button
                                class="w-11 h-10 bg-white border border-gray-300  shadow-md flex items-center justify-center">
                                <img src="image/shopping-cart.svg" alt="" class="">
                            </button>
                        </li>
                        <li>
                            <button
                                class="w-11 h-10 bg-white border border-gray-300 shadow-md flex items-center justify-center">
                                <img src="image/eye.svg" alt="" class="">
                            </button>
                        </li>
                        <li>
                            <button
                                class="w-11 h-10 bg-white border border-gray-300 shadow-md flex items-center justify-center rounded-r-full">
                                <img src="image/repeat.svg" alt="" class="">
                            </button>
                        </li>
                    </ul>
                </div>

                <div class="relative p-2  h-[345px] pl-2 pr-2 group">
                    <div class="box-border border-1 border-[#dee2e6] shadow-md">
                        <div class="w-full relative overflow-hidden">
                            <img src="image/kart4.jpg" class="w-full h-auto align-middle">
                        </div>
                        <div class="flex-col items-center shadow-lg pb-4">
                            <p class="text-[18px] mt-4 mb-2">Sit voluptatem</p>
                            <p class="text-[18px] font-extrabold mt-2">68.00 $</p>
                        </div>
                    </div>
                    <ul
                        class="absolute bottom-12 left-1/2 transform -translate-x-1/2 flex gap-3 opacity-0 translate-y-6 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300">

                        <li>
                            <button
                                class="w-11 h-10 bg-white border border-gray-300 shadow-md flex items-center justify-center rounded-l-full">
                                <img src="image/heart.svg" alt="" class="">
                            </button>
                        </li>
                        <li>
                            <button
                                class="w-11 h-10 bg-white border border-gray-300  shadow-md flex items-center justify-center">
                                <img src="image/shopping-cart.svg" alt="" class="">
                            </button>
                        </li>
                        <li>
                            <button
                                class="w-11 h-10 bg-white border border-gray-300 shadow-md flex items-center justify-center">
                                <img src="image/eye.svg" alt="" class="">
                            </button>
                        </li>
                        <li>
                            <button
                                class="w-11 h-10 bg-white border border-gray-300 shadow-md flex items-center justify-center rounded-r-full">
                                <img src="image/repeat.svg" alt="" class="">
                            </button>
                        </li>
                    </ul>
                </div>

                <div class="relative p-2  h-[345px] pl-2 pr-2 group">
                    <div class="box-border border-1 border-[#dee2e6] shadow-md">
                        <div class="w-full relative overflow-hidden">
                            <img src="image/kart5.jpg" class="w-full h-auto align-middle">
                        </div>
                        <div class="flex-col items-center shadow-lg pb-4">
                            <p class="text-[18px] mt-4 mb-2">Sit voluptatem</p>
                            <p class="text-[18px] font-extrabold mt-2">68.00 $</p>
                        </div>
                    </div>
                    <ul
                        class="absolute bottom-12 left-1/2 transform -translate-x-1/2 flex gap-3 opacity-0 translate-y-6 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300">

                        <li>
                            <button
                                class="w-11 h-10 bg-white border border-gray-300 shadow-md flex items-center justify-center rounded-l-full">
                                <img src="image/heart.svg" alt="" class="">
                            </button>
                        </li>
                        <li>
                            <button
                                class="w-11 h-10 bg-white border border-gray-300  shadow-md flex items-center justify-center">
                                <img src="image/shopping-cart.svg" alt="" class="">
                            </button>
                        </li>
                        <li>
                            <button
                                class="w-11 h-10 bg-white border border-gray-300 shadow-md flex items-center justify-center">
                                <img src="image/eye.svg" alt="" class="">
                            </button>
                        </li>
                        <li>
                            <button
                                class="w-11 h-10 bg-white border border-gray-300 shadow-md flex items-center justify-center rounded-r-full">
                                <img src="image/repeat.svg" alt="" class="">
                            </button>
                        </li>
                    </ul>
                </div>
            </div>


        </div>
    </section>


    <!-- slider gelicek-->

    <section class="relative py-20 mt-10">
        <div class="absolute inset-0 flex justify-center items-center">
            <img src="image/bgf.jpg" alt="background" class="w-auto h-auto object-cover">
        </div>
        <div class="relative z-10 text-center">
            <h2 class="font-playfair text-4xl font-bold text-black">Subscribe Our Newsletter</h2>

            <div class="flex items-center justify-center my-4">
                <img src="image/star.png">
            </div>
            <p class="text-lg text-black">Enter Your email address to join our mailing list and keep yourself updated
            </p>
            <div class="mt-6 flex justify-center">
                <input type="email" placeholder="Your email address"
                    class="px-4 py-3 w-[400px] border border-r-0 rounded-l-[50px]  focus:outline-none focus:ring-2 focus:ring-[#5ba515]">
                <button
                    class="relative -top-[2px] px-6 py-3 bg-[#5ba515] text-white rounded-[50px] hover:bg-[#4e9511] focus:outline-none focus:ring-2 focus:ring-[#5ba515]">Subscribe</button>
            </div>
        </div>
    </section>

    <footer class="pt-[90px] pr-[90px] pl-[90px]  relative">
        <div class="mt-10 flex justify-between mx-auto ">
            <div class="w-[35.5%]">
                <h3 class="font-bold text-lg mb-4">CONTACT US</h3>
                <p class="flex mb-4"><img src="image/map-pin.svg" class="mr-2">Address: London Oxford Street, 012 United
                    Kingdom.</p>
                <p class="flex mb-4"><img src="image/phonef.svg" class="mr-2">Phone : (+032) 3456 7890</p>
                <p class="flex mb-4"><img src="image/mail.svg" class="mr-2">Email: Botanicalstore@gmail.com</p>
                <p class="flex mb-4">
                    Follow us:
                <ul class="flex ml-2">
                    <li class="ml-2">
                        <img src="image/facebook.svg" alt="Facebook" class="w-4 h-4">
                    </li>
                    <li class="ml-2">
                        <img src="image/twitter.svg" alt="Twitter" class="w-4 h-4">
                    </li>
                    <li class="ml-2">
                        <img src="image/pinterest.svg" alt="Pinterest" class="w-4 h-4">
                    </li>
                    <li class="ml-2">
                        <img src="image/google.svg" alt="Google" class="w-4 h-4">
                    </li>
                </ul>
                </p>
            </div>


            <div class="w-[24.2%]">
                <h3 class="font-bold text-lg mb-4">INFORMATION</h3>
                <a href="#" class="block mb-4">
                    <p>New Products</p>
                </a>
                <a href="#" class="block mb-4">
                    <p>Top Sellers</p>
                </a>
                <a href="#" class="block mb-4">
                    <p>Our Blog</p>
                </a>
                <a href="#" class="block mb-4">
                    <p>About Our Shop</p>
                </a>
                <a href="#" class="block mb-4">
                    <p>Privacy Policy</p>
                </a>
            </div>

            <div class="w-[18.2%]">
                <h3 class="font-bold text-lg mb-4">MY ACCOUNT</h3>
                <a href="#" class="block mb-4">
                    <p>My Account</p>
                </a>
                <a href="#" class="block mb-4">
                    <p>Discount</p>
                </a>
                <a href="#" class="block mb-4">
                    <p>Orders History</p>
                </a>
                <a href="#" class="block mb-4">
                    <p>Personal Information</p>
                </a>
            </div>


            <div class="w-[22.1%]">
                <h3 class="font-bold text-lg mb-4">POPULAR TAGS</h3>

                <div class="flex gap-2 mb-4">
                    <p
                        class="border border-gray-300 p-2 rounded-[50px] flex-1 text-center hover:bg-[#5ba515] hover:text-white">
                        trend
                    </p>
                    <p
                        class="border border-gray-300 p-2 rounded-[50px] flex-1 text-center hover:bg-[#5ba515] hover:text-white">
                        decor
                    </p>
                </div>

                <div class="flex gap-2 mb-4">
                    <p
                        class="border border-gray-300 p-2 rounded-[50px] flex-1 text-center hover:bg-[#5ba515] hover:text-white">
                        plant
                    </p>
                    <p
                        class="border border-gray-300 p-2 rounded-[50px] flex-1 text-center hover:bg-[#5ba515] hover:text-white">
                        table tree
                    </p>
                </div>

                <div class="flex gap-2 mb-4">
                    <p
                        class="border border-gray-300 p-2 rounded-[50px] flex-1 text-center hover:bg-[#5ba515] hover:text-white">
                        bedroom tree
                    </p>
                    <p
                        class="border border-gray-300 p-2 rounded-[50px] flex-1 text-center hover:bg-[#5ba515] hover:text-white">
                        living room
                    </p>
                </div>
            </div>
            </div>

            <div class="px-3 mt-4 mx-">
                <div class="h-px bg-gray-500 "></div>
            </div>
            <div class="pt-8">
                <p class="text-center justify-center mx-auto mb-0">
                    Copyright 2019 by <a href="#" class="hover:text-[#5ba515]">Botanical Store</a> - All right reserved
                </p>
            </div>

    </footer>









    <script src="js/animates.js"></script>

</body>

</html>