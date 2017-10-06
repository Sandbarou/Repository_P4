<?php

/* OCLouvreBundle:Louvre:ticket.html.twig */
class __TwigTemplate_fb606b4300a48da6d7b2c30b309a2b52c9e382a91845ca6aaf96a37620dbe751 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCLouvreBundle:Louvre:index.html.twig", "OCLouvreBundle:Louvre:ticket.html.twig", 1);
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
        $__internal_dfe204292d047693a05b642caca71781345106ae6b8f1d7d77c986e9e047c62e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfe204292d047693a05b642caca71781345106ae6b8f1d7d77c986e9e047c62e->enter($__internal_dfe204292d047693a05b642caca71781345106ae6b8f1d7d77c986e9e047c62e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCLouvreBundle:Louvre:ticket.html.twig"));

        $__internal_050a0858a1b29fe894f27092bd03d2d09fb79b39b695a8482da6b5c887f30d1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_050a0858a1b29fe894f27092bd03d2d09fb79b39b695a8482da6b5c887f30d1a->enter($__internal_050a0858a1b29fe894f27092bd03d2d09fb79b39b695a8482da6b5c887f30d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCLouvreBundle:Louvre:ticket.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfe204292d047693a05b642caca71781345106ae6b8f1d7d77c986e9e047c62e->leave($__internal_dfe204292d047693a05b642caca71781345106ae6b8f1d7d77c986e9e047c62e_prof);

        
        $__internal_050a0858a1b29fe894f27092bd03d2d09fb79b39b695a8482da6b5c887f30d1a->leave($__internal_050a0858a1b29fe894f27092bd03d2d09fb79b39b695a8482da6b5c887f30d1a_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_08072930625ac4fae1aa80b0445bf05334474a09025e9d88fd71507ee046998d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08072930625ac4fae1aa80b0445bf05334474a09025e9d88fd71507ee046998d->enter($__internal_08072930625ac4fae1aa80b0445bf05334474a09025e9d88fd71507ee046998d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2c1f0085f8cc2bdb654e55f83b73ecdc51afeedbc637e4b0c114ec21ff00a477 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c1f0085f8cc2bdb654e55f83b73ecdc51afeedbc637e4b0c114ec21ff00a477->enter($__internal_2c1f0085f8cc2bdb654e55f83b73ecdc51afeedbc637e4b0c114ec21ff00a477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        echo "    

    <div id=\"page_title\" class=\"col-sm-12 center\">COMMANDER UN TICKET </div>   
    <div id=\"page_subtitle_1\" class=\"col-sm-4 center\">Date de visite</div>
    <div id=\"page_subtitle_2_active\" class=\"col-sm-4 center\">Identité des visiteurs</div>
    <div id=\"page_subtitle_3\" class=\"col-sm-4 center\">Paiement</div>    
     
";
        
        $__internal_2c1f0085f8cc2bdb654e55f83b73ecdc51afeedbc637e4b0c114ec21ff00a477->leave($__internal_2c1f0085f8cc2bdb654e55f83b73ecdc51afeedbc637e4b0c114ec21ff00a477_prof);

        
        $__internal_08072930625ac4fae1aa80b0445bf05334474a09025e9d88fd71507ee046998d->leave($__internal_08072930625ac4fae1aa80b0445bf05334474a09025e9d88fd71507ee046998d_prof);

    }

    // line 12
    public function block_form_part($context, array $blocks = array())
    {
        $__internal_7b0a438603b060eceb8081a684b6a8cc113cf7da355605f5b401c3c152f11330 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b0a438603b060eceb8081a684b6a8cc113cf7da355605f5b401c3c152f11330->enter($__internal_7b0a438603b060eceb8081a684b6a8cc113cf7da355605f5b401c3c152f11330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_part"));

        $__internal_d00b3bcc6c05c0b0817438d01f3cff3d0f48fc841717df4730ff2989eb18e384 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d00b3bcc6c05c0b0817438d01f3cff3d0f48fc841717df4730ff2989eb18e384->enter($__internal_d00b3bcc6c05c0b0817438d01f3cff3d0f48fc841717df4730ff2989eb18e384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_part"));

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
        
        $__internal_d00b3bcc6c05c0b0817438d01f3cff3d0f48fc841717df4730ff2989eb18e384->leave($__internal_d00b3bcc6c05c0b0817438d01f3cff3d0f48fc841717df4730ff2989eb18e384_prof);

        
        $__internal_7b0a438603b060eceb8081a684b6a8cc113cf7da355605f5b401c3c152f11330->leave($__internal_7b0a438603b060eceb8081a684b6a8cc113cf7da355605f5b401c3c152f11330_prof);

    }

    // line 75
    public function block_body($context, array $blocks = array())
    {
        $__internal_069adb1375ed68a5065d637357bd5dc587f3eb6831405e748a5bd0f5cc6019e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_069adb1375ed68a5065d637357bd5dc587f3eb6831405e748a5bd0f5cc6019e5->enter($__internal_069adb1375ed68a5065d637357bd5dc587f3eb6831405e748a5bd0f5cc6019e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2943227744b348f4dd5af9f098773338e6c6e348a48be7a79def1aa221626b6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2943227744b348f4dd5af9f098773338e6c6e348a48be7a79def1aa221626b6e->enter($__internal_2943227744b348f4dd5af9f098773338e6c6e348a48be7a79def1aa221626b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 
    
";
        
        $__internal_2943227744b348f4dd5af9f098773338e6c6e348a48be7a79def1aa221626b6e->leave($__internal_2943227744b348f4dd5af9f098773338e6c6e348a48be7a79def1aa221626b6e_prof);

        
        $__internal_069adb1375ed68a5065d637357bd5dc587f3eb6831405e748a5bd0f5cc6019e5->leave($__internal_069adb1375ed68a5065d637357bd5dc587f3eb6831405e748a5bd0f5cc6019e5_prof);

    }

    // line 80
    public function block_hidden_part($context, array $blocks = array())
    {
        $__internal_4f3a1c8b5657031782c1309f96eb09e8ec7632cd127f15710e6fe3c954bfb9eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f3a1c8b5657031782c1309f96eb09e8ec7632cd127f15710e6fe3c954bfb9eb->enter($__internal_4f3a1c8b5657031782c1309f96eb09e8ec7632cd127f15710e6fe3c954bfb9eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_part"));

        $__internal_9bc61c395cf5f264a64b582a358f85153365d38dd44dedc5d0bf56207932600f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bc61c395cf5f264a64b582a358f85153365d38dd44dedc5d0bf56207932600f->enter($__internal_9bc61c395cf5f264a64b582a358f85153365d38dd44dedc5d0bf56207932600f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_part"));

        echo " 
    
";
        
        $__internal_9bc61c395cf5f264a64b582a358f85153365d38dd44dedc5d0bf56207932600f->leave($__internal_9bc61c395cf5f264a64b582a358f85153365d38dd44dedc5d0bf56207932600f_prof);

        
        $__internal_4f3a1c8b5657031782c1309f96eb09e8ec7632cd127f15710e6fe3c954bfb9eb->leave($__internal_4f3a1c8b5657031782c1309f96eb09e8ec7632cd127f15710e6fe3c954bfb9eb_prof);

    }

    public function getTemplateName()
    {
        return "OCLouvreBundle:Louvre:ticket.html.twig";
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
    
{% endblock %}", "OCLouvreBundle:Louvre:ticket.html.twig", "C:\\wamp64\\www\\newP4\\src\\OC\\LouvreBundle/Resources/views/Louvre/ticket.html.twig");
    }
}
