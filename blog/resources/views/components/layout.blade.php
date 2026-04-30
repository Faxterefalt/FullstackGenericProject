<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $metaTitle ?? 'Default Title' }}</title>
    <meta name="description" content="{{ $metaDescription ?? 'Default Description'}}"/>
</head>
<body>
<x-navigation/>

    {{$slot}}
    @isset($sidebar)
        <div id="sidebar">
            <h3>Sidebar</h3>
            <div>{{ $sidebar}}</div>
        </div>
    @endisset
    
</body>
</html>