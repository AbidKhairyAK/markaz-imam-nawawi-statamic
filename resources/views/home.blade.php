@extends('layout')

@section('content')
		<!-- === BANNER START === -->
		<section class="w-[100vw] max-w-[100vw] overflow-hidden shadow-xl">
			<img
				class="relative -left-5 z-0 w-[120vw] max-w-[120vw] object-contain md:left-0 md:w-full md:max-w-full"
				src="{{ $page->banner_utama }}"
				alt="{{ $page->banner_utama->alt }}">
		</section>
		<!-- === BANNER END === -->


		<!-- === ABOUT US START === -->
		<section id="tentang-kami" class="container pb-24 pt-20">
			<h2 class="mb-10 text-center text-3xl font-black text-gray-800 md:mb-16 md:text-4xl">
				Tentang Kami
				<div class="mx-auto mt-3 w-[16rem] bg-[#369b3a] p-[.15rem] md:mt-4 md:w-[18rem]"></div>
			</h2>

			<div class="grid gap-8 md:grid-cols-5">
				<section class="relative md:col-span-2">
					<div
						class="absolute -left-2 -top-2 h-full w-full scale-95 rounded-xl bg-gradient-to-br from-[#369b3a] to-[#00763d] shadow-lg">
					</div>
					<img
						class="relative -bottom-2 -right-2 w-full scale-95 rounded-2xl border-8 border-white object-contain shadow-xl"
						src="{{ $page->gambar_tentang_kami }}"
						alt="{{ $page->gambar_tentang_kami->alt }}">
				</section>

				<section class="prose md:col-span-3">
					{!! $page->tentang_kami !!}
				</section>
			</div>
		</section>
		<!-- === ABOUT US END === -->


		<!-- === OUR PROGRAM START === -->
		<section id="program-kami" class="bg-gradient-to-br from-[#369b3a] to-[#00763d] py-12 shadow-2xl md:py-16">
			<h2 class="mb-10 text-center text-3xl font-black text-white md:mb-16 md:text-4xl">
				Program Kami
				<div class="mx-auto mt-3 w-[16rem] bg-secondary p-[.15rem] md:mt-4 md:w-[18rem]"></div>
			</h2>

			<section class="container grid gap-8 lg:grid-cols-3">

				<s:collection:program_kami>
					<article class="card bg-white shadow-xl">
						<figure class="overflow-hidden m-3 mb-0 rounded-xl">
							<img 
								src="{{ $gambar }}"
								alt="{{ $gambar->alt }}">
						</figure>

						<div class="card-body p-6">
							<h2 class="card-title mx-auto text-2xl font-black text-gray-800">
								{{ $title }}
							</h2>
							<p class="text-center text-sm mb-4">
								{{ $kepanjangan }}
							</p>
							<p class="text-center font-light">
								{{ $deskripsi }}
							</p>
						</div>
					</article>
				</s:collection:program_kami>

			</section>
		</section>
		<!-- === OUR PROGRAM END === -->

		
		<!-- === ACTIVITIES START === -->
		<section id="aktifitas-pondok" class="container pb-24 pt-20">
			<h2 class="mb-10 text-center text-3xl font-black text-gray-800 md:mb-16 md:text-4xl">
				Aktifitas Pondok
				<div class="mx-auto mt-3 w-[16rem] bg-[#369b3a] p-[.15rem] md:mt-4 md:w-[18rem]"></div>
			</h2>

			<s:collection:aktifitas_pondok
				paginate="3"
				as="activities"
				sort="date:desc|id:desc">

				<section class="container grid gap-8 lg:grid-cols-3">
					@foreach ($activities as $activity)
						<a href="{{ $activity->url }}" class="card bg-white shadow-xl  hover:scale-105 transition-transform">
							<figure class="overflow-hidden m-3 mb-0 rounded-xl">
								<img 
									class="aspect-video object-cover"
									src="{{ $activity->gambar_utama }}"
									alt="{{ $activity->gambar_utama->alt }}">
							</figure>

							<div class="card-body p-4 pt-3">
								<h2 class="card-title text-lg">
									{{ $activity->title }}
								</h2>

								<div class="flex-grow"></div>

								<div class="card-actions mt-2">
									<button class="link-primary text-xs underline underline-offset-4">
										Baca Selengkapnya...
									</button>
								</div>
							</div>
						</a>
					@endforeach
				</section>

			</s:collection:aktifitas_pondok>

			<div class="flex justify-center mt-10">
				<a 
					class="btn btn-secondary shadow"
					href="{{ \Statamic\Statamic::tag('mount_url:aktifitas_pondok') }}">
					Lihat Lebih Banyak
					<x-lucide-chevron-right class="w-4 h-4" />
				</a>
			</div>
		</section>
		<!-- === ACTIVITIES END === -->
@endsection