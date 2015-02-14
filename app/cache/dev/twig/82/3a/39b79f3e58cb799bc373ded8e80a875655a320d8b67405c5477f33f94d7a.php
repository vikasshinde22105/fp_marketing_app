<?php

/* MobileSplashSplashRequestBundle:Exception:exception.html.twig */
class __TwigTemplate_823a39b79f3e58cb799bc373ded8e80a875655a320d8b67405c5477f33f94d7a extends Twig_Template
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
        echo "Exception";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "

    <br><br>


    <div style=\"text-align: center\">

        <h1>Error ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "statusCode", array()), "html", null, true);
        echo "</h1>


        <br><br><br>


        <p style=\"font-size: 20px;\">

            The resource you are looking for is unavailable or not found.

            <br><br>

            <p style=\"\">

                You can return to <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("mobile_splash_request_add");
        echo "\">Home</a>

            </p>

        </p>

    </div>


";
    }

    public function getTemplateName()
    {
        return "MobileSplashSplashRequestBundle:Exception:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 28,  55 => 14,  46 => 7,  43 => 6,  37 => 3,  11 => 1,);
    }
}
