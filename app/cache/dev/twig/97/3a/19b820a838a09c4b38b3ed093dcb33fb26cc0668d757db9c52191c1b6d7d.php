<?php

/* MobileSplashSplashRequestBundle:SplashRequest:splash_request_details.html.twig */
class __TwigTemplate_973a19b820a838a09c4b38b3ed093dcb33fb26cc0668d757db9c52191c1b6d7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Splash Request Details";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
    <legend><h3 class=\"page-header\">Splash Request Details</h3></legend>
  <form role=\"form\" id=\"splash_form\" method=\"post\" action=\"\">
    <div class=\"form-group\">
      <label for=\"brand\">Brand:</label>
      <input type='text' disabled class=\"form-control\"  name=\"brand_name\" value='";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["requestdetails"]) ? $context["requestdetails"] : $this->getContext($context, "requestdetails")), "brand", array()), "name", array()), "html", null, true);
        echo "' />
      
    </div>
    <div class=\"form-group\">
      <label for=\"country\">Country:</label>
          <input type='text'disabled class=\"form-control\" name=\"country_name\" value='";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["requestdetails"]) ? $context["requestdetails"] : $this->getContext($context, "requestdetails")), "country", array()), "name", array()), "html", null, true);
        echo "' />
     </div>
      
    <div class=\"form-group\">
      <label for=\"vendor_code\">Vendor code:</label>
               <input type='text' disabled class=\"form-control\" name=\"vendor_name\" value='";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["requestdetails"]) ? $context["requestdetails"] : $this->getContext($context, "requestdetails")), "vendor", array()), "name", array()), "html", null, true);
        echo "' />
     </div>  
 
    <div class=\"form-group\">
      <label for=\"logo_url\">Logo URL:</label>
        <input type=\"text\" disabled class=\"form-control\" id=\"vendor_logo\" name=\"vendor_logo\" value='";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["requestdetails"]) ? $context["requestdetails"] : $this->getContext($context, "requestdetails")), "logoUrl", array()), "html", null, true);
        echo "'/>
    </div>
    
    <div class=\"form-group\">
      <label for=\"vendor_domain\">Vendor domain:</label>
        <input type=\"text\" disabled class=\"form-control\" id=\"vendor_domain\" name=\"vendor_domain\"value='";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["requestdetails"]) ? $context["requestdetails"] : $this->getContext($context, "requestdetails")), "vendorDomain", array()), "html", null, true);
        echo "'/>
    </div>  
      
    <div class=\"form-group\">
      <label for=\"headline\">Headline:</label>
        <input type=\"text\" disabled class=\"form-control\" id=\"headline\" name=\"headline\" value='";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["requestdetails"]) ? $context["requestdetails"] : $this->getContext($context, "requestdetails")), "headline", array()), "html", null, true);
        echo "'/>
    </div>  
      
    <div class=\"form-group\">
      <label for=\"subline\">Subline:</label>
        <input type=\"text\" disabled class=\"form-control\" id=\"subline\" name=\"subline\" value='";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["requestdetails"]) ? $context["requestdetails"] : $this->getContext($context, "requestdetails")), "subline", array()), "html", null, true);
        echo "'/>
    </div>  
      
   
      <div id=\"customized\">
    <div class='col-sm-6'>
      <label for=\"ios_portrait\">IOS Portrait:</label>
        <input type=\"text\" disabled class=\"form-control\" id=\"ios_portrait\" name=\"ios_portrait\" value='";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["requestdetails"]) ? $context["requestdetails"] : $this->getContext($context, "requestdetails")), "isoPortrait", array()), "html", null, true);
        echo "'>
    </div>  
      
      
          <div class='col-sm-6'>
      <label for=\"ios_landscape\">IOS Landscape:</label>
        <input type=\"text\" disabled class=\"form-control\" id=\"ios_landscape\" name=\"ios_landscape\" value='";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["requestdetails"]) ? $context["requestdetails"] : $this->getContext($context, "requestdetails")), "isoLandscape", array()), "html", null, true);
        echo "'>
    </div>  
      
      
          <div class='col-sm-6'>
      <label for=\"android_portrait\">Android Portrait:</label>
        <input type=\"text\" disabled class=\"form-control\" id=\"android_portrait\" name=\"android_portrait\" value='";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["requestdetails"]) ? $context["requestdetails"] : $this->getContext($context, "requestdetails")), "androidPortrait", array()), "html", null, true);
        echo "'>
    </div>  
      
      
          <div class='col-sm-6'>
      <label for=\"android_landscape\">Android Landscape:</label>
        <input type=\"text\" disabled class=\"form-control\" id=\"android_landscape\" name=\"android_landscape\" value='";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["requestdetails"]) ? $context["requestdetails"] : $this->getContext($context, "requestdetails")), "androidLandscape", array()), "html", null, true);
        echo "'>
    </div>  
      
      
          <div class='col-sm-6'>
      <label for=\"wp8_portrait\">WP8 Portrait:</label>
        <input type=\"text\" disabled class=\"form-control\" id=\"wp8_portrait\" name=\"wp8_portrait\" value='";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["requestdetails"]) ? $context["requestdetails"] : $this->getContext($context, "requestdetails")), "wp8Portrait", array()), "html", null, true);
        echo "'>
    </div>  
      
      
          <div class='col-sm-6'>
      <label for=\"wp8_landscape\">WP8 Landscape:</label>
        <input type=\"text\" disabled class=\"form-control\" id=\"wp8_landscape\" name=\"wp8_landscape\" value='";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["requestdetails"]) ? $context["requestdetails"] : $this->getContext($context, "requestdetails")), "wp8Landscape", array()), "html", null, true);
        echo "'>
    </div>  
      
      </div>
      
   </form>
                
</div>

";
    }

    // line 89
    public function block_javascripts($context, array $blocks = array())
    {
        // line 90
        echo " 
<script type='text/javascript'>
   
</script>
 ";
    }

    public function getTemplateName()
    {
        return "MobileSplashSplashRequestBundle:SplashRequest:splash_request_details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 90,  171 => 89,  157 => 79,  148 => 73,  139 => 67,  130 => 61,  121 => 55,  112 => 49,  102 => 42,  94 => 37,  86 => 32,  78 => 27,  70 => 22,  62 => 17,  54 => 12,  47 => 7,  44 => 6,  38 => 3,  11 => 1,);
    }
}
