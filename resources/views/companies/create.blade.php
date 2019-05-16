@extends('layouts.logged-in')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-area">
                        <form role="FORM" method="POST" action="{{ route('companies.store') }}" accept-charset="UTF-8" enctype="multipart/form-data">
                            <input name="_token" type="hidden" value="{{ csrf_token() }}" />
                            <input type="hidden" name="_method" value="POST">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" />
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" />
                            </div>
                            <div class="form-group">
                                <label for="logo">Logo</label>
                                (min 100x100px)
                                <input type="file" class="form-control" name="logo" />
                            </div>
                            <div class="form-group">
                                <label for="website_url">Website URL</label>
                                <input type="url" class="form-control" name="website_url" />
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
