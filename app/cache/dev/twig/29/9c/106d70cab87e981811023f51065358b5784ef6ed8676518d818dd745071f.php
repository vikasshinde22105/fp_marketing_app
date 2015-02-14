<?php

/* TwigBundle:Exception:exception.html.twig */
class __TwigTemplate_299c106d70cab87e981811023f51065358b5784ef6ed8676518d818dd745071f extends Twig_Template
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
        <div class=\"panel panel-danger\">

    <div class=\"panel-heading\">

        <h3 class=\"panel-title  \" role=\"alert\">   <span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span> &nbsp &nbsp Oops, an error has occurred. Forbidden!</h3>

    </div>

    <div class=\"panel-body\">The server is temporarily unable to handle the request

 
       
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
        // line 33
        echo $this->env->getExtension('routing')->getPath("mobile_splash_request_add");
        echo "\" class=\"btn btn-info\">Return Dashboard</a>
              <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("mobile_splash_request_add");
        echo "\" class=\"btn btn-warning\">Return Website</a>
            </div>
        </div>
      </div>
.</div>
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
        return array (  57 => 34,  53 => 33,  19 => 1,);
    }
}
