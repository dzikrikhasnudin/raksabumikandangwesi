<div class="md:ml-64">
    <x-slot name="title">Semua Pengguna</x-slot>
    <x-slot name="sidebar">
        @include('layouts.sidebar')
    </x-slot>

    <div class="mt-16">
        <div class="p-4 bg-white border-b sm:rounded-lg border-gray-100">
            <div class="flex justify-between mb-4 items-center">
                <h2 class="text-xl font-semibold">Pengguna</h2>
                <div class="flex gap-2">
                    <button data-modal-target="tambahUser" data-modal-toggle="tambahUser"
                        class="bg-green-500 hover:bg-green-600 active:bg-green-900 focus:bg-green-700 text-white h-8 w-8 text-center rounded">
                        <i class="fa-solid fa-user-plus"></i>
                    </button>
                </div>
            </div>

            <hr class="my-4">

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 ">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                        <tr>
                            <th scope="col" class="px-3 py-3" width="50">
                                No.
                            </th>
                            <th scope="col" class="pl-0 pr-3 lg:px-6 py-3">
                                Nama Lengkap
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Role
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Aksi</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $index => $user)
                        <tr class=" bg-white border-b hover:bg-gray-50 cursor-pointer">
                            <td class="px-3 py-2 text-center" width="50">
                                {{ 1 + $index++ }}
                            </td>
                            <th scope="row" class="pl-0 pr-3 lg:px-6 py-2 font-medium text-gray-900 whitespace-nowrap ">
                                {{ $user->name }}
                            </th>
                            <td class="px-6 py-2">
                                {{ $user->email }}
                            </td>
                            <td class="px-6 py-2">
                                @switch($user->getRolenames()->first())
                                @case('Contributor') Kontributor
                                @break
                                @case('Admin') Administrator
                                @break
                                @default SuperAdmin
                                @endswitch
                            </td>
                            <td class="px-6 py-2 text-right">
                                <div class="flex m-auto  text-stone-600 ">
                                    {{-- Lihat --}}
                                    {{-- <a href="#"
                                        class="py-2 flex hover:bg-stone-200 hover:rounded-full text-stone-600 items-center active:bg-amber-300">
                                        <span class="mx-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                                <path fill-rule="evenodd"
                                                    d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </a> --}}

                                    {{-- Edit --}}
                                    <button data-modal-target="editUser" data-modal-toggle="editUser"
                                        wire:click="editUser({{ $user->id }})"
                                        class="py-2 flex hover:bg-stone-200 hover:rounded-full text-stone-600 items-center active:bg-amber-300">
                                        <span class="mx-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path
                                                    d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                <path fill-rule="evenodd"
                                                    d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </button>
                                    {{-- Hapus --}}
                                    @php
                                    $userId = $user->id;
                                    @endphp
                                    <button wire:click="$emit('triggerDelete',{{ $userId }})"
                                        class="py-2 flex hover:bg-stone-200 hover:rounded-full text-stone-600 items-center active:bg-amber-300">
                                        <span class="mx-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr class=" file:bg-white border-b ">
                            <td colspan="4" class=" px-6 py-4 text-center">
                                Belum ada video
                            </td>
                        </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
            <div class="mt-3 px-2">
                {{ $users->links() }}
            </div>

        </div>
    </div>
</div>

@push('modals')
@include('users.create')
<livewire:update-user :roles="$roles"></livewire:update-user>
@endpush

@push('script')
@push('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {
        @this.on('triggerDelete', userId => {
            Swal.fire({
                title: 'Yakin hapus data?',
                text: 'Data pengguna akan dihapus permanen!',
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: '#E12425',
                cancelButtonColor: '#aaa',
                confirmButtonText: 'Hapus saja!',
                cancelButtonText: 'Batalkan'
            }).then((result) => {
            //if user clicks on delete
                if (result.value) {
             // calling destroy method to delete
                    @this.call('destroy', userId)
             // success response
                    Swal.fire({title: 'Data pengguna berhasil dihapus!', icon: 'success'});
                }
            });
        });
    })
</script>
@endpush
@endpush