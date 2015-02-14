<?php

/* TwigBundle:Exception:exception.html.twig */
class __TwigTemplate_ac48897bc434190253e563c8bb52f49106c773abaa697fd766dd195ded173001 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "     <br><br>


    <div style=\"text-align: center\">

    <div class=\"container\">
    <div class=\"col-lg-8 col-lg-offset-2 text-center\">
        <div class=\"logo\">
        <h1>404</h1>
        </div>
        <h4 class=\"alert alert-danger\" role=\"alert\">  <span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span> &nbsp &nbsp Oops, an error has occurred. Forbidden!</h4>
        <p class=\"lead text-muted\"></p>
        <div class=\"clearfix\"></div>
            <div class=\"col-lg-6 col-lg-offset-3\">
                <form action=\"index.html\">
                    <div class=\"input-group\">
 
                    </div>
                </form>
            </div>
        <div class=\"clearfix\"></div>
        <br>
        <div class=\"col-lg-6 col-lg-offset-3\">
            <div class=\"btn-group btn-group-justified\">
              <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("mobile_splash_request_add");
        echo "\" class=\"btn btn-info\">Return Dashboard</a>
              <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("mobile_splash_request_add");
        echo "\" class=\"btn btn-warning\">Return Website</a>
            </div>
        </div>
    </div><!-- /.col-lg-8 col-offset-2 -->
   </div>

 

     

    </div>";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 26,  45 => 25,  19 => 1,);
    }
}
