<?php

/* MobileSplashSplashRequestBundle:SplashRequest:splash_request_form.html.twig */
class __TwigTemplate_1c74d30d062b9e168c4465bc593952d8abc8de518d9c834f3c0466e2ce0ccf9a extends Twig_Template
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
        echo "    <div class=\"col-sm-9 col-sm-offset-3 col-md-6 col-md-offset-2 main\">
      <h2>Splash Request Form</h2>
<form  method=\"post\" id='splash'>

 
             ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["RequestForm"]) ? $context["RequestForm"] : $this->getContext($context, "RequestForm")), "Brand", array()), 'row');
        echo "
              ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["RequestForm"]) ? $context["RequestForm"] : $this->getContext($context, "RequestForm")), "country", array()), 'row');
        echo "
             ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["RequestForm"]) ? $context["RequestForm"] : $this->getContext($context, "RequestForm")), "vendor", array()), 'row');
        echo "
             ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["RequestForm"]) ? $context["RequestForm"] : $this->getContext($context, "RequestForm")), "logoUrl", array()), 'row');
        echo "
             ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["RequestForm"]) ? $context["RequestForm"] : $this->getContext($context, "RequestForm")), "vendorDomain", array()), 'row');
        echo "
             ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["RequestForm"]) ? $context["RequestForm"] : $this->getContext($context, "RequestForm")), "headline", array()), 'row');
        echo "
             ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["RequestForm"]) ? $context["RequestForm"] : $this->getContext($context, "RequestForm")), "subline", array()), 'row');
        echo "
             ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["RequestForm"]) ? $context["RequestForm"] : $this->getContext($context, "RequestForm")), "customizedBackground", array()), 'row');
        echo "
             <div id='customizedfield'>
             ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["RequestForm"]) ? $context["RequestForm"] : $this->getContext($context, "RequestForm")), "isoPortrait", array()), 'row');
        echo "
             ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["RequestForm"]) ? $context["RequestForm"] : $this->getContext($context, "RequestForm")), "isoLandscape", array()), 'row');
        echo "
             ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["RequestForm"]) ? $context["RequestForm"] : $this->getContext($context, "RequestForm")), "androidPortrait", array()), 'row');
        echo "
             ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["RequestForm"]) ? $context["RequestForm"] : $this->getContext($context, "RequestForm")), "androidLandscape", array()), 'row');
        echo "
             ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["RequestForm"]) ? $context["RequestForm"] : $this->getContext($context, "RequestForm")), "wp8Portrait", array()), 'row');
        echo "
             ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["RequestForm"]) ? $context["RequestForm"] : $this->getContext($context, "RequestForm")), "wp8Landscape", array()), 'row');
        echo "
             </div>  
        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["RequestForm"]) ? $context["RequestForm"] : $this->getContext($context, "RequestForm")), "_token", array()), 'row');
        echo "
        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["RequestForm"]) ? $context["RequestForm"] : $this->getContext($context, "RequestForm")), "_token", array()), 'widget');
        echo "

        ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["RequestForm"]) ? $context["RequestForm"] : $this->getContext($context, "RequestForm")), 'form_end');
        echo "


    </div>
    ";
    }

    // line 37
    public function block_javascripts($context, array $blocks = array())
    {
        // line 38
        echo "
            <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/splashdetails.js"), "html", null, true);
        echo "\"></script>
       <script type='text/javascript'>
            \$().ready(function() { 
                \$('#customizedfield').hide();
                \$('#splash_customizedBackground').change(function() {
                    if(\$(this).val() == 0){
                    \$('#customizedfield').hide(); 
                     }
                    else  \$('#customizedfield').show();
                })  
              });
            
       </script>
 ";
    }

    public function getTemplateName()
    {
        return "MobileSplashSplashRequestBundle:SplashRequest:splash_request_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 39,  133 => 38,  130 => 37,  121 => 31,  116 => 29,  112 => 28,  107 => 26,  103 => 25,  99 => 24,  95 => 23,  91 => 22,  87 => 21,  82 => 19,  78 => 18,  74 => 17,  70 => 16,  66 => 15,  62 => 14,  58 => 13,  54 => 12,  47 => 7,  44 => 6,  38 => 3,  11 => 1,);
    }
}
