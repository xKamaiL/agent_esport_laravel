<div class="modal fade" id="view_m" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ข้อมูลขั้นสูง</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                            <center>
								<img src="" class="img-circle view-personal" style="border-radius: 10%;" width="350" height="200">
                                <img src="" class="img-circle view-img" style="border-radius: 10%;" width="250" height="200">
                                <hr>
                            </center>
                            <div class="form-group">
                                <label>ชื่อจริง-นามสกุล</label>
                                <input type="text" class="form-control view-name" disabled>
                            </div>
                            <div class="form-group">
                                <label>ที่อยู่</label>
                                <textarea name="address" rows="3" class="form-control view-address" disabled></textarea>
                            </div>
                            <div class="form-group">
                                <label>เบอร์โทรศัพท์ (ตัวเลขเท่านั้น)</label>
                                <input type="text" class="form-control view-number" disabled="">
                            </div>
                            <div class="form-group">
                                <label>เฟสบุ๊ค</label>
                                <input type="text" class="form-control view-facebook" disabled="">
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('js')
    <script>
        function edit(id){

        }
    </script>
@endpush