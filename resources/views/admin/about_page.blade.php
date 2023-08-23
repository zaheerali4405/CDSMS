@extends('layouts.layout_admin_panel')
@section('admin_content')
    <div class="col-md-9" style="margin-top:70px;">
        <h3>EDIT HISTORY</h3>
        <form class="mt-4" action="{{ route('manage.history.update', $record->id) }}" method="post">
            @csrf;
            <div class="form-group">
                <label for="history">History</label>
                <textarea type="text" rows="10" class="form-control" id="history"  placeholder="{{ $record->history }}" name="history"></textarea>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
    </div>
@endsection
