<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('create_password') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('update.password') }}" method="post" class="form-inline">
                        @csrf
                        <div class="form-group mx-sm-3 mb-2">
                            <label for="inputPassword2" class="sr-only">Password</label>
                            <input name="password" type="password" class="form-control" id="inputPassword2" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
