@extends('layouts.clerk-layout')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <h6 style="text-transform:uppercase;text-align: center;font-weight: bolder;margin-top:2em;">Incubatees</h6>
            {{--<a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>--}}
        </div>
        <div class="row" style="margin-left: 2em;margin-right: 2em;">
            <div class="col s12">
                <table class="table table-bordered" style="width: 100%!important;" id="users-table">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Start Up Name</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
        <div class="fixed-action-btn">
            <a class="btn-floating btn-large teal tooltipped btn modal-trigger" data-position="left" data-tooltip="Add New Incubatee" href="{{url('create-incubatee')}}">
                <i class="large material-icons">add</i>
            </a>

        </div>

    </div>
    @push('custom-scripts')

        <script>
            $(document).ready(function () {
                $(function () {
                    $('#users-table').DataTable({
                        processing: true,
                        serverSide: true,
                        paging: true,
                        responsive: true,
                        scrollX: 640,
                        ajax: '{{route('get-incubatees')}}',
                        columns: [
                            {data: 'name', name: 'name'},
                            {data: 'surname', name: 'surname'},
                            {data: 'email', name: 'email'},
                            {data: 'contact_number', name: 'contact_number'},
                            {data:'start_up.startup_name',name:'start_up.startup_name'},
                            {data: 'action', name: 'action', orderable: false, searchable: false}
                        ]
                    });
                    $('select[name="users-table_length"]').css("display","inline");
                });

            });

        </script>
    @endpush
@endsection
