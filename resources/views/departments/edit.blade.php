@extends('master')
@section('main')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit {{ $department->name }} Department</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="/departments" class="btn btn-primary">👁️ List All Departments</a>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <form action="/departments/{{ $department->id }}/updat" method="POST">
                    @method("PATCH")
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Name</label>
                        <input type="text" name="name" id="" class="form-control"
                            value="{{ $department->name }}" placeholder="Enter Department Name" aria-describedby="helpId" />
                        <small id="helpId" class="text-muted">Help text</small>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Description</label>
                        <input type="text" name="Description" id="" class="form-control"
                            value="{{ $department->description }}" placeholder="Enter Description"
                            aria-describedby="helpId" />
                        <small id="helpId" class="text-muted">Help text</small>
                    </div>

                    <button type="submit" class="btn btn-primary">
                        Add
                    </button>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>
@endsection
