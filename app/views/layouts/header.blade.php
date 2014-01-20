<!-- login form -->
<div class="modal fade" id="login-form" tabindex="-1" role="dialog" aria-labelledby="modal-label" aria-hidden="true">
	{{ Form::open(array('url'=>'users/signin', 'class'=>'form-signin form-horizontal modal-dialog')) }}
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="modal-label">Please Login</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="form-group">
						{{ Form::label('firstname', 'First Name:', array('class'=>'control-label col-md-3'))}}
						<div class="col-md-8">{{ Form::text('firstname', null, array('class'=>'form-control', 'placeholder'=>'First Name')) }}</div>
					</div>
				</div>
				<div class="row">
					<div class="form-group">
						{{ Form::label('password', 'Password:', array('class'=>'control-label col-md-3'))}}
						<div class="col-md-8">{{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password')) }}</div>
					</div>
				</div>
				<div class="row">
					<div class="form-group">
						<label for="" class="col-md-3 control-label">Remerber:</label>
						<div class="col-md-8">
							<div class="checkbox-inline">
								<label for="remerber-me">
									<input type="checkbox" name="" id="remerber-me">
									 me
								</label>
							</div>
							<div class="checkbox-inline">
								<label for="remerber-zhuxiaoay">
									<input type="checkbox" name="" id="remerber-zhuxiaoay">
									zhuxiaoay
								</label>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				{{ Form::button('Close', array('class'=>'btn btn-danger', 'data-dismiss'=>'modal'))}}
				{{ Form::submit('Login', array('class'=>'btn btn-default btn-primary'))}}
			</div>
		</div><!-- /.modal-content -->
	{{ Form::close() }}
</div>
<!-- login end -->
