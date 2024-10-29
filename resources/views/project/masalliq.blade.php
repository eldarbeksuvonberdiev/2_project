@extends('layouts.main')

@section('title', 'Masalliqlar')
@section('pagename', 'Masalliqlar')

@section('content')
    <section class="content">
        <div class="container-fluid">
            @foreach ($models as $model)
                <h4>{{ $model->id }}.{{ $model->name }}</h4>
                @foreach ($model->ovqats as $masalliq)
                    <li>{{ $masalliq->name }}</li>
                @endforeach
            @endforeach
        </div>
    </section>
@endsection
