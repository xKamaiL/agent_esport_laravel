@extends('frontend.layouts.app')
@section('content')
    <div class="card card-transparent">
        <div class="card-header">
            <i class="fa fa-lg fa-list"></i> รายชื่อทั้งหมด
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-bordered table-responsive datatable table-sm">
                        <thead>
                        <tr>
                            <th width="10%" class="text-center">M-ID</th>
                            <th>ชื่อ-นามสกุล</th>
                            <th>Facebook</th>
                            <th width="10%" class="text-center">More</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($List as $data)
                            <tr>
                                <th scope="row" class="text-center">{{ $data->id }}</th>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->facebook }}</td>
                                <td>
                                    <div style="max-width: 80%">
                                        <button class="btn btn-block btn-outline-warning btn-sm" onclick="return view({{ $data->id }})"><i class="fa fa-eye"></i> Info</button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('frontend.home.modal')
@endsection
@push('js')
    <script>
        $(document).ready(function() {
            $('.datatable').DataTable();
        } );
    </script>
@endpush