@extends('admin.layouts.main')

@section('title',__('admin.create-urls'))

@section('content')
    @include('admin.includes.title')
    @include('admin.includes.error')
    <form action="{{ route('urls.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label>{{ __('admin.urls-url_site') }}</label>
            <input type="text" class="form-control" name="url_site" value="{{ old('url_site') }}"
                   placeholder="{{ __('admin.urls-enter-url_site') }}" required>
        </div>

        <fieldset disabled>
            <div class="form-group">
                <label>{{ __('admin.urls-views') }}</label>
                <input type="text" class="form-control" name="url_site" value="0" required>
            </div>
        </fieldset>

        <div class="form-group">
            <label>{{ __('admin.status') }}</label>
            <select class="form-control" name="status" required>
                <option value="1">{{ __('admin.enabled') }}</option>
                <option value="0">{{ __('admin.disabled') }}</option>
            </select>
        </div>

        <button class="btn btn-lg btn-original btn-block" type="submit">{{ __('admin.create') }}</button>
    </form>
@endsection