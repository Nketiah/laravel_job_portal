

{{-- app navbar --}}
<header class="flex flex-wrap items-center  py-3 px-14 bg-blue-700 text-white font-bold text-lg">
       <div class="flex-1 flex justify-between items-center">
           <a href="{{ url('/') }}">
             <svg class="text-white fill-current" width="32" height="36" viewBox="0 0 32 36" xmlns="http://www.w3.org/2000/svg"><path d="M15.922 35.798c-.946 0-1.852-.228-2.549-.638l-10.825-6.379c-1.428-.843-2.549-2.82-2.549-4.501v-12.762c0-1.681 1.12-3.663 2.549-4.501l10.825-6.379c.696-.41 1.602-.638 2.549-.638.946 0 1.852.228 2.549.638l10.825 6.379c1.428.843 2.549 2.82 2.549 4.501v12.762c0 1.681-1.12 3.663-2.549 4.501l-10.825 6.379c-.696.41-1.602.638-2.549.638zm0-33.474c-.545 0-1.058.118-1.406.323l-10.825 6.383c-.737.433-1.406 1.617-1.406 2.488v12.762c0 .866.67 2.05 1.406 2.488l10.825 6.379c.348.205.862.323 1.406.323.545 0 1.058-.118 1.406-.323l10.825-6.383c.737-.433 1.406-1.617 1.406-2.488v-12.757c0-.866-.67-2.05-1.406-2.488l-10.825-6.379c-.348-.21-.862-.328-1.406-.328zM26.024 13.104l-7.205 13.258-3.053-5.777-3.071 5.777-7.187-13.258h4.343l2.803 5.189 3.107-5.832 3.089 5.832 2.821-5.189h4.352z"></path></svg>
           </a>
      </div>
      <label for="menu-toggle" class="cursor-pointer lg:hidden block">
         <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><title>menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path></svg>
      </label>
      <input type="checkbox" class="hidden " id="menu-toggle">
      <div class="hidden lg:flex lg:items-center lg:w-auto w-full" id="menu">
         <nav>
             <ul class="lg:flex items-center justify-between text-base text-white pt-4 lg:pt-0">
               <div class="flex flex-col sm:flex-row sm:mr-24">
                  <div>
                     <div class="absolute ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 mt-2 ml-2 text-blue-700" viewBox="0 0 20 20" fill="currentColor">
                           <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                         </svg>
                     </div>
                      <form action="{{ route('search-job') }}" method="get">
                        <input type="text" name="searchjob" placeholder="Search..." class="w-80 mr-6 bg-gray-100 border border-gray-400 pl-10 pr-3 py-2 rounded-full text-md focus:outline-none focus:border-blue-500 focus:shadow focus:bg-gray-200 text-gray-800" />
                     </form>
                 </div>
                  {{-- <li><a class="lg:py-2 py-2 px-4 block border-2 rounded  border-gray-300 border-transparent hover:border-gray-100" href="#">Post a Job</a></li> --}}
                  {{-- <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-gray-200" href="#">Browse Jobs</a></li> --}}
                  <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-gray-200" href="#">Find Freelancers</a></li>
                    
               </div>
                @guest
                   <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-gray-200" href="{{ route('register') }}">Register</a></li>
                   <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-gray-200" href="{{ route('login') }}">Login</a></li>
                @endguest

               @auth
                    <form id="logout-form" action="{{ route('logout')}}" method="post" >
                        @csrf
                       <button type="submit" class="text-lg font-bold sm:mr-10">Logout</button>
                   </form>                    
                   <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-gray-200 lg:mb-0 mb-2 font-bold" href="#">{{auth()->user()->name}}</a></li>
              @endauth
            </ul>
         </nav>
     </div>
      {{-- End --}}
      {{-- <ul class="flex items-center">
         <li> <a href="#" class="p-4">Modern Job Portal</a> </li>
         <li> <a href="#" class="p-4">Dashboard</a> </li>
         @auth
               @if(auth()->user()->role_id == 1)
                  <li> <a href="#" class="p-4">Find Job</a> </li>
               @endauth 
               @if(auth()->user()->role_id == 2)
                  <li> <a href="#" class="p-4">Post Job</a> </li>
               @endauth
         @endauth      
      </ul>

          grid md:grid-cols-2 mt-8" :class="{'lg:grid-cols-3 gap-8':nav_open === true, 'lg:grid-cols-4 gap-8':nav_open === false}


    <ul class="flex items-center">
       @auth
             <li> <a href="#" class="p-4">Kwame Joe</a> </li>
             <form id="logout-form" action="{{ route('logout')}}" method="post" >
                 @csrf
                 <button type="submit">Logout</button>
             </form>
       @endauth
       @guest
          <li> <a href="{{ route('register') }}" class="p-4">Register</a> </li>
          <li> <a href="{{ route('login') }}" class="p-4">Login</a> </li>
       @endguest
  </ul> --}}
</header>

