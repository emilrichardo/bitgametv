<?php include("includes/header.php") ?>		
<?php include("includes/nav.php") ?>


<div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar" class="bg-primary py-2  font2">
            
				<h5 class="mt-3 mx-4 h6 font-weight-ligth">Canales destacados</h5>
				<hr>

				<ul class="random-list">
					<li class="active">
						<img src="images/static/user.jpg" alt="">
						<span>
							<h4>Random stream</h4>
							<small>sodapoppin</small>
						</span>
						<i class="fas fa-heart"></i>
					</li>
					<li>
						<img src="images/static/user.jpg" alt="">
						<span>
							<h4>Random stream</h4>
							<small>sodapoppin</small>
						</span>
					</li>
					<li>
						<img src="images/static/user.jpg" alt="">
						<span>
							<h4>Random stream</h4>
							<small>sodapoppin</small>
						</span>
					</li>
				</ul>
            

            
        </nav>

        <!-- Page Content  -->
        <div id="content">
        	<div class="row">
        		<div class="col-lg-9">
        			<button type="button" id="sidebarCollapse" class="sb-collapse  h-100 px-2 d-flex align-items-center">
                        <i class="fas fa-angle-left"></i>
                       
                    </button>            
            <section class="streaming">
				<div class="container-fluids">
			                <nav class="streaming-nav px-4 py-3 text-light d-flex">
			                	<div class="user d-inline-block align-items-center mt-2 ">
										<img class="border border-danger rounded float-left mr-2" src="images/static/user.jpg" alt="">
										<p class="m-0 float-left"><span class="d-block"><a href="#" class="text-light">AKAWonder</a></span>
										<small>sodapoppin </small> 
										<small>Playing</small>
										</p>						
									</div>
									<div class="actions d-inline-block ml-auto my-2">
										<a href="#" class="btn btn-light btn-sm text-danger"> <i class="fas fa-heart"></i> SEGUIR</a>
										<a href="#" class="btn btn-light btn-sm text-danger mx-3"> SUSCRIBIRSE</a>

										<div class="dropdown d-inline-block ">
										  <button class="btn btn-sm btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										    Conseguir bits
										  </button>
										  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										    <a class="dropdown-item" href="#">Action</a>
										    <a class="dropdown-item" href="#">Another action</a>
										    <a class="dropdown-item" href="#">Something else here</a>
										  </div>
										</div>
									</div>
			                </nav>
			                <div class="video-content">
			                	<img class="w-100" src="images/static/streaming.jpg" alt="">
			                	<div class="bg-light border border-top-0 p-2">
			                		<div class="row justify-content-between">
			                			<div class="col-lg-6 title-game">
			                				<img src="images/static/producto.jpg" alt="">
			                				<h5 class="h6 mb-0 font2 mt-2">[ENG] Nobody online...Gotta watch Orzanel.</h5>
			                				<small class="text-secondary">World of Tanks - PUBG Partners</small>
			                			</div>
			                			<div class="col-lg-6 pt-2 text-right">
			                				<span class="text-danger mx-3">
			                					<i class="fas fa-user"></i>
			                				6.032.412</span>
			                				<span class="text-secondary mx-3">
			                					<i class="fas fa-eye"></i>
			                				6.032.412</span>
			                				<a href="#" class="btn btn-outline-danger btn-sm">
			                					<i class="fas fa-share mr-2"></i>
			                					Compartir
			                				</a>
			                				<a href="#" class="btn btn-outline-danger btn-sm">
			                					<i class="fas fa-ellipsis-v "></i>
			                				</a>
			                			</div>
			                		</div>
			                	</div>

			                </div>
			                
			            </div>
				
				</section>
        		</div><!-- col video -->
        		<div class="col-lg-3 bg-light p-0">
        			<div class="title-chat bg-primary py-3 px-2 text-light text-center">
        				<h3 class="h5">CHAT DE LA TRANSMISIÓN</h3>        				
        			</div>
        			<ul class="chat-list">
        					<li>
        						<p><strong class="text-primary">Nick Chat:</strong> ñuuuuuuuuuuuuub daun</p>

        					</li>
        					<li>
        						<p><strong class="text-primary">Khalendrya:</strong> Si te esta gustando el stream no olvides darle a Follow y sigueme en Twitter para saber cuando estoy conectado: </p>

        					</li>
        					<li>
        						<p><strong class="text-primary">Aloyris:</strong> enfadar de que D: encima q t apoyo</p>

        					</li>
        				</ul>

        				 <div class="form-char p-3">
        				 	<form action="">
        				 		<div class="form-group">
        				 								    <label for="exampleFormControlTextarea1">Example textarea</label>
        				 								    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        				 								  </div>
        				 	</form>
        				 </div>
        			
        		</div>
        	</div><!-- row -->
        	        	

            
        </div><!-- content -->
    </div>



<!-- Include  footer.php	 -->	
<?php include("includes/footer.php") ?>		