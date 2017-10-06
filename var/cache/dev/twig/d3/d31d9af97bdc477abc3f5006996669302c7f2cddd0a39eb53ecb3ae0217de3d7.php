<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_9ecddeb65954af326e08e59dc415095e3d5d2361d7468edc360abd7ffc046fb1 extends Twig_Template
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
        $__internal_4e26f6343c629c4cce83ca19fb5752d6a34d649dba4681348b823e3b15338cc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e26f6343c629c4cce83ca19fb5752d6a34d649dba4681348b823e3b15338cc5->enter($__internal_4e26f6343c629c4cce83ca19fb5752d6a34d649dba4681348b823e3b15338cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_561cc0b655e551954b27e9fccdb08231924346666cd530784d9bc2ceee82de60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_561cc0b655e551954b27e9fccdb08231924346666cd530784d9bc2ceee82de60->enter($__internal_561cc0b655e551954b27e9fccdb08231924346666cd530784d9bc2ceee82de60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_4e26f6343c629c4cce83ca19fb5752d6a34d649dba4681348b823e3b15338cc5->leave($__internal_4e26f6343c629c4cce83ca19fb5752d6a34d649dba4681348b823e3b15338cc5_prof);

        
        $__internal_561cc0b655e551954b27e9fccdb08231924346666cd530784d9bc2ceee82de60->leave($__internal_561cc0b655e551954b27e9fccdb08231924346666cd530784d9bc2ceee82de60_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
