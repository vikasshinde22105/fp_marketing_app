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
        echo "Splash Configration";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
  <h2>Splash Request Form</h2>
  <form role=\"form\" id=\"splash_form\" method=\"post\" action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("splash_add");
        echo "\">
    <div class=\"form-group\">
      <label for=\"brand\">Brand:</label>
      <input type='text' disabled class=\"form-control\"  name=\"brand_name\" value='";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["splashdetails"]) ? $context["splashdetails"] : $this->getContext($context, "splashdetails")), "brand", array()), "name", array()), "html", null, true);
        echo "' />
      
    </div>
    <div class=\"form-group\">
      <label for=\"country\">Country:</label>
          <input type='text'disabled class=\"form-control\" name=\"country_name\" value='";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["splashdetails"]) ? $context["splashdetails"] : $this->getContext($context, "splashdetails")), "country", array()), "name", array()), "html", null, true);
        echo "' />
     </div>
      
    <div class=\"form-group\">
      <label for=\"vendor_code\">Vendor code:</label>
               <input type='text' disabled class=\"form-control\" name=\"vendor_name\" value='";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["splashdetails"]) ? $context["splashdetails"] : $this->getContext($context, "splashdetails")), "vendor", array()), "name", array()), "html", null, true);
        echo "' />

                 </select>  
    </div>  
 
    <div class=\"form-group\">
      <label for=\"logo_url\">Logo URL:</label>
        <input type=\"text\" disabled class=\"form-control\" id=\"vendor_logo\" name=\"vendor_logo\" value='";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["splashdetails"]) ? $context["splashdetails"] : $this->getContext($context, "splashdetails")), "logoUrl", array()), "html", null, true);
        echo "'/>
    </div>
    
    <div class=\"form-group\">
      <label for=\"vendor_domain\">Vendor domain:</label>
        <input type=\"text\" disabled class=\"form-control\" id=\"vendor_domain\" name=\"vendor_domain\"value='";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["splashdetails"]) ? $context["splashdetails"] : $this->getContext($context, "splashdetails")), "vendorDomain", array()), "html", null, true);
        echo "'/>
    </div>  
      
    <div class=\"form-group\">
      <label for=\"headline\">Headline:</label>
        <input type=\"text\" disabled class=\"form-control\" id=\"headline\" name=\"headline\" value='";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["splashdetails"]) ? $context["splashdetails"] : $this->getContext($context, "splashdetails")), "headline", array()), "html", null, true);
        echo "'/>
    </div>  
      
    <div class=\"form-group\">
      <label for=\"subline\">Subline:</label>
        <input type=\"text\" disabled class=\"form-control\" id=\"subline\" name=\"subline\" value='";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["splashdetails"]) ? $context["splashdetails"] : $this->getContext($context, "splashdetails")), "subline", array()), "html", null, true);
        echo "'/>
    </div>  
      
   
      <div id=\"customized\">
    <div class='col-sm-6'>
      <label for=\"ios_portrait\">IOS Portrait:</label>
        <input type=\"text\" disabled class=\"form-control\" id=\"ios_portrait\" name=\"ios_portrait\" value='";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["splashdetails"]) ? $context["splashdetails"] : $this->getContext($context, "splashdetails")), "isoPortrait", array()), "html", null, true);
        echo "'>
    </div>  
      
      
          <div class='col-sm-6'>
      <label for=\"ios_landscape\">IOS Landscape:</label>
        <input type=\"text\" disabled class=\"form-control\" id=\"ios_landscape\" name=\"ios_landscape\" value='";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["splashdetails"]) ? $context["splashdetails"] : $this->getContext($context, "splashdetails")), "isoLandscape", array()), "html", null, true);
        echo "'>
    </div>  
      
      
          <div class='col-sm-6'>
      <label for=\"android_portrait\">Android Portrait:</label>
        <input type=\"text\" disabled class=\"form-control\" id=\"android_portrait\" name=\"android_portrait\" value='";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["splashdetails"]) ? $context["splashdetails"] : $this->getContext($context, "splashdetails")), "androidPortrait", array()), "html", null, true);
        echo "'>
    </div>  
      
      
          <div class='col-sm-6'>
      <label for=\"android_landscape\">Android Landscape:</label>
        <input type=\"text\" disabled class=\"form-control\" id=\"android_landscape\" name=\"android_landscape\" value='";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["splashdetails"]) ? $context["splashdetails"] : $this->getContext($context, "splashdetails")), "androidLandscape", array()), "html", null, true);
        echo "'>
    </div>  
      
      
          <div class='col-sm-6'>
      <label for=\"wp8_portrait\">WP8 Portrait:</label>
        <input type=\"text\" disabled class=\"form-control\" id=\"wp8_portrait\" name=\"wp8_portrait\" value='";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["splashdetails"]) ? $context["splashdetails"] : $this->getContext($context, "splashdetails")), "wp8Portrait", array()), "html", null, true);
        echo "'>
    </div>  
      
      
          <div class='col-sm-6'>
      <label for=\"wp8_landscape\">WP8 Landscape:</label>
        <input type=\"text\" disabled class=\"form-control\" id=\"wp8_landscape\" name=\"wp8_landscape\" value='";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["splashdetails"]) ? $context["splashdetails"] : $this->getContext($context, "splashdetails")), "wp8Landscape", array()), "html", null, true);
        echo "'>
    </div>  
      
      </div>
      
   </form>
                
</div>

";
    }

    // line 91
    public function block_javascripts($context, array $blocks = array())
    {
        // line 92
        echo "<script type=\"text/javascript\">

\$().ready(function() {
 
 });
 
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
        return array (  179 => 92,  176 => 91,  162 => 81,  153 => 75,  144 => 69,  135 => 63,  126 => 57,  117 => 51,  107 => 44,  99 => 39,  91 => 34,  83 => 29,  73 => 22,  65 => 17,  57 => 12,  51 => 9,  47 => 7,  44 => 6,  38 => 3,  11 => 1,);
    }
}
