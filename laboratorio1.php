<HTML>
	<HEAD>
		<TITLE>nota final</TITLE>
	</HEAD>
	<BODY>
		  <CENTER><H1>LA NOTA FINAL ES:</H1></CENTER>
		  <BR>
		  <BR>
			<?php
 
				 $parcial1=$_POST['parcial1'];
				 $parcial2=$_POST['parcial2'];
				 $parcial3=$_POST['parcial3'];
				 $examenFinal=$_POST['examenFinal'];
				 $trabajoFinal=$_POST['trabajoFinal'];
				 $promedioParciales= ($parcial1 + $parcial2 + $parcial3)/3;
				 $porcentajeParciales= $promedioParciales*0.35;
				 $porcentajeExamen=$examenFinal*0.35;
				 $porcentajeTrabajo=$trabajoFinal*0.30;
				 $notaFinal=$porcentajeParciales+$porcentajeExamen+$porcentajeTrabajo;
				 
					  echo "La nota final es: ".$notaFinal."<br>";
				 
				 if($notaFinal<3){
					  echo "El estudiante no aprobó";
					}
				 
				 else{
					echo "El estudiante aprobó";
				  }
 
 
			?>
	</BODY>
</HTML>