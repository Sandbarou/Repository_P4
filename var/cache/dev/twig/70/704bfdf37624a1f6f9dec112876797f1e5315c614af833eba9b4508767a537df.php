<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_1ffbb21902518405bf59b7ec94ccffaf68c67c4a1b0ebaa4cce656079092e2c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e142beec9ed6d6d898c6e19ad84ed537fdbe39800e35c848e1bc62a135b2d18f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e142beec9ed6d6d898c6e19ad84ed537fdbe39800e35c848e1bc62a135b2d18f->enter($__internal_e142beec9ed6d6d898c6e19ad84ed537fdbe39800e35c848e1bc62a135b2d18f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_65057d28bf5fc82fe5371dfc7cdc5afbdf9fa3f8f0d37fc0cdc0cd79665192ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65057d28bf5fc82fe5371dfc7cdc5afbdf9fa3f8f0d37fc0cdc0cd79665192ca->enter($__internal_65057d28bf5fc82fe5371dfc7cdc5afbdf9fa3f8f0d37fc0cdc0cd79665192ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_e142beec9ed6d6d898c6e19ad84ed537fdbe39800e35c848e1bc62a135b2d18f->leave($__internal_e142beec9ed6d6d898c6e19ad84ed537fdbe39800e35c848e1bc62a135b2d18f_prof);

        
        $__internal_65057d28bf5fc82fe5371dfc7cdc5afbdf9fa3f8f0d37fc0cdc0cd79665192ca->leave($__internal_65057d28bf5fc82fe5371dfc7cdc5afbdf9fa3f8f0d37fc0cdc0cd79665192ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
