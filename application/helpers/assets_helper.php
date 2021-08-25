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

  if( ! function_exists('fonts_url'))
  {
    function fonts_url($lien)
    {
      return site_url("assets/fonts/".$lien);
    }
  }
  if( ! function_exists('image_url'))
  {
    function image_url($lien)
    {
      return site_url("assets/images/".$lien);
    }
  }
  if( ! function_exists('ajax_url'))
  {
    function ajax_url($lien)
    {
      return ajax_url("assets/".$lien);
    }
  }
  if( ! function_exists('js_url'))
  {
    function js_url($lien)
    {
      return js_url("assets/js/".$lien);
    }
  }
  if( ! function_exists('lien_site'))
  {
    function lien_site($lien)
    {
      return lien_site("application/controllers/".$lien);
    }
  }
 ?>
