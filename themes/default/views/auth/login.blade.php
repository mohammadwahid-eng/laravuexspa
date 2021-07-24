<x-app-layout>
	<!-- Shop Login -->
	<section class="shop login section">
		<div class="container">
			<div class="row"> 
				<div class="col-lg-6 offset-lg-3 col-12">
					<div class="login-form">
						<h2>{{ __('Login') }}</h2>
						<p>{{ __('Please log in order to checkout more quickly') }}</p>
						<!-- Form -->
						<form class="form" method="POST" action="{{ route('login') }}">
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
									<div class="form-group">
										<label for="password">{{ __('Your Password') }}<span class="text-danger">*</span></label>
										<input type="password" name="password" id="password" class="@error('password') border border-danger @enderror" required>
										@error('password')<div class="text-left text-danger">{{ $message }}</div>@enderror
									</div>
								</div>
								<div class="col-12">
									<div class="form-group login-btn">
										<button class="btn" type="submit">{{ __('Login') }}</button>
										<a href="{{ route('register') }}" class="btn">{{ __('Register') }}</a>
									</div>
									<div class="checkbox">
										<label class="checkbox-inline" for="remember_me">
											<input name="remember" id="remember_me" type="checkbox">{{ __('Remember me') }}
										</label>
									</div>
									@if (Route::has('password.request'))
										<a href="{{ route('password.request') }}" class="lost-pass">{{ __('Lost your password?') }}</a>
									@endif
								</div>
							</div>
						</form>
						<!--/ End Form -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/ End Login -->
</x-app-layout>
