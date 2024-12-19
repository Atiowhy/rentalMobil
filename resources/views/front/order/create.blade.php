<!DOCTYPE html>
<html lang="en">

<head>
    <title>Carbook - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/front/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/front/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/front/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/front/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/front/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/style.css') }}">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script> --}}
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <div class="d-flex justify-content-start" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="{{ route('/') }}" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="{{ route('carData.index') }}" class="nav-link">Cars</a></li>
                </ul>
            </div>
            <a class="navbar-brand" href="index.html">Car<span>Book</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

        </div>
    </nav>
    <!-- END nav -->

    <div class="hero-wrap ftco-degree-bg" style="background-image: url({{ asset('assets/front/images/bg_1.jpg') }});"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
                <div class="col-lg-8 ftco-animate">
                    <div class="text w-100 text-center mb-md-5 pb-md-5">
                        <h1 class="mb-4">Fast &amp; Easy Way To Rent A Car</h1>
                        <p style="font-size: 18px;">A small river named Duden flows by their place and supplies it with
                            the necessary regelialia. It is a paradisematic country, in which roasted parts</p>
                        <a href="https://vimeo.com/45830194"
                            class="icon-wrap popup-vimeo d-flex align-items-center mt-4 justify-content-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="ion-ios-play"></span>
                            </div>
                            <div class="heading-title ml-5">
                                <span>Easy steps for renting a car</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-no-pt bg-light">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-12 featured-top">
                    <div class="row no-gutters">
                        <div class="col-md-12 d-flex align-items-center">
                            <div class="services-wrap rounded-right w-100">
                                <h3 class="heading-section mb-4">Better Way to Rent Your Perfect Cars</h3>
                                <form action="{{ route('order.store') }}" method="post">
                                    @csrf
                                    <div class="row d-flex mb-4">
                                        <div class="col-md-6 align-self-stretch ftco-animate">
                                            <label for="" class="form-lable">Transaction Code</label>
                                            <input type="text" class="form-control" value="{{ $order_code }}"
                                                name="trans_code" readonly>
                                        </div>
                                        <div class="col-md-6 align-self-stretch ftco-animate">
                                            <label for="" class="form-lable">Transaction Date</label>
                                            <input type="text" class="form-control" name="trans_date"
                                                value="{{ $transDate }}" readonly>
                                        </div>
                                    </div>
                                    <div class="row d-flex mb-4">
                                        <div class="col-md-6 align-self-stretch ftco-animate">
                                            <label for="" class="form-lable">Date Rental</label>
                                            <input type="date" class="form-control" name="date_rented">
                                        </div>
                                        <div class="col-md-6 align-self-stretch ftco-animate">
                                            <label for="" class="form-lable">Date Return</label>
                                            <input type="date" class="form-control" name="date_returned">
                                        </div>
                                    </div>
                                    <div class="row d-flex">
                                        <div class="col-md-6 align-self-stretch ftco-animate">
                                            <label for="" class="form-lable">Pick Your Car</label>
                                            <select id="id_car" class="form-control">
                                                <option value="">Choose Your Car</option>
                                                @foreach ($dataCars as $car)
                                                    <option value="{{ $car->id }}"
                                                        data-price="{{ $car->price }}">{{ $car->car_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6 align-self-stretch ftco-animate">
                                            <label for="" class="form-lable">Your Name</label>
                                            <select name="id_customer" class="form-control" id="">
                                                <option value="">Set Your Name</option>
                                                @foreach ($customers as $data)
                                                    <option value="{{ $data->id }}">
                                                        {{ $data->customer_name }}</option>
                                                @endforeach
                                            </select>
                                            <p class="fst-italic">If your name doesn't exist, please <a
                                                    href="{{ route('regisCustomer') }}">Register</a> first</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="" class="form-label">Qty</label>
                                            <input type="number" name="qty" class="form-control qty">
                                        </div>

                                    </div>
                                    <div class="btn-cta mt-3 d-flex justify-content-end">
                                        <button class="btn btn-primary add-row">Tambah Transaksi</button>
                                    </div>
                                    <div class="table-responsive mt-3 mb-3">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Nama Mobil</th>
                                                    <th>Harga</th>
                                                    <th>Qty</th>
                                                    <th>Subtotal</th>
                                                </tr>
                                            </thead>
                                            <tbody class="tbody-parent">

                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="3" align="right">Total</td>
                                                    <td>
                                                        <input type="number" name="total_amount"
                                                            class="total-harga form-control" readonly>
                                                        <input type="hidden" name="status" value="0" readonly>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3" align="right">Bayar</td>
                                                    <td>
                                                        <input type="number" name="order_pay"
                                                            class="bayar form-control">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3" align="right">kembalian</td>
                                                    <td>
                                                        <input type="number" name="order_change"
                                                            class="bayar form-control">
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>


    <section class="ftco-section ftco-no-pt bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <span class="subheading">What we offer</span>
                    <h2 class="mb-2">Feeatured Vehicles</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="box-card d-flex justify-content-center">
                        @foreach ($dataCars as $data)
                            <div class="card m-3 w-25 d-flex">
                                <div class="card-body">
                                    <div class="img rounded d-flex align-items-end">
                                        <img src="{{ asset('images/' . $data->foto) }}" class="img-fluid rounded"
                                            alt="">
                                    </div>
                                    <div class="text">
                                        <h2 class="mb-0"><a href="#">{{ $data->car_name }}</a></h2>
                                        <div class="d-flex mb-3">
                                            <div class="info">
                                                <span class="cat">{{ $data->merk }}</span>
                                                <p>{{ $data->year }}</p>
                                            </div>
                                            <p class="price ml-auto">Rp.{{ $data->price }} <span>/day</span></p>
                                        </div>
                                        <p class="d-flex mb-0 d-block">
                                            {{-- <a href="#" class="btn btn-primary py-2 mr-1">Book now</a> --}}
                                            <a href="{{ route('front.show', $data->id) }}"
                                                class="btn btn-secondary py-2 ml-1">Details</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        {{ $dataCars }}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2"><a href="#" class="logo">Car<span>book</span></a></h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Information</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">About</a></li>
                            <li><a href="#" class="py-2 d-block">Services</a></li>
                            <li><a href="#" class="py-2 d-block">Term and Conditions</a></li>
                            <li><a href="#" class="py-2 d-block">Best Price Guarantee</a></li>
                            <li><a href="#" class="py-2 d-block">Privacy &amp; Cookies Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Customer Support</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">FAQ</a></li>
                            <li><a href="#" class="py-2 d-block">Payment Option</a></li>
                            <li><a href="#" class="py-2 d-block">Booking Tips</a></li>
                            <li><a href="#" class="py-2 d-block">How it works</a></li>
                            <li><a href="#" class="py-2 d-block">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St.
                                        Mountain View, San Francisco, California, USA</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2
                                            392 3929 210</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span
                                            class="text">info@yourdomain.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i
                            class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com"
                            target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('assets/front/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('assets/front/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/aos.js') }}"></script>
    <script src="{{ asset('assets/front/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('assets/front/js/jquery.timepicker.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/scrollax.min.js') }}"></script>
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script> --}}
    <script src="{{ asset('assets/front/js/google-map.js') }}"></script>
    <script src="{{ asset('assets/front/js/main.js') }}"></script>

    <script>
        $('.add-row').click(function(e) {
            let carName = $('#id_car').find('option:selected').text(),
                id_car = $('#id_car').val(),
                price = $('#id_car').find('option:selected').data('price'),
                qty = $('.qty').val(),
                subtotal = parseInt(price) * parseInt(qty)
            e.preventDefault();
            // alert('yow')

            let newRow = ""
            newRow += "<tr>"
            newRow += "<td class='p-3'>" + carName +
                "<input type='hidden' name='id_car[]' class='id_car form-control' value='" + id_car +
                "' /></td>"
            newRow += "<td class='p-3'>" + price +
                "<input type='hidden' name='price[]' class='price form-control' value='" + price +
                "' /></td>"
            newRow += "<td class='p-3'>" + qty +
                "<input type='hidden' class='form-control' name='qty[]' id='qty' value='" + qty +
                "'/></td>"
            newRow += "<td class='p-3'>" + subtotal +
                "<input type='hidden' name='subtotal[]' class='subtotal form-control' value='" + subtotal +
                "' /></td>"
            newRow += "</tr>"

            let tbody = $('.tbody-parent')
            tbody.append(newRow)

            let total = 0;
            $('.subtotal').each(function() {
                let totalHarga = parseFloat($(this).val()) || 0
                total += totalHarga
            })
            $('.total-harga').val(total)

            $('#id_car').val('')
            $('.qty').val('')

            $('input[name="order_pay"]').on('input', function() {
                let total = parseFloat($('.total-harga').val()) || 0;
                let payment = parseFloat($(this).val()) || 0;
                let change = payment - total;
                $('input[name="order_change"]').val(change >= 0 ? change : 0);
            });
        })
    </script>
</body>

</html>
