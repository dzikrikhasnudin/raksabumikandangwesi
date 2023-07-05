<!-- Main modal -->
<div wire:ignore.self id="editUser" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
    class="fixed delay-500 top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-xl max-h-full">
        <!-- Modal content -->
        <form wire:submit.prevent="updateRole">
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t ">
                    <h3 class="text-xl font-semibold text-gray-900 ">
                        Tambah Pengguna
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center  "
                        data-modal-hide="editUser">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <input type="hidden" wire:model="userId">
                    <div class="mb-6">
                        <label for="user_name" class="block mb-2 text-sm font-medium text-gray-900">Nama
                            Pengguna</label>
                        <input type="text" id="user_name" aria-label="disabled input" name="name" wire:model="name"
                            class="bg-gray-200  cursor-not-allowed border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                            placeholder="Masukkan nama pengguna" disabled>
                    </div>
                    <div class="mb-6">
                        <label for="role" class="block mb-2 text-sm font-medium text-gray-900">Role</label>
                        <select name="role" wire:model="role"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option selected>Pilih Role</option>
                            <option value="Contributor">Kontributor</option>
                            <option value="Admin">Administrator</option>
                            @if (Auth::user()->getRoleNames()->first() == 'SuperAdmin')
                            <option value="SuperAdmin">SuperAdmin</option>
                            @endif
                        </select>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b ">
                    <button type="submit"
                        class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Simpan</button>
                    <button data-modal-hide="editUser" wire:click='resetInput' type="button"
                        class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 ">Batal</button>
                </div>
            </div>
        </form>
    </div>
</div>