@extends('layout')

@section('content')
	<section class="bg-gradient-to-br from-[#369b3a] to-[#00763d] py-12 shadow-2xl md:py-16">
		<h2 class="mb-10 text-center text-3xl font-black text-white md:mb-16 md:text-4xl">
			Aktifitas Pondok
			<div class="mx-auto mt-3 w-[16rem] bg-secondary p-[.15rem] md:mt-4 md:w-[18rem]"></div>
		</h2>
	</section>
	

	<s:collection:aktifitas_pondok
		paginate="6"
		as="activities"
		sort="date:desc|id:desc">

		@if ($no_results)
			<p class="mt-32 text-xl text-center">Belum ada artikel...</p>
		@endif

		<section class="container grid gap-8 lg:grid-cols-3 -mt-16 pb-16">
			@foreach ($activities as $activity)
				<a href="{{ $activity->url }}" class="card bg-white shadow-xl hover:scale-105 transition-transform">
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

		@if ($paginate['total_pages'] > 1)
			<section class="flex justify-center items-center gap-6 mb-16">
				<a class="btn btn-secondary btn-sm shadow"
					href="{{ $paginate['prev_page'] }}">
					<x-lucide-chevron-left class="w-3 h-3" />
					Sebelumnya
				</a>
				
				<span class="text-sm">
					Halaman {{ $paginate['current_page'] }} dari {{ $paginate['total_pages'] }}
				</span>
	
				<a class="btn btn-secondary btn-sm shadow"
					href="{{ $paginate['next_page'] }}">
					Selanjutnya
					<x-lucide-chevron-right class="w-3 h-3" />
				</a>
			</section>
		@endif

	</s:collection:aktifitas_pondok>

@endsection