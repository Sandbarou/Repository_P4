<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_435b145c8ef31e48213b21b1f35cb1988e3aabdd0f0a8db418b196ebf061e9c8 extends Twig_Template
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
        $__internal_b51def0b086f42837cf655fd8abb75fb5d9454ee7bad6b30bb75fb5a5664de44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b51def0b086f42837cf655fd8abb75fb5d9454ee7bad6b30bb75fb5a5664de44->enter($__internal_b51def0b086f42837cf655fd8abb75fb5d9454ee7bad6b30bb75fb5a5664de44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_c7f9bc0ea5567c703281c3724668d9f6a0fa43596b81c11b63d09b326bd84a6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7f9bc0ea5567c703281c3724668d9f6a0fa43596b81c11b63d09b326bd84a6b->enter($__internal_c7f9bc0ea5567c703281c3724668d9f6a0fa43596b81c11b63d09b326bd84a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_b51def0b086f42837cf655fd8abb75fb5d9454ee7bad6b30bb75fb5a5664de44->leave($__internal_b51def0b086f42837cf655fd8abb75fb5d9454ee7bad6b30bb75fb5a5664de44_prof);

        
        $__internal_c7f9bc0ea5567c703281c3724668d9f6a0fa43596b81c11b63d09b326bd84a6b->leave($__internal_c7f9bc0ea5567c703281c3724668d9f6a0fa43596b81c11b63d09b326bd84a6b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
