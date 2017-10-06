<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_27979bc060592bd8fda23ef67f3b72ac46a69e3a8cde15a44253ea5a4cfe9d22 extends Twig_Template
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
        $__internal_072e1b7464ec109ad324060ca1e6473b210d2a17784869dea619d2cdce67da24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_072e1b7464ec109ad324060ca1e6473b210d2a17784869dea619d2cdce67da24->enter($__internal_072e1b7464ec109ad324060ca1e6473b210d2a17784869dea619d2cdce67da24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_9144ee57e534b04e2779959407ffde6ec09b0fbe527713c72291f4ef8fd22748 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9144ee57e534b04e2779959407ffde6ec09b0fbe527713c72291f4ef8fd22748->enter($__internal_9144ee57e534b04e2779959407ffde6ec09b0fbe527713c72291f4ef8fd22748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_072e1b7464ec109ad324060ca1e6473b210d2a17784869dea619d2cdce67da24->leave($__internal_072e1b7464ec109ad324060ca1e6473b210d2a17784869dea619d2cdce67da24_prof);

        
        $__internal_9144ee57e534b04e2779959407ffde6ec09b0fbe527713c72291f4ef8fd22748->leave($__internal_9144ee57e534b04e2779959407ffde6ec09b0fbe527713c72291f4ef8fd22748_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
