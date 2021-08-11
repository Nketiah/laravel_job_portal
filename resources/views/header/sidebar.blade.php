
{{-- app sidebar --}}

  {{-- start of wrapper div --}}

<section class="lef-section" >
      <div class="absolute z-10  bg-blue-800 text-white h-screen   duration-700 "
            :class="{'w-20 ease-out': nav_open === false, 'w-64': nav_open === true}">
           <div class="flex justify-between">
               <span class="font-bold text-2xl p-2 ease-in" :class="{'hidden':nav_open === false}">Dashboard</span>
               <button @click="nav_open = !nav_open" class="p-2 focus:outline-none focus:bg-blue-500 hover:bg-blue-500 rounded-md"
                    :class="{'ml-4':nav_open === false}">
                   <svg x-show="nav_open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 sm:w-8 sm:h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                   </svg>
                    <svg x-show="!nav_open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
               </button>
           </div>

           <div>
               <ul class="mt-8">
                    <li> 
                        <div class="flex py-3 hover:bg-blue-600 rounded-md"
                            :class="{'pl-6': nav_open === false, 'px-4':nav_open === true}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                              </svg>
                            <a href="#" class="pl-3" :class="{'hidden':nav_open === false, 'block':nav_open === true}">Dashboard</a>
                        </div>
                    </li>
                    <li> 
                        <div class="flex py-3 hover:bg-blue-600 rounded-md"
                             :class="{'pl-6': nav_open === false, 'px-4':nav_open === true}">
                             <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                             </svg>
                        <a href="#" class="pl-3" :class="{'hidden':nav_open === false, 'block':nav_open === true}">Dashboard</a>
                        </div>
                     </li>
                      <li> 
                          <div class="flex py-3 hover:bg-blue-600 rounded-md"
                              :class="{'pl-6': nav_open === false, 'px-4':nav_open === true}">
                              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                              </svg>
                          <a href="#" class="pl-3" :class="{'hidden':nav_open === false, 'block':nav_open === true}">Proposals</a>
                          </div>
                      </li>
                      <li> 
                           <div class="flex py-3 hover:bg-blue-600 rounded-md"
                               :class="{'pl-6': nav_open === false, 'px-4':nav_open === true}">
                              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                              </svg>
                           <a href="#" class="pl-3" :class="{'hidden':nav_open === false, 'block':nav_open === true}">Manage product</a>
                           </div>
                     </li>
                     <li> 
                         <div class="flex py-3 hover:bg-blue-600 rounded-md"
                             :class="{'pl-6': nav_open === false, 'px-4':nav_open === true}">
                             <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                           <a href="#" class="pl-3" :class="{'hidden':nav_open === false, 'block':nav_open === true}">Manage services</a>
                       </div>
                   </li>
               </ul>
           </div>
      </div>

</section>
{{-- End of left section --}}

