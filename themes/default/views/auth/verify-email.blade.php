<x-app-layout>
    <div class="flex flex-col items-center min-h-screen pt-6 bg-gray-100 sm:justify-center sm:pt-0">
        <div>
            <a href="/">
                <x-application-logo class="w-20 h-20 text-gray-500 fill-current" />
            </a>
        </div>

        <div class="w-full px-6 py-4 mt-6 overflow-hidden bg-white shadow-md sm:max-w-md sm:rounded-lg">
            <div class="mb-4 text-sm text-gray-600">
                {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
            </div>

            @if (session('status') == 'verification-link-sent')
                <div class="mb-4 text-sm font-medium text-green-600">
                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                </div>
            @endif

            <div class="flex items-center justify-between mt-4">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf

                    <div>
                        <button type="submit" class="inline-flex items-center px-4 py-2 ml-4 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25">
                            {{ __('Resend Verification Email') }}
                        </button>
                    </div>
                </form>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit" class="text-sm text-gray-600 underline hover:text-gray-900">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>
        </div>
    </div>



    <!-- Shop Login -->
    <section class="shop login section">
		<div class="container">
			<div class="row"> 
				<div class="col-lg-6 offset-lg-3 col-12">
					<div class="login-form">
						<h2>{{ __('Email Verification') }}</h2>
						<p>{{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}</p>

                        @if (session('status') == 'verification-link-sent')
                            <div class="alert alert-success">{{ __('A new verification link has been sent to the email address you provided during registration.') }}</div>
                        @endif

						<!-- Form -->
						<form class="form" method="POST" action="{{ route('verification.send') }}">
							@csrf
							<div class="row">
								<div class="col-12">
									<div class="form-group login-btn">
										<button class="btn" type="submit">{{ __('Resend Verification Email') }}</button>
									</div>
								</div>
							</div>
						</form>
						<!--/ End Form -->

						<!-- Form -->
						<form class="form" method="POST" action="{{ route('logout') }}">
							@csrf
							<div class="row">
								<div class="col-12">
									<div class="form-group login-btn">
										<button class="btn" type="submit">{{ __('Log Out') }}</button>
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
	<!--/ End Login -->







</x-app-layout>