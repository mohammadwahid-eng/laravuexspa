<x-app-layout>
    <!-- Password Confirmation -->
	<section class="shop login section">
		<div class="container">
			<div class="row"> 
				<div class="col-lg-6 offset-lg-3 col-12">
					<div class="login-form">
						<p>{{ __('This is a secure area of the application. Please confirm your password before continuing.') }}</p>
						<!-- Form -->
						<form class="form" method="POST" action="{{ route('password.confirm') }}">
							@csrf
							<div class="row">
								<div class="col-12">
									<div class="form-group">
										<label for="password">{{ __('Password') }}</label>
										<input type="password" name="password" id="password" class="@error('password') border border-danger @enderror" required>
										@error('password')<div class="text-left text-danger">{{ $message }}</div>@enderror
									</div>
								</div>
								<div class="col-12">
									<div class="form-group login-btn">
										<button class="btn" type="submit">{{ __('Confirm') }}</button>
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
	<!--/ End Password Confirmation -->
</x-app-layout>