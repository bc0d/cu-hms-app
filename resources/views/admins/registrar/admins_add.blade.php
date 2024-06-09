@extends('layout.admin_master')

@section('content')

    <div class="pagetitle">
        <h1>Registrar</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('registrar/index') }}">Dashboard</a></li>
                <li class="breadcrumb-item">Manage Admin</li>
                <li class="breadcrumb-item active">Add Admin</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">

            <div class="col-lg-10"> 

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add Admin details</h5>
                        @if ($errors->any())
                            <div>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                                
                        <!-- General Form Elements -->
                        <form action="{{ route('registrar.admin.add') }}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" name="email" class="form-control" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="departmentSelect" class="col-sm-2 col-form-label">Department</label>
                                <div class="col-sm-10">
                                    <select class="form-select" name="department" id="departmentSelect" required>
                                        <option selected disabled>--select--</option>
                                        <option value="Mens Hostel">Mens Hostel</option>
                                        <option value="Womens Hostel">Womens Hostel</option>
                                        @foreach ($departments as $item)
                                            <option value="{{ $item->department_name }}">{{ $item->department_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="designationSelect" class="col-sm-2 col-form-label">Designation</label>
                                <div class="col-sm-10">
                                    <select class="form-select" name="designation" id="designationSelect" required>
                                        <option selected disabled>--select--</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="accessSelect" class="col-sm-2 col-form-label">Access</label>
                                <div class="col-sm-10">
                                    <select class="form-select" name="access" id="accessSelect" required>
                                        <option selected disabled>--select--</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="password" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" name="password" id="password" class="form-control" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="password_confirmation" class="col-sm-2 col-form-label">Confirm Password</label>
                                <div class="col-sm-10">
                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Create Admin</button>
                                </div>
                            </div>

                        </form><!-- End General Form Elements -->

        
                    </div>
                </div>
  
          </div>
        </div>
    </section>
    
    <script src="{{ asset('admins/assets/js/jquery-3.6.0.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#departmentSelect').change(function() {
                var department = $(this).val();
                var designationSelect = $('#designationSelect');
                var accessSelect = $('#accessSelect');
                
                designationSelect.empty(); // Clear existing options
                accessSelect.empty(); // Clear existing options

                var defaultDesignationOption = $('<option>', {
                    text: '--select--',
                    disabled: true,
                    selected: true
                });
                designationSelect.append(defaultDesignationOption);

                var defaultAccessOption = $('<option>', {
                    text: '--select--',
                    disabled: true,
                    selected: true
                });
                accessSelect.append(defaultAccessOption);

                if (department === 'Mens Hostel' || department === 'Womens Hostel') {
                    var staffOption = $('<option>', {
                        value: 'staff',
                        text: 'Staff'
                    });
                    var wardenOption = $('<option>', {
                        value: 'warden',
                        text: 'Warden'
                    });
                    designationSelect.append(staffOption);
                    designationSelect.append(wardenOption);

                    var accessOption = $('<option>', {
                        value: department === 'Mens Hostel' ? 'mens' : 'womens',
                        text: department === 'Mens Hostel' ? 'Mens' : 'Womens'
                    });
                    accessSelect.append(accessOption);
                } else {
                    var hodOption = $('<option>', {
                        value: 'hod',
                        text: 'HOD'
                    });
                    designationSelect.append(hodOption);

                    var allAccessOption = $('<option>', {
                        value: 'all',
                        text: 'All'
                    });
                    accessSelect.append(allAccessOption);
                }
            });
            $('#departmentSelect').change(function() {
        // Existing code for department change event
    });

    // JavaScript to validate password and confirmation password match
    $('#adminForm').on('submit', function(event) {
        var password = $('#password').val();
        var password_confirmation = $('#password_confirmation').val();
        var passwordInput = $('#password');
        var confirmPasswordInput = $('#password_confirmation');

        if (password !== password_confirmation) {
            event.preventDefault(); // Prevent form submission
            alert('The password and confirmation password do not match.');

            // Add error class to input fields
            passwordInput.addClass('input-error');
            confirmPasswordInput.addClass('input-error');
        } else {
            // Remove error class if passwords match
            passwordInput.removeClass('input-error');
            confirmPasswordInput.removeClass('input-error');
        }
        });
    });

    </script>

@endsection

