<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Top Up - Futuristic</title>
    <link rel="stylesheet" href="{{asset('asset/bootstrap-5.1.3-dist/css/bootstrap.min.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
    <style>
               body {
            font-family: 'Orbitron', sans-serif;
            color: #fff;
            background: #0d0d0d url('futuristic-bg-pattern.jpg') repeat;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        header {
            background: linear-gradient(90deg, #000428, #004e92);
            padding: 15px 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
            transition: background 0.3s, padding 0.3s;
        }

        header.scrolled {
            background: linear-gradient(90deg, #000428, #004e92);
            padding: 10px 0;
        }

        header .navbar-brand {
            color: #ffd700;
            font-size: 2.2em;
            font-weight: 700;
            letter-spacing: 1px;
            text-shadow: 0 0 10px #ffd700;
        }

        header .navbar-nav {
            margin-left: auto;
        }

        header .navbar-nav .nav-link {
            color: #fff;
            font-weight: bold;
            transition: color 0.3s, transform 0.3s;
            text-shadow: 0 0 5px #ffd700;
        }

        header .navbar-nav .nav-link:hover {
            color: #ffd700;
            transform: scale(1.1);
        }

        .hero {
            background: url('futuristic-hero-bg.jpg') no-repeat center center/cover;
            color: #fff;
            text-align: center;
            padding: 200px 20px;
            position: relative;
            z-index: 1;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            z-index: -1;
        }

        .hero h2 {
            font-size: 3.5em;
            margin-bottom: 15px;
            text-shadow: 0 0 20px #ffd700, 0 0 30px #ffd700;
            animation: glowText 2s infinite alternate;
        }

        @keyframes glowText {
            from {
                text-shadow: 0 0 20px #ffd700, 0 0 30px #ffd700, 0 0 40px #ffd700, 0 0 50px #ffd700;
            }

            to {
                text-shadow: 0 0 40px #ffd700, 0 0 50px #ffd700, 0 0 60px #ffd700, 0 0 70px #ffd700;
            }
        }

        .hero p {
            font-size: 1.3em;
            margin-bottom: 40px;
            animation: fadeIn 2s ease-in;
        }

        .btn-primary {
            background: linear-gradient(45deg, #ffd700, #ff4500);
            border-color: #ffd700;
            color: #000;
            font-size: 1.2em;
            padding: 12px 25px;
            border-radius: 50px;
            transition: background 0.3s, transform 0.3s;
        }

        .btn-primary:hover {
            background: linear-gradient(45deg, #ff4500, #ffd700);
            transform: scale(1.1);
        }

        .featured-games, .featured-products {
            padding: 60px 20px;
            background: linear-gradient(180deg, #1a1a1a, #000428);
            position: relative;
            z-index: 1;
        }

        .featured-games::before, .featured-products::before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            width: 100%;
            height: 10px;
            background: linear-gradient(90deg, transparent, #ffd700, transparent);
            transform: translateX(-50%);
        }

        .featured-games h2, .featured-products h2 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 2.8em;
            color: #ffd700;
            text-shadow: 0 0 20px #ffd700;
        }

        .game-item, .product-item {
            background: #2a2a2a;
            border: 2px solid #ffd700;
            border-radius: 20px;
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
            position: relative;
            padding: 20px;
            text-align: center;
            height: 100%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            margin-bottom: 20px;
        }

        .game-item:hover, .product-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
            background: linear-gradient(180deg, #2a2a2a, #000428);
        }

        .game-item img, .product-item img {
            width: 100%;
            height: auto;
            border-radius: 15px;
            transition: transform 0.3s, filter 0.3s;
        }

        .game-item img:hover, .product-item img:hover {
            transform: scale(1.1);
            filter: brightness(1.2);
        }

        .game-item h3, .product-item h3 {
            margin: 15px 0;
            font-size: 1.8em;
            color: #ffd700;
        }

        footer {
            background: linear-gradient(90deg, #000428, #004e92);
            color: #fff;
            padding: 15px 0;
            text-align: center;
            border-top: 2px solid #ffd700;
        }

        footer a {
            color: #ffd700;
            text-decoration: none;
            transition: text-shadow 0.3s;
        }

        footer a:hover {
            text-shadow: 0 0 5px #ffd700;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }
    
    </style>
</head>

<body>

    <header id="navbar">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="#">EFDG Top-Up</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Games</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section class="hero d-flex align-items-center justify-content-center">
            <div class="hero-content text-center">
                <h2>Welcome to EFDG Top-up</h2>
                <p>Get ready to top-up your favorite games with our futuristic platform</p>
                <a href="#" class="btn btn-primary">Get Started</a>
            </div>
        </section>

        <section class="featured-games">
            <div class="container">
                <h2>Popular Games</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="game-item">
                            <img src="storage/image/image.png" alt="Mobile Legends">
                            <h3>Mobile Legends</h3>
                            <p>Brief description of Mobile Legends.</p>
                            <a href="{{ route('transaction.create') }}" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="game-item">
                            <img src="storage/image/image2.png" alt="Free Fire">
                            <h3>Free Fire</h3>
                            <p>Brief description of Free Fire.</p>
                            <a href="{{ route('transaction.create') }}" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="game-item">
                            <img src="storage/image/image3.png" alt="PUBG Mobile">
                            <h3>PUBG Mobile</h3>
                            <p>Brief description of PUBG Mobile.</p>
                            <a href="{{ route('transaction.create') }}" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="featured-products">
            <div class="container">
                <h2>Top-Up Packages</h2>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="product-item p-3 border">
                            <p>mobile legends</p>
                            <img src="storage/image/OIP.jpeg" alt="Diamond Package">
                            <h3>Diamond Package</h3>
                            <p>Get the best value for your diamonds!</p>
                            <p><strong>Price:</strong> $9.99</p>
                            <a href="{{ route('transaction.create') }}" class="btn btn-primary">Buy Now</a>

                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="product-item p-3 border">
                            <p>mobile legends</p>
                            <img src="storage/image/OIP.jpeg" alt="Gold Package">
                            <h3>Gold Package</h3>
                            <p>Boost your game with gold coins.</p>
                            <p><strong>Price:</strong> $19.99</p>
                            <a href="{{ route('transaction.create') }}" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="product-item p-3 border">
                            <p>mobile legends</p>
                            <img src="storage/image/OIP.jpeg" alt="Platinum Package">
                            <h3>Platinum Package</h3>
                            <p>Ultimate package for pro players.</p>
                            <p><strong>Price:</strong> $29.99</p>
                            <a href="{{ route('transaction.create') }}" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="product-item p-3 border">
                            <p>free fire</p>
                            <img src="storage/image/OIP (2).jpeg" alt="Diamond Package">
                            <h3>Diamond Package</h3>
                            <p>Get the best value for your diamonds!</p>
                            <p><strong>Price:</strong> $9.99</p>
                            <a href="{{ route('transaction.create') }}" class="btn btn-primary">Buy Now</a>

                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="product-item p-3 border">
                            <p>free fire</p>
                            <img src="storage/image/OIP (2).jpeg" alt="Gold Package">
                            <h3>Gold Package</h3>
                            <p>Boost your game with gold coins.</p>
                            <p><strong>Price:</strong> $19.99</p>
                            <a href="{{ route('transaction.create') }}" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="product-item p-3 border">
                            <p>free fire</p>
                            <img src="storage/image/OIP (2).jpeg" alt="Platinum Package">
                            <h3>Platinum Package</h3>
                            <p>Ultimate package for pro players.</p>
                            <p><strong>Price:</strong> $29.99</p>
                            <a href="{{ route('transaction.create') }}" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="product-item p-3 border">
                            <p>PUBG</p>
                            <img src="storage/image/OIP (1).jpeg" alt="Diamond Package">
                            <h3>Diamond Package</h3>
                            <p>Get the best value for your diamonds!</p>
                            <p><strong>Price:</strong> $9.99</p>
                            <a href="{{ route('transaction.create') }}" class="btn btn-primary">Buy Now</a>

                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="product-item p-3 border">
                            <p>PUBG</p>
                            <img src="storage/image/OIP (1).jpeg" alt="Gold Package">
                            <h3>Gold Package</h3>
                            <p>Boost your game with gold coins.</p>
                            <p><strong>Price:</strong> $19.99</p>
                            <a href="{{ route('transaction.create') }}" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="product-item p-3 border">
                            <p>PUBG</p>
                            <img src="storage/image/OIP (1).jpeg" alt="Platinum Package">
                            <h3>Platinum Package</h3>
                            <p>Ultimate package for pro players.</p>
                            <p><strong>Price:</strong> $29.99</p>
                            <a href="{{ route('transaction.create') }}" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="product-item p-3 border">
                            <p>AOV</p>
                            <img src="storage/image/OIP (3).jpeg" alt="Diamond Package">
                            <h3>Diamond Package</h3>
                            <p>Get the best value for your diamonds!</p>
                            <p><strong>Price:</strong> $9.99</p>
                            <a href="{{ route('transaction.create') }}" class="btn btn-primary">Buy Now</a>

                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="product-item p-3 border">
                            <p>AOV</p>
                            <img src="storage/image/OIP (3).jpeg" alt="Gold Package">
                            <h3>Gold Package</h3>
                            <p>Boost your game with gold coins.</p>
                            <p><strong>Price:</strong> $19.99</p>
                            <a href="{{ route('transaction.create') }}" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="product-item p-3 border">
                            <p>AOV</p>
                            <img src="storage/image/OIP (3).jpeg" alt="Platinum Package">
                            <h3>Platinum Package</h3>
                            <p>Ultimate package for pro players.</p>
                            <p><strong>Price:</strong> $29.99</p>
                            <a href="{{ route('transaction.create') }}" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="product-item p-3 border">
                            <p>HOK</p>
                            <img src="storage/image/OIP (4).jpeg" alt="Diamond Package">
                            <h3>Diamond Package</h3>
                            <p>Get the best value for your diamonds!</p>
                            <p><strong>Price:</strong> $9.99</p>
                            <a href="{{ route('transaction.create') }}" class="btn btn-primary">Buy Now</a>

                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="product-item p-3 border">
                            <p>HOK</p>
                            <img src="storage/image/OIP (4).jpeg" alt="Gold Package">
                            <h3>Gold Package</h3>
                            <p>Boost your game with gold coins.</p>
                            <p><strong>Price:</strong> $19.99</p>
                            <a href="{{ route('transaction.create') }}" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="product-item p-3 border">
                            <p>HOK</p>
                            <img src="storage/image/OIP (4).jpeg" alt="Platinum Package">
                            <h3>Platinum Package</h3>
                            <p>Ultimate package for pro players.</p>
                            <p><strong>Price:</strong> $29.99</p>
                            <a href="{{ route('transaction.create') }}" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="product-item p-3 border">
                            <p>Genshin</p>
                            <img src="storage/image/download.jpeg" alt="Diamond Package">
                            <h3>Diamond Package</h3>
                            <p>Get the best value for your diamonds!</p>
                            <p><strong>Price:</strong> $9.99</p>
                            <a href="{{ route('transaction.create') }}" class="btn btn-primary">Buy Now</a>

                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="product-item p-3 border">
                            <p>Genshin</p>
                            <img src="storage/image/download.jpeg" alt="Gold Package">
                            <h3>Gold Package</h3>
                            <p>Boost your game with gold coins.</p>
                            <p><strong>Price:</strong> $19.99</p>
                            <a href="{{ route('transaction.create') }}" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="product-item p-3 border">
                            <p>Genshin</p>
                            <img src="storage/image/download.jpeg" alt="Platinum Package">
                            <h3>Platinum Package</h3>
                            <p>Ultimate package for pro players.</p>
                            <p><strong>Price:</strong> $29.99</p>
                            <a href="{{ route('transaction.create') }}" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 EFDG Top-Up. All rights reserved.</p>
        <p><a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
    </footer>

    <script src="{{asset('asset/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js')}}"></script>
    <script>
        window.addEventListener('scroll', function () {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
</body>

</html
