
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMl36Ad15Uy6gw+z5J92xlw+00d67kr1/gS3b2" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('assets/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style2.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style3.css')}}">

    


    <title>NextQuest</title>
</head>
<body>
        @include('includes.navbar')
        @include('includes.cover')

        <div class="container">
        @include('includes.services')
        @include('includes.slider')
        </div>
    @include('includes.footer')
    @include('includes.footerJs')
</body>
</html>