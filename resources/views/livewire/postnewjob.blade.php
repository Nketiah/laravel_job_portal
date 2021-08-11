<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    {{-- <div class="flex flex-col sm:flex-row mb-4"> --}}
          
        <div class="px-3">
            <div class=" mb-4">
                <div class="mb-4">
                    <button wire:click.prevent="increament"  class="flex px-3 py-2 rounded-lg bg-blue-700 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 pr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                          </svg>
                        <p>Add Another Job Requirement</p>
                    </button>
                </div>
            @foreach ($steps as $index => $step)
                       <div>
                        <input type="text" name="job_requirement[]" class="bg-gray-100 border-2 w-full p-4 rounded-lg mb-4" placeholder="{{ $step }}">
                        <span wire:click="remove({{$index}})" class="relative  left-56 bottom-14   md:left-52  md:bottom-14  lg:left-96 lg:bottom-14 ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500 cursor-pointer" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
                             </svg>
                        </span>
                       {{-- </div> --}}
                </div>
            @endforeach
        </div>
        </div>
        
</div>
