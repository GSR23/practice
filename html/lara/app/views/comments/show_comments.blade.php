<div class="container">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
	<div class="row">
		<!-- Main Container -->
		<div class="comments-container">
			<h1>Comments:</h1>
			<ul id="comments-list" class="comments-list">
				<li>
					<div class="comment-main-level">
						<!-- Avatar -->
						<div class="comment-avatar"><img src="" alt=""></div>
						<!-- Comment Container -->
						<div class="comment-box">
							<div class="comment-head">
								<h6 class="comment-name by-author"><a href="">Agustin Ortiz</a></h6>
								<span>hace 20 minutos</span>
								<i class="fa fa-reply" data-toggle="modal" data-target="#reply"></i>

								{{-- Modal for Reply --}}
								<div class="modal fade" id="reply" tabindex="-1" role="dialog" aria-labelledby="reply" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="widget-area no-padding blank">
												<div class="status-upload">
													<form>
														<textarea placeholder="What Do You think ?"></textarea>
														<ul>
															<li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Audio"><i class="fa fa-music"></i></a></li>
															<li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Video"><i class="fa fa-video-camera"></i></a></li>
															<li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Sound Record"><i class="fa fa-microphone"></i></a></li>
															<li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Picture"><i class="fa fa-picture-o"></i></a></li>
														</ul>
														<button type="submit" class="btn btn-success green"> Post Reply</button>
													</form>
												</div>
												<!-- Status Upload  -->
											</div>
										</div>
									</div>
								</div>

								<i class="fa fa-heart"></i>
							</div>
							<div class="comment-content">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
							</div>
						</div>
					</div>
					<!-- Comments Responses -->
					{{-- <ul class="comments-list reply-list">
						<li>
							<!-- Avatar -->
							<div class="comment-avatar"><img src="" alt=""></div>
							<!-- Contenedor del Comentario -->
							<div class="comment-box">
								<div class="comment-head">
									<h6 class="comment-name"><a href="">Lorena Rojero</a></h6>
									<span>hace 10 minutos</span>
									<i class="fa fa-reply"></i>
									<i class="fa fa-heart"></i>
								</div>
								<div class="comment-content">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
								</div>
							</div>
						</li>

						<li>
							<!-- Avatar -->
							<div class="comment-avatar"><img src="" alt=""></div>
							<!-- Contenedor del Comentario -->
							<div class="comment-box">
								<div class="comment-head">
									<h6 class="comment-name by-author"><a href="">Agustin Ortiz</a></h6>
									<span>hace 10 minutos</span>
									<i class="fa fa-reply"></i>
									<i class="fa fa-heart"></i>
								</div>
								<div class="comment-content">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
								</div>
							</div>
						</li>
					</ul> --}}
				</li>

				<li>
					<div class="comment-main-level">
						<!-- Avatar -->
						<div class="comment-avatar"><img src="" alt=""></div>
						<!-- Contenedor del Comentario -->
						<div class="comment-box">
							<div class="comment-head">
								<h6 class="comment-name"><a href="">Lorena Rojero</a></h6>
								<span>hace 10 minutos</span>
								<i class="fa fa-reply"></i>
								<i class="fa fa-heart"></i>
							</div>
							<div class="comment-content">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
