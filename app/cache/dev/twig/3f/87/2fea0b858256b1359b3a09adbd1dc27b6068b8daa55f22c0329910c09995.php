<?php

/* MobileSplashSplashRequestBundle:SplashRequest:splash_request_form.html.twig */
class __TwigTemplate_3f872fea0b858256b1359b3a09adbd1dc27b6068b8daa55f22c0329910c09995 extends Twig_Template
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
        <legend><h3>Splash Request Form</h3></legend>
      ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 10
            echo " 
          <div class=\"alert alert-success\"> <h4>";
            // line 11
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</h4></div>
 
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "<form  method=\"post\" id='splash'>

 
             ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["RequestForm"]) ? $context["RequestForm"] : $this->getContext($context, "RequestForm")), "Brand", array()), 'row');
        echo "
              ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["RequestForm"]) ? $context["RequestForm"] : $this->getContext($context, "RequestForm")), "country", array()), 'row');
        echo "
             ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["RequestForm"]) ? $context["RequestForm"] : $this->getContext($context, "RequestForm")), "vendor", array()), 'row');
        echo "
             ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["RequestForm"]) ? $context["RequestForm"] : $this->getContext($context, "RequestForm")), "logoUrl", array()), 'row');
        echo "
             ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["RequestForm"]) ? $context["RequestForm"] : $this->getContext($context, "RequestForm")), "vendorDomain", array()), 'row');
        echo "
             ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["RequestForm"]) ? $context["RequestForm"] : $this->getContext($context, "RequestForm")), "headline", array()), 'row');
        echo "
             ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["RequestForm"]) ? $context["RequestForm"] : $this->getContext($context, "RequestForm")), "subline", array()), 'row');
        echo "
             ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["RequestForm"]) ? $context["RequestForm"] : $this->getContext($context, "RequestForm")), "customizedBackground", array()), 'row');
        echo "
             <div id='customizedfield'>
             ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["RequestForm"]) ? $context["RequestForm"] : $this->getContext($context, "RequestForm")), "isoPortrait", array()), 'row');
        echo "
             ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["RequestForm"]) ? $context["RequestForm"] : $this->getContext($context, "RequestForm")), "isoLandscape", array()), 'row');
        echo "
             ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["RequestForm"]) ? $context["RequestForm"] : $this->getContext($context, "RequestForm")), "androidPortrait", array()), 'row');
        echo "
             ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["RequestForm"]) ? $context["RequestForm"] : $this->getContext($context, "RequestForm")), "androidLandscape", array()), 'row');
        echo "
             ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["RequestForm"]) ? $context["RequestForm"] : $this->getContext($context, "RequestForm")), "wp8Portrait", array()), 'row');
        echo "
             ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["RequestForm"]) ? $context["RequestForm"] : $this->getContext($context, "RequestForm")), "wp8Landscape", array()), 'row');
        echo "

             </div>  
             <br/><br/>
            <legend  style=\"text-align: center\">";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["RequestForm"]) ? $context["RequestForm"] : $this->getContext($context, "RequestForm")), "save", array()), 'row');
        echo "</legend>

             

        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["RequestForm"]) ? $context["RequestForm"] : $this->getContext($context, "RequestForm")), "_token", array()), 'row');
        echo "
        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["RequestForm"]) ? $context["RequestForm"] : $this->getContext($context, "RequestForm")), "_token", array()), 'widget');
        echo "

        ";
        // line 42
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["RequestForm"]) ? $context["RequestForm"] : $this->getContext($context, "RequestForm")), 'form_end');
        echo "


    </div>
    ";
    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        // line 49
        echo "
            <script src=\"";
        // line 50
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
        return array (  163 => 50,  160 => 49,  157 => 48,  148 => 42,  143 => 40,  139 => 39,  132 => 35,  125 => 31,  121 => 30,  117 => 29,  113 => 28,  109 => 27,  105 => 26,  100 => 24,  96 => 23,  92 => 22,  88 => 21,  84 => 20,  80 => 19,  76 => 18,  72 => 17,  67 => 14,  58 => 11,  55 => 10,  51 => 9,  47 => 7,  44 => 6,  38 => 3,  11 => 1,);
    }
}
