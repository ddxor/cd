@extends('layouts.logged-in')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-area">
                        <form role="FORM" method="POST" action="{{ route('employees.store') }}" accept-charset="UTF-8" enctype="multipart/form-data">
                            <input name="_token" type="hidden" value="{{ csrf_token() }}" />
                            <input type="hidden" name="_method" value="POST">
                            <div class="form-group">
                                <label for="first_name">First name</label>
                                <input type="text" class="form-control" name="first_name" />
                            </div>
                            <div class="form-group">
                                <label for="last_name">Last name</label>
                                <input type="text" class="form-control" name="last_name" />
                            </div>
                            <div class="form-group">
                                <label for="company_id">Company</label>
                                <select class="form-control" name="company_id">
                                    @foreach ($companies as $company)
                                        <option value="{{ $company->id }}">{{ $company->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" />
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="tel" class="form-control" name="phone" />
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
