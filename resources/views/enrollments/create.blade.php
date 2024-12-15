<x-enrollment-layout name="Make a group">
    
    <x-slot name="header">
        <h1 class="font-semibold text-xl leading-tight">
            {{ __('Make a group') }}
        </h1>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white  overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-blue-900 ">
                    <form action="{{ route('groups.store') }}", method="POST",
                    class="space-y-4 max-w-xl">
                            
                            @include('enrollments.form-fields')

                        <x-primary-button class="px-2 py-1 bg-blue-700 text-sm text-white rounded hover:bg-blue-400" type="submit">Enviar</x-primary-button>
                        @csrf
                    </form>
                    <br>
                    <ul>
                        <a class="px-2 py-1 bg-blue-700 text-sm text-white rounded hover:bg-blue-400" href="<?= route('groups.index')?>">Back</a>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    

    
</x-enrollment-layout>