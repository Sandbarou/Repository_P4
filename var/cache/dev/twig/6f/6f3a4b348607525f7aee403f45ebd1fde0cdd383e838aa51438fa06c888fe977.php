<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_193aef89f41c29e8ef705dac93c503e9f55c01971b30259f6a2f21cba3a95424 extends Twig_Template
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
        $__internal_02a2e8d696c7254bfff06af3aaec301d76acc573ccad20c4f0e4247186f666c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02a2e8d696c7254bfff06af3aaec301d76acc573ccad20c4f0e4247186f666c2->enter($__internal_02a2e8d696c7254bfff06af3aaec301d76acc573ccad20c4f0e4247186f666c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_c24f48804c4b3506cc663e7f8464dbc2554ba24172beaa2953f88009a9821705 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c24f48804c4b3506cc663e7f8464dbc2554ba24172beaa2953f88009a9821705->enter($__internal_c24f48804c4b3506cc663e7f8464dbc2554ba24172beaa2953f88009a9821705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_02a2e8d696c7254bfff06af3aaec301d76acc573ccad20c4f0e4247186f666c2->leave($__internal_02a2e8d696c7254bfff06af3aaec301d76acc573ccad20c4f0e4247186f666c2_prof);

        
        $__internal_c24f48804c4b3506cc663e7f8464dbc2554ba24172beaa2953f88009a9821705->leave($__internal_c24f48804c4b3506cc663e7f8464dbc2554ba24172beaa2953f88009a9821705_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
