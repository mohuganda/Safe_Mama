<div class="row justify-content-center">
	
    @foreach ($themes as $theme)
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-6 item" >
            <div class="cats-wrap text-center spot-item mt-1" style="z-index: 1000!important;">
                <a href="{{ url('records')}}?theme={{$theme->id}}" class="cats-box d-block rounded bg-white px-2 py-4">
                    <div class="text-center mb-2 mx-auto position-relative d-inline-flex align-items-center justify-content-center p-3 py-3 " >
                        <i class="{{$theme->icon}} x3 color-red"></i>
                    </div>
                    <div class="cats-box-caption">
                        <h4 class="fs-sm mb-0 ft-sm m-catrio color-black" data-bs-toggle="tool-tip" data-bs-title="{{truncate($theme->description,410)}}">{{truncate($theme->description,17)}}</h4>
                    </div>
                </a>
            </div>
        </div>
	@endforeach
</div>