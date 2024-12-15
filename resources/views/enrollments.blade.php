<x-enrollment-layout name="Groups">
    

   

    <div>
        @auth
        <div class="flex flex-col">
            <br>
            <ul>
                &nbsp;&nbsp;<a class="px-2 py-1 bg-blue-700 text-sm text-white rounded hover:bg-blue-400" href="<?= route('groups.create')?>">Create group</a>
            </ul>
        </div>
        @endauth
        <br>
        <div>
            @foreach ($enrollments as $enroll)
        {{-- <div style="display: flex; align-items: baseline">
            <h3><a href="{{ route('groups.show', $enroll) }}">{{ $enroll->name }}</a></h3>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="{{ route('groups.edit', $enroll) }}"> Edit</a>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <form action="{{  route('groups.destroy', $enroll) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
            {{-- <a href="{{ route('groups.destroy', $enroll) }}"> Delete</a> --}}
        {{-- </div>  --}}
            <div class="flex flex-col  bg-white px-10 py-6 max-w-7xl mx-auto rounded-lg shadow-md">
            
            <div class="mt-4" >
                <a class="text-lg  font-medium hover:underline" href="{{ route('groups.show', $enroll) }}">{{ $enroll->name }}</a>
            </div>
            <div class="flex justify-start items-center mt-4">
                
                @auth
                    <div class="flex justify-center items-center">
                        <a class="px-2 py-1 bg-gray-600 text-sm text-green-100 rounded hover:bg-gray-500" href="{{ route('groups.edit', $enroll) }}"> Edit</a>
                    </div> 
                    &nbsp;&nbsp;&nbsp;&nbsp; 
                    
                    <div class="flex justify-center items-center">
                        <form action="{{  route('groups.destroy', $enroll) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="px-2 py-1 bg-gray-600 text-sm text-green-100 rounded hover:bg-gray-500" type="submit">Delete</button>
                        </form>
                    </div>
                @endauth
                
                &nbsp;&nbsp;&nbsp;&nbsp;   
                
                {{-- User data --}}
                {{-- <div class="flex items-center">
                    <img src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=731&q=80"
                         class="w-8 h-8 object-cover rounded-full" alt="avatar">
                    <a class="text-gray-700 text-sm mx-3 hover:underline" href="#">Alex John</a> --}}
                {{-- </div> --}}
            </div>
        </div>
        <br><br>
        @endforeach
        </div>


    </div>
        
        
        

        
    
</x-enrollment-layout>