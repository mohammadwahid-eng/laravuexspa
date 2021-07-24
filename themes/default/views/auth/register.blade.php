<x-app-layout>
	<!-- Shop Register -->
	<section class="shop login section">
		<div class="container">
			<div class="row"> 
				<div class="col-lg-6 offset-lg-3 col-12">
				<div class="login-form">
						<h2>{{ __('Register') }}</h2>
						<p>{{ __('Please register in order to checkout more quickly') }}</p>
						<!-- Form -->
						<form class="form" method="POST" action="{{ route('register') }}">
							@csrf
							<div class="row">
								<div class="col-12">
									<div class="form-group">
										<label for="name">{{ __('Your Name') }}<span class="text-danger">*</span></label>
										<input type="text" name="name" id="name" class="@error('name') border border-danger @enderror" value="{{ old('name') }}" required>
										@error('name')<div class="text-left text-danger">{{ $message }}</div>@enderror
									</div>
								</div>
								<div class="col-12">
									<div class="form-group">
										<label for="email">{{ __('Your Email') }}<span class="text-danger">*</span></label>
										<input type="email" name="email" id="email" class="@error('email') border border-danger @enderror" value="{{ old('email') }}" required>
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
										<button class="btn" type="submit">Register</button>
										<a href="{{ route('login') }}" class="btn">Login</a>
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
	<!--/ End Register -->
</x-app-layout>
