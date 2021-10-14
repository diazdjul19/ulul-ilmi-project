@extends('layouts.master-landingpage')
@section('content-landingpage')
    <div class="whole-wrap">
        <div class="container">
            <div class="section-top-border">
                <div class="main_title text-center p-0">
        			<h2>Gallery Kami</h2>
        			<p>Gallery Kami berisi dokumentasi kegiatan yang pernah di lakukan oleh warga Pondok Pesantren ULUL ILMI.</p>
        		</div>
                <div class="row gallery-item">
                    @foreach ($data_gallery_other as $d)
						<div class="col-md-3 text-center p-2">
							<a class="img-gal" href="{{url('/storage/image/'.$d->image)}}" target="_blank" rel="noopener noreferrer" data-toggle="tooltip" data-placement="right" title="View Image">
								<img class="img-fluid" style="border-radius:2%; width:100%; height:200px;" src="{{url('/storage/image/'.$d->image)}}">
							</a>
						</div>
					@endforeach
                </div>
                <br>
                <div class="d-flex mt-2 mr-5 flex-wrap justify-content-center">
                    <nav class="">
                    <ul class="pagination separated pagination-info">
                        <li class="page-item">{{$data_gallery_other->links()}}</li>
                    </ul>
                    </nav>
                </div>
            </div>

            
        </div>
    </div>


@endsection