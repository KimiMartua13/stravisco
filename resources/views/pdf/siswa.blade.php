<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Document</title>
</head>
<body>

    @foreach ($siswa as $item)
        @dump(Storage::url( $item->photo ));
        <img src="http://127.0.0.1:8000{{ Storage::url( $item->photo )}}" alt="">
    @endforeach
    
</body>
</html>