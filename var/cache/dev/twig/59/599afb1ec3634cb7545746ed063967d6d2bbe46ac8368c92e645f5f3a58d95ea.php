<?php

/* OCLouvreBundle:Louvre:resume.html.twig */
class __TwigTemplate_4d9de83498183f6311f51b064d05c3feac53ab1822180489d503e3257bfe1888 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCLouvreBundle:Louvre:index.html.twig", "OCLouvreBundle:Louvre:resume.html.twig", 1);
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
        $__internal_47c2dad13f2f5b07b477847b6308f42c955da35224728008c37f82bc87b62e04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47c2dad13f2f5b07b477847b6308f42c955da35224728008c37f82bc87b62e04->enter($__internal_47c2dad13f2f5b07b477847b6308f42c955da35224728008c37f82bc87b62e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCLouvreBundle:Louvre:resume.html.twig"));

        $__internal_820c641ca13ce1962ec13fe29885ad3a99cd6bf3c4f12c83af73a3047385f518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_820c641ca13ce1962ec13fe29885ad3a99cd6bf3c4f12c83af73a3047385f518->enter($__internal_820c641ca13ce1962ec13fe29885ad3a99cd6bf3c4f12c83af73a3047385f518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCLouvreBundle:Louvre:resume.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47c2dad13f2f5b07b477847b6308f42c955da35224728008c37f82bc87b62e04->leave($__internal_47c2dad13f2f5b07b477847b6308f42c955da35224728008c37f82bc87b62e04_prof);

        
        $__internal_820c641ca13ce1962ec13fe29885ad3a99cd6bf3c4f12c83af73a3047385f518->leave($__internal_820c641ca13ce1962ec13fe29885ad3a99cd6bf3c4f12c83af73a3047385f518_prof);

    }

    // line 4
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c880bc2c477c3f6890aa6f264ff8808ca303c5c1d10b873e4dfadf8ea42cd861 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c880bc2c477c3f6890aa6f264ff8808ca303c5c1d10b873e4dfadf8ea42cd861->enter($__internal_c880bc2c477c3f6890aa6f264ff8808ca303c5c1d10b873e4dfadf8ea42cd861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a2bf8283679e50757225e9fd0a4bbed8580c2f523930850c60d585a7c8a87185 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2bf8283679e50757225e9fd0a4bbed8580c2f523930850c60d585a7c8a87185->enter($__internal_a2bf8283679e50757225e9fd0a4bbed8580c2f523930850c60d585a7c8a87185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        echo "    

    <div id=\"page_title\" class=\"col-sm-12 center\">COMMANDER UN TICKET </div>   
    <div id=\"page_subtitle_1\" class=\"col-sm-4 center\">Date de visite</div>
    <div id=\"page_subtitle_2\" class=\"col-sm-4 center\">Identité des visiteurs</div>
    <div id=\"page_subtitle_3_active\" class=\"col-sm-4 center\">Paiement</div>    
   
";
        
        $__internal_a2bf8283679e50757225e9fd0a4bbed8580c2f523930850c60d585a7c8a87185->leave($__internal_a2bf8283679e50757225e9fd0a4bbed8580c2f523930850c60d585a7c8a87185_prof);

        
        $__internal_c880bc2c477c3f6890aa6f264ff8808ca303c5c1d10b873e4dfadf8ea42cd861->leave($__internal_c880bc2c477c3f6890aa6f264ff8808ca303c5c1d10b873e4dfadf8ea42cd861_prof);

    }

    // line 13
    public function block_form_part($context, array $blocks = array())
    {
        $__internal_024766850123c10cb145d1e759d303042cfe9257e745c3964adb8928e34b705b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_024766850123c10cb145d1e759d303042cfe9257e745c3964adb8928e34b705b->enter($__internal_024766850123c10cb145d1e759d303042cfe9257e745c3964adb8928e34b705b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_part"));

        $__internal_918bd456352049f6a48e7f7a0ac8a8eac0c0c65e0270cb1a876dbc6fef1d2eda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_918bd456352049f6a48e7f7a0ac8a8eac0c0c65e0270cb1a876dbc6fef1d2eda->enter($__internal_918bd456352049f6a48e7f7a0ac8a8eac0c0c65e0270cb1a876dbc6fef1d2eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_part"));

        echo "      
";
        
        $__internal_918bd456352049f6a48e7f7a0ac8a8eac0c0c65e0270cb1a876dbc6fef1d2eda->leave($__internal_918bd456352049f6a48e7f7a0ac8a8eac0c0c65e0270cb1a876dbc6fef1d2eda_prof);

        
        $__internal_024766850123c10cb145d1e759d303042cfe9257e745c3964adb8928e34b705b->leave($__internal_024766850123c10cb145d1e759d303042cfe9257e745c3964adb8928e34b705b_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_d5f596980e91825f8f600f571507d8a54009bc66cd4044970ccbf5de4c03cff0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5f596980e91825f8f600f571507d8a54009bc66cd4044970ccbf5de4c03cff0->enter($__internal_d5f596980e91825f8f600f571507d8a54009bc66cd4044970ccbf5de4c03cff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c23f5aa62aa54f02b6499ee735b2e37db778ac3ef5baf5332560d0ef6aa2edb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c23f5aa62aa54f02b6499ee735b2e37db778ac3ef5baf5332560d0ef6aa2edb6->enter($__internal_c23f5aa62aa54f02b6499ee735b2e37db778ac3ef5baf5332560d0ef6aa2edb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 
    
<div class=\"well well-sm\">
    <h5 class=\"center brown-text\">Récapitulatif de votre commande</h5>
      <div class=\"container\">  
    <ul class=\"list-group\">
    <b>Votre adresse email</b><li class=\"list-group-item\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "email", array()), "html", null, true);
        echo "</li>
    <b>Montant total de votre commande</b><li class=\"list-group-item\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "total", array()), "html", null, true);
        echo " euros</li>  
  </ul>
  
 </div>   
    
    
    <div class=\"container\">

   ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listTickets"] ?? $this->getContext($context, "listTickets")));
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            echo "       
  <table class=\"table table-hover\">
    <thead>
      <tr>
        <th>Prénom</th>
        <th>Nom</th>
        <th>Pays</th>
        <th>Date de naissance</th>
        <th>Tarif réduit</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "firstName", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "lastName", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "country", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ticket"], "birthDate", array()), "d/m/Y"), "html", null, true);
            echo "</td>
        <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "discount", array()), "html", null, true);
            echo "</td> 
      </tr>

    </tbody>
  </table>
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "   
</div>
    
    
</div> 
<a href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_louvre_index");
        echo "\" class=\"col-sm-2 btn btn-primary\">
Accueil
</a>      
<span class=\"col-sm-8\"></span>    
<a href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_louvre_index");
        echo "\" class=\"col-sm-2 btn btn-primary\">
Paiement
</a>      

";
        
        $__internal_c23f5aa62aa54f02b6499ee735b2e37db778ac3ef5baf5332560d0ef6aa2edb6->leave($__internal_c23f5aa62aa54f02b6499ee735b2e37db778ac3ef5baf5332560d0ef6aa2edb6_prof);

        
        $__internal_d5f596980e91825f8f600f571507d8a54009bc66cd4044970ccbf5de4c03cff0->leave($__internal_d5f596980e91825f8f600f571507d8a54009bc66cd4044970ccbf5de4c03cff0_prof);

    }

    // line 69
    public function block_hidden_part($context, array $blocks = array())
    {
        $__internal_d2ddf8cd46e018f511f1061187df20d6482d2d396a8f82eb75093d995437975d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2ddf8cd46e018f511f1061187df20d6482d2d396a8f82eb75093d995437975d->enter($__internal_d2ddf8cd46e018f511f1061187df20d6482d2d396a8f82eb75093d995437975d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_part"));

        $__internal_3c9ff5530420c85a01fd6b5d26614eb7bd2715da03a38e9efcad13833a791e50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c9ff5530420c85a01fd6b5d26614eb7bd2715da03a38e9efcad13833a791e50->enter($__internal_3c9ff5530420c85a01fd6b5d26614eb7bd2715da03a38e9efcad13833a791e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_part"));

        echo " 
    
";
        
        $__internal_3c9ff5530420c85a01fd6b5d26614eb7bd2715da03a38e9efcad13833a791e50->leave($__internal_3c9ff5530420c85a01fd6b5d26614eb7bd2715da03a38e9efcad13833a791e50_prof);

        
        $__internal_d2ddf8cd46e018f511f1061187df20d6482d2d396a8f82eb75093d995437975d->leave($__internal_d2ddf8cd46e018f511f1061187df20d6482d2d396a8f82eb75093d995437975d_prof);

    }

    public function getTemplateName()
    {
        return "OCLouvreBundle:Louvre:resume.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 69,  178 => 62,  171 => 58,  164 => 53,  152 => 48,  148 => 47,  144 => 46,  140 => 45,  136 => 44,  118 => 31,  107 => 23,  103 => 22,  87 => 16,  68 => 13,  43 => 4,  11 => 1,);
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
    <div id=\"page_subtitle_2\" class=\"col-sm-4 center\">Identité des visiteurs</div>
    <div id=\"page_subtitle_3_active\" class=\"col-sm-4 center\">Paiement</div>    
   
{% endblock %}

{% block form_part %}      
{% endblock %}

{% block body %} 
    
<div class=\"well well-sm\">
    <h5 class=\"center brown-text\">Récapitulatif de votre commande</h5>
      <div class=\"container\">  
    <ul class=\"list-group\">
    <b>Votre adresse email</b><li class=\"list-group-item\">{{ client.email }}</li>
    <b>Montant total de votre commande</b><li class=\"list-group-item\">{{ client.total }} euros</li>  
  </ul>
  
 </div>   
    
    
    <div class=\"container\">

   {% for ticket in listTickets %}       
  <table class=\"table table-hover\">
    <thead>
      <tr>
        <th>Prénom</th>
        <th>Nom</th>
        <th>Pays</th>
        <th>Date de naissance</th>
        <th>Tarif réduit</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{ ticket.firstName }}</td>
        <td>{{ ticket.lastName }}</td>
        <td>{{ ticket.country }}</td>
        <td>{{ ticket.birthDate|date('d/m/Y') }}</td>
        <td>{{ ticket.discount }}</td> 
      </tr>

    </tbody>
  </table>
       {% endfor %}   
</div>
    
    
</div> 
<a href=\"{{ path('oc_louvre_index') }}\" class=\"col-sm-2 btn btn-primary\">
Accueil
</a>      
<span class=\"col-sm-8\"></span>    
<a href=\"{{ path('oc_louvre_index') }}\" class=\"col-sm-2 btn btn-primary\">
Paiement
</a>      

{% endblock %}


{% block hidden_part %} 
    
{% endblock %}


", "OCLouvreBundle:Louvre:resume.html.twig", "C:\\wamp64\\www\\newP4\\src\\OC\\LouvreBundle/Resources/views/Louvre/resume.html.twig");
    }
}
