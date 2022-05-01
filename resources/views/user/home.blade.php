@extends('user.master')
@section('body')
    <div class="row tab-manu">
        <div class="col active">Esittely</div>
        <div class="col">Menu & Tilaa</div>
        <div class="col">Varaa pöytä</div>
        <div class="col">Arvostelut</div>
    </div>
    <div class="row mt-4">
        <div class="card">
            <h5 class="card-header">Tietoa terassista</h5>
            <div class="card-body">
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sit amet mi massa.
                    Pellentesque quis arcu egestas, lobortis lectus placerat, accumsan turpis. Suspendisse auctor sem a quam
                    tincidunt, at lobortis urna gravida. Pellentesque sapien purus, accumsan ut magna luctus, commodo
                    ultrices lectus. Quisque ut dolor nisi. Morbi rutrum eleifend turpis. Donec sodales volutpat ligula a
                    faucibus. Aenean sem elit, tempus imperdiet condimentum ac, pharetra a leo. Maecenas scelerisque tellus
                    id convallis</p>

            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="card">
            <h5 class="card-header">Ominaisuudet</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="content text-start">
                            <img src="{{ asset('img/circle-small.png') }}" / alt="">
                            <p>WIFI-verkko</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="content text-start">
                            <img src="{{ asset('img/circle-small.png') }}" / alt="">
                            <p>WIFI-verkko</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="content text-start">
                            <img src="{{ asset('img/circle-small.png') }}" / alt="">
                            <p>WIFI-verkko</p>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col">
                        <div class="content text-start">
                            <img src="{{ asset('img/circle-small.png') }}" / alt="">
                            <p>WIFI-verkko</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="content text-start">
                            <img src="{{ asset('img/circle-small.png') }}" / alt="">
                            <p>WIFI-verkko</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="content text-start">
                            <img src="{{ asset('img/circle-small.png') }}" / alt="">
                            <p>WIFI-verkko</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="card">
            <h5 class="card-header">Ominaisuudet</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="content text-start">
                            <img src="{{ asset('img/circle-small.png') }}" / alt="">
                            <p>WIFI-verkko</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="content text-start">
                            <img src="{{ asset('img/circle-small.png') }}" / alt="">
                            <p>WIFI-verkko</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="content text-start">
                            <img src="{{ asset('img/circle-small.png') }}" / alt="">
                            <p>WIFI-verkko</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="card">
            <h5 class="card-header">Ominaisuudet</h5>
            <div class="card-body">

                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1737.6221882978507!2d-98.48650795000005!3d29.421653200000023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x865c58aa57e6a56f%3A0xf08a9ad66f03e879!2sHenry+B.+Gonzalez+Convention+Center!5e0!3m2!1sen!2sus!4v1393884854786"
                    width="600" height="450" frameborder="0" style="border:0"></iframe>

            </div>
        </div>
    </div>
@endsection
