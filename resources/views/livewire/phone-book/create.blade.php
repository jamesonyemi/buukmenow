<div class="" data-theme="light">
<div class="">
    <div class="flex justify-start">
        <div class="flex-none w-7 mt-1">
          <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" transform="rotate(180)" stroke="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M3 10C3 6.22876 3 4.34315 4.17157 3.17157C5.34315 2 7.22876 2 11 2H13C16.7712 2 18.6569 2 19.8284 3.17157C21 4.34315 21 6.22876 21 10V14C21 17.7712 21 19.6569 19.8284 20.8284C18.6569 22 16.7712 22 13 22H11C7.22876 22 5.34315 22 4.17157 20.8284C3 19.6569 3 17.7712 3 14V10Z" stroke="#1C274C" stroke-width="1.5"></path> <path d="M8 12H16" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path> <path d="M8 8H16" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path> <path d="M8 16H13" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
        </div>
        <div class="flex-none">
          <h2 class="flex justify-start text-lg font-bold">
              Create a Campaign</h2>
        </div>
        <div class="flex-none">
        <label for="my-modal-4" class="btn btn-sm hover:bg-red-700 text-white btn-circle absolute right-5 top-5 cursor-pointer">✕</label>
          </div>
      </div>
      <div class="card-body">
        <form wire:submit.prevent="refreshOnSave" class="">
        <div class="form-control gap-2">
          <label class="label">
            <span  class="label-text">Campaign Title</span>
          </label>
          <input type="text" wire:model.lazy="title"  placeholder="first name" class="input input-bordered" />
          <label class="label">
              <span class="label-text-alt">
               @error('title') <span  class="text-red-400 mt-2">{{ $message }}</span> @enderror
              </span>
            </label>
        </div>
        <div class="form-control gap-1 mt-3">
            <label class="label">
                <span class="label-text">Description</span>
              </label>
            <textarea wire:model="description" placeholder="Write your message here" class="form-control textarea textarea-bordered textarea-md w-full  h-[120px] max-h-xs" ></textarea>
             <label class="label">
              <span class="label-text-alt">
                @error('description') <span class="text-red-400 mt-2">{{ $message }}</span> @enderror
              </span>
              <span class="label-text-alt">Max: 100 words</span>
            </label>
        </div>
        <div class="form-control gap-1 mt-1">
            <label class="label">
              <span class="label-text">Target group</span>
            </label>
            <select wire:model="target_group" class="select select-bordered border-r-warning-content">
              <option disabled selected>Select a target group</option>
              <option>Star Wars</option>
              <option>Harry Potter</option>
              <option>Lord of the Rings</option>
              <option>Planet of the Apes</option>
              <option>Star Trek</option>
            </select>
            <label class="label">
              <span class="label-text-alt">
                @error('target_group') <span class="text-red-400 mt-2">{{ $message }}</span> @enderror
              </span>
            </label>
          </div>
        <div class="form-control mt-5 pt-3">
            <button id="btn-modal" for="my-modal" class="hover:bg-[#004741] bg-[#004741] btn btn-[#004741]-accent cursor-pointer"
             wire:loading.attr="disabled"
             wire:loading.remove
             wire:loading.class='loading text-white bg-[#004741]'
             wire:click="refreshOnSave"
             >
                 <span
                      wire:loading.remove
                      wire:target="refreshOnSave, title, description, target_group"
                      class="text-white">
                      Submit your Comment
                  </span>
                </button>
                <div class="w-100 space-x-28 text-[#004741]"
                      wire:loading
                      wire.target="refreshOnSave"
                      wire:target="refreshOnSave, title, description, target_group"
                      >
                    <span class="text-white  gap-5"
                    {{-- wire:target="refreshOnSave" --}}
                    wire:target="title, description, target_group"
                    >
                    loading...</span>
                </div>
              </div>
        </form>
      </div>
</div>
</div>
