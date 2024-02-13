<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
        our traded Products
    </h1>
    <h1>
        <ul>
            @foreach ($companies as $oneCompany)
                <li>{{ $oneCompany->companyName }}</li>
                <ol>
                @foreach ($oneCompany->products as $oneProduct)
                    <li>
                        @php
                            $productPage = "/tradedProducts/productDetails/" . $oneProduct->id;
                        @endphp
                        <a href="{{ url($productPage) }}">
                            {{ $oneProduct->productName }}
                        </a>
                    </li>
                @endforeach
                </ol>
            @endforeach
        </ul>
    </h1>

</body>
</html>
