<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_c3e618d2514d3486c3a0a566f2436c6b5e37b33bfeda0f768f43b15318c35872 extends Twig_Template
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
        $__internal_39fa56168d8ec37267b76a0d5c91246ba7d298448ef5ae18fb37423fcddf86bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39fa56168d8ec37267b76a0d5c91246ba7d298448ef5ae18fb37423fcddf86bd->enter($__internal_39fa56168d8ec37267b76a0d5c91246ba7d298448ef5ae18fb37423fcddf86bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_d6012a187fe2b044c205b2964c424778fa94dfc10b87f8d72bf0490e228cdfd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6012a187fe2b044c205b2964c424778fa94dfc10b87f8d72bf0490e228cdfd1->enter($__internal_d6012a187fe2b044c205b2964c424778fa94dfc10b87f8d72bf0490e228cdfd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_39fa56168d8ec37267b76a0d5c91246ba7d298448ef5ae18fb37423fcddf86bd->leave($__internal_39fa56168d8ec37267b76a0d5c91246ba7d298448ef5ae18fb37423fcddf86bd_prof);

        
        $__internal_d6012a187fe2b044c205b2964c424778fa94dfc10b87f8d72bf0490e228cdfd1->leave($__internal_d6012a187fe2b044c205b2964c424778fa94dfc10b87f8d72bf0490e228cdfd1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
