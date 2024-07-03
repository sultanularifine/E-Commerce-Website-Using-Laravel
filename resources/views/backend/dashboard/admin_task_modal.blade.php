<div class="modal fade" tabindex="-1" role="dialog" id="addTask">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('tasks.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">New Task</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-12 col-sm-12">
                                <label for="task" class="font-weight-bold">Task<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="task" id="task"
                                    placeholder="Enter task" required>
                            </div>
                            <div class="form-group col-md-12 col-sm-12">
                                <label for="task_date">Expiration Date<span class="text-danger">*</span></label>
                                <input class="form-control" id="task_date" data-date-format="dd/mm/yyyy"
                                    placeholder="dd/mm/yyyy" name="task_date" autocomplete="off" required
                                    type="datetime-local">
                            </div>

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
