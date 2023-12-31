@extends('layouts.app')

@section('styles')

@endsection

@section('content')
<div class="gray">
    <!-- ======================= Publication Info ======================== -->
	<div class="bg-light  rounded py-5" style="background-image: url( {{ url('frontend/img/dots.png') }}); background-repeat:repeat-x; background-size:contain;">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-12">
					<div class="jbd-01 d-flex align-items-center justify-content-between">
						<div class="jbd-flex d-flex align-items-center justify-content-start">
							<div class="jbd-01-thumb">
								
							</div>
							<div class="jbd-01-caption pl-3">
								<div class="tbd-title">
									<h3 class="mb-0 ft-medium fs-lg">
                                        {{ $title ?? 'Privacy Policy' }}
									</h3>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ======================= Publication Info ======================== -->

<div class="container">
	<div class="row  py-1 pb-5">

     <div class="card col-lg-12 py-3">
     	{!! nl2br($policy) !!}
	</div>
</div>
</div>
</div>
@endsection