<div class="modal fade" tabindex="-1" role="dialog" id="createPackage">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('packages.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">New Special Promotion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-12 col-sm-12">
                                <label for="name" class="font-weight-bold">Name<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="name" id="name"
                                    placeholder="Enter package name" required>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <label class="font-weight-bold">File<span class="text-danger">*</span></label>
                            </div>
                            <div class="form-group col-md-12 col-sm-12">
                                <input type="file" name="file" class="custom-file-input" placeholder="" required>
                                <label class="custom-file-label mx-1" for="customFile">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="submit" class="btn btn-primary">Upload</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
