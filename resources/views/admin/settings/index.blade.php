@extends('admin.layouts.master')
{{-- page title --}}
@section('title', 'Admin | Settings')

@section('styles')
    <style>
        .card {
            background-color: #fff;
            border-radius: 10px;
            border: none;
            position: relative;
            margin-bottom: 30px;
            box-shadow: 0 0.46875rem 2.1875rem rgba(90, 97, 105, 0.1), 0 0.9375rem 1.40625rem rgba(90, 97, 105, 0.1), 0 0.25rem 0.53125rem rgba(90, 97, 105, 0.12), 0 0.125rem 0.1875rem rgba(90, 97, 105, 0.1);
        }

        .l-bg-cherry {
            background: linear-gradient(to right, #493240, #f09) !important;
            color: #fff;
        }

        .l-bg-blue-dark {
            background: linear-gradient(to right, #373b44, #4286f4) !important;
            color: #fff;
        }

        .l-bg-green-dark {
            background: linear-gradient(to right, #0a504a, #38ef7d) !important;
            color: #fff;
        }

        .l-bg-orange-dark {
            background: linear-gradient(to right, #d8db03ee, #c48e3c) !important;
            color: #fff;
        }

        .card .card-statistic-3 .card-icon-large .fas,
        .card .card-statistic-3 .card-icon-large .far,
        .card .card-statistic-3 .card-icon-large .fab,
        .card .card-statistic-3 .card-icon-large .fal {
            font-size: 110px;
        }

        .card .card-statistic-3 .card-icon {
            text-align: center;
            line-height: 50px;
            margin-left: 15px;
            color: #000;
            position: absolute;
            right: -5px;
            top: 20px;
            opacity: 0.1;
        }

        .l-bg-cyan {
            background: linear-gradient(135deg, #289cf5, #84c0ec) !important;
            color: #fff;
        }

        .l-bg-orange {
            background: linear-gradient(to right, #e4820c, #977034) !important;
            color: #fff;
        }

        a{
            font-size: 1.1rem;
            color: rgba(51, 145, 240, 0.74);
            text-decoration: none;

        }
        .dark-link{
            font-size: 1.1.rem;
            color: rgb(0, 127, 253);
            text-decoration: none;
        }
        .dark-link:hover{
            color: rgba(44, 141, 238, 0.87);
        }
        l-bg-blue-dark{
            background: linear-gradient(to right, #05fddcee, #09549b83) !important;
            color: #fff;
        }

    </style>
@endsection


{{-- page header --}}
@section('content-head')
    Website Settings
@endsection

{{-- page content --}}
@section('content')
    {{-- <div class="col-md-10 col-xl-10 col-lg-10">
        <div class="row ">
            <div class="col-xl-3 col-lg-3 col-md-4 ">
                <div class="card l-bg-cherry">
                    <div class="card-statistic-3 p-4">
                        <div class="card-icon card-icon-large"><i class="fas fa-shopping-cart"></i></div>
                        <div class="mb-4">
                            <h5 class="card-title mb-0">Home Page Setting</h5>
                        </div>
                        <div class="row align-items-center mb-2 d-flex">
                            <div class="col-8">
                                <a href="{{ route('site-setting.create') }}">click here</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 ">
                <div class="card l-bg-orange-dark">
                    <div class="card-statistic-3 p-4">
                        <div class="card-icon card-icon-large"><i class="fas fa-dollar-sign"></i></div>
                        <div class="mb-4">
                            <h5 class="card-title mb-0">RentList Setting</h5>
                        </div>
                        <div class="row align-items-center mb-2 d-flex">
                            <div class="col-8">
                                <a href="{{ route('rent.settings') }}" class="dark-link">click here</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 ">
                <div class="card l-bg-blue-dark">
                    <div class="card-statistic-3 p-4">
                        <div class="card-icon card-icon-large"><i class="fas fa-dollar-sign"></i></div>
                        <div class="mb-4">
                            <h5 class="card-title mb-0">Reviews Setting</h5>
                        </div>
                        <div class="row align-items-center mb-2 d-flex">
                            <div class="col-8">
                                <a href="{{ route('review.settings') }}" class="dark-link">click here</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
