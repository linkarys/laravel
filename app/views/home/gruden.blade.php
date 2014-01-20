@extends('layouts.gruden')

@section('content')
<div class="jumbotron">
	<h1 class="text-center text-primary">Your face sounds familiar</h1>
	<p class="text-center"><small>喜闻乐见的好节目！</small></p>
</div>
<div class="row">

	<!-- content -->
	<div class="col-md-12 col-xs-12">
		<div data-spy="scroll" id="scroll-body" data-target="#nav-slide" data-offset="0" class="scrollspy-example">

			<!-- thumbnails -->
			<div class="row">
				@foreach ($videos as $video)
                    <div class="col-md-3 col-sm-6">
                    	<div class="thumbnail">
                    		<img src="" alt="" class="video-holder" data-src="holder.js/300x200/{{AppHelper::get_color($video->id - 1)}}/text:{{$video->user}}" data-toggle="modal" data-target="#md-video-{{$video->id}}">
                    	</div>
                    </div>

                    <div class="modal fade" id="md-video-{{$video->id}}" tabindex="-1" role="dialog" aria-labelledby="md-video-label" aria-hidden="true">
                    	<div class="modal-dialog">
                    		<div class="modal-content">
                    			<div class="modal-header">
                    				<button class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    				<h4 class="modal-title text-center" id="md-video-label">{{AppHelper::get_video_head($video->user)}}</h4>
                    			</div>
                    			<div class="modal-body">
                    				@if ($video->user != '?')
	                    				<video class="video" width="898" controls>
	                    				  <source src="data/videos/{{$video->addr}}" type="video/mp4">
	                    				</video>
									@endif

                    				@if ($video->user === '?')
                    					<div class="text">
                    						{{$video->addr}}
                    					</div>
									@endif

                    			</div>
                    			<div class="modal-footer">
                    				<button class="btn btn-danger close-btn" data-bind="md-video-{{$video->id}}" data-dismiss="modal">close</button>
                    			</div>
                    		</div>
                    	</div>
                    </div>
				@endforeach
			</div>
		</div>
	</div>

	<script>
		$('.close-btn').click(function() {
			var videoWrapper = $('#' + $(this).attr('data-bind'));
			if (videoWrapper.length) {
				videoWrapper.find('video')[0].pause();
				videoWrapper.prev().addClass('played');
			}
		})
	</script>
</div>
@stop
