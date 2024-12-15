<x-enrollment-layout name="Lobby">
    <p style="color:slategray">This is the welcome page! <br>Please log in to have a complete experience</p>
    <div class="flex flex-col">
        <br>
        <ul>
            &nbsp;&nbsp;<a class="px-2 py-1 bg-blue-700 text-sm text-white rounded hover:bg-blue-400" href="<?= route('login')?>">Log in</a>
        </ul>
    </div>
    <div class="flex flex-col">
        <br>
        <ul>
            &nbsp;&nbsp;<a class="px-2 py-1 bg-blue-700 text-sm text-white rounded hover:bg-blue-400" href="<?= route('register')?>">Register</a>
        </ul>
    </div>
</x-enrollment-layout>


