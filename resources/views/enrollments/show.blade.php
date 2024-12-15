<x-enrollment-layout name="{{ $enroll->name }}">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white  overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                     <h1>{{ $enroll->name }}</h1>
                        <br>
                        <p>{{ $enroll->description }}</p>
                        <br>
                </div>
            </div>
        </div>
    </div>



   

    <br>
    <h4><ul>
        &nbsp;&nbsp;<a class="px-2 py-1 bg-blue-700 text-sm text-white rounded hover:bg-blue-400" href="<?= route('groups.index')?>">Back</a>
    </ul></h4>
</x-enrollment-layout>