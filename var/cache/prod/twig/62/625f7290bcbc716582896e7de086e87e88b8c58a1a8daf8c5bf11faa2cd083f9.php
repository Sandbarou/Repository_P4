<?php

/* @OCLouvre/Louvre/resume.html.twig */
class __TwigTemplate_6dd5d281b2687c9e0a48de4d9fcf52d81e41b3f740f898400c514dd80bb5b65d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCLouvreBundle:Louvre:1_index.html.twig", "@OCLouvre/Louvre/resume.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'form_part' => array($this, 'block_form_part'),
            'body' => array($this, 'block_body'),
            'hidden_part' => array($this, 'block_hidden_part'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCLouvreBundle:Louvre:1_index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_menu($context, array $blocks = array())
    {
        echo "    

    <div id=\"page_title\" class=\"col-sm-12 center\">COMMANDER UN TICKET </div>   
    <div id=\"page_subtitle_1\" class=\"col-sm-4 center\">Date de visite</div>
    <div id=\"page_subtitle_2\" class=\"col-sm-4 center\">Identité des visiteurs</div>
    <div id=\"page_subtitle_3_active\" class=\"col-sm-4 center\">Paiement</div>    
   
";
    }

    // line 13
    public function block_form_part($context, array $blocks = array())
    {
        echo "      
";
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        echo " 
    
<div class=\"well well-sm\">
    <h5 class=\"center brown-text\">Récapitulatif de votre commande</h5>
      <div class=\"container\">  
    <ul class=\"list-group\">
    <b>Votre adresse email</b><li class=\"list-group-item\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? null), "email", array()), "html", null, true);
        echo "</li>
    <b>Date de votre visite</b><li class=\"list-group-item\">";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["client"] ?? null), "date", array()), "d/m/Y"), "html", null, true);
        echo "</li>
    <b>Nombre de tickets commandés</b><li class=\"list-group-item\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? null), "number", array()), "html", null, true);
        echo "</li>
    <b>Montant total de votre commande</b><li class=\"list-group-item\">";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? null), "total", array()), "html", null, true);
        echo " euros</li>  
  </ul>
  
 </div>   
    
    
    <div class=\"container\">

   ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listTickets"] ?? null));
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
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "firstName", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "lastName", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "country", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ticket"], "birthDate", array()), "d/m/Y"), "html", null, true);
            echo "</td>
        <td>";
            // line 50
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
        // line 55
        echo "   
</div>
    
    
</div> 
<a href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_louvre_index");
        echo "\" class=\"col-sm-2 btn btn-primary\">
Accueil
</a>      
<span class=\"col-sm-8\"></span>    
<a href=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_louvre_index");
        echo "\" class=\"col-sm-2 btn btn-primary\">
Paiement
</a>      

";
    }

    // line 71
    public function block_hidden_part($context, array $blocks = array())
    {
        echo " 
    
";
    }

    public function getTemplateName()
    {
        return "@OCLouvre/Louvre/resume.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 71,  144 => 64,  137 => 60,  130 => 55,  118 => 50,  114 => 49,  110 => 48,  106 => 47,  102 => 46,  84 => 33,  73 => 25,  69 => 24,  65 => 23,  61 => 22,  51 => 16,  44 => 13,  31 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@OCLouvre/Louvre/resume.html.twig", "C:\\wamp64\\www\\newP4\\src\\OC\\LouvreBundle\\Resources\\views\\Louvre\\resume.html.twig");
    }
}
