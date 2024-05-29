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
                    <form class="row g-3" action="">
                        <div class="row d-flex mt-4">
                            <div class="col-lg-4">
                                <div class="form-label">Hostel</div>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1">
                                    <label class="form-check-label" for="gridRadios1">
                                        Mens Hostel
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                    <label class="form-check-label" for="gridRadios2">
                                        Womens Hostel
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3">
                                    <label class="form-check-label" for="gridRadios3">
                                        All
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex" id="additional-radios"></div>
                        <!-- Container to dynamically display additional radio buttons -->
                        <div id="hostelOptions" class="mt-2"></div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">View</button>
                        </div>
                    </form><!-- Vertical Form -->
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('input[name="gridRadios"]').change(function() {
            if ($('#gridRadios1').is(':checked')) {
                // Mens Hostel is selected
                $('#additional-radios').html('');
                $('#hostelOptions').html(`
                <div class="row d-flex mt-4">
                    <div class="col-lg-4">
                        <div class="form-label">Block</div>
                    </div>
                    <div class="col-lg-8">
                        @foreach ($blockNames['Mens Hostel'] as $blockName)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="hostelNumbers[]" id="hostelNumber4" value="4">
                                <label class="form-check-label" for="hostelNumber4">{{ $blockName }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>
                `);
            } else if ($('#gridRadios2').is(':checked')) {
                // Womens Hostel is selected
                $('#additional-radios').html('');
                $('#hostelOptions').html(`
                    <div class="row d-flex mt-4">
                        <div class="col-lg-4">
                            <div class="form-label">Block</div>
                        </div>
                        <div class="col-lg-8">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="hostelNumbers" id="hostelNumber4" value="4">
                                <label class="form-check-label" for="hostelNumber4">ANNEX</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="hostelNumbers" id="hostelNumber5" value="5">
                                <label class="form-check-label" for="hostelNumber5">EVEREST</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="hostelNumbers" id="hostelNumber6" value="6">
                                <label class="form-check-label" for="hostelNumber6">MULLA</label>
                            </div>
                        </div>
                    </div>
                `);
            } else {
                // Other options are selected, clear the additional radios
                $('#additional-radios').empty();
                $('#hostelOptions').empty();
            }
        });

        // Trigger change event on page load to handle the default selected radio button
        $('input[name="gridRadios"]:checked').trigger('change');
    });
</script>

@endsection
