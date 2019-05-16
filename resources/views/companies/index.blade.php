@extends('layouts.logged-in')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Name</td>
                                <td>Email</td>
                                <td>Logo</td>
                                <td>Website</td>
                                <td>Edit</td>
                                <td>Delete</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($companies as $company)
                                <tr>
                                    <td>{{ $company->id }}</td>
                                    <td>{{ $company->name }}</td>
                                    <td>{{ $company->email }}</td>
                                    <td><img src="{{ $company->logo_url }}" alt="{{ $company->name }} logo" height="40" /></td>
                                    <td><a href="{{ $company->website_url }}" target="_blank">Open website (new window)</a></td>
                                    <td><a class="btn btn-small btn-success" href="{{ route('companies.edit', [$company->id ]) }}">Edit</a></td>
                                    <td>
                                        <form action="{{ route('companies.destroy', [$company->id]) }}" method="POST">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit" class="btn btn-small btn-danger" value="Delete" onClick="return confirm('Delete. Are you sure?')">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
