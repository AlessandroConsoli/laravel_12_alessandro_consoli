<x-layout>

    <x-header>
        <h1 class="mt-5">Accedi al tuo account</h1>
    </x-header>

    <div class="container-fluid bg-custom vh-100 pt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4">
                <form
                class="shadow rounded-2"
                action="{{route('login')}}"
                method="POST"
                >
                @csrf
                    <div class="mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                    
                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="password">
                    </div>
                    
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-secondary">Accedi</button>
                    </div>
                  </form>
            </div>
        </div>
    </div>




</x-layout>