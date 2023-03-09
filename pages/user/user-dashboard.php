<?php
// if($_SESSION['username'])
//  {
//    //  session_start();
    ?>
    <!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- <link rel="stylesheet" href="../../assets/app.fc1f4517.css"> -->
   <link rel="stylesheet" href="../../css/output.css">
   <title>Neplen Admin</title>
   <style>
      .emulator::-webkit-scrollbar{
         width: 0px;
      }
   </style>
</head>

<body class="overflow-none">
   <div class="bg-gray-100 overflow-auto relative min-h-screen flex flex-col md:flex-row ">
      <header class="fixed z-50 w-full md:px-5 md:pt-5">
         <nav
            class="h-20 md:rounded-2xl rounded-none flex items-center justify-start px-3 bg-white shadow-sm md:shadow-md">
            <span>
               <img class="w-16 h-16" src="../../images/logo.svg" alt="">
            </span>
            <div class="flex  w-full overflow-x-auto md:pl-10 pl-3 md:gap-5 gap-0">
               <button data-tab-number="1"
                  class=" tab-button text-gray-600 hover:text-gray-800  py-2 px-3 rounded-lg hover:bg-gray-100 flex-center gap-2 ">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="-3 -3 24 24" width="24" fill="currentColor">
                     <path
                        d="M3.19 9.345a.97.97 0 0 1 1.37 0 .966.966 0 0 1 0 1.367l-2.055 2.052a1.932 1.932 0 0 0 0 2.735 1.94 1.94 0 0 0 2.74 0l4.794-4.787a.966.966 0 0 0 0-1.367.966.966 0 0 1 0-1.368.97.97 0 0 1 1.37 0 2.898 2.898 0 0 1 0 4.103l-4.795 4.787a3.879 3.879 0 0 1-5.48 0 3.864 3.864 0 0 1 0-5.47L3.19 9.344zm11.62-.69a.97.97 0 0 1-1.37 0 .966.966 0 0 1 0-1.367l2.055-2.052a1.932 1.932 0 0 0 0-2.735 1.94 1.94 0 0 0-2.74 0L7.962 7.288a.966.966 0 0 0 0 1.367.966.966 0 0 1 0 1.368.97.97 0 0 1-1.37 0 2.898 2.898 0 0 1 0-4.103l4.795-4.787a3.879 3.879 0 0 1 5.48 0 3.864 3.864 0 0 1 0 5.47L14.81 8.656z">
                     </path>
                  </svg>
                  <p class="font-semibold hidden  md:block">Links</p>
               </button>
               <button data-tab-number="2"
                  class=" tab-button text-gray-600 hover:text-gray-800  py-2 px-3 rounded-lg hover:bg-gray-100 flex-center gap-2 ">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="-2 -2 24 24" width="24" fill="currentColor">
                     <path
                        d="M20 8.163A2.106 2.106 0 0 0 18.926 10c0 .789.433 1.476 1.074 1.837l-.717 2.406a2.105 2.105 0 0 0-2.218 3.058l-2.062 1.602A2.104 2.104 0 0 0 11.633 20l-3.29-.008a2.104 2.104 0 0 0-3.362-1.094l-2.06-1.615A2.105 2.105 0 0 0 .715 14.24L0 11.825A2.106 2.106 0 0 0 1.051 10C1.051 9.22.63 8.54 0 8.175L.715 5.76a2.105 2.105 0 0 0 2.207-3.043L4.98 1.102A2.104 2.104 0 0 0 8.342.008L11.634 0a2.104 2.104 0 0 0 3.37 1.097l2.06 1.603a2.105 2.105 0 0 0 2.218 3.058L20 8.162zM14.823 3.68c0-.063.002-.125.005-.188l-.08-.062a4.103 4.103 0 0 1-4.308-1.428l-.904.002a4.1 4.1 0 0 1-4.29 1.43l-.095.076A4.108 4.108 0 0 1 2.279 7.6a4.1 4.1 0 0 1 .772 2.399c0 .882-.28 1.715-.772 2.4a4.108 4.108 0 0 1 2.872 4.09l.096.075a4.104 4.104 0 0 1 4.289 1.43l.904.002a4.1 4.1 0 0 1 4.307-1.428l.08-.062A4.108 4.108 0 0 1 17.7 12.4a4.102 4.102 0 0 1-.773-2.4c0-.882.281-1.716.773-2.4a4.108 4.108 0 0 1-2.876-3.919zM10 14a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z">
                     </path>
                  </svg>
                  <p class="font-semibold hidden  md:block">Setting</p>
               </button>
            </div>

            <div class=" flex justify-self-end gap-5">
               <button class="secondary-button p-3 border-none rounded-full">
                  <svg class="" xmlns="http://www.w3.org/2000/svg" viewBox="-2 -2 24 24" width="24" fill="currentColor">
                     <path
                        d="M16 6a2 2 0 1 0 0-4 2 2 0 0 0 0 4zM7.928 9.24a4.02 4.02 0 0 1-.026 1.644l5.04 2.537a4 4 0 1 1-.867 1.803l-5.09-2.562a4 4 0 1 1 .083-5.228l5.036-2.522a4 4 0 1 1 .929 1.772L7.928 9.24zM4 12a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm12 6a2 2 0 1 0 0-4 2 2 0 0 0 0 4z">
                     </path>
                  </svg>
                  <p class="text-lg font-semibold hidden md:static">Share</p>
               </button>
               <span class="w-12 h-12 bg-red-400 text-white rounded-full">
               </span>
            </div>

         </nav>
      </header>
      <section id="dashboard"
         class="md:w-7/12 w-full  pb-16 md:min-h-none min-h-screen flex px-8 sm:px-16 xl:px-32 lg:px-24  items-start  pt-36 ">
         <div data-tab-number="1" class=" dashboard-tab  w-full gap-5  flex flex-col  items-start">
            <div class="w-full pt-10">
               <button id="add-link-button"
                  class="bg-primary  text-gray-50 px-5 flex justify-center hover:shadow-md w-full items-center py-3 rounded-3xl gap-3 ">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="-4.5 -4.5 24 24" width="24" fill="currentColor">
                     <path d="M8.9 6.9v-5a1 1 0 1 0-2 0v5h-5a1 1 0 1 0 0 2h5v5a1 1 0 1 0 2 0v-5h5a1 1 0 1 0 0-2h-5z">
                     </path>
                  </svg>
                  <p class="text-lg">Add a link</p>
               </button>

               <div class="w-100 bg-white rounded-xl ">
                  <form id="add-link-form" action="" class="hidden px-6 py-6">
                     <div class="mb-4">
                        <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 ">Enter
                           Title</label>
                        <input type="text" name="title" id="default-input"
                           class="bg-gray-50 border border-gray-300 text-gray-800 text-sm rounded-lg focus:ring-blue-500 focus:border-primary block w-full p-2.5 outline-none">
                     </div>
                     <div class="mb-4">
                        <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 "> Enter
                           Link</label>
                        <input type="text" name="link" id="default-input"
                           class="bg-gray-50 border border-gray-300 text-gray-800 text-sm rounded-lg focus:ring-blue-500 focus:border-primary block w-full p-2.5 outline-none">
                     </div>
                     <button
                        class="bg-primary  text-gray-50 px-5 flex justify-center hover:shadow-md w-full items-center py-3 rounded-3xl gap-3 ">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="-4.5 -4.5 24 24" width="24"
                           fill="currentColor">
                           <path
                              d="M8.9 6.9v-5a1 1 0 1 0-2 0v5h-5a1 1 0 1 0 0 2h5v5a1 1 0 1 0 2 0v-5h5a1 1 0 1 0 0-2h-5z">
                           </path>
                        </svg>
                        <p class="text-lg">Add a link</p>
                     </button>
                  </form>
               </div>

            </div>
            <main class="grow w-full ">
               <button class="secondary-button mb-5">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="w-6 text-gray-700" viewBox="0 0 24 24"
                     stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                     <path stroke-linecap="round" stroke-linejoin="round"
                        d="M7.875 14.25l1.214 1.942a2.25 2.25 0 001.908 1.058h2.006c.776 0 1.497-.4 1.908-1.058l1.214-1.942M2.41 9h4.636a2.25 2.25 0 011.872 1.002l.164.246a2.25 2.25 0 001.872 1.002h2.092a2.25 2.25 0 001.872-1.002l.164-.246A2.25 2.25 0 0116.954 9h4.636M2.41 9a2.25 2.25 0 00-.16.832V12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 12V9.832c0-.287-.055-.57-.16-.832M2.41 9a2.25 2.25 0 01.382-.632l3.285-3.832a2.25 2.25 0 011.708-.786h8.43c.657 0 1.281.287 1.709.786l3.284 3.832c.163.19.291.404.382.632M4.5 20.25h15A2.25 2.25 0 0021.75 18v-2.625c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125V18a2.25 2.25 0 002.25 2.25z" />
                  </svg>
                  <p class="text-lg font-semibold">Links</p>
               </button>
               <ul id="card-container" class="w-full flex flex-col gap-4">

               </ul>
            </main>
         </div>
         <div data-tab-number="2" class="flex w-full gap-5 hidden flex-col  items-start dashboard-tab">
            <form action="" class="flex flex-col gap-8 justify-start grow w-full ">
               <section class="px-8 py-6 bg-white rounded-lg shadow-sm">
                  <h3 class="text-2xl mb-8 font-semibold">Profile</h3>
                  <div class="flex mb-5 flex-col">
                     <label for="website-admin" class="block mb-2 text-sm font-medium text-gray-900 ">Username</label>
                     <div class="flex">
                        <span
                           class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md">
                           neplen.com/
                        </span>
                        <input type="text" name="username"
                           class="rounded-none rounded-r-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5 "
                           placeholder="Bonnie Green">
                        <button class="primary-button ml-4">Check</button>
                     </div>
                  </div>
                  <div class="flex mb-5 flex-col">
                     <label for="message" class="block mb-2 text-sm font-medium text-gray-900 ">Your
                        Description</label>
                     <textarea id="message" rows="3"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
                        placeholder="Write in Breif..."></textarea>
                  </div>
               </section>
               <section class="px-8 py-6 bg-white rounded-lg shadow-sm">
                  <h3 class="text-2xl mb-8 font-semibold">Social Media</h3>
                  <div class="flex mb-5 flex-col">
                     <label for="email-address-icon" class="block mb-2 text-sm font-medium text-gray-900 ">Instagram
                        Username</label>
                     <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                           <svg xmlns="http://www.w3.org/2000/svg" class="text-[#d62976]" viewBox="-2 -2 24 24"
                              width="24" fill="currentColor">
                              <path
                                 d="M14.017 0h-8.07A5.954 5.954 0 0 0 0 5.948v8.07a5.954 5.954 0 0 0 5.948 5.947h8.07a5.954 5.954 0 0 0 5.947-5.948v-8.07A5.954 5.954 0 0 0 14.017 0zm3.94 14.017a3.94 3.94 0 0 1-3.94 3.94h-8.07a3.94 3.94 0 0 1-3.939-3.94v-8.07a3.94 3.94 0 0 1 3.94-3.939h8.07a3.94 3.94 0 0 1 3.939 3.94v8.07z">
                              </path>
                              <path
                                 d="M9.982 4.819A5.17 5.17 0 0 0 4.82 9.982a5.17 5.17 0 0 0 5.163 5.164 5.17 5.17 0 0 0 5.164-5.164A5.17 5.17 0 0 0 9.982 4.82zm0 8.319a3.155 3.155 0 1 1 0-6.31 3.155 3.155 0 0 1 0 6.31z">
                              </path>
                              <circle cx="15.156" cy="4.858" r="1.237"></circle>
                           </svg>
                        </div>
                        <input type="text" id="email-address-icon"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-14 outline-none p-2.5 "
                           placeholder="Only Username">
                     </div>
                  </div>
                  <div class="flex mb-5 flex-col">
                     <label for="email-address-icon" class="block mb-2 text-sm font-medium text-gray-900 ">Twitter
                        Username</label>
                     <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                           <svg xmlns="http://www.w3.org/2000/svg" class="text-[#26a7de]" viewBox="-2 -4 24 24"
                              width="24" fill="currentColor">
                              <path
                                 d="M20 1.907a8.292 8.292 0 0 1-2.356.637A4.07 4.07 0 0 0 19.448.31a8.349 8.349 0 0 1-2.607.98A4.12 4.12 0 0 0 13.846.015c-2.266 0-4.103 1.81-4.103 4.04 0 .316.036.625.106.92A11.708 11.708 0 0 1 1.393.754a3.964 3.964 0 0 0-.554 2.03c0 1.403.724 2.64 1.824 3.363A4.151 4.151 0 0 1 .805 5.64v.05c0 1.958 1.415 3.591 3.29 3.963a4.216 4.216 0 0 1-1.08.141c-.265 0-.522-.025-.773-.075a4.098 4.098 0 0 0 3.832 2.807 8.312 8.312 0 0 1-5.095 1.727c-.332 0-.658-.02-.979-.056a11.727 11.727 0 0 0 6.289 1.818c7.547 0 11.673-6.157 11.673-11.496l-.014-.523A8.126 8.126 0 0 0 20 1.907z">
                              </path>
                           </svg> </div>
                        <input type="text" id="email-address-icon"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-14 outline-none p-2.5 "
                           placeholder="Only Username">
                     </div>
                  </div>
                  <div class="flex mb-5 flex-col">
                     <label for="email-address-icon" class="block mb-2 text-sm font-medium text-gray-900 ">Linkden
                        Username</label>
                     <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                           <svg xmlns="http://www.w3.org/2000/svg" class="text-[#0072b1]" viewBox="-2 -2 24 24"
                              width="24" fill="currentColor">
                              <path
                                 d="M19.959 11.719v7.379h-4.278v-6.885c0-1.73-.619-2.91-2.167-2.91-1.182 0-1.886.796-2.195 1.565-.113.275-.142.658-.142 1.043v7.187h-4.28s.058-11.66 0-12.869h4.28v1.824l-.028.042h.028v-.042c.568-.875 1.583-2.126 3.856-2.126 2.815 0 4.926 1.84 4.926 5.792zM2.421.026C.958.026 0 .986 0 2.249c0 1.235.93 2.224 2.365 2.224h.028c1.493 0 2.42-.989 2.42-2.224C4.787.986 3.887.026 2.422.026zM.254 19.098h4.278V6.229H.254v12.869z">
                              </path>
                           </svg> </div>
                        <input type="text" id="email-address-icon"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-14 outline-none p-2.5 "
                           placeholder="Only Username">
                     </div>
                  </div>

               </section>
            </form>
         </div>
      </section>
      <aside
         class="md:w-5/12 md:py-0 py-20 w-full z-10 h-full md:pt-0 pt-16 right-0 static md:fixed bg-gray-300 flex-center ">
         <div class="flex-center sticky">
            <div class="w-3/5 h-full z-20 overflow-y-scroll overflow-x-hidden bg-white rounded-[40px] absolute p-3 emulator">
               <div class="container px-3 py-3 bg-[#1E1E1E]">
                  <nav class="flex text-white justify-between">
                     <img src="" alt="neplen-logo" class="mt-4">
                     <ul class="px-4 py-4 flex space-x-4 justify-end">
                        <li></li>
                        <li class="float-right border border-white rounded-sm px-1 text-sm">
                           Get Your Card
                        </li>
                     </ul>
                  </nav>

                  <div class="container bg-[#0F0F0F] columns-2 rounded-3xl">
                     <div>
                        <img src="./assets/images/Rectangle 3.png" alt="">
                        <p>Google</p>
                     </div>
                     <div>
                        <h1 class="text-white text-4xl">Darpan Bahadur</h1>
                        <p class="text-white justify-center text-[11px]">Lorem ipsum dolor sit amet consectetur,
                           adipisicing elit. Id, eos. Culpa sint facere ut impedit repellat fuga, accusamus ea quas
                           cum vero atque quis quo, harum qui reprehenderit aliquam consequatur.</p>
                     </div>
                  </div>
               </div>
               <div class="conatiner rounded-t">
                  <div class="flex space-x-3 mx-6 my-10 lg:justify-center">
                     <button
                        class="rounded-xl bg-[#0F0F0F] border border-[#0F0F0F] text-white text-[12px] px-2 w-28 py-1 pb-1">Following</button>
                     <button
                        class="rounded-xl bg-[#0F0F0F] border border-[#0F0F0F] text-white text-[12px] px-2 w-28 py-1 pb-1">Contant</button>
                     <button
                        class="rounded-xl bg-[#0F0F0F] border border-[#0F0F0F] text-white text-[12px] px-2 w-28 py-1 pb-1">Website</button>
                  </div>
                  <div class="px-3 py-2 mx-1 my-1">
                     <div class="flex py-3 px-3">
                        <ul class="flex">
                           <li class="font-bold">About</li>
                           <li class="ml-40 lg:ml-[80rem]">Google</li>
                        </ul>
                     </div>
                     <p class="px-3 py-3 justify-between text-[#797979]">Neplen is a Dubai, United Arab Emirates
                        based startup
                        for all types of IT services. Best IT Services
                        Company in UAE. Neplen provides Start-Up to large Enterprises Information Technology services
                        worldwide,
                        covering a full range of IT Services including Software Services, Web Development,
                        Application
                        Development, System Integration, ERP Solutions, IT Outsourcing, Offshore Development, Custom
                        Software.
                     </p>
                  </div>
                  <div class="px-3 py-2 mx-[1.2rem] my-1">
                     <p class="font-bold">Social network</p>
                     <ul class="flex justify-center mt-5 space-x-12">
                        <li><i class="fa-brands fa-facebook-f "></i></li>
                        <li><i class="fa-brands fa-instagram "></i></li>
                        <li><i class="fa-brands fa-twitter "></i></li>
                        <li><i class="fa-brands fa-linkedin-in "></i></li>
                        <li><i class="fa-brands fa-github "></i></li>
                     </ul>
                  </div>
                  <div class="px-3 py-2 mx-[1.2rem] my-1">
                     <p class="font-bold">Links</p>
                     <div class="links" id="emulator-container">
                        <div class="py-2">
                           <a>No links added</a>
                        </div>
                     </div>

                  </div>
               </div>
            </div>
            <img class="w-3/5 rounded-[40px] z-30" src="../../images/phone-mockup.svg" alt="">

         </div>
      </aside>
   </div>

</body>
<script type="module" src="../../assets/js/dashboard.js"></script>

</html>
    <?php
//  }