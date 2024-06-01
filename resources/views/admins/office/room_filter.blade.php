@extends('layout.admin_master')

@section('content')
    
    <div class="pagetitle">
    <h1>Office</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href={{ url('office/index') }}>Home</a></li>
          <li class="breadcrumb-item">Rooms List</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
    
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Rooms</h5>
                        <div class="container mt-5 ">
                            <div class="form-group col-md-8 mb-3">
                                <label for="hostel">Hostel:</label>
                                <select id="hostel" class="form-control">
                                    <option selected>--Select--</option>
                                    <option value="all">All Hostels</option>
                                    @foreach($hostels as $hostel)
                                        <option value="{{ $hostel->hostel_id }}">{{ $hostel->hostel_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                
                            <div class="form-group">
                                <label for="block">Blocks:</label><br>
                                <div id="block-checkboxes">
                                    <!-- Blocks will be populated dynamically -->
                                </div>
                            </div>
                
                            <div class="form-group col-md-8 mb-3">
                                <label for="status">Status:</label>
                                <select id="status" class="form-control">
                                    <option value="all">All Statuses</option>
                                    <option value="occupied">Occupied</option>
                                    <option value="vacant">Vacant</option>
                                </select>
                            </div>

                            <button id="filter-btn" class="btn btn-primary">Filter</button>
                
                            <table class="table table-bordered mt-4">
                                <thead>
                                    <tr>
                                        <th>Bed ID</th>
                                        <th>Bed Name</th>
                                        <th>Bed Type</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody id="beds-table-body">
                                    <!-- Filtered results will be displayed here -->
                                </tbody>
                            </table>
                        </div>
            
                    </div>
                </div>
    
            </div>
        </div>
    </section>
  


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#hostel').change(function() {
                var hostelId = $(this).val();
                $('#block-checkboxes').empty();
                
                if (hostelId && hostelId !== 'all') {
                    $.ajax({
                        url: '/office/rooms/hostels/' + hostelId + '/blocks',
                        type: 'GET',
                        success: function(data) {
                            $.each(data, function(key, block) {
                                $('#block-checkboxes').append('<div><input type="checkbox" name="blocks[]" value="'+block.block_id+'" id="block-'+block.block_id+'"><label for="block-'+block.block_id+'">'+block.block_name+'</label></div>');
                            });
                        }
                    });
                } else if (hostelId === 'all') {
                    $.ajax({
                        url: '/office/rooms/blocks/all',
                        type: 'GET',
                        success: function(data) {
                            $.each(data, function(key, block) {
                                $('#block-checkboxes').append('<div><input type="checkbox" name="blocks[]" value="'+block.block_id+'" id="block-'+block.block_id+'"><label for="block-'+block.block_id+'">'+block.block_name+'</label></div>');
                            });
                        }
                    });
                }
            });

            // Handle Filter button click
            $('#filter-btn').click(function() {
                var hostelId = $('#hostel').val();
                var blockIds = $('input[name="blocks[]"]:checked').map(function(){
                    return $(this).val();
                }).get();
                var status = $('#status').val();

                $('#beds-table-body').html('');

                $.ajax({
                    url: '/office/rooms/filter-beds',
                    type: 'GET',
                    data: {
                        hostel_id: hostelId,
                        block_ids: blockIds,
                        status: status
                    },
                    success: function(data) {
                        $.each(data, function(key, bed) {
                            $('#beds-table-body').append('<tr><td>'+bed.bed_id+'</td><td>'+bed.bed_name+'</td><td>'+bed.bed_type+'</td><td>'+bed.status+'</td></tr>');
                        });
                    }
                });
            });
        });

    </script>

@endsection
