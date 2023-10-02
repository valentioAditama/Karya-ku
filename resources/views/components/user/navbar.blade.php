<!-- Navbar -->
<nav class="navbar navbar-expand-md shadow-0">
	<!-- Container wrapper -->
	<div class="container">
		<!-- Toggle button -->
		<button class="navbar-toggler text-light" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<i class="fas fa-bars"></i>
		</button>

		<!-- Collapsible wrapper -->
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<!-- Navbar brand -->
			<a class="navbar-brand mt-2 mt-lg-0 text-light" href="{{route('home')}}">
				<img src="{{asset('icon/image 55.png')}}" class="mr-5" alt=""> KK
			</a>
			<!-- Left links -->
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
					<a class="nav-link text-light" href="{{route('home')}}">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-light" href="{{route('komunitas')}}">Community</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-light" href="{{route('laporan')}}">Report</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-light" href="{{route('tentang-kami')}}">About Us</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-light" href="{{route('kategori')}}">Category</a>
				</li>
			</ul>
			<!-- Left links -->
		</div>
		<!-- Collapsible wrapper -->

		<!-- Right elements -->
		<!-- for guest -->
		@guest
		<div class="d-flex align-items-center">
			<a class="text-light me-3" href="{{route('login')}}">Sign In</a>
			<a class="text-light text-center button-home-register" href="{{route('register')}}">Sign Up</a>
		</div>
		@endguest

		<!-- for user has login -->
		@auth
		<div class="d-flex align-items-center">
			<a href="" class="text-light">{{Auth::user()->fullname}}</a> &nbsp; &nbsp;
			<div class="dropdown">
				<a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#" id="navbarDropdownMenuAvatar" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
					<img src="{{ Auth::user()->image_profile ? asset('storage/user/profile/'. Auth::user()->image_profile) : asset('images/profileDefault.webp') }}" class="rounded-navbar" height="35" alt="Black and White Portrait of a Man" loading="lazy" />
				</a>
				<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
					<li>
						<a class="dropdown-item" href="{{route('my-profile', Auth::id()) }}">My profile</a>
					</li>
					<li>
						<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
							{{ __('Logout') }}
						</a>

						<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
							@csrf
						</form>
					</li>
				</ul>
			</div>
			&nbsp; &nbsp;
			<a class="text-light text-center button-home-upload" href="{{route('upload')}}" data-mdb-toggle="tooltip" data-mdb-placement="bottom" title="Upload Karya">
				<i class="fa-solid fa-upload"></i>
			</a>
		</div>
		@endauth

		<!-- Right elements -->
	</div>
	<!-- Container wrapper -->
</nav>
<!-- Navbar -->