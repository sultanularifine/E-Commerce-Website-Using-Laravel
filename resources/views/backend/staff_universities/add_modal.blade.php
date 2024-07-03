<div class="modal fade" role="dialog" id="assignStaff">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('staffs.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Assign Staffs To Universities</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-12 col-sm-12">
                                <label for="university" class="font-weight-bold">Staff<span
                                        class="text-danger">*</span></label>
                                <select class="form-control select2" name="user_id" required>
                                    @foreach ($staffs as $staff)
                                        <option value="{{ $staff->id }}">{{ $staff->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-12 col-sm-12">
                                <label for="university" class="font-weight-bold">Universities<span
                                        class="text-danger">*</span></label>
                                <select class="form-control select2" name="university_ids[]" multiple="multiple"
                                 required>
                                    @foreach ($universities as $university)
                                        <option value="{{ $university->id }}">{{ $university->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="submit" class="btn btn-primary">Assign</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
