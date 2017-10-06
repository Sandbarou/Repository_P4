<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_dfbbb742d790e4aa82f523cd4151318f9070a60a902ca3a1a54bb847823bafe1 extends Twig_Template
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
        $__internal_80b29e67223e35aa313d9fbf47008d2fd29354eab8a9f0f9a0105e3623fc5a35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80b29e67223e35aa313d9fbf47008d2fd29354eab8a9f0f9a0105e3623fc5a35->enter($__internal_80b29e67223e35aa313d9fbf47008d2fd29354eab8a9f0f9a0105e3623fc5a35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_d1b06031c6538d8523d6de0df442bea73fca336d9265a0b4902e07660546d31b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1b06031c6538d8523d6de0df442bea73fca336d9265a0b4902e07660546d31b->enter($__internal_d1b06031c6538d8523d6de0df442bea73fca336d9265a0b4902e07660546d31b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_80b29e67223e35aa313d9fbf47008d2fd29354eab8a9f0f9a0105e3623fc5a35->leave($__internal_80b29e67223e35aa313d9fbf47008d2fd29354eab8a9f0f9a0105e3623fc5a35_prof);

        
        $__internal_d1b06031c6538d8523d6de0df442bea73fca336d9265a0b4902e07660546d31b->leave($__internal_d1b06031c6538d8523d6de0df442bea73fca336d9265a0b4902e07660546d31b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
