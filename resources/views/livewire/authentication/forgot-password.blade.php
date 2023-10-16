<div class="backdrop">
<main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
          <img src="{{ asset('assets/images/CCS_building.png') }}" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <a href="{{ route('login') }}" class="float-right forgot-password-link">Back to Login</a>
              <div class="brand-wrapper justify-content-between">
              <img src="{{ asset('images/logo/logo.png') }}" alt="logo" class="logo">
              <img src="{{ asset('images/logo/ccs-logo@2x.png') }}" alt="ccs" class="logo">
              </div>
              <p class="login-card-description">Forgot Password</p>
              <form wire:submit.prevent="recover_account()">
                @csrf
                <div class="form-group">
                  <label for="email" class="sr-only">Email</label>
                  <input type="email"  wire:model="email" class="form-control" placeholder="Enter Recovery Email" required>
                </div>
                <button type="submit" class="btn btn-block login-btn mb-4 button-color">Recover account</button>
              </form>
              <!-- Add the back to homepage button -->
              <a href="{{ route('page.home') }}" class="mt-3">Back to Homepage</a>
              <nav class="login-card-footer-nav">
                <a href="#!">Terms of use.</a>
                <a href="#!">Privacy policy</a>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</div>
