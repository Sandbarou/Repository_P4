<?php

/* OCLouvreBundle:Louvre:client.html.twig */
class __TwigTemplate_eb99a61aa88b866e651292a531b4dcb8077d6dd23f0a1ba94af7cefcfaff3782 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCLouvreBundle:Louvre:index.html.twig", "OCLouvreBundle:Louvre:client.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'form_part' => array($this, 'block_form_part'),
            'body' => array($this, 'block_body'),
            'hidden_part' => array($this, 'block_hidden_part'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCLouvreBundle:Louvre:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe11d80e1e2f9734d16b8c83a0c48accc34b164766db695afdde796a2507a121 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe11d80e1e2f9734d16b8c83a0c48accc34b164766db695afdde796a2507a121->enter($__internal_fe11d80e1e2f9734d16b8c83a0c48accc34b164766db695afdde796a2507a121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCLouvreBundle:Louvre:client.html.twig"));

        $__internal_82234500d7f927d275bdb9e5c462ba8a7599dfa3bffc951019052d76b4d0438f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82234500d7f927d275bdb9e5c462ba8a7599dfa3bffc951019052d76b4d0438f->enter($__internal_82234500d7f927d275bdb9e5c462ba8a7599dfa3bffc951019052d76b4d0438f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCLouvreBundle:Louvre:client.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe11d80e1e2f9734d16b8c83a0c48accc34b164766db695afdde796a2507a121->leave($__internal_fe11d80e1e2f9734d16b8c83a0c48accc34b164766db695afdde796a2507a121_prof);

        
        $__internal_82234500d7f927d275bdb9e5c462ba8a7599dfa3bffc951019052d76b4d0438f->leave($__internal_82234500d7f927d275bdb9e5c462ba8a7599dfa3bffc951019052d76b4d0438f_prof);

    }

    // line 4
    public function block_menu($context, array $blocks = array())
    {
        $__internal_202403c5567af72d3f857c8a7f6539ec0c64a342a6d02cfb3eed296102fa5231 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_202403c5567af72d3f857c8a7f6539ec0c64a342a6d02cfb3eed296102fa5231->enter($__internal_202403c5567af72d3f857c8a7f6539ec0c64a342a6d02cfb3eed296102fa5231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1f96aa94f47d4ab30b87db93098eb9a2116fd0619345610e1e780c1264e38314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f96aa94f47d4ab30b87db93098eb9a2116fd0619345610e1e780c1264e38314->enter($__internal_1f96aa94f47d4ab30b87db93098eb9a2116fd0619345610e1e780c1264e38314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        echo "    

    <div id=\"page_title\" class=\"col-sm-12 center\">COMMANDER UN TICKET </div>   
    <div id=\"page_subtitle_1_active\" class=\"col-sm-4 center\">Date de visite</div>
    <div id=\"page_subtitle_2\" class=\"col-sm-4 center\">Identité des visiteurs</div>
    <div id=\"page_subtitle_3\" class=\"col-sm-4 center\">Paiement</div>    
   
";
        
        $__internal_1f96aa94f47d4ab30b87db93098eb9a2116fd0619345610e1e780c1264e38314->leave($__internal_1f96aa94f47d4ab30b87db93098eb9a2116fd0619345610e1e780c1264e38314_prof);

        
        $__internal_202403c5567af72d3f857c8a7f6539ec0c64a342a6d02cfb3eed296102fa5231->leave($__internal_202403c5567af72d3f857c8a7f6539ec0c64a342a6d02cfb3eed296102fa5231_prof);

    }

    // line 14
    public function block_form_part($context, array $blocks = array())
    {
        $__internal_3fa8304bbac1a9b01ace33ac75f47b8d26ff33288969e2211096183724cf0a38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fa8304bbac1a9b01ace33ac75f47b8d26ff33288969e2211096183724cf0a38->enter($__internal_3fa8304bbac1a9b01ace33ac75f47b8d26ff33288969e2211096183724cf0a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_part"));

        $__internal_d6fde947cbf0db3c93963e683c00c29460728545f1ce691846982491b7cbbf13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6fde947cbf0db3c93963e683c00c29460728545f1ce691846982491b7cbbf13->enter($__internal_d6fde947cbf0db3c93963e683c00c29460728545f1ce691846982491b7cbbf13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_part"));

        echo "    

<div class=\"well well-sm\">
  ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

  ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors', array("attr" => array("class" => "alert alert-danger fade in")));
        echo "


  <div class=\"form-group\">
    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Adresse email"));
        echo "
    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'errors', array("attr" => array("class" => "alert alert-danger fade in")));
        echo "
    <div class=\"col-sm-8\">
      ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

  <div class=\"form-group\">
    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "number", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Nombre de tickets"));
        echo "
    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "number", array()), 'errors', array("attr" => array("class" => "alert alert-danger fade in")));
        echo "
    <div class=\"col-sm-8\">
      ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "number", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
     <div class=\"form-group\"> 
     <div class=\"col-sm-12 center\">
    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'row');
        echo "
</div>
</div>
    
<a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_louvre_index");
        echo "\" class=\"col-sm-2 btn btn-primary\">
Accueil
</a>  
<span class=\"col-sm-6\"></span>   
";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "col-sm-4 btn btn-primary")));
        echo "

  ";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "


  ";
        // line 52
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</div>
    
";
        
        $__internal_d6fde947cbf0db3c93963e683c00c29460728545f1ce691846982491b7cbbf13->leave($__internal_d6fde947cbf0db3c93963e683c00c29460728545f1ce691846982491b7cbbf13_prof);

        
        $__internal_3fa8304bbac1a9b01ace33ac75f47b8d26ff33288969e2211096183724cf0a38->leave($__internal_3fa8304bbac1a9b01ace33ac75f47b8d26ff33288969e2211096183724cf0a38_prof);

    }

    // line 58
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d6d6023764642a420e8ec9723741f09c6e80cb9294d97257e225ed2e186ea90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d6d6023764642a420e8ec9723741f09c6e80cb9294d97257e225ed2e186ea90->enter($__internal_3d6d6023764642a420e8ec9723741f09c6e80cb9294d97257e225ed2e186ea90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3a3bbaa6567027e18415af4074692cecf4a134e073448a018a8fc35c27cf1756 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a3bbaa6567027e18415af4074692cecf4a134e073448a018a8fc35c27cf1756->enter($__internal_3a3bbaa6567027e18415af4074692cecf4a134e073448a018a8fc35c27cf1756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 
    
";
        
        $__internal_3a3bbaa6567027e18415af4074692cecf4a134e073448a018a8fc35c27cf1756->leave($__internal_3a3bbaa6567027e18415af4074692cecf4a134e073448a018a8fc35c27cf1756_prof);

        
        $__internal_3d6d6023764642a420e8ec9723741f09c6e80cb9294d97257e225ed2e186ea90->leave($__internal_3d6d6023764642a420e8ec9723741f09c6e80cb9294d97257e225ed2e186ea90_prof);

    }

    // line 63
    public function block_hidden_part($context, array $blocks = array())
    {
        $__internal_882fe92a673deb0fea403aa92109e2efd28173f1785897316ba6abab6c4dfda2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_882fe92a673deb0fea403aa92109e2efd28173f1785897316ba6abab6c4dfda2->enter($__internal_882fe92a673deb0fea403aa92109e2efd28173f1785897316ba6abab6c4dfda2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_part"));

        $__internal_3a0fcc7556905b3df1460d28abbbb100d891b349912ea03026e8a592d0300af3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a0fcc7556905b3df1460d28abbbb100d891b349912ea03026e8a592d0300af3->enter($__internal_3a0fcc7556905b3df1460d28abbbb100d891b349912ea03026e8a592d0300af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_part"));

        echo " 
    
";
        
        $__internal_3a0fcc7556905b3df1460d28abbbb100d891b349912ea03026e8a592d0300af3->leave($__internal_3a0fcc7556905b3df1460d28abbbb100d891b349912ea03026e8a592d0300af3_prof);

        
        $__internal_882fe92a673deb0fea403aa92109e2efd28173f1785897316ba6abab6c4dfda2->leave($__internal_882fe92a673deb0fea403aa92109e2efd28173f1785897316ba6abab6c4dfda2_prof);

    }

    public function getTemplateName()
    {
        return "OCLouvreBundle:Louvre:client.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 63,  166 => 58,  152 => 52,  146 => 49,  141 => 47,  134 => 43,  127 => 39,  119 => 34,  114 => 32,  110 => 31,  102 => 26,  97 => 24,  93 => 23,  86 => 19,  81 => 17,  68 => 14,  43 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"OCLouvreBundle:Louvre:index.html.twig\" %}

     
{% block menu %}    

    <div id=\"page_title\" class=\"col-sm-12 center\">COMMANDER UN TICKET </div>   
    <div id=\"page_subtitle_1_active\" class=\"col-sm-4 center\">Date de visite</div>
    <div id=\"page_subtitle_2\" class=\"col-sm-4 center\">Identité des visiteurs</div>
    <div id=\"page_subtitle_3\" class=\"col-sm-4 center\">Paiement</div>    
   
{% endblock %}


{% block form_part %}    

<div class=\"well well-sm\">
  {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}

  {{ form_errors(form, {'attr': {'class': 'alert alert-danger fade in'}})  }}


  <div class=\"form-group\">
    {{ form_label(form.email, \"Adresse email\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
    {{ form_errors(form.email, {'attr': {'class': 'alert alert-danger fade in'}})  }}
    <div class=\"col-sm-8\">
      {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}
    </div>
  </div>

  <div class=\"form-group\">
    {{ form_label(form.number, \"Nombre de tickets\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
    {{ form_errors(form.number, {'attr': {'class': 'alert alert-danger fade in'}})  }}
    <div class=\"col-sm-8\">
      {{ form_widget(form.number, {'attr': {'class': 'form-control'}}) }}
    </div>
  </div>
     <div class=\"form-group\"> 
     <div class=\"col-sm-12 center\">
    {{ form_row(form.date) }}
</div>
</div>
    
<a href=\"{{ path('oc_louvre_index') }}\" class=\"col-sm-2 btn btn-primary\">
Accueil
</a>  
<span class=\"col-sm-6\"></span>   
{{ form_widget(form.save, {'attr': {'class': 'col-sm-4 btn btn-primary'}}) }}

  {{ form_rest(form) }}


  {{ form_end(form) }}
</div>
    
{% endblock %}


{% block body %} 
    
{% endblock %}


{% block hidden_part %} 
    
{% endblock %}

", "OCLouvreBundle:Louvre:client.html.twig", "C:\\wamp64\\www\\newP4\\src\\OC\\LouvreBundle/Resources/views/Louvre/client.html.twig");
    }
}
