<x-app-layout>
    <!-- Password Reset -->
	<section class="shop login section">
		<div class="container">
			<div class="row"> 
				<div class="col-lg-6 offset-lg-3 col-12">
				<div class="login-form">
						<h2>{{ __('Password Reset') }}</h2>
						<!-- Form -->
						<form class="form" method="POST" action="{{ route('password.update') }}">
							@csrf

                            <!-- Password Reset Token -->
                            <input type="hidden" name="token" value="{{ $request->route('token') }}">

							<div class="row">
								<div class="col-12">
									<div class="form-group">
										<label for="email">{{ __('Your Email') }}<span class="text-danger">*</span></label>
										<input type="email" name="email" id="email" class="@error('email') border border-danger @enderror" value="{{ old('email',  $request->email) }}" required>
										@error('email')<div class="text-left text-danger">{{ $message }}</div>@enderror
									</div>
								</div>
								<div class="col-12">
									<div class="form-group">
										<label for="password">{{ __('Your Password') }}<span class="text-danger">*</span></label>
										<input type="password" name="password" id="password" class="@error('password') border border-danger @enderror" required>
										@error('password')<div class="text-left text-danger">{{ $message }}</div>@enderror
									</div>
								</div>
								<div class="col-12">
									<div class="form-group">
										<label for="password_confirmation">{{ __('Confirm Password') }}<span class="text-danger">*</span></label>
										<input type="password" name="password_confirmation" id="password_confirmation" class="@error('password_confirmation') border border-danger @enderror" required>
										@error('password_confirmation')<div class="text-left text-danger">{{ $message }}</div>@enderror
									</div>
								</div>
								<div class="col-12">
									<div class="form-group login-btn">
										<button class="btn" type="submit">{{ __('Reset Password') }}</button>
									</div>
								</div>
							</div>
						</form>
						<!--/ End Form -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/ End Password Reset -->
</x-app-layout>