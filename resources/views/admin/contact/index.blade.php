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
                            {{-- <td>{{ $contact->created_at }}</td> --}}
                            <td>{{ date('d M Y H:i:s', strtotime($contact->created_at)) }}</td>
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
                                <button type="button" class="btn btn-info btn-sm add-message" data-bs-toggle="modal" data-bs-target="#L1Minutes" data-id="{{ $contact->id }}" data-minutes="{{ $contact->l1_minutes }}"><i class='bx bxs-message-rounded-add'></i></button>
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


  {{-- Add Message Modal  --}}

<div class="modal fade" id="L1Minutes" tabindex="-1" aria-modal="true" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel2">Call Discussion </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST" id="l1_minutes_form">
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <textarea id="l1_minutes" name="l1_minutes" class="form-control" placeholder="Type Here..."></textarea>
                        </div>
                        <input type="hidden" id="inquiry_id" name="inquiry_id">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Minutes</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@push('scripts')
    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

    <script>
        function confirmDelete() {
            return confirm('Are you sure you want to delete this contact?');
        }
    </script>
    
    <script>
        $(document).ready( function () {
            // $('#datatable').DataTable();
            $('#datatable').DataTable({
                "order": [[4, 'desc']]  // Adjust the index to match the column you want to sort by
            });
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


        //Thi  si the modal to add the message and setting the value 
        $(document).on('click', '.add-message', function() {
            var contactId = $(this).data('id'); 
            var minutes = $(this).data('minutes');
            $('#inquiry_id').val(contactId);
            $('#l1_minutes').val(minutes);
            
        });

        //Here we are submitting the discussion form details
        $("#l1_minutes_form").submit(function(e) {
            e.preventDefault();
            let l1_minutes = $("#l1_minutes").val();
            let inquiryId = $("#inquiry_id").val();
            $.post("{{ route('contacts.update-minutes') }}", {
                l1_minutes: l1_minutes,
                inquiryId: inquiryId,
                "_token": "{{ csrf_token() }}",
            }, function(data) {
                if (data.success) {
                    console.log(data);
                    $("#L1Minutes").modal('hide');
                    location.reload();
                } else {
                     alert('Something went wrong');
                }
            });
        });




    </script>
@endpush