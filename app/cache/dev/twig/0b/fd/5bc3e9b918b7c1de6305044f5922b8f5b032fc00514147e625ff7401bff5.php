<?php

/* MobileSplashSplashRequestBundle:SplashRequest:splash_requests.html.twig */
class __TwigTemplate_0bfd5bc3e9b918b7c1de6305044f5922b8f5b032fc00514147e625ff7401bff5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
  
        <div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
                   <legend><h3 class=\"page-header\">Splash Request List</h3></legend> 

                  <!-- <h2 class=\"sub-header\">Section title</h2> -->
                 <input type=\"hidden\" id=\"count\" name='count' value=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["request_list"]) ? $context["request_list"] : $this->getContext($context, "request_list"))), "html", null, true);
        echo "\"/>
                  <form method=\"\" action=\"\">
                  <div class=\"table-responsive\">
                    <table id=\"table\" class=\"table table-striped\">
                      <thead>
                        <tr>
                          <th>Brand</th>
                          <th>Vendor</th>
                          <th>Requester</th>
                          <th>ISO Code</th>
                          <th>Created On</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                         ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["request_list"]) ? $context["request_list"] : $this->getContext($context, "request_list")));
        foreach ($context['_seq'] as $context["_key"] => $context["request"]) {
            // line 26
            echo "                           <tr>
                               <td><a href=\"requestDetails/";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["request"], "id", array()), "html", null, true);
            echo "\">";
            if (($this->getAttribute($context["request"], "brand", array()) != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["request"], "brand", array()), "name", array()), "html", null, true);
                echo " ";
            }
            echo "</a></td>
                          <td>";
            // line 28
            if (($this->getAttribute($context["request"], "vendor", array()) != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["request"], "vendor", array()), "name", array()), "html", null, true);
                echo " ";
            }
            echo "</td>
                          <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["request"], "requesterName", array()), "html", null, true);
            echo "</td>
                          <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["request"], "isoCode", array()), "html", null, true);
            echo "</td>
                          <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["request"], "createdOn", array())), "html", null, true);
            echo "</td>
                          <td>";
            // line 32
            if (($this->getAttribute($context["request"], "status", array()) == 0)) {
                echo "<span class=\"label label-primary\">Configure</span>
                              ";
            } elseif (($this->getAttribute($context["request"], "status", array()) == 1)) {
                // line 33
                echo "<span class=\"label label-danger\"> Open</span>
                              ";
            } elseif (($this->getAttribute($context["request"], "status", array()) == 2)) {
                // line 34
                echo "<span class=\"label label-success\"> Live</span> 
                              ";
            } elseif (($this->getAttribute($context["request"], "status", array()) == 3)) {
                // line 35
                echo "<span class=\"label label-danger\"> Not-Live</span>    
                                  ";
            }
            // line 36
            echo "</td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['request'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                      </tbody>
                    </table>
                  </div>

        </form>
        </div>
    
";
    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        // line 48
        echo "
    <script type=\"text/javascript\">

\t\t\t\$(document).ready(function() {
                        
                            \$('#table').dataTable();
                            document.getElementById(\"badge\").innerHTML=\$('#count').val();
 
                        } );
                        
    </script>
";
    }

    public function getTemplateName()
    {
        return "MobileSplashSplashRequestBundle:SplashRequest:splash_requests.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 48,  137 => 47,  126 => 39,  118 => 36,  114 => 35,  110 => 34,  106 => 33,  101 => 32,  97 => 31,  93 => 30,  89 => 29,  82 => 28,  73 => 27,  70 => 26,  66 => 25,  48 => 10,  40 => 4,  37 => 3,  11 => 1,);
    }
}
