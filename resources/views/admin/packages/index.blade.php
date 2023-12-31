@extends('layouts.layout_admin_panel')
@section('admin_content')
    <div class="col-md-9" style="margin-top: 100px;">
        <div class="row d-flex justify-content-end">
            <a href="{{ route('admin.packages.create') }}">
                <button type="button" class="btn btn-dark float-right mr-5 mb-5">
                    ADD NEW Package
                </button>
            </a>
        </div>
        <table id="dtDynamicVerticalScrollExample" class="table table-striped table-bordered table-sm">
            <div class="bg-dark text-light py-2 text-center"> ALL PACKAGES </div>
            <thead class="bg-dark text-light">
            <tr>
                <th scope="col">NAME</th>
                <th scope="col">DURATION</th>
                <th scope="col">FEE</th>
                <th scope="col">VEHICLE</th>
                <th scope="col">ACTIONS</th>
            </tr>
            </thead>
            <tbody>
                @foreach($packages as $package)
                    <tr>
                        <td>{{ $package->name }}</td>
                        <td>{{ $package->duration }}</td>
                        <td>{{ $package->fee }}</td>
                        <td>{{ $package->vehicle }}</td>
                        <td>
                            <span><a href="{{ route('admin.packages.edit', $package->id) }}" class="btn btn-warning btn-sm">Edit</a></span>
                            <span><a href="{{ route('admin.packages.delete', $package->id) }}" class="btn btn-warning btn-sm">Delete</a></span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
