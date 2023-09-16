@extends('layouts.plain')

@section('styles')

@endsection

@section('content')
<div class="bg-light padded-top" 
	style="background-image: url({{ asset('frontend/img/dots.png')}}); background-repeat:repeat-x; background-size:contain; margin-top:0px!important; padding-top:200px!important;">

<div class="row justify-content-center px-10 py-3 mb-5">

    <div class="card col-lg-12">
        <div class="card-header text-left bg-white">
            <h4 class="card-title float-left">Report an Incident</h4>
        </div>

        <div class="card-body text-left">
            @if(@$message)
             <div class="alert alert-danger">{{ $message }}</div>
            @endif
           <form method="POST" action="{{ route('incidents.publish') }}" id='incidents' class='incidents'>
            @csrf
            <div class="card-body">
               <div class="row">
                    
                 <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label" for="incident_title">Incident Title</label>
                                <input type="text" placeholder="Incident Title" class="form-control" id="incident_title" name="title" required>
                            </div>
                  </div>
                       

                <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label" for="summernote">Incident Description</label>
                                <textarea placeholder="Descripion" class="form-control newform" id="summernote" name="description" required></textarea>
                            </div>
                        </div>

                   
                        <div class="col-md-12" >
                            <div class="mb-3">
                                <label class="form-label" for="publication">Supporting Image</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image" id="image">
                                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                    <div class="cover_preview py-2"></div>
                                </div>
                            </div>
                        </div>


                </div>

            </div>
            <div class="card-footer  bg-white">
                <button class="btn btn-danger" type="reset" data-dismiss="modal" type="button">Cancel</button>
                <button class="btn btn-primary ml-1" type="submit">Submit</button>
            </div>

           </form>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
</div>

@endsection

@section('scripts')


@endsection
