@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <h3 class="text-center my-4">POST ENQUIRY</h3>
                <form action="{{ route('enquiries.store') }}" method="POST" name="form2" enctype="multipart/form-data">
                    @csrf;
                    <div class="row mb-3">
                        <label for="Subject" class="col-md-3 col-form-label text-md-end">{{ __('Subject:') }}</label>
                        <div class="col-md-7">
                            <input id="subject" type="text" class="form-control" name="subject" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="Description" class="col-md-3 col-form-label text-md-end">{{ __('Description:') }}</label>
                        <div class="col-md-7">
                            <textarea id="description" rows="5" type="text" class="form-control" name="description" required> </textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <center><button type="submit" class="btn btn-primary" name="submit">Submit</button></center>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
