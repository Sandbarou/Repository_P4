<?php

/* OCLouvreBundle:Louvre:date.html.twig */
class __TwigTemplate_89c71d2bd8f6b63294666a2e251ba878049e6a39408f2bca1eb088d1ca44ea1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCLouvreBundle:Louvre:index.html.twig", "OCLouvreBundle:Louvre:date.html.twig", 1);
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
        $__internal_d54e43f243775dae8e79ab15765136e67b5e7874dddae48efbb5ffd4e4626479 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d54e43f243775dae8e79ab15765136e67b5e7874dddae48efbb5ffd4e4626479->enter($__internal_d54e43f243775dae8e79ab15765136e67b5e7874dddae48efbb5ffd4e4626479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCLouvreBundle:Louvre:date.html.twig"));

        $__internal_171fbd281dff59272dadcd773bb837316c76583abfb2aeaeadbc9eb61c1eab37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_171fbd281dff59272dadcd773bb837316c76583abfb2aeaeadbc9eb61c1eab37->enter($__internal_171fbd281dff59272dadcd773bb837316c76583abfb2aeaeadbc9eb61c1eab37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCLouvreBundle:Louvre:date.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d54e43f243775dae8e79ab15765136e67b5e7874dddae48efbb5ffd4e4626479->leave($__internal_d54e43f243775dae8e79ab15765136e67b5e7874dddae48efbb5ffd4e4626479_prof);

        
        $__internal_171fbd281dff59272dadcd773bb837316c76583abfb2aeaeadbc9eb61c1eab37->leave($__internal_171fbd281dff59272dadcd773bb837316c76583abfb2aeaeadbc9eb61c1eab37_prof);

    }

    // line 4
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c5519398da396197b3327ec291540711a6f5a9f4f2cb6172418d6ea14c274f86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5519398da396197b3327ec291540711a6f5a9f4f2cb6172418d6ea14c274f86->enter($__internal_c5519398da396197b3327ec291540711a6f5a9f4f2cb6172418d6ea14c274f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_12728ce47e0c585a7aac462fc8621b0789dc54f7bb1fbedf8d4520b8004aa1b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12728ce47e0c585a7aac462fc8621b0789dc54f7bb1fbedf8d4520b8004aa1b0->enter($__internal_12728ce47e0c585a7aac462fc8621b0789dc54f7bb1fbedf8d4520b8004aa1b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        echo "    

    <div id=\"page_title\" class=\"col-sm-12 center\">COMMANDER UN TICKET </div>   
    <div id=\"page_subtitle_1_active\" class=\"col-sm-4 center\">Date de visite</div>
    <div id=\"page_subtitle_2\" class=\"col-sm-4 center\">Identité des visiteurs</div>
    <div id=\"page_subtitle_3\" class=\"col-sm-4 center\">Paiement</div>    
   
";
        
        $__internal_12728ce47e0c585a7aac462fc8621b0789dc54f7bb1fbedf8d4520b8004aa1b0->leave($__internal_12728ce47e0c585a7aac462fc8621b0789dc54f7bb1fbedf8d4520b8004aa1b0_prof);

        
        $__internal_c5519398da396197b3327ec291540711a6f5a9f4f2cb6172418d6ea14c274f86->leave($__internal_c5519398da396197b3327ec291540711a6f5a9f4f2cb6172418d6ea14c274f86_prof);

    }

    // line 13
    public function block_form_part($context, array $blocks = array())
    {
        $__internal_a34028a0f75df8e1ea82aa3e9faf8d95fdeb5125a1b6f97bcb7d8bacbe0c2764 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a34028a0f75df8e1ea82aa3e9faf8d95fdeb5125a1b6f97bcb7d8bacbe0c2764->enter($__internal_a34028a0f75df8e1ea82aa3e9faf8d95fdeb5125a1b6f97bcb7d8bacbe0c2764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_part"));

        $__internal_1e3845b91e73c60eb50e0872af53d7fa22a435fcf016ab64417be899a185aeab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e3845b91e73c60eb50e0872af53d7fa22a435fcf016ab64417be899a185aeab->enter($__internal_1e3845b91e73c60eb50e0872af53d7fa22a435fcf016ab64417be899a185aeab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_part"));

        echo "    
  
<div class=\"well\">   
    
    ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors', array("attr" => array("class" => "alert alert-danger fade in")));
        echo "
    
    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'label');
        echo "
    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget');
        echo "
        
    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "number", array()), 'label');
        echo "
    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "number", array()), 'widget');
        echo "
    
    <div class=\"well\"></div>
      

    <a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_louvre_index");
        echo "\" class=\"col-sm-2 btn btn-primary\">
        Accueil
    </a>  
    <span class=\"col-sm-6\"></span>   
    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "submit", array()), 'widget', array("attr" => array("class" => "col-sm-4 btn btn-primary")));
        echo "

    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "

    ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "    
     
    
    
