@extends('layouts.logged-in')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <a class="btn btn-info btn-success pull-right" href="{{ route('employees.create') }}"><i class="fa fa-plus"></i>&nbsp;&nbsp;Create new</a>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>First name</td>
                                <td>Last name</td>
                                <td>Email</td>
                                <td>Phone</td>
                                <td>Company name</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employees as $employee)
                                <tr>
                                    <td>{{ $employee->id }}</td>
                                    <td>{{ $employee->first_name }}</td>
                                    <td>{{ $employee->last_name }}</td>
                                    <td>{{ $employee->email }}</td>
                                    <td>{{ $employee->phone }}</td>
                                    <td>{{ $employee->company->name }}</td>
                                    <td><a class="btn btn-small btn-success" href="{{ route('employees.edit', [$employee->id ]) }}">Edit</a></td>
                                    <td>
                                        <form action="{{ route('employees.destroy', [$employee->id]) }}" method="POST">
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
