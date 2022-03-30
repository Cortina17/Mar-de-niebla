<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<x-header />
<main>
    
   
   
    <div class="m-2 grid grid-cols-2 gap-8">
        <div class="m-2">
            <img src="{{ $resource->img }}" alt="photo de recurso" class="rounded-xl" />
        </div>
    
        <div class="flex w-3/4">
            <div class="flex flex-col">
                <p class="align-middle p-2 font-extrabold text-3xl">{{ $resource->name }}</p>
                <p class="italic p-2 font-thin">{{ $resource->description }}</p>
                
            </div>
        </div>
    </div>
            
        {{-- @empty
                        <div class="flex flex-col items-center m-5">
                            <p class="flex justify-center rounded-md bg-gray-200 p-6">¡No hay reservas en Historial!
                            </p>
                            <button id="btnAdd"
                                class="mt-5 px-6 py-1 mx-auto block rounded-md text-md font-semibold text-white bg-[#F8981D] drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)]"><a
                                    href="{{ url('/home') }}">Recursos disponibles</a></button>
     
    @endforelse --}}
        
    
</main>


<x-footer />
