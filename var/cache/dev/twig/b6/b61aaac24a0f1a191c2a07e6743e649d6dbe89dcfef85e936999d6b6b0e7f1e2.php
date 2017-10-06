<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_97530a603414ff968afa75fd8425460d8debf405eb3db4f998bf3fc52072e52a extends Twig_Template
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
        $__internal_d67b117880ba1692cd0e04b17ee1d2bf5a876b4604ba34f5b00bbac6b09d336d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d67b117880ba1692cd0e04b17ee1d2bf5a876b4604ba34f5b00bbac6b09d336d->enter($__internal_d67b117880ba1692cd0e04b17ee1d2bf5a876b4604ba34f5b00bbac6b09d336d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_49c32817b04bc454ff5fad0e1a45de405cd841f977321bc6ea58644c636efa11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49c32817b04bc454ff5fad0e1a45de405cd841f977321bc6ea58644c636efa11->enter($__internal_49c32817b04bc454ff5fad0e1a45de405cd841f977321bc6ea58644c636efa11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_d67b117880ba1692cd0e04b17ee1d2bf5a876b4604ba34f5b00bbac6b09d336d->leave($__internal_d67b117880ba1692cd0e04b17ee1d2bf5a876b4604ba34f5b00bbac6b09d336d_prof);

        
        $__internal_49c32817b04bc454ff5fad0e1a45de405cd841f977321bc6ea58644c636efa11->leave($__internal_49c32817b04bc454ff5fad0e1a45de405cd841f977321bc6ea58644c636efa11_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
