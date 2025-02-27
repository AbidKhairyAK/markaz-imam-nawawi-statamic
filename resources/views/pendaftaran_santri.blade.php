@extends('layout')

@section('content')
	<section class="bg-gradient-to-br from-[#369b3a] to-[#00763d] py-12 shadow-2xl md:py-16">
		<h2 class="mb-10 text-center text-3xl font-black text-white md:mb-16 md:text-4xl">
			Pendaftaran Santri
			<div class="mx-auto mt-3 w-[16rem] bg-secondary p-[.15rem] md:mt-4 md:w-[18rem]"></div>
		</h2>
	</section>


	<section class="container -mt-16 pb-16">
		<div class="card bg-white shadow-xl md:p-8 p-4">
			<h3 class="md:text-xl text-lg mt-4">
				Silahkan lengkapi form berikut:
			</h3>

			<hr class="my-8">

			<s:form:pendaftaran_santri>
				@if ($success)
					<div role="alert" class="alert alert-success text-white">
						<x-lucide-circle-check-big class="w-4 h-4" />
						<span>Formulir anda berhasil terkirim!</span>
					</div>
				@else
					@if (count($errors) > 0)
						<div role="alert" class="alert alert-error text-white">
							<x-lucide-circle-x class="w-4 h-4" />

							@foreach ($errors as $error)
								<p>{{ $error }}</p>
							@endforeach
						</div>
					@endif

					@foreach ($fields as $field)
						<div class="mb-8">
							<label class="block mb-2 text-sm font-bold">{{ $field['display'] }}</label>
							<div>{!! $field['field'] !!}</div>
							@if ($field['error'])
								<p class="text-red-700">{{ $field['error'] }}</p>
							@endif
						</div>
					@endforeach

					<input type="text" class="hidden" name="{{ isset($honeypot) ? $honeypot : 'honeypot' }}" />

					<button type="submit" class="btn btn-secondary btn-wide mt-8 shadow">
						<x-lucide-send class="w-4 h-4" />
						Kirim Formulir
					</button>
				@endif
			</s:form:pendaftaran_santri>
		</div>

	</section>
@endsection