<div>
    <form wire:submit.prevent="update">
        <h2 class="font-semibold my-auto text-md md:text-xl text-gray-800 leading-tight mb-3">
            Edit Data
        </h2>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-2 mb-3">
            <input type="hidden" wire:model="videoId">
            <div>
                <input type="text" wire:model="title"
                    class="bg-gray-50 border border-gray-300 text-gray-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="Masukkan judul video" required>
            </div>
            <div class="flex flex-col lg:flex-row items-center">
                <div class="relative w-full">
                    <input type="text" wire:model="video" id="video"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Masukkan tautan video" required>
                </div>
                <button type="submit"
                    class="inline-flex items-center py-2.5 px-5 lg:px-3 mt-3 lg:mt-0 lg:ml-2 text-xs font-semibold text-white bg-primary-600 tracking-widest rounded-lg border border-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 ">
                    SUBMIT
                </button>
            </div>
        </div>
    </form>

    <hr class="divide-x-2 my-4">

</div>