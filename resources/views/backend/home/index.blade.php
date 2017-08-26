@extends('frontend.layouts.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">

                        <h4 class="card-title">รายชื่อทั้งหมด [BACKEND]
                            <a class="btn btn-primary btn-sm" href="{{ url("/home") }}"><i class="fa fa-home"></i> Home</a><button data-toggle="modal" data-target="#" class="btn btn-warning btn-sm"><i class="fa fa-dashboard"></i> Create</button>

                        </h4>
                    <hr>
                </div>
                <div class="col-lg-12">
                    <table class="table table-bordered table-responsive datatable table-sm">
                        <thead>
                        <tr>
                            <th width="10%" class="text-center">M-ID</th>
                            <th>ชื่อ-นามสกุล</th>
                            <th>Facebook</th>
                            <th width="10%" class="text-center">Edit</th>
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
                                        <button data-toggle="modal" data-target="#exampleModal" class="btn btn-block btn-danger btn-sm" onclick="return edit({{ $data->id }})"><i class="fa fa-edit"></i> Edit</button>
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
    @include('backend.home.model')
@endsection
@push('js')
    <script>
        $(document).ready(function() {
            $('.datatable').DataTable();
        } );
    </script>
@endpush