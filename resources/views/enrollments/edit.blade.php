<x-enrollment-layout name="Edit group">

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white  overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 ">
                    <form action="{{ route('groups.update',$enroll) }}", method="POST",class="space-y-4 max-w-xl">
                        @csrf @method('PATCH')
                        <br>
                            @include('enrollments.form-fields')
                            <br>
                        <x-primary-button type="submit" class="px-2 py-1 bg-blue-700 text-sm text-white rounded hover:bg-blue-400">Enviar</x-primary-button>
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