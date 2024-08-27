@extends('admin.layouts.app')

@section('title', 'Contact')

@section('styles')
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
@endsection

@section('content')
<div class="card">
  <div class="card-header d-flex justify-content-between align-items-center">
    <h5 class="mb-0">Contact List</h5>
    @if(session('success'))
        <div class="alert alert-danger">{{ session('success') }}</div>
    @endif
    <div class="pull-right">
        <a href="{{ route('contacts.export') }}" class="btn btn-primary btn-sm">Export</a>
    </div>
  </div>
          
    <div class="table-responsive text-nowrap mb-2">
        <div class="container">
            <table class="table" id="datatable">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>City</th>
                        <th>Utm Source</th>
                        <th>Utm Medium</th>
                        <th>Utm Campaign</th>
                        <th>Utm Content</th>
                        <th>Contact Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    
                    @foreach($contacts as $contact)
                        <tr>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->phone }}</td>
                            <td>{{ $contact->city }}</td>
                            <td>{{ $contact->utm_source }}</td>
                            <td>{{ $contact->utm_medium }}</td>
                            <td>{{ $contact->utm_campaign }}</td>
                            <td>{{ $contact->utm_content }}</td>
                            <td>{{ $contact->created_at }}</td>
                            <td>
                                <a href="{{ route('contacts.delete', $contact->id) }}" class="btn btn-danger btn-sm"><i class="bx bx-trash"></i></a>
                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>

@endsection

@push('scripts')
    {{-- <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script> --}}
    <script>
        $(document).ready( function () {
            $('#datatable').DataTable();
        });
    </script>
@endpush
