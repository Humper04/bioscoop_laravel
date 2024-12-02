<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <h1>{{ $titel }}</h1>
</head>
<body>
    @if(count($films) === 0)
        <p>Geen films gevonden.</p>
    @else
        <p>Er zijn films beschikbaar!</p>
        @foreach($films as $film)
            <p>----</p>
            <p>{{ $film['naam'] }}</p>
        @endforeach
    @endif
</body>
</html>
