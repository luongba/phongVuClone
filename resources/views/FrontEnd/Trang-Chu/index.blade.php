@extends('FrontEnd.layout')
@section('content')
    <hero-slider></hero-slider>
    @php
        $banners = [
            [
               "id" => 1,
               "image" => "https://lh3.googleusercontent.com/RUah6nLmEFFnGMxhxfaG5Rf4HofTU6NBToJKSX-YvsyURIZt13Hys-4-ckC1RpafU4IX12vjC2I9qx8stii5E5DxY448r2jHZw=w308-rw"
            ],
            [
               "id" => 2,
               "image" => "https://lh3.googleusercontent.com/ZcLDF59_DzKbpCDmUmL2Dpyu9dyLu85LV3qFWWO0mSzrPFruKjhhd3RAr8LlhayjQeZd3xTDhG9GAGhYal1scn1AQaSraMmVmw=w308-rw"
            ],
            [
               "id" => 3,
               "image" => "https://lh3.googleusercontent.com/WRPx5IU-zXfCOAxiuZ5kXLkgdbM6m3LgY8OQCQ5WXMpk67RcazMiseg92f4r1EgKe1NJkVkhhBP2ZqmzuiJuHugNNAL4rmip=w308-rw"
            ],
            [
               "id" => 4,
               "image" => "https://lh3.googleusercontent.com/emiOAdOg2qxqYHNwvT-vOzJ50jd7xgMiiecXah9OJO68MsikovAbM11zALX8xqfR_mGQ0a-OP71xfRqnZloC-dIlNuGt97lp=w308-rw"
            ],
        ];
        $brands = [
            [
               "id" => 1,
               "image" => "https://lh3.googleusercontent.com/IqFtu_Hq7dQkOuTjKwVTjKV5Z1qK3FsuX3yX6Ab30i_yXZ2B1dFs8uQwQ9zgTt3UZts3RnuYx-ujvQW0i5Ox2UDhrqxeehI=w400-rw",
               "name"=> "Asus"
            ],
            [
               "id" => 2,
               "image" => "https://lh3.googleusercontent.com/s2A1-31VtturT9H1hX0UccGw7yGufXD2NZFJkiNt-tTCx2xZO80lCt21b8oY3AYWmi3aUuMQIIySp623gbQoN22Wm_YvKvnB=w400-rw",
                "name"=> "Lenovo"
            ],
            [
               "id" => 3,
               "image" => "https://lh3.googleusercontent.com/Y8Y_q1dMIBq4VaovFtS-eJvQ8oqyVUjIcdxZDKQBKHMBjEP7E2iU6GE10Sjq0AdLPlmTw0NGTBpnq34SlUnkFxCS3X3Nag4=w400-rw",
                "name"=> "Microsoft"
            ],
            [
               "id" => 4,
               "image" => "https://lh3.googleusercontent.com/4YXRxEqxqmoY8EPliJtNkbcqQCUe4TPTJyAZ_MIsb8JStdwwf3PInwC0SABKuoZiHJC7dJY6Ex1JqS4bpKo=w400-rw",
                "name"=> "HP"
            ],
        ];
    @endphp
    <div class="mt-4">
        <banner-list :banners="{{  json_encode($banners) }}"/>
    </div>
    <div class="mt-4">
        <product-category
            name="Laptop"
            bg-desktop="./images/bg/bg-laptop.png"
            bg-tablet="./images/bg/ffflux.svg"/>
    </div>
    <div class="mt-4">
        <product-category
            name="PC - Linh Kiện"
            bg-desktop="./images/bg/bg-pc.png"
            bg-tablet="./images/bg/ffflux2.svg"/>
    </div>
    <div class="mt-4">
        <product-category
            name="Điện máy"
            bg-desktop="./images/bg/bg-dienmay.png"
            bg-tablet="./images/bg/ffflux3.svg"/>
    </div>
    <div class="mt-4">
        <brand-list :brands="{{  json_encode($brands) }}"/>
    </div>
    <div class="mt-4">
        <product-list name="Laptop"/>
    </div>
    <div class="mt-4">
        <product-list name="Điện máy - Tivi, Tủ lạnh, Điều hòa..."/>
    </div>
    <div class="mt-4">
        <product-list name="Dành cho bạn"/>
    </div>
@endsection

