<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_c08bf877778582fdec794b9caa80fc0cc782285edc446736100a530820b35de1 extends Twig_Template
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
        $__internal_60d5d8888ee2a4a0a97db2e87ff6386068e95c9baae44dcdbf51c6e98f00e7b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60d5d8888ee2a4a0a97db2e87ff6386068e95c9baae44dcdbf51c6e98f00e7b4->enter($__internal_60d5d8888ee2a4a0a97db2e87ff6386068e95c9baae44dcdbf51c6e98f00e7b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_219d60a44343571c298be947ddc42fc4cc9bb5a17b0be82c88fab71f2b25b2c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_219d60a44343571c298be947ddc42fc4cc9bb5a17b0be82c88fab71f2b25b2c5->enter($__internal_219d60a44343571c298be947ddc42fc4cc9bb5a17b0be82c88fab71f2b25b2c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_60d5d8888ee2a4a0a97db2e87ff6386068e95c9baae44dcdbf51c6e98f00e7b4->leave($__internal_60d5d8888ee2a4a0a97db2e87ff6386068e95c9baae44dcdbf51c6e98f00e7b4_prof);

        
        $__internal_219d60a44343571c298be947ddc42fc4cc9bb5a17b0be82c88fab71f2b25b2c5->leave($__internal_219d60a44343571c298be947ddc42fc4cc9bb5a17b0be82c88fab71f2b25b2c5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
