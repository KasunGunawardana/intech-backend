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
        <h1><span class="ion-speedometer"></span>Enquiries</h1>
        <ul class="uk-breadcrumb">
            <li><span>Web Enquiries</span></li>
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
            @if ($inquiries->count() > 0)
            <div class="uk-text-right">
                <a class="uk-button uk-button-primary uk-margin-bottom" data-href="{{ route('enquiries.export') }}" id="export" onclick="exportTasks(event.target);">Export</a>
            </div>
            <table id="inquiry_table" class="display">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        {{-- <th>Email</th>
                        <th>Telephone</th> --}}
                        <th>Received Date</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($inquiries as $inquiry)
                    <tr>
                        <td>{{ $inquiry->id }}</td>
                        <td>{{ str_limit($inquiry->name, 15) }}</td>
                        {{-- <td><a href="mailto:{{ $inquiry->email }}">{{ $inquiry->email }}</a></td>
                        <td>{{ $inquiry->number }}</td> --}}
                        <td>{{ $inquiry->created_at }}</td>
                        <td>{{ str_limit($inquiry->subject, 15) }}</td>
                        <td><span onclick="removeNotification( {{ $inquiry->id }} )"><a href="{{ route('enquiry.show', $inquiry->id ) }}" onclick="return popitup('enquiries/show/{{ $inquiry->id }}')">Read</a> 
                            @if ($inquiry->views == 0)
                            <span class="uk-badge badge-num-{{$inquiry->id}}">New</span>
                            @endif
                        </span>
                        </td>
                        <td>
                            <div class="d-inline-block">
                            <button class="uk-button uk-button-small uk-button-danger" onclick="handleDelete({{ $inquiry->id }})">Delete</button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <div>
                <div class="uk-alert-danger uk-margin-top" data-uk-alert>
                    <p>There are no Enquiries available yet.</p>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>

<div id="modal-close-default" data-uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <form action="" method="GET" id="deleteEnquiry">
            @csrf
            @method('DELETE')
            <button class="uk-modal-close-default" type="button" data-uk-close></button>
            <h4 style="margin-top: 0;">Delete Enquiry</h4>
            <p>Are you sure you want to delete this record?</p>
            {{-- <h5 style="margin-top: 0;"><del><span id="get-text"></span></del></h5> --}}
            <div class="uk-text-right">
                <button class="uk-button uk-button-danger" type="submit">Delete</button>
                <button class="uk-button uk-button-primary uk-modal-close" type="button">Cancel</button>
            </div>
        </form>
    </div>
</div>

@endsection

@section('css')

<link rel="stylesheet" href="{{ asset('css/jquery.dataTables.css') }}">

{{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css"> --}}

@endsection

@section('scripts')

<script charset="utf8" src="{{ asset('js/jquery.dataTables.js') }}"></script>

{{-- <script charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script> --}}

<script>
    function removeNotification(id) {
        var badge = document.querySelector(".badge-num-"+id+"");
        badge.style.display = 'none';
    }

    function handleDelete(id) {
        var form = document.getElementById('deleteEnquiry');
        form.action = '/enquiries/' + id + '/delete';
        console.log(form);
        UIkit.modal('#modal-close-default').show();
    }

    $(document).ready( function () {
    $('#inquiry_table').DataTable({
        "order": [[ 2, "desc" ]]
    });
    
    setTimeout(() => {
        $('.email_notifications').css('display', 'none');
        }, 1000);
} );
</script>

<script language="javascript">

    function popitup(url) {
        newwindow=window.open(url,'name','height=750,width=600');
        if (window.focus) {newwindow.focus()}
        return false;
    }

    function exportTasks(_this) {
      let _url = $(_this).data('href');
      window.location.href = _url;
   }
    
</script>

@endsection
