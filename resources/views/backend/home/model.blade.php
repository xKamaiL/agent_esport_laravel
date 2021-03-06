<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit and Remove</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="{{ route("backend.edit") }}" class="" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="" class="edit-id">
                            <div class="form-group">
                                <label>ชื่อจริง-นามสกุล</label>
                                <input type="text" name="name" class="form-control edit-name" placeholder="Name" required>
                            </div>
                            <div class="form-group">
                                <label>โปรไฟล์</label>
                                <input type="file" name="picture" class="form-control" accept="image/*">
                            </div>
                            <div class="form-group">
                                <label>ที่อยู่</label>
                                <textarea name="address" rows="3" class="form-control edit-address" required></textarea>
                            </div>
                            <div class="form-group">
                                <label>เบอร์โทรศัพท์ (ตัวเลขเท่านั้น)</label>
                                <input type="text" maxlength="10" name="number" class="form-control edit-number" placeholder="Telephone" required>
                            </div>
                            <div class="form-group">
                                <label>เฟสบุ๊ค</label>
                                <input type="text" class="form-control edit-facebook" name="facebook" placeholder="Facebook" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            <a href="" class="btn btn-sm btn-outline-danger btn-remove">Remove</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('js')
    <script>
        function edit(id){
        $('.btn-remove').attr('href',"{{ url("backend/remove/") }}/" + id)
            $.get( $url + "/" + id, function( data ) {
                $(".edit-id").val(data.id);
                $(".edit-name").val(data.name);
                $(".edit-address").val(data.address);
                $(".edit-number").val(data.number);
                $(".edit-facebook").val(data.facebook);
            },'json');
        }
    </script>
@endpush