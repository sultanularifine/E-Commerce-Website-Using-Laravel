<div class="modal fade" role="dialog" id="editUniversity">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title">Edit University</h5>
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
                                    placeholder="Enter university name" required>
                            </div>
                            <div class="form-group col-md-12 col-sm-12">
                                <label for="name" class="font-weight-bold">Country</label>
                                <select class="form-control select2" name="country" required>
                                    @foreach ($countries as $country)
                                        <option value="{{ $country }}">{{ $country }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-12 col-sm-12">
                                <label for="website" class="font-weight-bold">Website</label>
                                <input type="text" class="form-control" name="website" id="website"
                                    placeholder="Enter university's website link">
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <label class="font-weight-bold">File</label>
                            </div>
                            <div class="form-group col-md-12 col-sm-12">
                                <input type="file" name="image" class="custom-file-input" placeholder=""
                                    accept="image/*">
                                <label class="custom-file-label mx-1" for="customFile">Choose file</label>
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
