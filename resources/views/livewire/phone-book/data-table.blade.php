<div class="text-center lg:text-left artboard artboard-horizontal phone-6 -top-12 md:m-2 flex-col space-y-5 justify-center items-center">
    <div class="text-center lg:text-left  flex space-y-5 justify-start items-start">
    <div class="gap-4">
            <label class="form-control text-[#00100B] font-[Matter] text-2xl font-[500] " for="">Customers</label>
            <span class="text-[#808785] font-[400] font-[Matter] text-sm"> See all your customers in one place</span>
        </div>
    </div>

    <div class="form-control md:shrink-0 mt-1 flex justify-center items-center mb-18 gap-4">
        <div class="input-group ">
            <div class="tabs">
                <a class="tab tab-bordered">Customer log</a>
                <a class="tab tab-bordered tab-active text-dark">Campaigns</a>
            </div>

        </div>
      </div>
      <div class="lg:flex justify-start py-3 grid grid-flow-row auto-rows-max md:auto-rows-min">
         <div class="input-group gap-3">
          <input type="text"  wire:model.prefetch="search" placeholder="Search..." class="input input-bordered focus:border-gray sm:gap-48 md:w-4/6 focus:border-0 focus:border-transparent " />
          <button  name="" id="" class="btn text-lowercase text-md rounded text-[#004741] bg-white hover:bg-white" type="button" wire:loading.attr="disabled"
          wire:loading.class='loading text-white bg-[#004741]'
          wire:click="fetchData" >
            search
          </button>
        </div>

        <div class="flex-none shadow-lg">
          <label  for="my-modal-4" class="flex justify-start font-bold btn bg-[#004741]  hover:text-white hover:bg-[#004741]">

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
        </div>
      </div>
    <div class="md:shrink-0" wire:target='search' wire:loading.class.delay="opacity-50">
      @if (session()->has('message'))
    <div id="close" class="toast toast-top toast-end">
      <div class="alert alert-success">
        <div class="w-full text-light">
          <span>{{ session('message') }}</span>
        </div>
      </div>
    </div>
    @endif
        <table class="table table-compact w-full shadow-white shadow-lg">
            <thead>
            <tr>
            <th></th>
            <th class="text-xs md:text-md">customer title</th>
            <th class="text-xs md:text-md">description</th>
            <th class="text-xs md:text-md">target group</th>
            <th class="text-xs md:text-md">campaign status</th>
            </tr>
            </thead>
            <tbody>
            @forelse($contacts as $key => $contact)
            <tr>
            <th></th>
            <td>{{ $contact->title}}</td>
            <td>{{ Str::limit($contact->description, 20) }}</td>
            <td>{{ $contact->target_group}}</td>
            @php
               $status =  ($contact->status) ? "<span class='badge badge-success'>active</span>" : "<span class='badge badge-warning'>in-active</span>"
            @endphp
            <td>{!! $status  !!}</td>
            </tr>
            @empty
              <div>
                <span>No data found</span>
              </div>
            @endforelse
            </table>
            <span class="m-0.5">{{ $contacts->links() }} </span>

    </div>


</div>
