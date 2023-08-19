<!--  Extra Large modal example -->
<div class="modal" id="create-modal">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myExtraLargeModalLabel">Create Indicator</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{ url('admin/kpi/save') }}" method="post" id='filetypes' class='filetypes'>
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="id" id="id" class="newform">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label" for="name">Indicator Name</label>
                                <input type="text" placeholder="Indicator Name" class="form-control newform" id="name" name="name" required>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label" for="description">Indicator Description</label>
                                <textarea placeholder="Description" class="form-control newform" id="description" name="description" required></textarea>
                            </div>
                        </div>

                        <!-- Select2 Subject Area Dropdown -->
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label" for="subject_area">Subject Area</label>
                                <select class="form-control select2" name="subject_area" id="subject_area" required>
                                    <option value="">Select Subject Area</option>
                                    @foreach($subject_areas as $row)
                                    <option value="{{ $row->id }}">{{ $row->name }}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label" for="frequency">Frequency</label>
                                <!-- Choose Frequency -->
                                <select class="form-control select2" name="frequency" id="frequency" required>
                                    <option value="">Select Frequency</option>
                                    <option value="Monthly">Monthly</option>
                                    <option value="Quarterly">Quarterly</option>
                                    <option value="Yearly">Yearly</option>
                                </select>
                            </div>
                        </div>

                        <!-- <div  class="col-md-4"> -->
                        <!-- </div> -->
                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" data-dismiss="modal" type="button">Cancel</button>
                    <button class="btn btn-primary" type="submit">Save Record</button>
                </div>

            </form>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>