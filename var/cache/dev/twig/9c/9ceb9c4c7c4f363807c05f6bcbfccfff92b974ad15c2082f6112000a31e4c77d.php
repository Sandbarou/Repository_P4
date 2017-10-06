<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_bfb8cbfc2e763096a4fb6d4259a192b9ca56297d890fcf93763b4df6a8222108 extends Twig_Template
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
        $__internal_40ba3fe778053c10cb932870efdcf35de8a5a3c0ee3a5b2b173d3274e86598c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40ba3fe778053c10cb932870efdcf35de8a5a3c0ee3a5b2b173d3274e86598c1->enter($__internal_40ba3fe778053c10cb932870efdcf35de8a5a3c0ee3a5b2b173d3274e86598c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_84d2f5b3ad836d5d9a3da0e7add5caa42b8d57bb551ecede75e0ac5b41859360 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84d2f5b3ad836d5d9a3da0e7add5caa42b8d57bb551ecede75e0ac5b41859360->enter($__internal_84d2f5b3ad836d5d9a3da0e7add5caa42b8d57bb551ecede75e0ac5b41859360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_40ba3fe778053c10cb932870efdcf35de8a5a3c0ee3a5b2b173d3274e86598c1->leave($__internal_40ba3fe778053c10cb932870efdcf35de8a5a3c0ee3a5b2b173d3274e86598c1_prof);

        
        $__internal_84d2f5b3ad836d5d9a3da0e7add5caa42b8d57bb551ecede75e0ac5b41859360->leave($__internal_84d2f5b3ad836d5d9a3da0e7add5caa42b8d57bb551ecede75e0ac5b41859360_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
