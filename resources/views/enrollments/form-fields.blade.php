<div>
    <x-input-label for="name" :value="__('Name')"></x-input-label>
    <x-text-input id="name"  
            name="name" 
            type="text" 
            value="{{ old('name',$enroll->name) }}"
            class="block w-full mt-1"
    />
    <x-input-error :messages="$errors->get('name')" class="mt-2"/>    

</div>

<div>
    <x-input-label for="description" :value="__('Description')"></x-input-label>
    <x-text-area id="description" 
        name="description"
        class="block w-full mt-1"
         >{{ old('description', $enroll->description) }}
    </x-text-area>
    <x-input-error :messages="$errors->get('name')" class="mt-2"/>
</div>