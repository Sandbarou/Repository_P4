<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_496361a52fc8271d65235d4851230ebdc00c8896318ee973e165ea284f8b479c extends Twig_Template
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
        $__internal_1cadb7adf74631df5853f27a405eeb0c2a4206abb70357cf2c5e8f7d3b9f316b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cadb7adf74631df5853f27a405eeb0c2a4206abb70357cf2c5e8f7d3b9f316b->enter($__internal_1cadb7adf74631df5853f27a405eeb0c2a4206abb70357cf2c5e8f7d3b9f316b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_55a4d068d25019180cb8810492ecedc30d8aa52116824b79af478416b05a31bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55a4d068d25019180cb8810492ecedc30d8aa52116824b79af478416b05a31bd->enter($__internal_55a4d068d25019180cb8810492ecedc30d8aa52116824b79af478416b05a31bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_1cadb7adf74631df5853f27a405eeb0c2a4206abb70357cf2c5e8f7d3b9f316b->leave($__internal_1cadb7adf74631df5853f27a405eeb0c2a4206abb70357cf2c5e8f7d3b9f316b_prof);

        
        $__internal_55a4d068d25019180cb8810492ecedc30d8aa52116824b79af478416b05a31bd->leave($__internal_55a4d068d25019180cb8810492ecedc30d8aa52116824b79af478416b05a31bd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
