<x-guest-layout>
  <x-header  >
   <div >
        <button  type="button" data-dropdown-toggle="dropdown"><i class="fa-solid fa-user fa-2x " style="color: #F8981D" ></i> </button>

        <!-- Dropdown menu -->
        <div class="hidden bg-[#F8981D] text-base z-50  " id="dropdown">
          
            <ul class="py-1" aria-labelledby="dropdown">
            <li>
                <a href="{{ route('dashboard') }}" class="text-sm hover:bg-gray-300 text-gray-700 block px-4 py-2">Dashboard</a>
            </li>
            <li>
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="text-sm hover:bg-gray-300 flex justify-center text-gray-700  px-4 py-2">Logout</button>
                </form>
            </li>
          
            </ul>
    </div>
     <script src="https://unpkg.com/@themesberg/flowbite@latest/dist/flowbite.bundle.js"></script>


  </x-header >


    <div class="w-80 h-100 bg-white border-orange-400 border-2 rounded-md mx-10 mt-10 mb-10">
      <div class=" bg-white rounded-md px-9 py-10 max-w-2xl">
          <div class="space-y-4 px-15">

            <div class="mb-3 pt-0">
              <input type="text" placeholder="Nombre del recurso" class="px-3 py-3 mt-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white bg-white rounded text-base border border-orange-400 outline-none focus:outline-none focus:ring w-full"/>
            </div>
            
            <x-card-multiselect :users="$users" />

            <div class="mb-3 pt-0">
              <input type="text" placeholder="Localización" class="px-3 py-3 mt-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white bg-white rounded text-base border border-orange-400 outline-none focus:outline-none focus:ring w-full"/>
            </div>

            <div class="py-1 mt-3">
              <textarea id="description" cols="25" rows="10" placeholder="Descripción/Incidencias" class=" outline-none px-2 text-m border-orange-400 border-1 rounded-md"></textarea>
            </div> 
            
            <div class="py-1">
              <label class="block">
                <input type="file" class="block w-full text-sm text-slate-500 file:mr-4 file:py-1 file:px-6 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-orange-500 file:text-white hover:file:bg-violet-100 "/>
              </label>
            </div>
            
            
            <div class="grid grid-cols-2 gap-1 place-items-center h-26 mt-3">
              <button class=" px-6 py-1 mx-auto block rounded-md text-md font-semibold text-white bg-[#A9171C]"><a id= link_dashboard href="{{route('dashboard')}}"></a> Cerrar</button>
              <button class=" px-4 py-1 mx-auto block rounded-md text-md font-semibold text-white bg-[#92C954]">Guardar</button>            
            </div >         
          </div>
        </div>
      </div>  
   
   <x-footer  />
  </x-guest-layout>