<div class="mx-5 md:mx-40 bg-white rounded-xl shadow-md overflow-hidden min-w-fit  md:max-w-1/2 ">
    <div class="grid grid-flow-row auto-rows-max md:auto-rows-min">
      <div class="md:shrink-0">
        {{-- <img class="h-48 w-full object-cover md:h-full md:w-48" src="{{ asset('app-logo.svg') }}"  alt="Modern building architecture" loading="lazy"> --}}
        {{-- <img src="{{ asset('app-logo.svg') }}" alt="" class="" loading="lazy" /> --}}
      </div>
      <div class="p-8 w-full">
        <div class="uppercase tracking-wide text-sm text-black md:font-bold font-semibold">Customers</div>
        <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">See all your customers in one place</a>
        <div class="form-control py-10 md:shrink-0  flex justify-center items-center mb-18 gap-4">
            <div class="input-group ">
                <div class="tabs">
                    <a class="tab tab-bordered">Customer log</a>
                    <a class="tab tab-bordered tab-active text-dark">Campaigns</a>
                </div>

            </div>
          </div>
      </div>
      {{-- <div class="flex ...">
        <div class="flex-none ...">
          01
        </div>
        <div class="flex-auto w-64 ...">
          02
        </div>
        <div class="flex-auto w-32 ...">
          03
        </div>
      </div> --}}

      <div class="flex justify-start py-3 relative">
        <div class="gap-4 flex-auto w-64">
          <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
        </div>
        <input type="text" wire:model="search1" placeholder="Search for..." class="input input-bordered p-2 pl-10 md:w-full  focus:border-gray focus:z-1" />

      </div>
      <div class="flex-auto w-32  md:ml-5">
        <button name="" id="" class="btn rounded text-[#004741] bg-white hover:bg-white" type="button">
          search
        </button>
      </div>

       {{-- <div class="flex-none md:w-1/2 ">
         <label  for="my-modal-4" class="flex md:w-full w-full justify-start font-bold btn bg-[#004741]  hover:text-white hover:bg-[#004741]">

           <svg class="h-5 w-5 mr-3" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
               <g id="Iconly/Light/Document">
               <g id="Document">
               <path id="Stroke 1" d="M13.0969 13.5195H7.0802" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
               <path id="Stroke 2" d="M13.0969 10.0308H7.0802" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
               <path id="Stroke 3" d="M9.37603 6.55009H7.0802" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
               <path id="Stroke 4" fill-rule="evenodd" clip-rule="evenodd" d="M13.2572 2.2915C13.2572 2.2915 6.85965 2.29484 6.84965 2.29484C4.54965 2.309 3.12549 3.82234 3.12549 6.13067V13.794C3.12549 16.114 4.56049 17.6332 6.88049 17.6332C6.88049 17.6332 13.2772 17.6307 13.288 17.6307C15.588 17.6165 17.013 16.1023 17.013 13.794V6.13067C17.013 3.81067 15.5772 2.2915 13.2572 2.2915Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
               </g>
               </g>
               </svg>
               <span class=""> Create a Campaign</span>
           </label>
       </div> --}}
     </div>
      <div class="overflow-x-auto">
        <div class="flex justify-start py-3 relative">
          <div class="gap-4 flex-auto w-64">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
              <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
              </svg>
          </div>
          <input type="text" wire:model="search1" placeholder="Search for..." class="input input-bordered p-2 pl-10 md:w-full  focus:border-gray focus:z-1" />

        </div>
        <div class="flex-auto w-32  md:ml-5">
          <button name="" id="" class="btn rounded text-[#004741] bg-white hover:bg-white" type="button">
            search
          </button>
        </div>

         {{-- <div class="flex-none md:w-1/2 ">
           <label  for="my-modal-4" class="flex md:w-full w-full justify-start font-bold btn bg-[#004741]  hover:text-white hover:bg-[#004741]">

             <svg class="h-5 w-5 mr-3" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                 <g id="Iconly/Light/Document">
                 <g id="Document">
                 <path id="Stroke 1" d="M13.0969 13.5195H7.0802" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                 <path id="Stroke 2" d="M13.0969 10.0308H7.0802" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                 <path id="Stroke 3" d="M9.37603 6.55009H7.0802" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                 <path id="Stroke 4" fill-rule="evenodd" clip-rule="evenodd" d="M13.2572 2.2915C13.2572 2.2915 6.85965 2.29484 6.84965 2.29484C4.54965 2.309 3.12549 3.82234 3.12549 6.13067V13.794C3.12549 16.114 4.56049 17.6332 6.88049 17.6332C6.88049 17.6332 13.2772 17.6307 13.288 17.6307C15.588 17.6165 17.013 16.1023 17.013 13.794V6.13067C17.013 3.81067 15.5772 2.2915 13.2572 2.2915Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                 </g>
                 </g>
                 </svg>
                 <span class=""> Create a Campaign</span>
             </label>
         </div> --}}
       </div>
<table class="table table-compact w-full">
<thead>
<tr>
<th></th>
<th>customer title</th>
<th>description</th>
<th>target group</th>
<th>status</th>
</tr>
</thead>
<tbody>
<tr>
<th></th>
<td>Cy Ganderton</td>
<td>Quality Control Specialist</td>
<td>Littel, Schaden and Vandervort</td>
<td>Canada</td>
</tr>
<tr>
<th></th>
<td>Hart Hagerty</td>
<td>Desktop Support Technician</td>
<td>Zemlak, Daniel and Leannon</td>
<td>United States</td>
</tr>
</table>
</div>

    </div>

  </div>
