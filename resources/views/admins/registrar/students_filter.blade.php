@extends('layout.admin_master')

@section('content')
    
    <div class="pagetitle">
        <h1>Registrar</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('registrar/index') }}">Home</a></li>
                <li class="breadcrumb-item">Students List</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card col-lg-10">
                    <div class="card-body">
                        <h5 class="card-title">Filter</h5>
                        <form action="" class="col-lg-8" id="filterForm">
                            @csrf
                            <div class="row mb-3">
                                <label for="hostel" class="col-md-4 col-lg-3 col-form-label">Filter By</label>
                                <div class="col-md-8 col-lg-9">
                                    <select name="hostel" id="hostel" class="form-control">
                                        <option value="all">All</option>
                                        <option value="1">Mens Hostel</option>
                                        <option value="2">Ladies Hostel</option>
                                    </select>
                                </div>
                            </div>
                            <div id="blocksContainer"></div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Filter</button>
                            </div>
                        </form>
                        <div id="results"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <script src="{{ asset('admins/assets/js/jquery-3.6.0.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#hostel').change(function() {
                const hostelId = $(this).val();
                if (hostelId === 'all') {
                    $('#blocksContainer').empty();
                    return;
                }
                $.ajax({
                    url: '/registrar/student/blocks/' + hostelId,
                    method: 'GET',
                    success: function(blocks) {
                        $('#blocksContainer').empty();
                        blocks.forEach(block => {
                            const checkbox = $('<input>', {
                                type: 'checkbox',
                                name: 'blocks',
                                class: 'form-check-input',
                                value: block.block_id,
                                id: `block_${block.block_id}`
                            });

                            const label = $('<label>', {
                                for: `block_${block.block_id}`,
                                class: 'form-check-label',
                                text: block.block_name
                            });

                            $('#blocksContainer').append(checkbox).append(label).append('<br>');
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            });

            $('#filterForm').submit(function(e) {
                e.preventDefault();

                const hostelId = $('#hostel').val();
                let selectedBlocks = [];
                if (hostelId === 'all') {
                    selectedBlocks.push('all');
                } else {
                    selectedBlocks = $('input[name="blocks"]:checked').map(function() {
                        return $(this).val();
                    }).get();
                }

                $.ajax({
                    url: '/registrar/student/students',
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    contentType: 'application/json',
                    data: JSON.stringify({ blocks: selectedBlocks }),
                    success: function(students) {
                        displayResults(students);
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            });

            function displayResults(students) {
                $('#results').empty();

                if (students.length) {
                    const table = $('<table>').addClass('table table-striped');
                    const thead = $('<thead>').html(`
                        <tr>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Hostel</th>
                            <th>Block</th>
                            <th>Room</th>
                            <th>Bed</th>
                            <th></th>
                        </tr>
                    `);
                    const tbody = $('<tbody>');

                    students.forEach(student => {
                        // Check if student.bed exists and is not null before accessing nested properties
                        if (student.bed && student.bed.room && student.bed.room.block && student.bed.room.block.hostel) {
                            const tr = $('<tr>').html(`
                                <td>${student.first_name} ${student.second_name}</td>
                                <td>${student.dob}</td>
                                <td>${student.bed.room.block.hostel.hostel_name}</td>
                                <td>${student.bed.room.block.block_name}</td>
                                <td>${student.bed.room.room_name}</td>
                                <td>${student.bed.bed_name}</td>
                                <td><a href="http://127.0.0.1:8000/registrar/student/detail/${student.student_id}" class="btn btn-primary btn-sm">view</a></td>
                            `);
                            tbody.append(tr);
                        } else {
                            // Handle case where nested properties are null
                            console.error('Nested property is null for student:', student);
                            console.error('Bed:', student.bed);
                            console.error('Room:', student.bed ? student.bed.room : null);
                            console.error('Block:', student.bed && student.bed.room ? student.bed.room.block : null);
                            console.error('Hostel:', student.bed && student.bed.room && student.bed.room.block ? student.bed.room.block.hostel : null);
    
                        }
                    });

                    table.append(thead).append(tbody);
                    $('#results').append(table);
                } else {
                    $('#results').text('No students found.');
                }
            }
        });
    </script>

@endsection
