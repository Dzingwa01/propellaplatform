@extends('layouts.clerk-layout')

@section('content')
    <div class="container">
        <div class="row">
            <h6 style="text-transform:uppercase;text-align: center;font-weight: bolder;margin-top:2em;">Create
                Incubatee</h6>
            <div class="row">
                <div class="col s12">
                    <ul class="tabs">
                        <li class="tab col s6"><a href="#test1" class="active">Personal Details</a></li>
                        <li class="tab col s6"><a href="#test2">Start Up Details</a></li>
                    </ul>
                </div>
                <div id="test1" class="col s12">
                    <form id="incubatee-form" class="col s12" style="margin-top:1em;" enctype="multipart/form-data">
                        @csrf
                        {{--<h5>Personal Details</h5>--}}
                        <div class="row">
                            <div class="input-field col m6">
                                <input id="name" type="text" class="validate" required>
                                <label for="name">Name</label>
                            </div>
                            <div class="input-field col m6">
                                <input id="surname" type="text" class="validate" required>
                                <label for="surname">Surname</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col m6">
                                <input id="email" type="email" class="validate" required>
                                <label for="email">Email</label>
                            </div>
                            <div class="input-field col m6">
                                <input id="contact_number" type="tel" class="validate" required>
                                <label for="contact_number">Contact Number</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col m6">
                                <label for="short_bio">Short Biography</label>
                                <textarea id="short_bio" name="short_bio" class="materialize-textarea"></textarea>
                            </div>
                            <div class="input-field col m6">
                                <label for="elevator_pitch">Elevator Pitch</label>
                                <textarea id="elevator_pitch" name="elevator_pitch" class="materialize-textarea"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col m6">
                                <input id="facebook" type="text" class="validate">
                                <label for="facebook">Facebook URL</label>
                            </div>
                            <div class="input-field col m6">
                                <input id="linked_in" type="text" class="validate">
                                <label for="linked_in">Linked In</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col m6">
                                <input id="twitter" type="text" class="validate">
                                <label for="twitter">Twitter</label>
                            </div>
                            <div class="col m6">
                                <img src="" id="previewing">
                                <div class="file-field input-field" style="bottom:0px!important;">
                                    <div class="btn">
                                        <span>Upload Profile Picture</span>
                                        <input id="profile_picture_url" type="file">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src="" id="previewing_2">
                        <div class="row">
                            <div class="input-field col m12">
                                <button id="save-incubatee-personal-details" style="float:right;"
                                        class="btn waves-effect waves-light" type="submit">Submit
                                    <i class="material-icons right">send</i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div id="test2" class="col s12">
                    <form id="start_details_form" class="col s12" style="margin-top:1em;">
                        @csrf
                        {{--<h5>Personal Details</h5>--}}
                        <div class="row">
                            <div class="input-field col m6">
                                <input id="startup_name" type="text" class="validate">
                                <label for="startup_name">Startup Name</label>
                            </div>
                            <div class="input-field col m6">
                                <input id="ownership" type="text" class="validate">
                                <label for="ownership">Ownership</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col m6">
                                <select id="hub">
                                    <option value="" disabled selected>Choose hub</option>
                                    <option value="ICT">ICT</option>
                                    <option value="Industrial">Industrial</option>
                                </select>
                                <label>Hub</label>
                            </div>
                            <div class="input-field col m6">
                                <input id="cohort" type="text" class="validate">
                                <label for="cohort">Cohort</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col m6">
                                <select id="stage">
                                    <option value="" disabled selected>Choose Stage</option>
                                    <option value="Stage 1">Stage 1</option>
                                    <option value="Stage 2">Stage 2</option>
                                    <option value="Stage 3">Stage 3</option>
                                </select>
                                <label>Stage</label>
                            </div>
                            <div class="input-field col m6">
                                <select id="smart_city_tags" multiple>
                                    <option value="" disabled selected>Choose Tags</option>
                                    <option value="Smart Business">Smart Business</option>
                                    <option value="Smart Community">Smart Community</option>
                                    <option value="Smart Healthcare">Smart Healthcare</option>
                                    <option value="Smart Living">Smart Living</option>
                                    <option value="Smart Mobility">Smart Mobility</option>
                                </select>
                                <label>Smart City Tags
                                </label>
                            </div>

                        </div>

                        <div class="row">
                            <div class="input-field col m6">
                                <select id="b_type">
                                    <option value="" disabled selected>Choose option</option>
                                    <option value="B2B">B2B</option>
                                    <option value="B2C">B2C</option>
                                </select>
                                <label>B-Type</label>
                            </div>
                            <div class="input-field col m6">
                                <label for="company_website"> Company Website</label>
                                <input id="company_website" type="text" class="validate">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col m6">
                                <input id="product_platform" type="text" class="validate">
                                <label for="product_platform">Product Platform</label>
                            </div>
                        </div>
                        <h4>Startup Media</h4>
                        <div class="row">
                            <div class="col m6">
                                <div class="file-field input-field" style="bottom:0px!important;">
                                    <div class="btn">
                                        <span>Upload Logo</span>
                                        <input id="logo_url" type="file">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col m6">
                                <div class="file-field input-field" style="bottom:0px!important;">
                                    <div class="btn">
                                        <span>Upload Video Shot</span>
                                        <input id="video-shot" type="file">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col m12">
                                <button id="save-incubatee-startup-details" style="float:right;"
                                        class="btn waves-effect waves-light" type="submit" name="action">Submit
                                    <i class="material-icons right">send</i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>
    <style>
        .tabs .tab a:hover, .tabs .tab a.active {
            color: black !important;
            font-weight: bolder;
        }

        .tabs .tab a {
            color: black !important;
        }
    </style>
    @push('custom-scripts')
        <script>
            let incubatee = {};
            $(document).ready(function () {


            });
            // Function to preview image after validation
            $(function () {
                $("#profile_picture_url").change(function () {
                    $("#message").empty(); // To remove the previous error message
                    var file = this.files[0];
                    var imagefile = file.type;
                    var match = ["image/jpeg", "image/png", "image/jpg"];
                    if (!((imagefile == match[0]) || (imagefile == match[1]) || (imagefile == match[2]))) {
                        $('#previewing').attr('src', 'noimage.png');
                        $("#message").html("<p id='error'>Please Select A valid Image File</p>" + "<h4>Note</h4>" + "<span id='error_message'>Only jpeg, jpg and png Images type allowed</span>");
                        return false;
                    }
                    else {
                        var reader = new FileReader();
                        reader.onload = imageIsLoaded;
                        reader.readAsDataURL(this.files[0]);
                    }
                });
            });
            function imageIsLoaded(e) {
                $("#profile_picture_url").css("color", "green");
                $('#image_preview').css("display", "block");
                $('#previewing').attr('src', e.target.result);
                $('#previewing').attr('width', '250px');
                $('#previewing').attr('height', '230px');
            }

            $('#incubatee-form').on('submit', function (e) {
                e.preventDefault();
                let formData = new FormData();
                formData.append('name', $('#name').val());
                formData.append('surname', $('#surname').val());
                formData.append('email', $('#email').val());
                formData.append('contact_number', $('#contact_number').val());
                formData.append('short_bio', $('#short_bio').val());
                formData.append('elevator_pitch', $('#elevator_pitch').val());
                formData.append('facebook', $('#facebook').val());
                formData.append('linked_in', $('#linked_in').val());
                formData.append('twitter', $('#twitter').val());
                jQuery.each(jQuery('#profile_picture_url')[0].files, function (i, file) {
                    formData.append('profile_picture_url', file);
                });
                console.log("user ", formData);

                $.ajax({
                    url: "{{ route('incubatee.store') }}",
                    processData: false,
                    contentType: false,
                    data: formData,
                    type: 'post',

                    success: function (response, a, b) {
                        console.log("success", response);
                        alert(response.message);
                        incubatee = response.incubatee;

                    },
                    error: function (response) {
                        console.log("error", response);
                        let message = error.response.message;
                        let errors = error.response.errors;

                        for (var error in   errors) {
                            console.log("error", error)
                            if (errors.hasOwnProperty(error)) {
                                message += errors[error] + "\n";
                            }
                        }
                        alert(message);
                        $("#modal1").close();
                    }
                });
            });

            $('#start_details_form').on('submit',function(e){
                e.preventDefault();
                let formData = new FormData();
                formData.append('startup_name', $('#startup_name').val());
                formData.append('hub', $('#hub').val());
                formData.append('smart_city_tags', $('#smart_city_tags').val());
                formData.append('b_type', $('#b_type').val());
                formData.append('company_website', $('#company_website').val());
                formData.append('product_platform', $('#product_platform').val());
                formData.append('cohort', $('#cohort').val());
                formData.append('stage', $('#stage').val());

                jQuery.each(jQuery('#logo_url')[0].files, function (i, file) {
                    formData.append('logo_url', file);
                });
                console.log("user ", formData);
                let url = 'incubatee-update/'+incubatee.id;
                $.ajax({
                    url: url,
                    processData: false,
                    contentType: false,
                    data: formData,
                    type: 'post',

                    success: function (response, a, b) {
                        console.log("success", response);
                        alert(response.message);
                        window.location.href = 'incubatees';
                    },
                    error: function (response) {
                        console.log("error", response);
                        let message = error.response.message;
                        let errors = error.response.errors;

                        for (var error in   errors) {
                            console.log("error", error)
                            if (errors.hasOwnProperty(error)) {
                                message += errors[error] + "\n";
                            }
                        }
                        alert(message);
//                        $("#modal1").close();
                    }
                });
            });
        </script>
    @endpush
@endsection
