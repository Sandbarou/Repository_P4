<?php

/* OCLouvreBundle:Louvre:index1.html.twig */
class __TwigTemplate_50bd998fbb467143cfd320d6ffb47f243d10f4ec34d6bfa8c765963b2733d313 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_74f7e904d3696f88e738dfd8c830c24f05b75c073ad110852382fec1583027fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74f7e904d3696f88e738dfd8c830c24f05b75c073ad110852382fec1583027fd->enter($__internal_74f7e904d3696f88e738dfd8c830c24f05b75c073ad110852382fec1583027fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCLouvreBundle:Louvre:index1.html.twig"));

        $__internal_2a8d8e4d944757a66202dfa599d55008ab64930c60f69a27feb933bc7095b304 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a8d8e4d944757a66202dfa599d55008ab64930c60f69a27feb933bc7095b304->enter($__internal_2a8d8e4d944757a66202dfa599d55008ab64930c60f69a27feb933bc7095b304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCLouvreBundle:Louvre:index1.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html>
  <head>
    <meta charset=\"utf-8\">
    <title>Hello</title>
  </head>
  <body>

    ";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "
  </body>
</html>";
        
        $__internal_74f7e904d3696f88e738dfd8c830c24f05b75c073ad110852382fec1583027fd->leave($__internal_74f7e904d3696f88e738dfd8c830c24f05b75c073ad110852382fec1583027fd_prof);

        
        $__internal_2a8d8e4d944757a66202dfa599d55008ab64930c60f69a27feb933bc7095b304->leave($__internal_2a8d8e4d944757a66202dfa599d55008ab64930c60f69a27feb933bc7095b304_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_48333d8e7d37c3ebebfa52d24fa32f150bfa66f12cd552a23a9e41ae4bf86c77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48333d8e7d37c3ebebfa52d24fa32f150bfa66f12cd552a23a9e41ae4bf86c77->enter($__internal_48333d8e7d37c3ebebfa52d24fa32f150bfa66f12cd552a23a9e41ae4bf86c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_448ddcaf7d9aacfa32da9d59366c91a4365050ed074a7a955fa61f62b57014cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_448ddcaf7d9aacfa32da9d59366c91a4365050ed074a7a955fa61f62b57014cf->enter($__internal_448ddcaf7d9aacfa32da9d59366c91a4365050ed074a7a955fa61f62b57014cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "        
        Hello
        
    ";
        
        $__internal_448ddcaf7d9aacfa32da9d59366c91a4365050ed074a7a955fa61f62b57014cf->leave($__internal_448ddcaf7d9aacfa32da9d59366c91a4365050ed074a7a955fa61f62b57014cf_prof);

        
        $__internal_48333d8e7d37c3ebebfa52d24fa32f150bfa66f12cd552a23a9e41ae4bf86c77->leave($__internal_48333d8e7d37c3ebebfa52d24fa32f150bfa66f12cd552a23a9e41ae4bf86c77_prof);

    }

    public function getTemplateName()
    {
        return "OCLouvreBundle:Louvre:index1.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  59 => 10,  50 => 9,  38 => 14,  36 => 9,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE HTML>
<html>
  <head>
    <meta charset=\"utf-8\">
    <title>Hello</title>
  </head>
  <body>

    {% block body %}
        
        Hello
        
    {% endblock %}

  </body>
</html>", "OCLouvreBundle:Louvre:index1.html.twig", "C:\\wamp64\\www\\newP4\\src\\OC\\LouvreBundle/Resources/views/Louvre/index1.html.twig");
    }
}
