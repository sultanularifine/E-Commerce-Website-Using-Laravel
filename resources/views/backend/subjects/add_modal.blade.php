<div class="modal fade" tabindex="-1" role="dialog" id="createSubject">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('subjects.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">New Subject</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <div class="form-row">
                            <div class="col-md-12 col-sm-12">
                                <label for="name" class="font-weight-bold">Name<span
                                        class="text-danger">*</span></label>
                                <span class="newRow">
                                    <input type="text" class="form-control" name="names[]" required>
                                </span>
                                <span class="float-right btn btn-sm btn-info mt-1" id="addInput"><i
                                        class="fas fa-plus"></i></span>
                            </div>
                            <div class="form-group col-md-12 col-sm-12">
                                <label for="university" class="font-weight-bold">Universities<span
                                        class="text-danger">*</span></label>
                                <select class="form-control select2" name="university_ids[]" multiple="multiple"
                                    id="select2" required>
                                    @foreach ($universities as $university)
                                        <option value="{{ $university->id }}">{{ $university->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @role('Super Admin')
                                <div class="col-md-12 col-sm-12">
                                    <label for="comments" class="font-weight-bold">Comments</label>
                                    <span class="">
                                        <input type="text" class="form-control" name="comments">
                                    </span>
                                </div>
                            @endrole
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="submit" class="btn btn-primary">Add</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        $(function() {
            $('#addInput').click(function() {
                $('.newRow').append('<input type="text" class="form-control my-2" name="names[]">');
            })
        })
    </script>
@endpush
