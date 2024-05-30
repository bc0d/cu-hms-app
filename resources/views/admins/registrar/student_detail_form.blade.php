@extends('layout.admin_master')

@section('content')

<div class="pagetitle">
    <h1>Registrar</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href={{ url('registrar/index') }}>Home</a></li>
            <li class="breadcrumb-item active">Profile</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Student Details</h5>
                    <!-- Vertical Form -->
                    <form method="POST" action="{{ route('registrar.student.list') }}">
                        @csrf
                        <div>
                            <label for="hostel">Hostel:</label>
                            <select id="hostel" name="hostel">
                                <option value="all">All</option>
                                <option value="1">Mens Hostel</option>
                                <option value="2">Ladies Hostel</option>
                            </select>
                        </div>
                        <div id="blocks-container" style="display: none;">
                            <label>Blocks:</label>
                            <div>
                                <input type="checkbox" id="select-all-blocks">
                                <label for="select-all-blocks">All</label>
                            </div>
                            <div id="blocks-list"></div>
                        </div>
                        <button type="submit">Show Students</button>
                    </form>
                     @if(isset($students))
                        <h2>Student List</h2>
                        <form method="POST" action="{{ url('office/students/export') }}">
                            @csrf
                            <input type="hidden" name="hostel" value="{{ request('hostel') }}">
                            <input type="hidden" name="blocks" value="{{ json_encode(request('blocks')) }}">
                            <button type="submit">Export to Excel</button>
                        </form>
                        <table border="1">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Bed</th>
                                    <th>Room</th>
                                    <th>Block</th>
                                    <th>Hostel</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($students as $student)
                                    <tr>
                                        <td>{{ $student->name }}</td>
                                        <td>{{ $student->email }}</td>
                                        <td>{{ $student->bed->bed_name }}</td>
                                        <td>{{ $student->bed->room->room_name }}</td>
                                        <td>{{ $student->bed->room->block->block_name }}</td>
                                        <td>{{ $student->bed->room->block->hostel->hostel_name }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#hostel').change(function() {
            var hostel = $(this).val();
            if (hostel && hostel !== 'all') {
                $.ajax({
                    url: '/registrar/blocks/' + hostel,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        $('#blocks-container').show();
                        $('#blocks-list').empty();
                        $.each(data, function(key, value) {
                            $('#blocks-list').append(
                                '<div><input type="checkbox" name="blocks[]" value="' + value.block_id + '"> ' +
                                '<label>' + value.block_name + '</label></div>'
                            );
                        });
                    }
                });
            } else {
                $('#blocks-container').hide();
                $('#blocks-list').empty();
            }
        });

        $('#select-all-blocks').change(function() {
            var isChecked = $(this).is(':checked');
            $('#blocks-list input[type="checkbox"]').prop('checked', isChecked);
        });
    });
</script>

@endsection