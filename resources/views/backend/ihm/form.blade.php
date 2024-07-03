<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>IHM - Apply</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/backend/img/logo.png') }}">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/backend/library/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/backend/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/backend/library/selectric/public/selectric.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/backend/library/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/backend/library/select2/dist/css/select2.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/backend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/backend/css/components.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.1/toastr.min.css"
        integrity="sha512-LEetX42b+K0TTmnfCNxYOrVTLlg36s06bJ8cutF3BpQT3VnpzdeqoYfn+FW2KBi/imYk2RpfQzlyzY7CrRW4CQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                {{-- <div class="row"> --}}
                <!-- Header -->
                <div class="login-brand">
                    <img src="{{ asset('assets/backend/img/ihm.png') }}"
                        alt="logo"
                        width="200"
                        class="">
                </div>

                <!-- Content -->
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4 class="text-uppercase">Application Form</h4>
                        </div>

                        <div class="card-body">
                            <form action="{{ route('ihm.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="Name">Name (as per NRIC/Passport)<span
                                                class="text-danger">*</span> </label>
                                        <input type="text" name="name" class="form-control" id="Name"
                                            required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="mobile">Mobile No<span class="text-danger">*</span> </label>
                                        <input type="text" name="mobile" class="form-control" id="mobile"
                                            required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="email">Email<span class="text-danger">*</span> </label>
                                        <input type="email" name="email" class="form-control" id="email"
                                            required>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="birth_date">Date of Birth<span class="text-danger">*</span> </label>
                                        <input class="datepicker form-control" name="birth_date" required
                                            autocomplete="off">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="passport">Passport No<span class="text-danger">*</span> </label>
                                        <input type="text" name="passport" class="form-control" id="passport"
                                            required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="passport_expire">Passport Expire Date<span
                                                class="text-danger">*</span> </label>
                                        <input class="datepicker form-control" name="passport_expire"
                                            data-date-format="dd/mm/yyyy" placeholder="dd/mm/yyyy" required
                                            autocomplete="off">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="maritial_status">Maritial Status<span class="text-danger">*</span>
                                        </label>
                                        <select id="maritial_status" name="maritial_status" class="form-control"
                                            required>
                                            <option value="Single" selected>Single</option>
                                            <option value="Married">Married</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="gender">Gender<span class="text-danger">*</span> </label>
                                        <select id="gender" name="gender" class="form-control" required>
                                            <option disabled selected></option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="nationality">Nationality<span class="text-danger">*</span>
                                        </label>
                                        <input type="text" name="nationality" class="form-control"
                                            id="nationality" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="country_of_residence">Country of Residence<span
                                                class="text-danger">*</span>
                                        </label>
                                        <select class="form-control select2" name="country_of_residence" required>
                                            <option selected disabled></option>
                                            @foreach ($countries as $country)
                                                <option value="{{ $country }}">{{ $country }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="address">Address<span class="text-danger">*</span></label>
                                    <input type="text" name="address" class="form-control" id="address"
                                        required>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="ssc">SSC/Equivalent<span class="text-danger">*</span>
                                        </label>
                                        <input type="text" name="ssc" class="form-control" id="ssc"
                                            required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="ssc_year">Year of Completion<span class="text-danger">*</span>
                                        </label>
                                        <input type="text" name="ssc_year" class="form-control" id="ssc_year"
                                            required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="ssc_institute">Institute </label>
                                        <input type="text" name="ssc_institute" class="form-control"
                                            id="ssc_institute">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="ssc_cgpa">CGPA<span class="text-danger">*</span> </label>
                                        <input type="text" name="ssc_cgpa" class="form-control" id="ssc_cgpa"
                                            required>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="hsc">HSC/Diploma/Equivalent </label>
                                        <input type="text" name="hsc" class="form-control" id="hsc">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="hsc_year">Year of Completion</label>
                                        <input type="text" name="hsc_year" class="form-control" id="hsc_year">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="hsc_institute">Institute </label>
                                        <input type="text" name="hsc_institute" class="form-control"
                                            id="hsc_institute">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="hsc_cgpa">CGPA </label>
                                        <input type="text" name="hsc_cgpa" class="form-control" id="hsc_cgpa">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="proof_of_language">Proof of Language (IELTS/TOEFL/etc) </label>
                                        <input type="text" name="proof_of_language" class="form-control"
                                            id="proof_of_language">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="ielts">Language Score (if any) </label>
                                        <input type="text" name="ielts" class="form-control" id="ielts">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="intake_month">Intake Month</label>
                                        <select id="intake_month" name="intake_month" class="form-control">
                                            <option disabled selected></option>
                                            <option value="January">January</option>
                                            <option value="February">February</option>
                                            <option value="March">March</option>
                                            <option value="April">April</option>
                                            <option value="May">May</option>
                                            <option value="June">June</option>
                                            <option value="July">July</option>
                                            <option value="August">August</option>
                                            <option value="September">September</option>
                                            <option value="October">October</option>
                                            <option value="November">November</option>
                                            <option value="December">December</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="intake_year">Intake Year</label>
                                        <select id="intake_year" name="intake_year" class="form-control">
                                            <option disabled selected></option>
                                            @foreach (array_reverse(range(date('Y') + 5, $earliest_year)) as $x)
                                                <option value="{{ $x }}">{{ $x }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="subject_of_interest1">Subject of Interest</label>
                                        <input type="text" name="subject_of_interest1" class="form-control"
                                            id="subject_of_interest1">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="source">How do you know about us? </label>
                                        <select id="source" name="source" class="form-control">
                                            <option disabled selected></option>
                                            <option value="Social Media">Social Media</option>
                                            <option value="Google">Google</option>
                                            <option value="Agent">Consultant</option>
                                            <option value="Newspaper">Newspaper</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="agent_id">Referrer Name</label>
                                        <input type="text" name="agent_id" class="form-control" id="agent_id">
                                        {{-- <select id="agent_id" name="agent_id" class="form-control">
                                                <option selected></option>
                                                @foreach ($agents as $agent)
                                                    <option value="{{ $agent->id }}">{{ $agent->agency_name }}</option>
                                                @endforeach
                                            </select> --}}
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>{{ __('Photo') }}<span class="text-danger">*</span></label>
                                        <div class="col-md-12 col-sm-12">
                                            <input id="photo" type="file" class="custom-file-input"
                                                name="photo" value="{{ old('photo') }}" required
                                                autocomplete="photo" accept="image/*">
                                            <label class="custom-file-label" for="photo">Choose file</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>{{ __('Passport Info Page') }}<span
                                                class="text-danger">*</span></label>
                                        <div class="col-md-12 col-sm-12">
                                            <input id="passport_info" type="file" class="custom-file-input"
                                                name="passport_info" value="{{ old('passport_info') }}" required
                                                autocomplete="passport_info">
                                            <label class="custom-file-label" for="passport_info">Choose file</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>{{ __('Academic Docs') }}<span class="text-danger">*</span></label>
                                        <div class="col-md-12 col-sm-12">
                                            <input id="academic_docs" type="file" class="custom-file-input"
                                                name="academic_docs" value="{{ old('academic_docs') }}" required
                                                autocomplete="academic_docs">
                                            <label class="custom-file-label" for="academic_docs">Choose file</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>{{ __('Passport All Pages') }}</label>
                                        <div class="col-md-12 col-sm-12">
                                            <input id="passport_all" type="file" class="custom-file-input"
                                                name="passport_all" value="{{ old('passport_all') }}"
                                                autocomplete="passport_all">
                                            <label class="custom-file-label" for="passport_all">Choose file</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>{{ __('Health Declaration') }}</label>
                                        <div class="col-md-12 col-sm-12">
                                            <input id="health" type="file" class="custom-file-input"
                                                name="health" value="{{ old('health') }}" autocomplete="health">
                                            <label class="custom-file-label" for="health">Choose file</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>{{ __('Others') }}</label>
                                        <div class="col-md-12 col-sm-12">
                                            <input id="others" type="file" class="custom-file-input"
                                                name="others" value="{{ old('others') }}" autocomplete="others">
                                            <label class="custom-file-label" for="others">Choose file</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <p class="text-bold font-italic my-4">
                                        <span class="text-danger">**</span> We believe the above information given by
                                        you is True and
                                        Correct.
                                        Hence, we will be using the
                                        above given information in further process. <span class="text-danger">**</span>
                                        <br>
                                        <span class="text-danger">**</span> The above-mentioned particulars are for our
                                        basic
                                        information
                                        only.
                                        We will do preliminary
                                        Assessment Report once we receive your updated Resume. <span
                                            class="text-danger">**</span>
                                    </p>

                                    <button type="submit" class="btn btn-primary">SUBMIT APPLICATION</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Footer -->
                <div class="simple-footer">
                    Copyright &copy; βCoders 2023
                </div>
                {{-- </div> --}}
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('assets/backend/library/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/backend/library/popper.js/dist/umd/popper.js') }}"></script>
    <script src="{{ asset('assets/backend/library/tooltip.js/dist/umd/tooltip.js') }}"></script>
    <script src="{{ asset('assets/backend/library/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/backend/library/jquery.nicescroll/dist/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('assets/backend/library/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/stisla.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.1/toastr.min.js"
        integrity="sha512-pi7w4/MYBJ/7/NFGQ1OCInentlT3CCVVKU2udjNRWhxIOY5K2vxSPKYEa6EKbEZvHkgyEB8SMlSU8E84Ig81Og=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('assets/backend/library/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('assets/backend/library/select2/dist/js/select2.min.js') }}"></script>

    <!-- Template JS File -->
    <script src="{{ asset('assets/backend/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/backend/js/custom.js') }}"></script>
    <script>
        @if (Session::has('success'))

            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.success("{{ Session::get('success') }}");
        @endif

        @if (Session::has('error'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.error("{{ session('error') }}");
        @endif

        @if (Session::has('info'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.info("{{ session('info') }}");
        @endif

        @if (Session::has('warning'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.warning("{{ session('warning') }}");
        @endif
    </script>
</body>

</html>
