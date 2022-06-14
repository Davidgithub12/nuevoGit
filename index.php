<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="bootstrap.min (6).css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>w
	<script>
		$(document).on("click","#btn-publicar",()=>{
			const user=$("#pub_usuario").val();
			const desc=$("#pub_descripcion").val();
			const img=$("#pub_imagen").val();
			const est=$("#pub_estado").val();
			$.ajax({
				url:'acciones_publicaciones.php',
				data:{user:user,desc:desc,img:img,est:est},
				type:'POST',
				dataType:'json',
				success:(data)=>{
					console.log(data);
					$("#estado").text(data[0].pub_estado);
					$("#publicaciones").text(data[0].pub_descripcion);
					if(data[0].pub_estado=="Hail Hittler") {
						$(".cont_publicacion").removeClass("bg-primary");
						$(".cont_publicacion").removeClass("bg-danger");
						$(".cont_publicacion").removeClass("bg-info");
						$(".cont_publicacion").removeClass("bg-succes");
					}
					if(data[0].pub_estado=="Troste unu") {
						$(".cont_publicacion").removeClass("bg-primary");
						$(".cont_publicacion").removeClass("bg-danger");
						$(".cont_publicacion").removeClass("bg-info");
						$(".cont_publicacion").removeClass("bg-succes");
					}
					if(data[0].pub_estado=="Enojao ùnú") {
						$(".cont_publicacion").removeClass("bg-primary");
						$(".cont_publicacion").removeClass("bg-danger");
						$(".cont_publicacion").removeClass("bg-info");
						$(".cont_publicacion").removeClass("bg-succes");
					}
				},
				error:(desc,estado)=>{},
			})

		 });
	</script>
</head>
<body>
	<h1 class="title title-success"> VN Book</h1>
	<div class="container">

	  <div class="row">
	  	<div class="col-md-6">
	  		<input type="text" placeholder="Usuario" class="form-control" id="pub_usuario">
			<textarea id="pub_descripcion" cols="30" rows="2" class="form-control"></textarea>
			<input type="file" id="pub_imagen" class="form-control">	
	  		<select id="pub_estado" class="form-control bg-dark">
			<option value="">Elija una opción</option>
			<option value="Hail Hittler">Hail Hittler</option>
			<option value="Troste unu">Troste unu</option>
			<option value="Enojao ùnú">Enojao ùnú</option>
		</select>
		<div class="d-grid gap-2">
				<button class="btn btn-danger" id="btn-publicar">Publicar</button>
			</div>
	  	</div>

	  	<div class="col-md-6">
	  		<img src="no_imagen.png" width="220px" alt="">
	  	</div>
	  </div>
	  
	  <div class="row">
	  	<div class="card" style="margin: 20px;width: 10cm;">
	  		<img src="a.jpg" class="card-img-top">
	  	<h3 id="estado">Estado</h3>
	  	<p class="card-text" id="publicacion">Descripcion</p>
	  	</div>
	  </div>		
	</div>
</body>
</html>