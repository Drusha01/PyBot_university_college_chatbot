<div class="backdrop">
    <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
        <div class="container">
        <div class="card login-card">
            <div class="row no-gutters">
            <div class="col-md-3">
                <img src="{{ asset('assets/images/CCS_building.png') }}" alt="login" class="login-card-img">
            </div>
            <div class="col-md-9">
                <div class="card-body">
                <div class="brand-wrapper justify-content-between">
                <img src="{{ asset('images/logo/logo.png') }}" alt="logo" class="logo">
                <img src="{{ asset('images/logo/ccs-logo@2x.png') }}" alt="ccs" class="logo">
                <a href="{{ route('login') }}" class="float-right forgot-password-link">Back to Login</a>

                </div>
                <p class="login-card-description">Register an Account Using your Email</p>

                @if(!$sign_up)
                    @if($email_send)
                        <form wire:submit.prevent="send_verification_code()" >
                        @csrf
                        <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email"  wire:model="email" class="form-control  form-control-sm" placeholder="Email address" required>
                        </div>
                        <button type="submit"   class="btn btn-block login-btn mb-4 button-color">Send Verification Code</button>

                       </form>
                    @else
                        <form wire:submit.prevent="verify_code()" >
                            @csrf
                            <div class="form-group">
                                <label for="email" class="sr-only">Email</label>
                                <input type="number"  wire:model="code" class="form-control  form-control-sm" placeholder="Enter code" min="100000" max="999999" required>
                            </div>
                            <button type="submit"   class="btn btn-block login-btn mb-4 button-color">Verify</button>
                            <a href="{{ route('login') }}" class="forgot-password-link">Back to Login</a>
                       </form>
                    @endif
                @else
                <div class="alert alert-danger" role="alert">
                    <form wire:submit.prevent="sign_up()">
                        <div class="row mb-1">
                            <div class="col-md-12 mb-1">
                                <label for="firstName" class="form-label">Username</label>
                                <input type="text" style="color:{{$style}}"class="form-control  form-control-sm"  wire:model="username" wire:keyup="verify_username()" required>
                            </div>
                            <div class="col-md-12 mb-1">
                                <label for="firstName" class="form-label">First Name</label>
                                <input type="text" class="form-control  form-control-sm" wire:model="firstname" required>
                            </div>
                            <div class="col-md-12 mb-1">
                                <label for="middleName" class="form-label">Middle Name</label>
                                <input type="text" class="form-control  form-control-sm" wire:model="middlename">
                            </div>
                            <div class="col-md-12 mb-1">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control  form-control-sm" wire:model="lastname" required>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-12">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control  form-control-sm" min="8" wire:model="password"  wire:keyup="verify_password()"required>
                            </div>
                            <div class="col-md-12 ">
                                <label for="confirmPassword" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control  form-control-sm" min="8" wire:model="confirm_password"  wire:keyup="verify_confirm_password()"required>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-12 ">
                                <label class="form-label"></label>
                            </div>
                            <div class="col-md-8 mb-8">
                                <label for="birthDate" class="form-label">Birthday</label>
                                <input type="date" class="form-control  form-control-sm" wire:model="birthdate"  wire:change="verify_birthdate()"required>
                            </div>
                            <button type="submit" class="btn-block button-color ">{{$sign_up_button}}</button>
                        </div>
                    </form>
                </div>
                @endif
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
