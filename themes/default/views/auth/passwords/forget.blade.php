<x-app-layout>
    <!-- Password Reset -->
	<section class="shop login section">
		<div class="container">
			<div class="row"> 
				<div class="col-lg-6 offset-lg-3 col-12">
					<div class="login-form">
						<h2>{{ __('Forgot your password?') }}</h2>
						<p>{{ __('No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}</p>
						@if (session('status'))
							<div class="alert alert-success">{{ session('status') }}</div>
						@endif
						<!-- Form -->
						<form class="form" method="POST" action="{{ route('password.email') }}">
							@csrf
							<div class="row">
								<div class="col-12">
									<div class="form-group">
										<label for="email">{{ __('Your Email') }}<span class="text-danger">*</span></label>
										<input type="email" name="email" id="email" class="@error('email') border border-danger @enderror" value="{{ old('email') }}" required>
										@error('email')<div class="text-left text-danger">{{ $message }}</div>@enderror
									</div>
								</div>
								<div class="col-12">
									<div class="form-group login-btn">
										<button class="btn" type="submit">{{ __('Email Password Reset Link') }}</button>
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