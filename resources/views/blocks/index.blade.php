@extends('layouts.app')

@section('content')
@if (session('status'))
<div class="uk-alert-primary" data-uk-alert>
    <a class="uk-alert-close" data-uk-close></a>
    <p>{{ session('status') }}</p>
    </div>
@endif
<div class="uk-section-small uk-section-default header">
    <div class="uk-container uk-container-large">
        <h1><span class="ion-speedometer"></span>Blocks</h1>
        <ul class="uk-breadcrumb">
            <li><span>Blocks</span></li>
        </ul>
    </div>
</div>
<div class="uk-section-small">
    <div class="uk-container uk-container-large">
        @if(session()->has('success'))
                <div class="uk-alert-success" data-uk-alert>
                    <a class="uk-alert-close" data-uk-close></a>
                    <p>{{ session()->get('success') }}</p>
                </div>
        @endif
        @if(session()->has('error'))
                <div class="uk-alert-danger" data-uk-alert>
                    <a class="uk-alert-close" data-uk-close></a>
                    <p>{{ session()->get('error') }}</p>
                </div>
        @endif
        <div class="uk-card uk-card-default uk-card-body">
            <div class="uk-text-right">
                <a class="uk-button uk-button-primary" href="{{ route('blocks.create') }}">Add Block</a>
            </div>
            @if ($blocks->count() > 0)
                <table class="uk-table uk-table-middle uk-table-divider uk-table-striped uk-table-responsive">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blocks as $block)
                        <tr>
                            <td>{{ $block->id }}</td>
                            <td>{{ $block->title }}</td>
                            <td>
                                <div class="d-inline-block">
                                    <a href="{{ route('blocks.edit', $block->id) }}" class="uk-button uk-button-primary">Edit</a>
                                </div>
                                <div class="d-inline-block">
                                    <form action="{{ route('blocks.destroy', $block->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="uk-button uk-button-danger" type="submit" title="Click to delete">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
            <div>
                <div class="uk-alert-danger uk-margin-top" data-uk-alert>
                    <p>There are no Blocks available yet. Please create a one!</p>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>

@endsection
