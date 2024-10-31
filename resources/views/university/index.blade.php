@extends('layouts.main')

@section('title', 'Universities')
@section('pagename', 'Universities')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#create">
                Create
            </button>

            <div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">University</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('university.create') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">University name</label>
                                    <input type="text" name="name" class="form-control" id="name">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Universities</h3>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>University</th>
                                    <th>Faculties</th>
                                    <th>Fields</th>
                                    <th>Groups</th>
                                    <th>Students</th>
                                    <th>Edit University</th>
                                    <th>Delete University</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($universities as $university)
                                    <tr>
                                        <td>{{ $university->id }}</td>
                                        <td>{{ $university->name }}</td>
                                        <td>{{ $university->fa_count }}</td>
                                        <td>{{ $university->fi_count }}</td>
                                        <td>{{ $university->g_count }}</td>
                                        <td>{{ $university->s_count }}</td>
                                        <td>
                                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{ $university->id}}">
                                                Edit
                                            </button>
                                
                                            <div class="modal fade" id="edit{{ $university->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">University</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ route('university.update', $university->id ) }}" method="POST">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="mb-3">
                                                                    <label for="name" class="form-label">University name</label>
                                                                    <input type="text" name="name" class="form-control" id="name" value="{{ $university->name }}">
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <form action="{{ route('university.delete',$university->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit">DELETE</button>
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
    </section>
@endsection
