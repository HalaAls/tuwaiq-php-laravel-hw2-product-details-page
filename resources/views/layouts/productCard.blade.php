<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Product Details</title>

    <!-- Boxicons CSS -->
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/productCard.css'])
    <script>
        function changeImage(element) {
            var mainProductImage = document.getElementById("main_product_image");
            mainProductImage.src = element.src;
        }
    </script>

    {{-- The source code I used for the card is from here : 
        https://bbbootstrap.com/snippets/embed/bootstrap-5-ecommerce-product-page-template-search-trasition-effect-36647071 --}}

</head>

<body>

    <header>

    </header>
    <main>
        @if (!empty($data))
            <div class="container mt-5 mb-5">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-sm-4">
                            <div class="d-flex flex-column justify-content-center">
                                <div class="main_image">
                                    <img src={{ $data->thumbnail }} id="main_product_image" width="350">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="p-3 right-side">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h3>{{ $data->title }}</h3>
                                    <span class="heart"><i class='bx bx-heart'></i>
                                    </span>
                                </div>
                                <div class="mt-2 pr-3 content">
                                    <p>{{ $data->description }}</p>
                                </div>
                                <div class="d-flex flex-row">
                                    <span class="badge text-bg-secondary"> {{ $data->rating }}
                                        <i class='bx bxs-star'></i>
                                    </span>
                                </div>
                                <div class="mt-2 d-flex flex-row">
                                    <span>
                                        <label class="fw-bold">Brand:</label> {{ $data->brand }}
                                    </span>
                                </div>
                                <div class="d-flex flex-row">
                                    <span>
                                        <label class="fw-bold">Category:</label> {{ $data->category }}
                                    </span>
                                </div>
                            </div>
                            <div class="thumbnail_images">
                                <ul id="thumbnail">
                                    @foreach ($data->images as $image)
                                        <li><img onclick="changeImage(this)" src={{ $image }} width="40">
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="d-flex flex-row">
                                <label class="fw-bold me-1">Price:</label>
                                <span class="text-decoration-line-through me-2">
                                    ${{ $data->price }}</span>
                                <span class="text-danger">
                                    ${{ $data->price * (1 - $data->discountPercentage / 100) }}</span>
                            </div>

                            <div class="d-flex flex-row">
                                <span>
                                    <label class="fw-bold">In Stock:</label> {{ $data->stock }}
                                </span>
                            </div>
                            <div class="buttons d-flex flex-row mt-5 gap-3"> <button class="btn btn-outline-dark">Buy
                                    Now</button> <button class="btn btn-dark">Add to Basket</button> </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </main>
    <footer></footer>
</body>

</html>
