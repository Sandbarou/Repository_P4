<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_276df2873d3e3e445a70600a6e2e89765a4ecc24d46617fb964713a995768832 extends Twig_Template
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
        $__internal_b113ad49553ce79e8e46d046f214ed9c2bff3913c3958e8dbd329d936a0c8e7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b113ad49553ce79e8e46d046f214ed9c2bff3913c3958e8dbd329d936a0c8e7b->enter($__internal_b113ad49553ce79e8e46d046f214ed9c2bff3913c3958e8dbd329d936a0c8e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_9c89a5d3bf3b04a56ae7755418514a097894ec7b63085ae6175f7182cdf377db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c89a5d3bf3b04a56ae7755418514a097894ec7b63085ae6175f7182cdf377db->enter($__internal_9c89a5d3bf3b04a56ae7755418514a097894ec7b63085ae6175f7182cdf377db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_b113ad49553ce79e8e46d046f214ed9c2bff3913c3958e8dbd329d936a0c8e7b->leave($__internal_b113ad49553ce79e8e46d046f214ed9c2bff3913c3958e8dbd329d936a0c8e7b_prof);

        
        $__internal_9c89a5d3bf3b04a56ae7755418514a097894ec7b63085ae6175f7182cdf377db->leave($__internal_9c89a5d3bf3b04a56ae7755418514a097894ec7b63085ae6175f7182cdf377db_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
