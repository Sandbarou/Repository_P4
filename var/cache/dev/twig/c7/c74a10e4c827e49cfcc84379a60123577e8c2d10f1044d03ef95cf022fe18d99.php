<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_f21ab4e482dbc0556d765e1ce856c35da01a2cbec85481c9dfccf87c2c79808a extends Twig_Template
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
        $__internal_1d45317e1ccd7959b53edfa8a9b06acde5b91a670ba0bfe5ace4c50bc10c048c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d45317e1ccd7959b53edfa8a9b06acde5b91a670ba0bfe5ace4c50bc10c048c->enter($__internal_1d45317e1ccd7959b53edfa8a9b06acde5b91a670ba0bfe5ace4c50bc10c048c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_81152e312d19022d3955228b90930c9e122ca08c95a811b9f0607c4362cf4e48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81152e312d19022d3955228b90930c9e122ca08c95a811b9f0607c4362cf4e48->enter($__internal_81152e312d19022d3955228b90930c9e122ca08c95a811b9f0607c4362cf4e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_1d45317e1ccd7959b53edfa8a9b06acde5b91a670ba0bfe5ace4c50bc10c048c->leave($__internal_1d45317e1ccd7959b53edfa8a9b06acde5b91a670ba0bfe5ace4c50bc10c048c_prof);

        
        $__internal_81152e312d19022d3955228b90930c9e122ca08c95a811b9f0607c4362cf4e48->leave($__internal_81152e312d19022d3955228b90930c9e122ca08c95a811b9f0607c4362cf4e48_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
