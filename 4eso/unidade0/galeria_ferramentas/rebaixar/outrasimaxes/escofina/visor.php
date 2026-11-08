<?php


/********************************************************************

	Para usar este visor es necesario añadir la linea 
	
	<?php include("visor.php"); ?>
	
	Añadir el evento
	
		onLoad="PrepararImagenes()";
		
	a la etiqueta body de la pagina, crear una etigueta 
	
	<div id="Contenido_Visor"></div>
	
	en el lugar en el que queremos las fotos.
	
*********************************************************************/


function Leer($archivo)
{

	$foto=array();
	$titulo=array();
	$descripcion=array();
	if(file_exists($archivo)){
		$gestor = fopen($archivo,"r");
		while ($fotos = fgetcsv($gestor,512)) {
	    	list ($a, $b, $c) = $fotos;
			array_push($foto,$a);
			array_push($titulo,$b);
			array_push($descripcion,$c);
			$contador=count($foto);
			}
		fclose($gestor);
		}
	else
		{
		$foto = array ("uno");
		/*poñer a continuación o directorio das imaxes*/	
		$dir = opendir("imaxes");
		while( ( $item = readdir($dir)) !== false)
			{	
			if($item == ".")
				continue;
			if($item == "..")
				continue;
			if(!strpos(strtolower($item),".jpg"))
				continue;
			array_push($foto,$item);
			array_push($titulo,"&nbsp;");
			array_push($descripcion,"&nbsp;");
			}
		array_shift($foto);
		closedir($dir);
		$contador = count ($foto);
		}	

	
	echo "fotos=[";
	foreach ($foto as $item){
	
/**********************************************************************

	imaxes -> directorio que contiene las imagenes a mostrar
	
***********************************************************************/

	echo "'imaxes/$item',";
	}
	echo "''];\n";

	echo "\ttitulos=[";
	foreach ($titulo as $item){
	echo "'$item',";
	}
	echo "''];\n";

	echo "\tdescripcion=[";
	foreach ($descripcion as $item){
	echo "'$item',";
	}
	echo "''];\n";

	echo "\tcontador=$contador;\n";
	echo "\tindice=0;";

}
	
?>

<script type="text/javascript" language="JavaScript1.2">
contenido_html="";

function Recargar()
	{
	div_imagen = document.all ? document.all['imagen'] : document.getElementById('imagen');
	contenido_html="<img src='"+fotos[indice]+"' alt='"+fotos[indice]+"' height='320px' vspace='4' hspace='4' />";
	div_imagen.innerHTML = contenido_html;
	
	div_titulo_imagen = document.all ? document.all['titulo_imagen'] : document.getElementById('titulo_imagen');
	contenido_html=titulos[indice];
	div_titulo_imagen.innerHTML = contenido_html;
	
	div_descripcion_imagen = document.all ? document.all['descripcion_imagen'] : document.getElementById('descripcion_imagen');
	contenido_html=descripcion[indice];
	div_descripcion_imagen.innerHTML = contenido_html;

	div_anterior_imagen = document.all ? document.all['anterior_imagen'] : document.getElementById('anterior_imagen');

	if(indice!=0){
		contenido_html="<a href='#' onClick="+"'foto(0)'"+">&lt;&lt; Primeira</a>  |   <a href='#' onClick="+"'foto(indice-1)'"+">&lt; Anterior</a>";
		}
	else
		{
		contenido_html = '';
		}

	div_anterior_imagen.innerHTML = contenido_html;

	div_siguiente_imagen = document.all ? document.all['siguiente_imagen'] : document.getElementById('siguiente_imagen');

	if(indice!=contador-1){		
		
		contenido_html="<a href='#' onClick="+"'foto(indice+1)'"+">Seguinte &gt;</a>  |   <a href='#' onClick="+"'foto(contador-1)'"+">Última &gt;&gt;</a>";

		}
	else
		{
		contenido_html = '';
		}				
	div_siguiente_imagen.innerHTML = contenido_html;
	}
	
function foto(i)
	{
	indice=i;
	
	if(indice<0)
		indice=0;
	if(indice>contador-1)
		indice=contador-1;
		
	Recargar();
	}


/**************************************************************************

	fotos.txt -> archivo de texto conteniendo la lista de imagenes a 
				 mostrar junto con su titulo y una breve descripcion
				 de la forma:
				 
				 nombre,titulo,descripcion
				 
***************************************************************************/


function PrepararImagenes()
	{
	<?php Leer("fotos.txt"); ?>;
/*	contenido=["<table width='90%' border='0' cellspacing='2' cellpadding='4' style='text-align: center'><tr><td colspan='3' class='ImageTitleColor'><h3>", "</h3>    </td></tr><tr><td width='20%' height='5' style='text-align: center'>&nbsp;    </td><td width='60%' style='text-align: center'><img src='", "' alt='image' height='320' vspace='4' hspace='4' />    </td><td width='20%' style='text-align: center'>&nbsp;    </td></tr><tr><td style='text-align: right; vertical-align: bottom'><a href='#'></a>    </td><td style='vertical-align: top' class='StoryContentColor'>","</td><td style='text-align: center; white-space: nowrap'><a href='#'></a>    </td></tr></table><br /><hr width='90%' noshade='noshade' size='1' /><br /><table width='90%' border='0' cellspacing='0' cellpadding='4' style='text-align: center'><tr><td width='15%' style='white-space: nowrap'>","<td width='70%' style='text-align: center; white-space: nowrap'  class='NavigationColor'></td><td style='text-align: right; white-space: nowrap' width='15%'>","</tr></table>"];
	primero=["<a href='#' onclick=","'>&lt;&lt; Primero</a> | <a href='#' onclick=","'>&lt; Anterior</a>    </td>"];
	ultimo=["<a href='#' onclick=","'>Siguiente &gt;</a> | <a href='#' onclick=","'>Ultimo &gt;&gt;</a>    </td>"];*/
	Recargar();
	}
	
</script>
