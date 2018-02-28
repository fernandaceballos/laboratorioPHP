<HTML>
	<HEAD>
		<TITLE>descuento del articulo</TITLE>
	</HEAD>
	<BODY>
	<CENTER><H1>DESCUENTO DEL ARTICULO</H1></CENTER>
			<?php
 
				 $nombre=$_POST['nombre'];
				 $clave=$_POST['clave'];
				 $precio=$_POST['precio'];
				  
				 echo "El nombre del articulo es: ".$nombre."<br>";
				 echo "La clave de descuento es: ".$clave."<br>";
				 echo "El precio original del articulo es: ".$precio."<br>";
				   
				 if($clave==1){
					  $total=$precio-($precio*0.1);
					  echo "El precio con descuento es: ".$total."<br>";
						 }
						 else{
						  if($clave==2){
						   $total=$precio-($precio*0.2);
						   echo "El precio con descuento es: ".$total."<br>";
						  }
						  else{
							   echo "Esa clave no existe";
							  }
							 }
 
 
			?>
	</BODY>
</HTML>	