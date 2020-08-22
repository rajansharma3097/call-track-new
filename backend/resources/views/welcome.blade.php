<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <base href="/">
        <title>Call Track</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        {{--angular styles begin--}}
		
		{{--angular styles end--}}
    </head>
    <body>
        <app-root></app-root>
        {{--angular scripts begin--}}
		<script src="frontend/runtime-es2015.js" type="module"></script>
		<script src="frontend/runtime-es5.js" nomodule defer></script>
		<script src="frontend/polyfills-es5.js" nomodule defer></script>
		<script src="frontend/polyfills-es2015.js" type="module"></script>
		<script src="frontend/styles-es2015.js" type="module"></script>
		<script src="frontend/styles-es5.js" nomodule defer></script>
		<script src="frontend/vendor-es2015.js" type="module"></script>
		<script src="frontend/vendor-es5.js" nomodule defer></script>
		<script src="frontend/main-es2015.js" type="module"></script>
		<script src="frontend/main-es5.js" nomodule defer></script>
		{{--angular scripts end--}}
    </body>
</html>
