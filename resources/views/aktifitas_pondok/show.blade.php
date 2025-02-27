@extends('layout')

@section('content')
	<section class="bg-gradient-to-br from-[#369b3a] to-[#00763d] py-12 shadow-2xl md:py-16">
		<div class="container">
			<h2 class="mb-10 text-center text-3xl/[1.5] font-black text-white md:mb-16 md:text-4xl/[1.5]">
				{{ $page->title }}
				<div class="mx-auto mt-3 w-[16rem] bg-secondary p-[.15rem] md:mt-4 md:w-[18rem]"></div>
			</h2>
		</div>
	</section>

	<article class="container -mt-16">
		<figure class="shadow-xl rounded-2xl md:p-4 p-3 bg-white">
			<img
				class="rounded-xl aspect-video object-cover" 
				src="{{ $page->gambar_utama }}" 
				alt="{{ $page->gambar_utama->alt }}">
		</figure>

		<div class="prose md:prose-xl max-w-full my-12">
			{!! $page->konten !!}

			<hr>

			<p>
				<b>Penulis :</b>
				{{ $page->author->name }}
			</p>
			<p>
				<b>Tanggal Terbit :</b>
				{{ $page->date }}
			</p>
		</div>
	</article>
@endsection