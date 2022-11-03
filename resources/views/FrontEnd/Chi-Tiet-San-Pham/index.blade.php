@extends('FrontEnd.layout')
@section('content')
    @php
        $crumbs = [
            [
                'id' => 1,
                'name' => 'Trang chủ',
                'link' =>"#"
            ],
            [
                'id' => 2,
                'name' => 'Laptop Lenovo Slim 7 Pro 14IHU5 O 82NH00BCVN (14" Intel Core i5-11320H/16GB/512GB SSD/Onboard/Windows 11 Home/1.4kg)',
                'link' =>"#"
            ],
        ];
    @endphp
    <bread-crumb :crumbs="{{json_encode($crumbs)}}"></bread-crumb>
    <div class="container mx-auto">
        <chi-tiet-san-pham/>
    </div>
    
@endsection
