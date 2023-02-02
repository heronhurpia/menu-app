<!DOCTYPE html>
<html>
<head>
    <title>How to Create Multi Language Website in Laravel - ItSolutionStuff.com</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">

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
