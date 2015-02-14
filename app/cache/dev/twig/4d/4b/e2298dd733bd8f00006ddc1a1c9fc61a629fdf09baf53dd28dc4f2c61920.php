<?php

/* MobileSplashSplashRequestBundle:SplashRequest:splash_request_from_test.html.twig */
class __TwigTemplate_4d4be2298dd733bd8f00006ddc1a1c9fc61a629fdf09baf53dd28dc4f2c61920 extends Twig_Template
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
      <select id=\"brand\" name=\"brand\" >
              ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["brands"]) ? $context["brands"] : $this->getContext($context, "brands")));
        foreach ($context['_seq'] as $context["_key"] => $context["brand"]) {
            // line 14
            echo "              <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["brand"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["brand"], "name", array()), "html", null, true);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brand'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "      </select>
    </div>
    <div class=\"form-group\">
      <label for=\"country\">Country:</label>
      <select id=\"country\" name=\"country\" >
              ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : $this->getContext($context, "countries")));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 22
            echo "              <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "name", array()), "html", null, true);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "      </select>
    </div>
      
    <div class=\"form-group\">
      <label for=\"vendor_code\">Vendor code:</label>
                 <select id=\"vendor1\"  name=\"vendor\">
                  ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vendors"]) ? $context["vendors"] : $this->getContext($context, "vendors")));
        foreach ($context['_seq'] as $context["_key"] => $context["vendor"]) {
            // line 31
            echo "                      <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["vendor"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["vendor"], "name", array()), "html", null, true);
            echo "</option>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vendor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                 </select>  
    </div>  
 
    <div class=\"form-group\">
      <label for=\"logo_url\">Logo URL:</label>
        <input type=\"text\" class=\"form-control\" id=\"vendor_logo\" name=\"vendor_logo\" placeholder=\"Enter logo URL\">
    </div>
    
    <div class=\"form-group\">
      <label for=\"vendor_domain\">Vendor domain:</label>
        <input type=\"text\" class=\"form-control\" id=\"vendor_domain\" name=\"vendor_domain\" placeholder=\"Enter vendor domain\">
    </div>  
      
    <div class=\"form-group\">
      <label for=\"headline\">Headline:</label>
        <input type=\"text\" class=\"form-control\" id=\"headline\" name=\"headline\" placeholder=\"Enter headline\">
    </div>  
      
    <div class=\"form-group\">
      <label for=\"subline\">Subline:</label>
        <input type=\"text\" class=\"form-control\" id=\"subline\" name=\"subline\" placeholder=\"Enter subline\">
    </div>  
      
    <div class=\"form-group\">
      <label for=\"customized_bg\">Do you want Customized Background:</label>
      <select id=\"customized_bg\" placeholder=\"customized background\" class=\"demo-default selectized\" name=\"customized_bg\">
          <option value=\"0\">NO</option>
          <option value=\"1\">Yes</option>
      </select>
    </div>
    
      <div id=\"customized\">
    <div class='col-sm-6'>
      <label for=\"ios_portrait\">IOS Portrait:</label>
        <input type=\"text\" class=\"form-control\" id=\"ios_portrait\" name=\"ios_portrait\" placeholder=\"Enter URL Of IOS Portrait\">
    </div>  
      
      
          <div class='col-sm-6'>
      <label for=\"ios_landscape\">IOS Landscape:</label>
        <input type=\"text\" class=\"form-control\" id=\"ios_landscape\" name=\"ios_landscape\" placeholder=\"Enter URL Of IOS Landscape\">
    </div>  
      
      
          <div class='col-sm-6'>
      <label for=\"android_portrait\">Android Portrait:</label>
        <input type=\"text\" class=\"form-control\" id=\"android_portrait\" name=\"android_portrait\" placeholder=\"Enter URL OF Android Portrait\">
    </div>  
      
      
          <div class='col-sm-6'>
      <label for=\"android_landscape\">Android Landscape:</label>
        <input type=\"text\" class=\"form-control\" id=\"android_landscape\" name=\"android_landscape\" placeholder=\"Enter URL Of Android Landscape\">
    </div>  
      
      
          <div class='col-sm-6'>
      <label for=\"wp8_portrait\">WP8 Portrait:</label>
        <input type=\"text\" class=\"form-control\" id=\"wp8_portrait\" name=\"wp8_portrait\" placeholder=\"Enter URL of WP8 Portrait\">
    </div>  
      
      
          <div class='col-sm-6'>
      <label for=\"wp8_landscape\">WP8 Landscape:</label>
        <input type=\"text\" class=\"form-control\" id=\"wp8_landscape\" name=\"wp8_landscape\" placeholder=\"Enter URL OF WP8 Landscape\">
    </div>  
      
      </div>
      
      <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
  </form>
                 <div class=\"modal\" id=\"myModal\">Loading
                 </div>
</div>

";
    }

    // line 109
    public function block_javascripts($context, array $blocks = array())
    {
        // line 110
        echo "<script type=\"text/javascript\">

\$().ready(function() {
    \$('#customized').hide();
   \$('select#customized_bg').change(function() {
       if(\$(this).val() == 0){
       \$('#customized').hide(); 
        }
       else  \$('#customized').show();
   })
 });

 
 //\$('#country').selectize();
\$('#brand').selectize();
//\$('#vendor').selectize();


 \$(document).ready(function() {
        \$(\"#splash_form\").submit(function(){
             var \$form = \$(this).closest(\"#splash_form\");
            \$('#myModal').modal({show:true})
             if(\$form){

                // The url where the form is being posted via ajax
                var url = \$(\"#splash_form\").attr(\"action\");

                // Post the data
                \$.post(url,{
                    type: \"POST\",
                    data:\$form.serialize(), // serializing the data being sent 
                    cache: false
                },function(data){

                    // If valid
                    if(data.responseCode == 200 ){

                        alert(data.response);
                        \$('#myModal').modal('hide');
                    }
                    else if(data.responseCode==400){
                        alert(data.responseCode);
                    }else{
                        alert(\"bad response all together...\");
                    }
                }); 
            }
            return false;
        });
    });
    
    
    
/*selectize country js*/
var xhr;
var select_country, \$select_country;
var select_vendors, \$select_vendors;

\$select_country = \$('#country').selectize({
    onChange: function(value) { 
        if (!value.length) return;
        select_vendors.disable();
        select_vendors.clearOptions();
        select_vendors.load(function(callback) {
            xhr && xhr.abort();
            xhr = \$.ajax({
                url: 'splash-screen/web/app_dev.php/splash/getVendors/'+value,
                datatype:\"json\",
                success: function(results) {
                    var obj  = JSON.parse( results );
                    select_vendors.enable();
                    callback(obj);           
                },
                error: function() {
                    callback();
                }
            })
        });
    }
});

\$select_vendors = \$('#vendor1').selectize({
    valueField: 'id',
    labelField: 'name',
    searchField: ['name']
});

select_vendors  = \$select_vendors[0].selectize;
select_country = \$select_country[0].selectize;

select_vendors.disable();
/*end selectize*/
</script>

 ";
    }

    public function getTemplateName()
    {
        return "MobileSplashSplashRequestBundle:SplashRequest:splash_request_from_test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 110,  197 => 109,  118 => 33,  107 => 31,  103 => 30,  95 => 24,  84 => 22,  80 => 21,  73 => 16,  62 => 14,  58 => 13,  51 => 9,  47 => 7,  44 => 6,  38 => 3,  11 => 1,);
    }
}
