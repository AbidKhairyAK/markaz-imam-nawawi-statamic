<!doctype html>
<html lang="{{ $site->short_locale }}">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	@hasSection('meta')
		@yield('meta')
	@else
		<x-social-meta
			title="Markaz Imam Nawawi"
			description="Pesantren Tahfidzul Qur’an Markaz Imam Nawawi Bulukumba adalah sebuah lembaga pendidikan Khusus Tahfidzul Qur’an setingkat SMP, SMA didirikan pada tahun 2018"
			image="{{ asset('favicon/android-chrome-512x512.png') }}" />
	@endif

	<title>{{ $page->title . ' - ' . $site->name }}</title>


	<link
		rel="preconnect"
		href="https://fonts.bunny.net">
	<link
		href="https://fonts.bunny.net/css?family=bebas-neue:400|mulish:300,400,400i,600,700,900"
		rel="stylesheet" />

	<s:vite src="resources/js/site.js|resources/css/site.css" />
</head>

<body class="outer-wrapper font-sans leading-normal text-gray-800">

	<span id="beranda"></span>

	<!-- === NAVBAR START === -->
	@php
		$menus = json_decode(json_encode([
			['title' => 'Beranda',          'url' => '/#beranda'],
			['title' => 'Tentang Kami',     'url' => '/#tentang-kami'],
			['title' => 'Program Kami',     'url' => '/#program-kami'],
			['title' => 'Aktifitas Pondok', 'url' => '/#aktifitas-pondok'],
		]));
	@endphp

	<header class="sticky top-0 z-40 bg-gradient-to-r from-[#369b3a] to-[#00763d] py-1 md:py-2">
		<div class="container">
			<div class="navbar">

				<section class="navbar-start">
					<a class="flex items-center gap-2"
						href="/">
						<div class="block overflow-hidden rounded-full shadow-lg"
							href="#">
							<img src="{{ asset('assets/static/logo-markaz-imam-nawawi.jpeg') }}"
								class="w-14 scale-105 object-contain">
						</div>
						<div class="hidden font-['Bebas_Neue'] leading-none text-white drop-shadow md:block">
							<div class="text-3xl">MARKAZ</div>
							<div class="-mt-[10px] text-lg">IMAM NAWAWI</div>
						</div>
					</a>

					<div class="dropdown">
						<div
							tabindex="0"
							role="button"
							class="btn btn-ghost mr-2 lg:hidden">
							<img
								src="{{ asset('assets/static/menu-bar.svg') }}"
								class="h-8 w-8">
						</div>
						<ul
							tabindex="0"
							class="menu dropdown-content -left-[72px] mt-4 w-[calc(100vw-15px)] rounded-xl bg-base-100 p-2 shadow">
							@foreach ($menus as $menuIndex => $menu)
								<li class="{{ $menuIndex == count($menus) - 1 ?: 'border-b border-base-200' }}">
									<a href="{{ $menu->url }}">
										{{ $menu->title }}
									</a>
								</li>
							@endforeach
						</ul>
					</div>
				</section>

				<section class="navbar-center hidden lg:flex">
					<ul class="menu menu-horizontal gap-6 font-semibold text-white">
						@foreach ($menus as $menu)
							<li>
								<a href="{{ $menu->url }}">
									{{ $menu->title }}
								</a>
							</li>
						@endforeach
					</ul>
				</section>

				<section class="navbar-end">
					<a class="btn btn-secondary rounded-xl font-bold shadow"
						href="/pendaftaran-santri">
						Pendaftaran
					</a>
				</section>

			</div>
		</div>
	</header>
	<!-- === NAVBAR END === -->


	<main class="inner-wrapper overflow-hidden">

		<!-- === CONTENT START === -->
		@yield('content')
		<!-- === CONTENT END === -->


		<!-- === FAB START === -->
		<div class="fixed bottom-4 right-4">
			<a href="https://wa.me/{{ $informasi_umum->whatsapp_nomor }}?text=Assalamualaikum+{{ $informasi_umum->whatsapp_nama }}" target="_blank" class="btn btn-primary text-white rounded-full shadow">
				<x-lucide-phone-call class="w-4 h-4" />
				Hubungi WhatsApp
			</a>
		</div>
		<!-- === FAB END === -->


		<!-- === FOOTER START === -->
		<footer class="bg-gradient-to-br from-[#369b3a] to-[#00763d] py-12 shadow-2xl md:py-16">
			<div class="container grid md:grid-cols-5 gap-12">

				<section class="p-2 rounded-xl shadow-xl aspect-[3/2] w-full md:col-span-2 bg-white">
					<iframe
						class="w-full h-full rounded-lg"
						src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1985.639514672166!2d120.19163968949988!3d-5.525555458264273!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbc014b8899060f%3A0xfcfd9bbfddcaa81d!2sMarkaz%20Imam%20Nawawi!5e0!3m2!1sid!2sid!4v1740642501793!5m2!1sid!2sid"
						style="border:0;"
						allowfullscreen=""
						loading="lazy"
						referrerpolicy="no-referrer-when-downgrade">
					</iframe>
				</section>

				<article class="text-white md:col-span-3">
					
					<section class="flex items-center gap-2 scale-150 origin-top-left mb-12">
						<div class="block overflow-hidden rounded-full shadow-lg" href="#">
							<img
								src="{{ asset('assets/static/logo-markaz-imam-nawawi.jpeg') }}"
								class="w-14 scale-105 object-contain">
						</div>
						<div class="font-['Bebas_Neue'] leading-none text-white drop-shadow">
							<div class="text-3xl">MARKAZ</div>
							<div class="-mt-[10px] text-lg">IMAM NAWAWI</div>
						</div>
					</section>

					<p class="text-sm leading-loose md:w-[320px] w-full">
						Jl. Pahlawan. Desa Taccorong, Kec. Gantarang,
						Kab. Bulukumba, Sulawesi Selatan 92561.
					</p>

					<p class="text-sm mt-4 flex gap-3 items-center">
						<x-lucide-phone-call class="w-3 h-3" />
						<b class="w-[90px] hidden md:block">WhatsApp</b>
						<a href="https://wa.me/{{ $informasi_umum->whatsapp_nomor }}?text=Assalamualaikum+{{ $informasi_umum->whatsapp_nama }}" target="_blank">
							: {{ $informasi_umum->whatsapp_nomor }}
						</a>
						<span>({{ $informasi_umum->whatsapp_nama }})</span>
					</p>
					<p class="text-sm mt-2 flex gap-3 items-center">
						<x-lucide-facebook class="w-3 h-3" />
						<b class="w-[90px] hidden md:block">Facebook</b>
						<a href="https://www.facebook.com/{{ $informasi_umum->facebook_akun }}" target="_blank">
							: {{ $informasi_umum->facebook_akun }}
						</a>
					</p>
				</article>
			</div>
		</footer>
		<!-- === FOOTER END === -->

	</main>
</body>

</html>

