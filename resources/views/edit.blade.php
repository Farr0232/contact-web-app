<x-layout>
    <main>
      <div class="container">
          <div class="row">
              <div class="col">
                  <h1 class="glass mt-5 p-4 fs-1 text-center">Edit Contact</h1>
              </div>
          </div>
            <div class="glass row mt-5 p-lg-5">
              <div class="col">
                <button class="btn btn-dark mb-3"><i class="bi bi-box-arrow-in-left"><a href="/contacts/{{ $contact ['id'] }}" class="link-light"></i>&nbsp;Back</a></button>
                  <form action="/contacts/{{ $contact ['id'] }}" method="POST">
                    @csrf
                    @method('PUT')

                      <div class="mb-3 row">
                        <div class="col glass p-4 m-2">
                          <label for="firstName" class="form-label fs-3">First Name</label>
                          <input type="text" class="form-control" value="{{ $contact ['first_name']}}" aria-label="First name" name="first_name">
                        </div>
                        <div class="col glass p-4 m-2">
                          <label for="lastName" class="form-label fs-3">Last Name</label>
                          <input type="text" class="form-control" value="{{ $contact ['last_name']}}"aria-label="Last name" name="last_name">
                        </div>
                      </div>
                      <div class="glass p-4 m-2 mb-5 ">
                          <label for="exampleInputEmail1" class="form-label fs-3">Email address</label>
                          <input type="email" class="form-control" value="{{ $contact ['email']}}" name="email">
                        </div>
                          <button type="submit" class="btn btn-warning">Update</button>
                    </form>
                    <form method="post" action="/contacts/{{ $contact ['id'] }}">
                      @csrf
                      @method('delete')
                      <button class="mt-3 btn btn-danger">Delete Contact</button>
                      </form>
              </div>
            </div>
      </div>
  </main>
  </x-layout>