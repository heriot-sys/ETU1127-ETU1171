<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  if( ! function_exists('css_url'))
  {
    function css_url($lien)
    {
      return site_url("assets/css/".$lien);
    }
  }

  if( ! function_exists('vendor_url'))
  {
    function vendor_url($lien)
    {
      return site_url("assets/vendor/".$lien);
    }
  }
 ?>
