<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <form action="{{ route("backend.add") }}" class="" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="" class="edit-id">
                            <div class="form-group">
                                <label>ชื่อจริง-นามสกุล</label>
                                <input type="text" name="name" class="form-control" placeholder="Name" required>
                            </div>
                            <div class="form-group">
                                <label>โปรไฟล์</label>
                                <input type="file" name="picture" class="form-control" accept="image/*" required>
                            </div>
                            <div class="form-group">
                                <label>บัตรประชาชน</label>
                                <input type="file" name="personal" class="form-control" accept="image/*" required>
                            </div>
                            <div class="form-group">
                                <label>ที่อยู่</label>
                                <textarea name="address" rows="3" class="form-control" required></textarea>
                            </div>
                            <div class="form-group">
                                <label>เบอร์โทรศัพท์ (ตัวเลขเท่านั้น)</label>
                                <input type="text" maxlength="10" name="number" class="form-control" placeholder="Telephone" required>
                            </div>
                            <div class="form-group">
                                <label>เฟสบุ๊ค</label>
                                <input type="text" class="form-control" name="facebook" placeholder="Facebook" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>