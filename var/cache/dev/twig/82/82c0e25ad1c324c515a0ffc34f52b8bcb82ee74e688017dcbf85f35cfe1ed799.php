<?php

/* @OCLouvre/Louvre/ticket.html.twig */
class __TwigTemplate_59bc9fd43ff412650a4b7f13869bfb947c5ce8ff2033a512cd45c3f634668ace extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCLouvreBundle:Louvre:index.html.twig", "@OCLouvre/Louvre/ticket.html.twig", 1);
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
        $__internal_0e9ded724b612b8d6080e5b31e3b198d87b3314a0647a4aa6b22862399e4f905 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e9ded724b612b8d6080e5b31e3b198d87b3314a0647a4aa6b22862399e4f905->enter($__internal_0e9ded724b612b8d6080e5b31e3b198d87b3314a0647a4aa6b22862399e4f905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCLouvre/Louvre/ticket.html.twig"));

        $__internal_1916abd4a5d0bedd1152b84f86d0257bb3db51f1271724f2137ef3897a8a9297 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1916abd4a5d0bedd1152b84f86d0257bb3db51f1271724f2137ef3897a8a9297->enter($__internal_1916abd4a5d0bedd1152b84f86d0257bb3db51f1271724f2137ef3897a8a9297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCLouvre/Louvre/ticket.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e9ded724b612b8d6080e5b31e3b198d87b3314a0647a4aa6b22862399e4f905->leave($__internal_0e9ded724b612b8d6080e5b31e3b198d87b3314a0647a4aa6b22862399e4f905_prof);

        
        $__internal_1916abd4a5d0bedd1152b84f86d0257bb3db51f1271724f2137ef3897a8a9297->leave($__internal_1916abd4a5d0bedd1152b84f86d0257bb3db51f1271724f2137ef3897a8a9297_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8cbe9f45a92f21a718402e3305891ce2a4c3ef83445c31fb53edf2f1b80b9fcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cbe9f45a92f21a718402e3305891ce2a4c3ef83445c31fb53edf2f1b80b9fcc->enter($__internal_8cbe9f45a92f21a718402e3305891ce2a4c3ef83445c31fb53edf2f1b80b9fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ae9eef8ae55da02bd6eac8013216df56e6c2ff470ac596b918e9a5c49256c744 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae9eef8ae55da02bd6eac8013216df56e6c2ff470ac596b918e9a5c49256c744->enter($__internal_ae9eef8ae55da02bd6eac8013216df56e6c2ff470ac596b918e9a5c49256c744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        echo "    

    <div id=\"page_title\" class=\"col-sm-12 center\">COMMANDER UN TICKET </div>   
    <div id=\"page_subtitle_1\" class=\"col-sm-4 center\">Date de visite</div>
    <div id=\"page_subtitle_2_active\" class=\"col-sm-4 center\">Identité des visiteurs</div>
    <div id=\"page_subtitle_3\" class=\"col-sm-4 center\">Paiement</div>    
     
";
        
        $__internal_ae9eef8ae55da02bd6eac8013216df56e6c2ff470ac596b918e9a5c49256c744->leave($__internal_ae9eef8ae55da02bd6eac8013216df56e6c2ff470ac596b918e9a5c49256c744_prof);

        
        $__internal_8cbe9f45a92f21a718402e3305891ce2a4c3ef83445c31fb53edf2f1b80b9fcc->leave($__internal_8cbe9f45a92f21a718402e3305891ce2a4c3ef83445c31fb53edf2f1b80b9fcc_prof);

    }

    // line 12
    public function block_form_part($context, array $blocks = array())
    {
        $__internal_5c2d2907bc6aec9e1d793680e64226f4937e808dc31cbdc4e5291c3ea6934e06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c2d2907bc6aec9e1d793680e64226f4937e808dc31cbdc4e5291c3ea6934e06->enter($__internal_5c2d2907bc6aec9e1d793680e64226f4937e808dc31cbdc4e5291c3ea6934e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_part"));

        $__internal_5e1af9ec535d1f8743274485f8bdb8430b287a1edec49f201dd9382127d049db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e1af9ec535d1f8743274485f8bdb8430b287a1edec49f201dd9382127d049db->enter($__internal_5e1af9ec535d1f8743274485f8bdb8430b287a1edec49f201dd9382127d049db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_part"));

        echo "      
  
<div class=\"well well-sm\">
  ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

  ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors', array("attr" => array("class" => "alert alert-danger fade in")));
        echo "


  <div class=\"form-group\">
    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstName", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Prénom"));
        echo "
    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstName", array()), 'errors', array("attr" => array("class" => "alert alert-danger fade in")));
        echo "
    <div class=\"col-sm-8\">
      ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstName", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>


  <div class=\"form-group\">
    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastName", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Nom"));
        echo "
    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastName", array()), 'errors', array("attr" => array("class" => "alert alert-danger fade in")));
        echo "
    <div class=\"col-sm-8\">
      ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastName", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
    
 
  <div class=\"form-group\">
    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "country", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Pays"));
        echo "
    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "country", array()), 'errors', array("attr" => array("class" => "alert alert-danger fade in")));
        echo "
    <div class=\"col-sm-8\">
      ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "country", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
    
    
<div class=\"form-group\"> 
<div class=\"col-sm-6 center\">
";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "birthDate", array()), 'row');
        echo "
</div>
<span class=\"col-sm-2\"></span>  
<div class=\"col-sm-2 center\">    
";
        // line 53
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "discount", array()), 'row');
        echo "
