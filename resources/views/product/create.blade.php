<x-header>
    <form method="post">
        @csrf

        <!-- Email Address -->
        <div>
            <label for="name">Name</label>
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" required autofocus />
        </div>

         <div>
            <x-input-label for="description" />
            <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" required  />
        </div>

         <div>
            <x-input-label for="price" />
            <x-text-input id="price" class="block mt-1 w-full" type="text" name="price" required  />
        </div>
         <div>
            <x-input-label for="image" />
            <x-text-input id="image" class="block mt-1 w-full" type="file" name="image" required  />
        </div>

        </div>
    </form>
</x-header>
