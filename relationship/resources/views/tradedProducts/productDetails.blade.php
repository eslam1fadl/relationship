<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>product Details</h1>

    <h1>
        product name : <b>{{ $oneProduct[0]->productName }}</b> <br>

        company : <b>{{ $oneProduct[0]->company->companyName }}</b>
    </h1>
</body>
</html>
