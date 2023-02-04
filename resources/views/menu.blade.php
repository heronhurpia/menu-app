<!DOCTYPE html>
<html>
<head>
	<title>Menu Interativo</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body> 
	<div class="container">

		<nav class="flex items-center justify-between flex-wrap bg-teal-500 p-6">
			<div class="flex items-center flex-shrink-0 text-white mr-6">
				<svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
				<span class="font-semibold text-xl tracking-tight">Tailwind CSS</span>
			</div>
			<div class="block lg:hidden">
				<button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
					<svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
						<title>Menu</title>
						<path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
					</svg>
				</button>
			</div>
			<div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
				<div class="text-sm lg:flex-grow">
					<a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
						Docs
					</a>
					<a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
						Examples
					</a>
					<a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white">
						Blog
					</a>
				</div>
				<div>
					<a href="#" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">Download</a>
				</div>
			</div>
		</nav>


		<h3>Multi Language Website</h3>
  
		<div class="row">
			<div class="col-md-2 col-md-offset-6 text-right">
				<strong>Select Language: </strong>
			</div>
			<div class="col-md-4">
				<select class="form-control changeLang">
					<option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
					<option value="pt" {{ session()->get('locale') == 'pt' ? 'selected' : '' }}>Portugues</option>
					<option value="sp" {{ session()->get('locale') == 'sp' ? 'selected' : '' }}>Espanhol</option>
					<option value="cn" {{ session()->get('locale') == 'cn' ? 'selected' : '' }}>Mandarim</option>
				</select>
			</div>
		</div>


		<h3>{{ __('messages.apetizers') }}</h3>
		<ul class="w-48 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
			<li class="w-full px-4 py-2 border-b border-gray-200 rounded-t-lg dark:border-gray-600">{{ __('messages.french_fries') }}</li>
			<li class="w-full px-4 py-2 border-b border-gray-200 dark:border-gray-600">Settings</li>
			<li class="w-full px-4 py-2 border-b border-gray-200 dark:border-gray-600">Messages</li>
			<li class="w-full px-4 py-2 rounded-b-lg">Download</li>
		</ul>

		<h3>Prato principal</h3>
		<ul class="w-48 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
			<li class="w-full px-4 py-2 border-b border-gray-200 rounded-t-lg dark:border-gray-600">Profile</li>
			<li class="w-full px-4 py-2 border-b border-gray-200 dark:border-gray-600">Settings</li>
			<li class="w-full px-4 py-2 border-b border-gray-200 dark:border-gray-600">Messages</li>
			<li class="w-full px-4 py-2 rounded-b-lg">Download</li>
		</ul>

		<h3>Massas</h3>
		<ul class="w-48 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
			<li class="w-full px-4 py-2 border-b border-gray-200 rounded-t-lg dark:border-gray-600">Profile</li>
			<li class="w-full px-4 py-2 border-b border-gray-200 dark:border-gray-600">Settings</li>
			<li class="w-full px-4 py-2 border-b border-gray-200 dark:border-gray-600">Messages</li>
			<li class="w-full px-4 py-2 rounded-b-lg">Download</li>
		</ul>

		<h3>Bebidas</h3>
		<ul class="w-48 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
			<li class="w-full px-4 py-2 border-b border-gray-200 rounded-t-lg dark:border-gray-600">Profile</li>
			<li class="w-full px-4 py-2 border-b border-gray-200 dark:border-gray-600">Settings</li>
			<li class="w-full px-4 py-2 border-b border-gray-200 dark:border-gray-600">Messages</li>
			<li class="w-full px-4 py-2 rounded-b-lg">Download</li>
		</ul>

		<h3>Cervejas</h3>
		<ul class="w-48 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
			<li class="w-full px-4 py-2 border-b border-gray-200 rounded-t-lg dark:border-gray-600">Profile</li>
			<li class="w-full px-4 py-2 border-b border-gray-200 dark:border-gray-600">Settings</li>
			<li class="w-full px-4 py-2 border-b border-gray-200 dark:border-gray-600">Messages</li>
			<li class="w-full px-4 py-2 rounded-b-lg">Download</li>
		</ul>

		<h3>Refrigerantes</h3>
		<ul class="w-48 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
			<li class="w-full px-4 py-2 border-b border-gray-200 rounded-t-lg dark:border-gray-600">Profile</li>
			<li class="w-full px-4 py-2 border-b border-gray-200 dark:border-gray-600">Settings</li>
			<li class="w-full px-4 py-2 border-b border-gray-200 dark:border-gray-600">Messages</li>
			<li class="w-full px-4 py-2 rounded-b-lg">Download</li>
		</ul>
	</div>
</body>

<script type="text/javascript">
  
	var url = "{{ route('changeLang') }}";
  
	$(".changeLang").change(function(){
		window.location.href = url + "?lang="+ $(this).val();
	});
  
</script>
