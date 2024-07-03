<div class="modal fade" tabindex="-1" role="dialog" id="createStatus">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('status.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">New Status</h5>
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
                                    placeholder="Enter status name" required>
                            </div>
                            <div class="form-group col-md-12 col-sm-12">
                                <label for="type" class="font-weight-bold">Type<span class="text-danger">*</span></label>
                                <select class="form-control" name="type" id="type">
                                    <option value="1">Application (Europe)</option>
                                    <option value="2">Applicant (Malaysia)</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
