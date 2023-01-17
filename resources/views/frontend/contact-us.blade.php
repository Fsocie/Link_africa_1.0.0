@section('title')
    {{ "Nous contacter" }}
@endsection
@include('frontend.header')
@include('frontend.navbar')

<section class="text-gray-600 body-font relative">
	<div class="absolute inset-0 bg-gray-300">
		<iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map" scrolling="no"
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15865.701238777434!2d1.1834649!3d6.2074975!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x13525f005439bec7!2sShowroom%20Africa!5e0!3m2!1sfr!2stg!4v1671102033967!5m2!1sfr!2stg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
			style=""></iframe>
	</div>
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">{{Session::get('success') }}</div>
    @endif
	<form action="{{ route('contact.store') }}" method="POST" class="container px-5 py-24 mx-auto flex">
		@csrf
		<div
			class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">
			<h2 class="text-gray-900 text-lg mb-1 font-medium title-font">SHOWROOMAFRICA</h2>
			<div class="relative mb-4">
				<label for="nom" class="leading-7 text-sm text-gray-600">Entrez votre nom</label>
				<input type="nom" id="nom" name="nom"
					class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
					@error('nom')<span class="text-danger">{{$message}}</span>@enderror
			</div>
			<div class="relative mb-4">
				<label for="email" class="leading-7 text-sm text-gray-600">Entrez votre email</label>
				<input type="email" id="email" name="email"
					class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
					@error('email')<span class="text-danger">{{$message}}</span>@enderror
			</div>
			<div class="relative mb-4">
				<label for="objet" class="leading-7 text-sm text-gray-600">Entrez l'objet</label>
				<input type="objet" id="objet" name="objet"
					class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
					@error('objet')<span class="text-danger">{{$message}}</span>@enderror
			</div>
			<div class="relative mb-4">
				<label for="message" class="leading-7 text-sm text-gray-600">Entrez votre message</label>
				<textarea id="message" name="message"
					class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
					@error('message')<span class="text-danger">{{$message}}</span>@enderror
			</div>
			<button type="submit" value="submit"
				class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Evoyer Message</button>
		</div>
	</form>
</section>
@include('frontend.footer')