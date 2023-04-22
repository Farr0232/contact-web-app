<x-layout>
  <main>
    <div class="container">
        <h1 class="glass mt-5 p-4 fs-1 text-center">Contact Book</h1>
        <div class="row">
            <div class="col">
              <div class="glass p-5">
                <button class="btn btn-dark mb-3"><i class="bi bi-box-arrow-in-left"><a href="{{ url('/') }}" class="link-light"></i>&nbsp;Back</a></button>
                <h3 class="glass p-3">{{ $contacts->first_name }} {{ $contacts->last_name }}</h5>
                <div class="glass p-4">
                  <h4 class="card-title">Email:</h4>
                  <h5 class="card-title">{{ $contacts->email }}</h5>
                  <div class="d-flex justify-content-between">
                    <a href="/contacts/{{ $contacts['id'] }}/edit" class="btn btn-warning link-dark">Edit Contact</a>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</main>
</x-layout>