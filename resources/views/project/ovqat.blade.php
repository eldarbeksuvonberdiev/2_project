@extends('layouts.main')

@section('title', 'Ovqatlar')
@section('pagename', 'Ovqatlar')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
                Create
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="create" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="create">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-12 col-sm-12">
                                    <div class="form-group">
                                        <form action="{{ route('ovqat.store') }}" method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Name</label>
                                                <input type="text" name="name" class="form-control" id="name"
                                                    aria-describedby="emailHelp">
                                            </div>
                                            <label>Masalliqlar</label>
                                            <div class="select2-purple">
                                                <select class="select2" name="masalliqlar[]" multiple="multiple"
                                                    data-placeholder="Select a State"
                                                    data-dropdown-css-class="select2-purple" style="width: 100%;">
                                                    @foreach ($masalliqs as $masalliq)
                                                        <option value="{{ $masalliq->id }}">{{ $masalliq->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Striped Full Width Table</h3>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px">ID</th>
                                    <th>Ovqatlar</th>
                                    <th>Masalliqlari</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($models as $model)
                                    <tr>
                                        <td>{{ $model->id }}</td>
                                        <td>{{ $model->name }}</td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#edit{{ $model->id }}" style="width: 80px">
                                                {{ $model->masalliqs->count() }}
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="edit{{ $model->id }}" tabindex="-1"
                                                aria-labelledby="view{{ $model->id }}" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="view{{ $model->id }}">Modal title
                                                            </h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-12 col-sm-12">
                                                                    <div class="form-group">
                                                                        <form action="{{ route('ovqat.put', $model->id) }}"
                                                                            method="POST">
                                                                            @csrf
                                                                            @method('PUT')
                                                                            <div class="mb-3">
                                                                                <label for="name"
                                                                                    class="form-label">Name</label>
                                                                                <input type="text" name="name"
                                                                                    class="form-control" id="name"
                                                                                    value="{{ $model->name }}" disabled>
                                                                            </div>
                                                                            <label>Masalliqlar</label>
                                                                            <div class="select2-purple">
                                                                                <select class="select2" name="masalliqlar[]"
                                                                                    multiple="multiple"
                                                                                    data-placeholder="Select a State"
                                                                                    data-dropdown-css-class="select2-purple"
                                                                                    style="width: 100%;" disabled>
                                                                                    @foreach ($masalliqs as $masalliq)
                                                                                        <option value="{{ $masalliq->id }}"
                                                                                            @foreach ($model->masalliqs as $item)
                                                                                            @if ($item->id == $masalliq->id)
                                                                                                {{ 'selected' }}
                                                                                            @endif @endforeach>
                                                                                            {{ $masalliq->name }}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Close</button>
                                                                                <button type="submit"
                                                                                    class="btn btn-primary">Save
                                                                                    changes</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#edit{{ $model->id }}">
                                                Edit
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="edit{{ $model->id }}" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal
                                                                title
                                                            </h1>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-12 col-sm-12">
                                                                    <div class="form-group">
                                                                        <form
                                                                            action="{{ route('ovqat.put', $model->id) }}"
                                                                            method="POST">
                                                                            @csrf
                                                                            @method('PUT')
                                                                            <div class="mb-3">
                                                                                <label for="name"
                                                                                    class="form-label">Name</label>
                                                                                <input type="text" name="name"
                                                                                    class="form-control" id="name"
                                                                                    value="{{ $model->name }}">
                                                                            </div>
                                                                            <label>Masalliqlar</label>
                                                                            <div class="select2-purple">
                                                                                <select class="select2"
                                                                                    name="masalliqlar[]"
                                                                                    multiple="multiple"
                                                                                    data-placeholder="Select a State"
                                                                                    data-dropdown-css-class="select2-purple"
                                                                                    style="width: 100%;">
                                                                                    @foreach ($masalliqs as $masalliq)
                                                                                        <option
                                                                                            value="{{ $masalliq->id }}"
                                                                                            @foreach ($model->masalliqs as $item)
                                                                                                @if ($item->id == $masalliq->id)
                                                                                                    {{ 'selected' }}
                                                                                                @endif @endforeach>
                                                                                            {{ $masalliq->name }}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Close</button>
                                                                                <button type="submit"
                                                                                    class="btn btn-primary">Save
                                                                                    changes</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
