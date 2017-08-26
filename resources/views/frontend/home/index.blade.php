@extends('frontend.layouts.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="card-title">รายชื่อทั้งหมด</h4>
                    <hr>
                </div>
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
                            <tr>
                                <th scope="row" class="text-center">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>
                                    <div style="max-width: 80%">
                                        <button class="btn btn-block btn-primary btn-sm" onclick="return view(1)"><i class="fa fa-eye"></i> Info</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        $(document).ready(function() {
            $('.datatable').DataTable();
        } );
    </script>
@endpush