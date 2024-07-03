<div class="modal fade" role="dialog" id="editSubject">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title">Edit Subject</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-12 col-sm-12">
                                <label for="name" class="font-weight-bold">Name<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="name" id="name"
                                    placeholder="Enter subject name" required>
                            </div>
                            <div class="form-group col-md-12 col-sm-12">
                                <label for="tuition_fee" class="font-weight-bold">Tuition Fee</label>
                                <input type="text" class="form-control" name="tuition_fee" id="tuition_fee"
                                    placeholder="Enter tuition fee">
                            </div>
                            <div class="form-group col-md-12 col-sm-12">
                                <label for="university" class="font-weight-bold">Universities<span
                                        class="text-danger">*</span></label>
                                <select class="form-control select2" name="university_id" required>
                                    @foreach ($universities as $university)
                                        <option value="{{ $university->id }}">{{ $university->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <label for="comments" class="font-weight-bold">Comments</label>
                                <span class="">
                                    <input type="text" class="form-control" name="comments">
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
