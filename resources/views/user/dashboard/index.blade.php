{{-- Extends layout --}}
@extends('layout.default')

@section('title', 'Dashboard')

{{-- Content --}}
@section('content')
    <div class="d-flex flex-row ">
        <!--begin::Layout-->
        <div class="flex-row-fluid ml-lg-8">
            <!--begin::Card-->
            <div class="card card-custom card-stretch gutter-b" style="background-color:black;">
                <div class="card-body">
                    <!--begin::Engage Widget 15-->
                    <div class="card card-custom gutter-b bg-dark">
                        <div class="card-body rounded d-flex bgi-no-repeat bgi-position-y-center bgi-position-x-left bgi-size-cover "
                        style="background-image: url({{asset('media/bg/searchbar.png')}})">
                                <!--begin::Form-->
                            <form class="d-flex flex-center my-10 py-2 px-6 w-100 bg-white rounded">

                                <span class="svg-icon svg-icon-lg svg-icon-primary">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            width="24px" height="24px" viewBox="0 0 24 24"
                                            version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none"
                                            fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24"
                                                                                height="24"></rect>
                                                                        <path
                                                                            d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                                            fill="#000000" fill-rule="nonzero"
                                                                            opacity="0.3"></path>
                                                                        <path
                                                                            d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                                            fill="#000000"
                                                                            fill-rule="nonzero"></path>
                                                                    </g>
                                                                </svg>
                                    <!--end::Svg Icon-->
                                                            </span>
                                <input type="text" class="form-control border-0 font-weight-bold pl-2"
                                        placeholder="Search Goods" name="q" value="{{request('q')}}">
                            </form>
                                <!--end::Form-->
                        </div>
                    </div>
                    <!--end::Engage Widget 15-->
                    <!--begin::Section-->
                    <div class="row">
                        @forelse($products as $product)
                            <!--begin::Product-->
                            <div class="col-md-2 col-lg-10 col-xl-3" >
                                <div class="card card-custom gutter-b card-stretch" style="background-color:#3D3D3D;" >
                                    <div class="card-body d-flex flex-column rounded justify-content-between text-center" style="background-color:#3D3D3D;">
                                        <div class="text-center rounded mb-4">
                                            <img src="{{ asset(Storage::url($product->photo)) }}" class="mw-100 w-200px">
                                        </div>
                                        <div>
                                            <h4 class="font-size-h4 ">
                                                <a href="{{route('user.products.show', $product->slug)}}"
                                                   class="text-light font-weight-bolder">{{$product->name}}</a>
                                            </h4>
                                            <div class="font-size-h6 text-light font-weight-bolder">
                                                Rp{{number_format($product->price)}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Product-->
                        @empty
                            <p>Products not found</p>
                        @endforelse
                    </div>
                    <!--end::Section-->
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Layout-->
    </div>
@endsection
