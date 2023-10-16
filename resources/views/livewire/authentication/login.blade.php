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
                        <div class="brand-wrapper justify-content-between">
                        <img src="{{ asset('images/logo/logo.png') }}" alt="logo" class="logo">
                        <img src="{{ asset('images/logo/ccs-logo@2x.png') }}" alt="ccs" class="logo">
                        </div>
                        <p class="login-card-description">Sign into your account</p>
                        <form wire:submit.prevent="login()">
                            <div class="form-group">
                                <label for="email" class="sr-only">Email</label>
                                <input type="name"  wire:model="username" class="form-control" placeholder="Username / Email address" required>
                            </div>
                            <div class="form-group mb-4">
                                <label for="password" class="sr-only">Password</label>
                                <input type="password"  wire:model="password" class="form-control" placeholder="Enter Password" required>
                            </div>
                            <button type="submit" class="btn btn-block login-btn mb-4 btn-sm">Login</button>
                        </form>
                            <a href="forgot-password" class="forgot-password-link">Forgot password?</a>
                            <p class="login-card-footer-text">Don't have an account? <a href="{{ route('signup') }}" class="text-reset">Register using Email</a></p>
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

