<?php

/* OCLouvreBundle:Louvre:client.html.twig */
class __TwigTemplate_2e84bbabf6b57b73cb6f469d0135ceb8ec027e541e3c3255f67c90aa8fbe6c9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCLouvreBundle:Louvre:1_index.html.twig", "OCLouvreBundle:Louvre:client.html.twig", 1);
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
    <div id=\"page_subtitle_1_active\" class=\"col-sm-4 center\">Date de visite</div>
    <div id=\"page_subtitle_2\" class=\"col-sm-4 center\">Identité des visiteurs</div>
    <div id=\"page_subtitle_3\" class=\"col-sm-4 center\">Paiement</div>    
   
";
    }

    // line 14
    public function block_form_part($context, array $blocks = array())
    {
        echo "    

<div class=\"well well-sm\">
  ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

  ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors', array("attr" => array("class" => "alert alert-danger fade in")));
        echo "


  <div class=\"form-group\">
    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Adresse email"));
        echo "
    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'errors', array("attr" => array("class" => "alert alert-danger fade in")));
        echo "
    <div class=\"col-sm-8\">
      ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

  <div class=\"form-group\">
    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "number", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Nombre de tickets"));
        echo "
    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "number", array()), 'errors', array("attr" => array("class" => "alert alert-danger fade in")));
        echo "
    <div class=\"col-sm-8\">
      ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "number", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
     <div class=\"form-group\"> 
     <div class=\"col-sm-12 center\">
    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "date", array()), 'row');
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "save", array()), 'widget', array("attr" => array("class" => "col-sm-4 btn btn-primary")));
        echo "

  ";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "


  ";
        // line 52
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
</div>
    
";
    }

    // line 58
    public function block_body($context, array $blocks = array())
    {
        echo " 
    
";
    }

    // line 63
    public function block_hidden_part($context, array $blocks = array())
    {
        echo " 
    
";
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
        return array (  138 => 63,  130 => 58,  122 => 52,  116 => 49,  111 => 47,  104 => 43,  97 => 39,  89 => 34,  84 => 32,  80 => 31,  72 => 26,  67 => 24,  63 => 23,  56 => 19,  51 => 17,  44 => 14,  31 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OCLouvreBundle:Louvre:client.html.twig", "C:\\wamp64\\www\\newP4\\src\\OC\\LouvreBundle/Resources/views/Louvre/client.html.twig");
    }
}