</div>
<span class=\"col-sm-2\"></span>        
</div>

    
<a href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_louvre_client");
        echo "\" class=\"col-sm-2 btn btn-primary\">
Retour
</a>  
<span class=\"col-sm-6\"></span>        
";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "submit", array()), 'widget', array("attr" => array("class" => "col-sm-4 btn btn-primary")));
        echo "

  ";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "

  ";
        // line 67
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</div>

";
        
        $__internal_5e1af9ec535d1f8743274485f8bdb8430b287a1edec49f201dd9382127d049db->leave($__internal_5e1af9ec535d1f8743274485f8bdb8430b287a1edec49f201dd9382127d049db_prof);

        
        $__internal_5c2d2907bc6aec9e1d793680e64226f4937e808dc31cbdc4e5291c3ea6934e06->leave($__internal_5c2d2907bc6aec9e1d793680e64226f4937e808dc31cbdc4e5291c3ea6934e06_prof);

    }

    // line 75
    public function block_body($context, array $blocks = array())
    {
        $__internal_a819b8b48c7289a316ea03dbaeaf4d504a5ece4f86af1b7db54c18d6a9b230db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a819b8b48c7289a316ea03dbaeaf4d504a5ece4f86af1b7db54c18d6a9b230db->enter($__internal_a819b8b48c7289a316ea03dbaeaf4d504a5ece4f86af1b7db54c18d6a9b230db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3100d3008e06e42c152db06f259cf2ec3251282d32b58d90304bce4fd82bfb95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3100d3008e06e42c152db06f259cf2ec3251282d32b58d90304bce4fd82bfb95->enter($__internal_3100d3008e06e42c152db06f259cf2ec3251282d32b58d90304bce4fd82bfb95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 
    
";
        
        $__internal_3100d3008e06e42c152db06f259cf2ec3251282d32b58d90304bce4fd82bfb95->leave($__internal_3100d3008e06e42c152db06f259cf2ec3251282d32b58d90304bce4fd82bfb95_prof);

        
        $__internal_a819b8b48c7289a316ea03dbaeaf4d504a5ece4f86af1b7db54c18d6a9b230db->leave($__internal_a819b8b48c7289a316ea03dbaeaf4d504a5ece4f86af1b7db54c18d6a9b230db_prof);

    }

    // line 80
    public function block_hidden_part($context, array $blocks = array())
    {
        $__internal_9380c652eae7c82f2537ac6a8893ecdb7fabb727b66ded222b13498156ef6c6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9380c652eae7c82f2537ac6a8893ecdb7fabb727b66ded222b13498156ef6c6c->enter($__internal_9380c652eae7c82f2537ac6a8893ecdb7fabb727b66ded222b13498156ef6c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_part"));

        $__internal_8f5ae46101568f922482c388439f5cc011f837345f43527d6e5c365c20737cfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f5ae46101568f922482c388439f5cc011f837345f43527d6e5c365c20737cfd->enter($__internal_8f5ae46101568f922482c388439f5cc011f837345f43527d6e5c365c20737cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_part"));

        echo " 
    
";
        
        $__internal_8f5ae46101568f922482c388439f5cc011f837345f43527d6e5c365c20737cfd->leave($__internal_8f5ae46101568f922482c388439f5cc011f837345f43527d6e5c365c20737cfd_prof);

        
        $__internal_9380c652eae7c82f2537ac6a8893ecdb7fabb727b66ded222b13498156ef6c6c->leave($__internal_9380c652eae7c82f2537ac6a8893ecdb7fabb727b66ded222b13498156ef6c6c_prof);

    }

    public function getTemplateName()
    {
        return "@OCLouvre/Louvre/ticket.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 80,  195 => 75,  181 => 67,  176 => 65,  171 => 63,  164 => 59,  155 => 53,  148 => 49,  138 => 42,  133 => 40,  129 => 39,  120 => 33,  115 => 31,  111 => 30,  102 => 24,  97 => 22,  93 => 21,  86 => 17,  81 => 15,  68 => 12,  43 => 3,  11 => 1,);
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
    <div id=\"page_subtitle_1\" class=\"col-sm-4 center\">Date de visite</div>
    <div id=\"page_subtitle_2_active\" class=\"col-sm-4 center\">Identité des visiteurs</div>
    <div id=\"page_subtitle_3\" class=\"col-sm-4 center\">Paiement</div>    
     
{% endblock %}

{% block form_part %}      
  
<div class=\"well well-sm\">
  {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}

  {{ form_errors(form, {'attr': {'class': 'alert alert-danger fade in'}})  }}


  <div class=\"form-group\">
    {{ form_label(form.firstName, \"Prénom\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
    {{ form_errors(form.firstName, {'attr': {'class': 'alert alert-danger fade in'}})  }}
    <div class=\"col-sm-8\">
      {{ form_widget(form.firstName, {'attr': {'class': 'form-control'}}) }}
    </div>
  </div>


  <div class=\"form-group\">
    {{ form_label(form.lastName, \"Nom\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
    {{ form_errors(form.lastName, {'attr': {'class': 'alert alert-danger fade in'}})  }}
    <div class=\"col-sm-8\">
      {{ form_widget(form.lastName, {'attr': {'class': 'form-control'}}) }}
    </div>
  </div>
    
 
  <div class=\"form-group\">
    {{ form_label(form.country, \"Pays\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
    {{ form_errors(form.country, {'attr': {'class': 'alert alert-danger fade in'}})  }}
    <div class=\"col-sm-8\">
      {{ form_widget(form.country, {'attr': {'class': 'form-control'}}) }}
    </div>
  </div>
    
    
<div class=\"form-group\"> 
<div class=\"col-sm-6 center\">
{{ form_row(form.birthDate) }}
</div>
<span class=\"col-sm-2\"></span>  
<div class=\"col-sm-2 center\">    
{{ form_row(form.discount) }}
</div>
<span class=\"col-sm-2\"></span>        
</div>

    
<a href=\"{{ path('oc_louvre_client') }}\" class=\"col-sm-2 btn btn-primary\">
Retour
</a>  
<span class=\"col-sm-6\"></span>        
{{ form_widget(form.submit, {'attr': {'class': 'col-sm-4 btn btn-primary'}}) }}

  {{ form_rest(form) }}

  {{ form_end(form) }}
</div>

{% endblock %}


    
    
{% block body %} 
    
{% endblock %}


{% block hidden_part %} 
    
{% endblock %}", "@OCLouvre/Louvre/ticket.html.twig", "C:\\wamp64\\www\\newP4\\src\\OC\\LouvreBundle\\Resources\\views\\Louvre\\ticket.html.twig");
    }
}
