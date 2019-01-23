@extends('layouts.clerk-layout')

@section('content')
    <div class="container">
        <div class="row">
            <h6 style="text-transform:uppercase;text-align: center;font-weight: bolder;margin-top:2em;">Create Incubatee</h6>

            <form class="col s12 card">
                @csrf
                <div class="row">
                    <div class="input-field col m6">
                        <input id="name" type="text" class="validate">
                        <label for="name">Name</label>
                    </div>
                    <div class="input-field col m6">
                        <input id="surname" type="text" class="validate">
                        <label for="surname">Surname</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col m6">
                        <input id="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                    <div class="input-field col m6">
                        <input id="contact_number" type="tel" class="validate">
                        <label for="contact_number">Contact Number</label>
                    </div>
                </div>
                <div class="row">

                </div>

            </form>
        </div>


    </div>
    @push('custom-scripts')

        <script>
            $(document).ready(function () {


            });
            $('#save-user').on('click',function(){
                let formData = new FormData();
                formData.append('name', $('#name').val());
                formData.append('surname', $('#surname').val());
                formData.append('email', $('#email').val());
                formData.append('contact_number', $('#contact_number').val());
//                formData.append('job_title', $('#job_title').val());
                formData.append('role_id', $('#role_id').val());
                console.log("user ", formData);

                $.ajax({
                    url: "{{ route('users.store') }}",
                    processData: false,
                    contentType: false,
                    data: formData,
                    type: 'post',

                    success: function (response, a, b) {
                        console.log("success",response);
                        alert(response.message);
                        window.location.reload();
                    },
                    error: function (response) {
                        console.log("error",response);
                        let message = error.response.message;
                        let errors = error.response.errors;

                        for (var error in   errors) {
                            console.log("error",error)
                            if( errors.hasOwnProperty(error) ) {
                                message += errors[error] + "\n";
                            }
                        }
                        alert(message);
                        $("#modal1").close();
                    }
                });
            });
        </script>
    @endpush
@endsection
