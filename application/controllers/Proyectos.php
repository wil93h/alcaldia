<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proyectos extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('proyectos');
	}

	public function servicios()
	 {
		$this->load->view('Servicios');
	}

	public function proy($t)
	{
		if($t=="proyecto1")
		{
			$dir = "img/proyectos/proyecto1";
      $dh  = opendir($dir);
      while (false !== ($nombre_archivo = readdir($dh))) {
      $archivos[] = $nombre_archivo;
}

     $total_archivos = count($archivos);
     $total = ($total_archivos-2)/2;

      for($i=1;$i<=$total;$i++)
			{
				$pro['img'.$i]='<img src="../../../img/proyectos/'.$t.'/'.$t.'_'.$i.'mini.jpg" class="img-responsive" alt="Proyecto Iluminación en las Comunidades de Villa El Refugio" >';
				$pro['imgg'.$i]='<li><a href="../../../img/proyectos/'.$t.'/'.$t.'_'.$i.'.jpg" class="fancybox" title="Iluminación" data-fancybox-group="works" ><i class="fa fa-search"></i></a></li>';
		  }

			for($j=$total+1;$j<=6;$j++)
			{
				$pro['img'.$j]='<img hidden>';
				$pro['imgg'.$j]='<li hidden></li>';
			}

		$pro['h2']= "Iluminación en las Comunidades de Villa El Refugio";
		$pro['p']= "Proyecto de Iluminación en las Comunidades de Villa El Refugio";
		$this->load->view('proyectos',$pro);

		}
		 else if($t=="proyecto2")
		{
			$dir = "img/proyectos/proyecto2";
			$dh  = opendir($dir);
			while (false !== ($nombre_archivo = readdir($dh))) {
			$archivos[] = $nombre_archivo;
		}

		 $total_archivos = count($archivos);
		 $total = ($total_archivos-2)/2;

			for($i=1;$i<=$total;$i++)
			{
				$pro['img'.$i]='<img src="../../../img/proyectos/'.$t.'/'.$t.'_'.$i.'mini.jpg"  class="img-responsive" alt="ex ea commodo consequat">';
				$pro['imgg'.$i]='<li><a href="../../../img/proyectos/'.$t.'/'.$t.'_'.$i.'.jpg" class="fancybox" title="Araund The world" data-fancybox-group="works" ><i class="fa fa-search"></i></a></li>';
			}

			for($j=$total+1;$j<=6;$j++)
			{
				$pro['img'.$j]='<img hidden>';
				$pro['imgg'.$j]='<li hidden></li>';
			}

			$pro['h2']="Reparación de Calles";
			$pro['p']="Proyecto de Reparación de Calles de Villa El Refugio";
			$this->load->view('proyectos',$pro);
		}

		else if($t=="proyecto3")
		{

			$dir = "img/proyectos/proyecto3";
			$dh  = opendir($dir);
			while (false !== ($nombre_archivo = readdir($dh))) {
			$archivos[] = $nombre_archivo;
		}

		 $total_archivos = count($archivos);
		 $total = ($total_archivos-2)/2;
		 echo $total;

			for($i=1;$i<=$total;$i++)
			{
				$pro['img'.$i]='<img src="../../../img/proyectos/'.$t.'/'.$t.'_'.$i.'mini.jpg"  class="img-responsive" alt="ex ea commodo consequat">';
				$pro['imgg'.$i]='<li><a href="../../../img/proyectos/'.$t.'/'.$t.'_'.$i.'.jpg" class="fancybox" title="Araund The world" data-fancybox-group="works" ><i class="fa fa-search"></i></a></li>';
			}

			for($j=$total+1;$j<=6;$j++)
			{
				$pro['img'.$j]='<img hidden>';
				$pro['imgg'.$j]='<li hidden></li>';
			}

			$pro['h2']="Inspección de Terreno";
			$pro['p']="Inspección de Terrenos de Villa El Refugio";
			$this->load->view('proyectos',$pro);
		}

		else if($t=="proyecto4")
		{
			$dir = "img/proyectos/proyecto4";
      $dh  = opendir($dir);
      while (false !== ($nombre_archivo = readdir($dh))) {
      $archivos[] = $nombre_archivo;
      }

     $total_archivos = count($archivos);
     $total = ($total_archivos-2)/2;
		 echo $total;

      for($i=1;$i<=$total;$i++)
			{
				$pro['img'.$i]='<img src="../../../img/proyectos/'.$t.'/'.$t.'_'.$i.'mini.jpg"  class="img-responsive" alt="ex ea commodo consequat">';
				$pro['imgg'.$i]='<li><a href="../../../img/proyectos/'.$t.'/'.$t.'_'.$i.'.jpg" class="fancybox" title="Araund The world" data-fancybox-group="works" ><i class="fa fa-search"></i></a></li>';
		  }

			for($j=$total+1;$j<=6;$j++)
			{
				$pro['img'.$j]='<img hidden>';
				$pro['imgg'.$j]='<li hidden></li>';
			}

			$pro['h2']="Limpieza del Municipio";
			$pro['p']="Proyecto de Limpieza del Municipio de Villa El Refugio";
			$this->load->view('proyectos',$pro);
		}
		elseif ($t=="proyecto5") {

			$dir = "img/proyectos/proyecto5";
			$dh  = opendir($dir);
			while (false !== ($nombre_archivo = readdir($dh))) {
			$archivos[] = $nombre_archivo;
}

		 $total_archivos = count($archivos);
		 $total = ($total_archivos-2)/2;
echo $total;

			for($i=1;$i<=$total;$i++)
			{
				$pro['img'.$i]='<img src="../../../img/proyectos/'.$t.'/'.$t.'_'.$i.'mini.jpg"  class="img-responsive" alt="ex ea commodo consequat">';
				$pro['imgg'.$i]='<li><a href="../../../img/proyectos/'.$t.'/'.$t.'_'.$i.'.jpg" class="fancybox" title="Araund The world" data-fancybox-group="works" ><i class="fa fa-search"></i></a></li>';
			}

			for($j=$total+1;$j<=6;$j++)
			{
				$pro['img'.$j]='<img hidden>';
				$pro['imgg'.$j]='<li hidden></li>';
			}

			$pro['h2']="Entreg de Refigerio";
			$pro['p']="Proyecto Entrega de Refigerio";
			$this->load->view('proyectos',$pro);

		}
		else if($t=="proyecto6")
		{
			$dir = "img/proyectos/proyecto6";
			$dh  = opendir($dir);
			while (false !== ($nombre_archivo = readdir($dh))) {
			$archivos[] = $nombre_archivo;
}

		 $total_archivos = count($archivos);
		 $total = ($total_archivos-2)/2;

			for($i=1;$i<=$total;$i++)
			{
				$pro['img'.$i]='<img src="../../../img/proyectos/'.$t.'/'.$t.'_'.$i.'mini.jpg"  class="img-responsive" alt="ex ea commodo consequat">';
				$pro['imgg'.$i]='<li><a href="../../../img/proyectos/'.$t.'/'.$t.'_'.$i.'.jpg" class="fancybox" title="Araund The world" data-fancybox-group="works" ><i class="fa fa-search"></i></a></li>';
			}

			for($j=$total+1;$j<=6;$j++)
			{
				$pro['img'.$j]='<img hidden>';
				$pro['imgg'.$j]='<li hidden></li>';
			}

			$pro['h2']="Siembra de Árboles";
			$pro['p']="Proyecto de Siembra de Árboles de Villa El Refugio";
			$this->load->view('proyectos',$pro);
		}


	}

}
