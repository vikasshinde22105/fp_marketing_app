<?php

/* ::base.html.twig */
class __TwigTemplate_8d99ac428d2e8499f6d7928a303a76e5a4c35244848f4e443c6d39ffaf3083cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
            <header id=\"header\">
                
                                      ";
        // line 27
        $this->displayBlock('navigation', $context, $blocks);
        // line 58
        echo "            </header>

             <aside class=\"sidebar\">
                ";
        // line 61
        $this->displayBlock('sidebar', $context, $blocks);
        // line 101
        echo "            </aside>
            <section class=\"main-col\">
                ";
        // line 103
        $this->displayBlock('body', $context, $blocks);
        // line 104
        echo "                ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 107
        echo "            </section>


            <div id=\"footer\">
                ";
        // line 111
        $this->displayBlock('footer', $context, $blocks);
        // line 113
        echo "            </div>
    </body>
</html>

       
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "        <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/selectize.css"), "html", null, true);
        echo "\">
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/dashboard.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/dataTable.bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        
     \t<script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/selectize.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/dataTable.min.js"), "html", null, true);
        echo "\"></script>
      \t<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/dataTable.bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>



        
        ";
    }

    // line 27
    public function block_navigation($context, array $blocks = array())
    {
        // line 28
        echo "                            <nav class=\"navbar navbar-inverse navbar-fixed-top custom-header\">
                                <div class=\"container-fluid\">
                                  <div class=\"navbar-header\">
                                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                                      <span class=\"sr-only\">Toggle navigation</span>
                                      <span class=\"icon-bar\"></span>
                                      <span class=\"icon-bar\"></span>
                                      <span class=\"icon-bar\"></span>
                                    </button>
                                    <a class=\"navbar-brand\" href=\"#\"><img src=\"https://assets.foodpanda.in/layout/themes/margherita/images/en/logo.png?v=1421752687\" alt=\"foodpanda\"></a>
                                  </div>
                                  <div id=\"navbar\" class=\"navbar-collapse collapse\">
                                    <ul class=\"nav navbar-nav navbar-right\">
                                      <li><a href=\"#\">Dashboard</a></li>
                                      <li><a href=\"#\">Settings</a></li>
                                      <li class=\"dropdown\">
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Profile <span class=\"caret\"></span></a>
                                        <ul class=\"dropdown-menu\" role=\"menu\">
                                          <li><a href=\"#\">Edit</a></li>
                                          <li><a href=\"#\">Logout</a></li>
                                        </ul>
                                      </li>
                                    </ul>
                                    <form class=\"navbar-form navbar-right\">
                                      <input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
                                    </form>
                                  </div>
                                </div>
                              </nav>
                    ";
    }

    // line 61
    public function block_sidebar($context, array $blocks = array())
    {
        // line 62
        echo "            <!--    <div class=\"col-sm-3 col-md-2 sidebar\">
                    <ul class=\"nav nav-sidebar\" id='sidebar'>
                      <li class=\"active\"><a href=\"#\">Mobile Splash <span class=\"sr-only\">(current)</span></a></li>
                      <li class='tabopen' ><a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("mobile_splash_request_add");
        echo "\">Config</a></li>
                      <li ><a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("mobile_splash_requests");
        echo "\">List</a></li>
                     
                    </ul>
 
                </div>
             -->       

    <div class=\"col-sm-3 col-md-2 sidebar\">

        <a href=\"\" class=\"list-group-item active\">

            Mobile Splash 

        </a>

        <a href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("mobile_splash_request_add");
        echo "\" class=\"list-group-item\">

            <span class=\"glyphicon glyphicon-plus\"></span> Config <span class=\"badge\"></span>

        </a>

        <a href=\"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("mobile_splash_requests");
        echo "\" class=\"list-group-item\">

            <span class=\"glyphicon glyphicon-th-list\"></span> List <span class=\"badge\">50</span>

        </a>

       

    </div>
 
 


                ";
    }

    // line 103
    public function block_body($context, array $blocks = array())
    {
    }

    // line 104
    public function block_javascripts($context, array $blocks = array())
    {
        // line 105
        echo "
                ";
    }

    // line 111
    public function block_footer($context, array $blocks = array())
    {
        // line 112
        echo "                 ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 112,  241 => 111,  236 => 105,  233 => 104,  228 => 103,  210 => 87,  201 => 81,  183 => 66,  179 => 65,  174 => 62,  171 => 61,  138 => 28,  135 => 27,  125 => 16,  121 => 15,  117 => 14,  113 => 13,  109 => 12,  104 => 10,  100 => 9,  96 => 8,  93 => 7,  90 => 6,  84 => 5,  73 => 113,  71 => 111,  65 => 107,  62 => 104,  60 => 103,  56 => 101,  54 => 61,  49 => 58,  47 => 27,  38 => 22,  36 => 6,  32 => 5,  26 => 1,);
    }
}