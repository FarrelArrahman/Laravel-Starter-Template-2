@extends('admin.layouts.template')

@section('title')
Edit Example
@endsection

@section('sub-title')
<strong>{{ $example }}</strong>
@endsection

@section('content')
<!-- Basic Vertical form layout section start -->
<section id="basic-vertical-layouts">
    <div class="row match-height">
        <div class="col-md-12 col-24">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal" method="POST" action="{{ route('example.update', 0) }}" enctype="multipart/form-data">
                            <!-- @if($errors->any())
                            @foreach($errors->all() as $error)
                                <div>{{ $error }}</div>
                            @endforeach
                            @endif -->
                            @csrf
                            @method('PUT')
                            <div class="form-body">
                                    <div class="col-12 col-md-12">
                                        <div class="form-group">
                                            <label for="example-vertical">Example Field 1</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control @error('example') is-invalid @enderror"
                                                    aria-label="example" aria-describedby="example" name="example" value="{{ $example }}">
                                            </div>
                                            @error('example')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Save</button>
                                        <a href="{{ route('example.index') }}" class="btn btn-light-secondary me-1 mb-1">Back</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- // Basic Vertical form layout section end -->
@endsection

@section('js')
<script>
</script>
@endsection