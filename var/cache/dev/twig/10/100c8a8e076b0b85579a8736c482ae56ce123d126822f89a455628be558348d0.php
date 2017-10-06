<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_0d229daf3099657ec73e67a30e4e4c649e1847f887c7836ee2e7badbb5dc015c extends Twig_Template
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
        $__internal_747f933b4f728acb109c9f8c85aa4e31fd3c15f8f02497af6d865b65087bca78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_747f933b4f728acb109c9f8c85aa4e31fd3c15f8f02497af6d865b65087bca78->enter($__internal_747f933b4f728acb109c9f8c85aa4e31fd3c15f8f02497af6d865b65087bca78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_ec21ffe027845876aea83a321a4b87ba19e2bd6495ef4e17208c968f3171ae96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec21ffe027845876aea83a321a4b87ba19e2bd6495ef4e17208c968f3171ae96->enter($__internal_ec21ffe027845876aea83a321a4b87ba19e2bd6495ef4e17208c968f3171ae96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_747f933b4f728acb109c9f8c85aa4e31fd3c15f8f02497af6d865b65087bca78->leave($__internal_747f933b4f728acb109c9f8c85aa4e31fd3c15f8f02497af6d865b65087bca78_prof);

        
        $__internal_ec21ffe027845876aea83a321a4b87ba19e2bd6495ef4e17208c968f3171ae96->leave($__internal_ec21ffe027845876aea83a321a4b87ba19e2bd6495ef4e17208c968f3171ae96_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
