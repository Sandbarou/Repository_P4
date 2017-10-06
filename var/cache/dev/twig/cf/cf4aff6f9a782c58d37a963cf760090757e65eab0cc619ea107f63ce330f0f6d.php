<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_00778c6a626da7d81eedfce2090a4225e4278e56865742f22e29b1dfc176227e extends Twig_Template
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
        $__internal_64a48957a98cee8ca220a7fd1e742c7f02d928cdf6d27e7f28ba64579023f6af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64a48957a98cee8ca220a7fd1e742c7f02d928cdf6d27e7f28ba64579023f6af->enter($__internal_64a48957a98cee8ca220a7fd1e742c7f02d928cdf6d27e7f28ba64579023f6af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_40e8ac092029b819c7ab3fb810fbec9b9c2876262dbac88fa78bd92a4ffd3be1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40e8ac092029b819c7ab3fb810fbec9b9c2876262dbac88fa78bd92a4ffd3be1->enter($__internal_40e8ac092029b819c7ab3fb810fbec9b9c2876262dbac88fa78bd92a4ffd3be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_64a48957a98cee8ca220a7fd1e742c7f02d928cdf6d27e7f28ba64579023f6af->leave($__internal_64a48957a98cee8ca220a7fd1e742c7f02d928cdf6d27e7f28ba64579023f6af_prof);

        
        $__internal_40e8ac092029b819c7ab3fb810fbec9b9c2876262dbac88fa78bd92a4ffd3be1->leave($__internal_40e8ac092029b819c7ab3fb810fbec9b9c2876262dbac88fa78bd92a4ffd3be1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
