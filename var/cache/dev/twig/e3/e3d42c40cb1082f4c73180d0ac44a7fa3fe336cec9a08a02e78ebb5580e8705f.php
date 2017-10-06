<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_485a80234a59f8cde2406e11eecedf0cfba25476358ca06393c00d9bcc96d5d8 extends Twig_Template
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
        $__internal_0a47f266b5eab71dd1284c0c26a01230fb87fc80bde33de8f9b4aefda9a46514 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a47f266b5eab71dd1284c0c26a01230fb87fc80bde33de8f9b4aefda9a46514->enter($__internal_0a47f266b5eab71dd1284c0c26a01230fb87fc80bde33de8f9b4aefda9a46514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_df962cde4cb1460784897e0136c0b85ecdae90da7d7446a5698a0e2c9f42f2ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df962cde4cb1460784897e0136c0b85ecdae90da7d7446a5698a0e2c9f42f2ed->enter($__internal_df962cde4cb1460784897e0136c0b85ecdae90da7d7446a5698a0e2c9f42f2ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_0a47f266b5eab71dd1284c0c26a01230fb87fc80bde33de8f9b4aefda9a46514->leave($__internal_0a47f266b5eab71dd1284c0c26a01230fb87fc80bde33de8f9b4aefda9a46514_prof);

        
        $__internal_df962cde4cb1460784897e0136c0b85ecdae90da7d7446a5698a0e2c9f42f2ed->leave($__internal_df962cde4cb1460784897e0136c0b85ecdae90da7d7446a5698a0e2c9f42f2ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
