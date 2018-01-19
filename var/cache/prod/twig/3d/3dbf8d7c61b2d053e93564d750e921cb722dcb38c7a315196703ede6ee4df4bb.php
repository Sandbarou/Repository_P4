<?php

/* @OCLouvre/Louvre/ticket.html.twig */
class __TwigTemplate_e5338d4f1ed5f6f0ad1a56f4aae368fc46bb9470ab032801a879e251eaa255ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCLouvreBundle:Louvre:1_index.html.twig", "@OCLouvre/Louvre/ticket.html.twig", 1);
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

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        echo "    

    <div id=\"page_title\" class=\"col-sm-12 center\">COMMANDER UN TICKET </div>   
    <div id=\"page_subtitle_1\" class=\"col-sm-4 center\">Date de visite</div>
    <div id=\"page_subtitle_2_active\" class=\"col-sm-4 center\">Identité des visiteurs</div>
    <div id=\"page_subtitle_3\" class=\"col-sm-4 center\">Paiement</div>    
     
";
    }

    // line 12
    public function block_form_part($context, array $blocks = array())
    {
        echo "      
  
<div class=\"well well-sm\">
  ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

  ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors', array("attr" => array("class" => "alert alert-danger fade in")));
        echo "


  <div class=\"form-group\">
    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "firstName", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Prénom"));
        echo "
    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "firstName", array()), 'errors', array("attr" => array("class" => "alert alert-danger fade in")));
        echo "
    <div class=\"col-sm-8\">
      ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "firstName", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>


  <div class=\"form-group\">
    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "lastName", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Nom"));
        echo "
    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "lastName", array()), 'errors', array("attr" => array("class" => "alert alert-danger fade in")));
        echo "
    <div class=\"col-sm-8\">
      ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "lastName", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
    
 
  <div class=\"form-group\">
    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "country", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Pays"));
        echo "
    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "country", array()), 'errors', array("attr" => array("class" => "alert alert-danger fade in")));
        echo "
    <div class=\"col-sm-8\">
      ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "country", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
    
    
<div class=\"form-group\"> 
<div class=\"col-sm-6 center\">
";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "birthDate", array()), 'row');
        echo "
</div>
<span class=\"col-sm-2\"></span>  
<div class=\"col-sm-2 center\">    
";
        // line 53
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "discount", array()), 'row');
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "save", array()), 'widget', array("attr" => array("class" => "col-sm-4 btn btn-primary")));
        echo "

  ";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "

  ";
        // line 67
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
</div>

";
    }

    // line 75
    public function block_body($context, array $blocks = array())
    {
        echo " 
    
";
    }

    // line 80
    public function block_hidden_part($context, array $blocks = array())
    {
        echo " 
    
";
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
        return array (  167 => 80,  159 => 75,  151 => 67,  146 => 65,  141 => 63,  134 => 59,  125 => 53,  118 => 49,  108 => 42,  103 => 40,  99 => 39,  90 => 33,  85 => 31,  81 => 30,  72 => 24,  67 => 22,  63 => 21,  56 => 17,  51 => 15,  44 => 12,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@OCLouvre/Louvre/ticket.html.twig", "C:\\wamp64\\www\\newP4\\src\\OC\\LouvreBundle\\Resources\\views\\Louvre\\ticket.html.twig");
    }
}
