<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_50d7596cc7694e7be7cb1c574fe4a4bfb444aae630706bfcc6c49ff0c638a4ee extends Twig_Template
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
        $__internal_63f5d44113827070f14f7264a4d6f89f0d53f5d2c3feab93a7a13a80fa809d33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63f5d44113827070f14f7264a4d6f89f0d53f5d2c3feab93a7a13a80fa809d33->enter($__internal_63f5d44113827070f14f7264a4d6f89f0d53f5d2c3feab93a7a13a80fa809d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_9e467a0f093b865152716b4b822fcf0defce9154bec76549131f0902350d6a1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e467a0f093b865152716b4b822fcf0defce9154bec76549131f0902350d6a1d->enter($__internal_9e467a0f093b865152716b4b822fcf0defce9154bec76549131f0902350d6a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_63f5d44113827070f14f7264a4d6f89f0d53f5d2c3feab93a7a13a80fa809d33->leave($__internal_63f5d44113827070f14f7264a4d6f89f0d53f5d2c3feab93a7a13a80fa809d33_prof);

        
        $__internal_9e467a0f093b865152716b4b822fcf0defce9154bec76549131f0902350d6a1d->leave($__internal_9e467a0f093b865152716b4b822fcf0defce9154bec76549131f0902350d6a1d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
