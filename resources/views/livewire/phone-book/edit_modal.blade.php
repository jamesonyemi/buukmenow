<input type="checkbox" id="my-modal" class="modal-toggle" />
<div class="modal cursor-pointer" data-theme="light">
<div class="modal-box relative w-10/12 max-w-xl">
    <div class="flex justify-start">
        <div class="flex-none w-7 mt-1">
          <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" transform="rotate(180)" stroke="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M3 10C3 6.22876 3 4.34315 4.17157 3.17157C5.34315 2 7.22876 2 11 2H13C16.7712 2 18.6569 2 19.8284 3.17157C21 4.34315 21 6.22876 21 10V14C21 17.7712 21 19.6569 19.8284 20.8284C18.6569 22 16.7712 22 13 22H11C7.22876 22 5.34315 22 4.17157 20.8284C3 19.6569 3 17.7712 3 14V10Z" stroke="#1C274C" stroke-width="1.5"></path> <path d="M8 12H16" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path> <path d="M8 8H16" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path> <path d="M8 16H13" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
        </div>
        <div class="flex-none">
          <h2 class="flex justify-start text-lg font-bold">
              Create a Campaign</h2>
        </div>
      </div>
    <label for="my-modal" class="btn btn-sm hover:bg-red-700 text-white btn-circle absolute right-2 top-2 cursor-pointer">✕</label>
    <div class="card-body scroll-m-3">
     <form wire:submit.prevent="refreshOnUpdate({{ $post_id  }})" class="">
        <div class="form-control">
          <label class="label">
            <span class="label-text">Campaign Title</span>
        </label>
          <input name="first_name" value="{!! $first_name !!}" type="text" wire:model.lazy="first_name" placeholder="first name" class="input input-bordered" />
          @error('first_name') <span class="text-red-400 mt-2">{{ $message }}</span> @enderror
        </div>
        <div class="form-control">
            <label class="label">
            <span class="label-text">Description</span>
          </label>
        <textarea placeholder="Write your message here" class="form-control textarea textarea-bordered textarea-md w-full" ></textarea>
        </div>
        <div class="form-control">
            <label class="label">
              <span class="label-text">Target group</span>
            </label>
            <select class="select select-bordered border-r-warning-content">
              <option disabled selected>Select a target group</option>
              <option>Star Wars</option>
              <option>Harry Potter</option>
              <option>Lord of the Rings</option>
              <option>Planet of the Apes</option>
              <option>Star Trek</option>
            </select>
            <label class="label">
              <span class="label-text-alt">
                @error('target') <span class="text-red-400 mt-2">{{ $message }}</span> @enderror
              </span>
            </label>
          </div>
        </div>

        {{-- <div class="form-control focus:border-ghost">
          <label class="label">
            <span class="label-text">Phone </span>
          </label>
          <input name="phone_number" value="{!! $phone_number !!}" type="text"  wire:model.lazy="phone_number" maxlength="15" placeholder="phone or mobile number" class="input input-bordered focus:border-primary" />
          @error('phone_number') <span class="text-red-400 mt-2">{{ $message }}</span> @enderror
        </div> --}}
        <div class="form-control mx-7">
          <button id="btn-modal" for="my-modal" class="hover:bg-[#004741] bg-[#004741] btn btn-[#004741]-accent cursor-pointer"
           wire:loading.attr="disabled"
           wire:loading.class='loading text-white bg-[#004741]'
           wire:submit.prevent="refreshOnUpdate({{ $post_id  }})"
           >
               <span
                    wire:loading.remove
                    wire.target="refreshOnUpdate({{ $post_id  }})"
                    class="text-white">
                    Update Record
                </span>
                <div class="w-100 space-x-28 text-[#004741]" wire:loading wire.target="refreshOnUpdate({{ $post_id  }})">
                    <span class="text-white  gap-5" wire.target="refreshOnUpdate({{ $post_id  }})">loading...</span>
                </div>
              </button>
            </div>
    </form>
</div>
</div>
</div>
</div>
