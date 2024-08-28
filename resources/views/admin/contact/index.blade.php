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
                        <th>Specialty</th>
                        <th>Contact Date</th>
                        <th>Type</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    
                    @foreach($contacts as $contact)
                        <tr>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->phone }}</td>
                            <td>{{ $contact->specialty }}</td>
                            <td>{{ $contact->created_at }}</td>
                            <td>
                                @php
                                    $types = ['Relevant', 'Irrelevant', 'Pending', 'Spam','Done'];
                                @endphp
                                <select class="form-control-sm change_lead_type" data-type='{{$contact->lead_type}}' data-id="{{ $contact->id }}">
                                    <option value="">Select Lead Type</option>
                                    @foreach($types as $type)
                                        <option value="{{ $type }}" {{ $contact->lead_type == $type ? 'selected' : '' }}>{{ $type }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <button type="button" class="btn btn-info btn-sm view-message" data-bs-toggle="modal" data-bs-target="#messageModal" data-message="{{ $contact->message }}"><i class="bx bx-message"></i></button>
                                @if($contact->file)
                                <a href="{{ asset('storage/' . $contact->file) }}" class="btn btn-primary btn-sm"><i class="bx bx-download"></i></a>
                                @endif
                                <a href="{{ route('contacts.delete', $contact->id) }}" class="btn btn-danger btn-sm" onclick="return confirmDelete()"><i class="bx bx-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
            </table>
        </div>
    </div>
</div>
<!-- View Message Modal -->
<div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Message</h5>
        </div>
        <div class="modal-body message">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

@endsection

@push('scripts')
    {{-- <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script> --}}

    <script>
        function confirmDelete() {
            return confirm('Are you sure you want to delete this contact?');
        }
    </script>
    
    <script>
        $(document).ready( function () {
            $('#datatable').DataTable();
        });

        $(document).on('click', '.view-message', function() {
            var message = $(this).data('message');
            $('.message').html(message);
        });

        $(document).on('change', '.change_lead_type', function() {
            var type = $(this).val();
            var id = $(this).data('id');
            if(type == '' || type == 'Sellect Lead Type' || type == null) {
                return;
            }

            $.ajax({
                url: "{{ route('contacts.change-type') }}",
                type: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                    type: type,
                    id: id
                },
                success: function(response) {
                    console.log(response);
                }
            });
        });
    </script>
@endpush
