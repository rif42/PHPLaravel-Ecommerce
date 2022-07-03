@extends('layout.default')

@section('title', 'Edit Setting: ' . $setting->title)

@section('content')
<div class="card card-custom card-sticky mt-15" id="kt_page_sticky_card">
    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">
                Edit Setting: {{ $setting->title }} <i class="mr-2"></i>
                <small class="">fill the form below</small>
            </h3>
        </div>
        <div class="card-toolbar">
            <a href="{{ url()->previous() }}" class="btn btn-light-primary font-weight-bolder mr-2">
                <i class="ki ki-long-arrow-back icon-sm"></i>
                Back
            </a>
            <div class="btn-group">
                <button type="submit" form="kt_form" class="btn btn-primary font-weight-bolder">
                    <i class="ki ki-check icon-sm"></i>
                    Submit
                </button>
            </div>
        </div>
    </div>
    <div class="card-body">
        <!--begin::Form-->
        <form class="form" id="kt_form" method="POST" action="{{ route('admin.settings.update', $setting->id) }}">
            @method('PATCH')
            @csrf

            <div class="row">
                <div class="col-xl-2"></div>
                <div class="col-xl-8">
                    <div class="my-5">
                        <h3 class=" text-dark font-weight-bold mb-10">Setting Info:</h3>
                        <div class="form-group row">
                            <label class="col-3">Slug</label>
                            <div class="col-9">
                                <input class="form-control form-control-solid" type="text" name="slug"
                                    value="{{ $setting->slug }}" disabled />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-3">Name</label>
                            <div class="col-9">
                                <input class="form-control form-control-solid" type="text" name="title"
                                    value="{{ $setting->title }}" disabled />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-3">Value</label>
                            <div class="col-9">
                                <textarea type="text" name="value" class="form-control @error('value') is-invalid @enderror" id="value" rows="3" required>{{ old('value', $setting->value) }}</textarea>
                                @error('value')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2"></div>
                </div>
            </div>
        </form>
        <!--end::Form-->
    </div>
</div>
@endsection

@section('scripts')
{{-- page scripts --}}
<script src="{{ asset('js/pages/admin/settings/edit.js') }}" type="text/javascript"></script>
@endsection
