<x-layout>
    <main>
        <div class="container p-lg-4">
            <h1 class="glass mt-5 mb-5 p-4 fs-1 text-center">Contact Book</h1>
            <div class="glass p-4">
                <div class="row">
                    <div class="col d-flex flex-row-reverse">
                        <button class="btn btn-dark"><a class="contact link-light" href="{{ url('/add') }}">Add New Contact</a></button>
                    </div>
                </div>
                <form method="GET" class="form d-flex justify-content-between mt-4">
                    @csrf
                    <input type="text" class="glass form-control" name="search" placeholder="Search">
                  </form>
                  <div class="row mt-5">
                    <div class="col">
                        <ul class="list-group">
                            @foreach ($contacts as $contact)
                            <li class="contact glass mb-2 fs-3 list-group-item"><a class="text-decoration-none contact-name" href="/contacts/{{ $contact['id'] }}">{{ $contact->first_name }} {{ $contact->last_name }}</a></li>
                            @endforeach 
                        </ul>
                    </div>
                  </div>
            </div>
        </div>
    </main>
</x-layout>