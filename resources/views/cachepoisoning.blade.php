<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cache Poisoning</title>
</head>
<body>
    <h3>Cache Poisoning lab</h3>

    @if(isset($header))
    <img src="{!!$header!!}">
    @else
    <img src="data:image/jpeg;base64,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">
    @endif
</body>
</html>