</div>     

";
        
        $__internal_1e3845b91e73c60eb50e0872af53d7fa22a435fcf016ab64417be899a185aeab->leave($__internal_1e3845b91e73c60eb50e0872af53d7fa22a435fcf016ab64417be899a185aeab_prof);

        
        $__internal_a34028a0f75df8e1ea82aa3e9faf8d95fdeb5125a1b6f97bcb7d8bacbe0c2764->leave($__internal_a34028a0f75df8e1ea82aa3e9faf8d95fdeb5125a1b6f97bcb7d8bacbe0c2764_prof);

    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d89f02099db5a323cf477da9547c5f717509681f682c72bc27052de568777e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d89f02099db5a323cf477da9547c5f717509681f682c72bc27052de568777e2->enter($__internal_6d89f02099db5a323cf477da9547c5f717509681f682c72bc27052de568777e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b33bd5c183af1f88952f2b90f0df3fb14b2a651d43d4a7581891dc1f1bde919a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b33bd5c183af1f88952f2b90f0df3fb14b2a651d43d4a7581891dc1f1bde919a->enter($__internal_b33bd5c183af1f88952f2b90f0df3fb14b2a651d43d4a7581891dc1f1bde919a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 
    
";
        
        $__internal_b33bd5c183af1f88952f2b90f0df3fb14b2a651d43d4a7581891dc1f1bde919a->leave($__internal_b33bd5c183af1f88952f2b90f0df3fb14b2a651d43d4a7581891dc1f1bde919a_prof);

        
        $__internal_6d89f02099db5a323cf477da9547c5f717509681f682c72bc27052de568777e2->leave($__internal_6d89f02099db5a323cf477da9547c5f717509681f682c72bc27052de568777e2_prof);

    }

    // line 52
    public function block_hidden_part($context, array $blocks = array())
    {
        $__internal_9a76452c8e87b9fb917f380c62ac41ddcd5f879244f4216120c73356b4e151d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a76452c8e87b9fb917f380c62ac41ddcd5f879244f4216120c73356b4e151d7->enter($__internal_9a76452c8e87b9fb917f380c62ac41ddcd5f879244f4216120c73356b4e151d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_part"));

        $__internal_6c1ee1a2ff1c414cda618febb1e74109abaa4f20ac2d58411fde2864bc53ab2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c1ee1a2ff1c414cda618febb1e74109abaa4f20ac2d58411fde2864bc53ab2c->enter($__internal_6c1ee1a2ff1c414cda618febb1e74109abaa4f20ac2d58411fde2864bc53ab2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_part"));

        echo " 
    
";
        
        $__internal_6c1ee1a2ff1c414cda618febb1e74109abaa4f20ac2d58411fde2864bc53ab2c->leave($__internal_6c1ee1a2ff1c414cda618febb1e74109abaa4f20ac2d58411fde2864bc53ab2c_prof);

        
        $__internal_9a76452c8e87b9fb917f380c62ac41ddcd5f879244f4216120c73356b4e151d7->leave($__internal_9a76452c8e87b9fb917f380c62ac41ddcd5f879244f4216120c73356b4e151d7_prof);

    }

    public function getTemplateName()
    {
        return "OCLouvreBundle:Louvre:date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 52,  147 => 47,  130 => 38,  125 => 36,  120 => 34,  113 => 30,  105 => 25,  101 => 24,  96 => 22,  92 => 21,  87 => 19,  82 => 17,  68 => 13,  43 => 4,  11 => 1,);
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
  
<div class=\"well\">   
    
    {{ form_start(form) }}

    {{ form_errors(form, {'attr': {'class': 'alert alert-danger fade in'}})  }}
    
    {{ form_label(form.date) }}
    {{ form_widget(form.date) }}
        
    {{ form_label(form.number) }}
    {{ form_widget(form.number) }}
    
    <div class=\"well\"></div>
      

    <a href=\"{{ path('oc_louvre_index') }}\" class=\"col-sm-2 btn btn-primary\">
        Accueil
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
    
{% endblock %}



", "OCLouvreBundle:Louvre:date.html.twig", "C:\\wamp64\\www\\newP4\\src\\OC\\LouvreBundle/Resources/views/Louvre/date.html.twig");
    }
}
