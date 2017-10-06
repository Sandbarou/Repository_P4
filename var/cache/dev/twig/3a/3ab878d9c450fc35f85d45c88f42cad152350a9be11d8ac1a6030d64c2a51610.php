<?php

/* base.html.twig */
class __TwigTemplate_e3896824a4e50256d5691fe384d28f95c406a11740c322338a283a5eba4389a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_997e633e7f4a85000833a38a2921abf7341916af8dc3abaa2db22763764db830 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_997e633e7f4a85000833a38a2921abf7341916af8dc3abaa2db22763764db830->enter($__internal_997e633e7f4a85000833a38a2921abf7341916af8dc3abaa2db22763764db830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_3d3149c1312927ceb671e3a07bc5f9985aab0c617ffb97676f9ad2a3ba3097c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d3149c1312927ceb671e3a07bc5f9985aab0c617ffb97676f9ad2a3ba3097c5->enter($__internal_3d3149c1312927ceb671e3a07bc5f9985aab0c617ffb97676f9ad2a3ba3097c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_997e633e7f4a85000833a38a2921abf7341916af8dc3abaa2db22763764db830->leave($__internal_997e633e7f4a85000833a38a2921abf7341916af8dc3abaa2db22763764db830_prof);

        
        $__internal_3d3149c1312927ceb671e3a07bc5f9985aab0c617ffb97676f9ad2a3ba3097c5->leave($__internal_3d3149c1312927ceb671e3a07bc5f9985aab0c617ffb97676f9ad2a3ba3097c5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_580e260b543ef629143a4cb7740e3a2973c75ed521f6c951350b3b37274d38b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_580e260b543ef629143a4cb7740e3a2973c75ed521f6c951350b3b37274d38b2->enter($__internal_580e260b543ef629143a4cb7740e3a2973c75ed521f6c951350b3b37274d38b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0e76933734f8901f98bcd1b5d13870c58cf37a48e3c45ecb0896925caf39c17e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e76933734f8901f98bcd1b5d13870c58cf37a48e3c45ecb0896925caf39c17e->enter($__internal_0e76933734f8901f98bcd1b5d13870c58cf37a48e3c45ecb0896925caf39c17e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0e76933734f8901f98bcd1b5d13870c58cf37a48e3c45ecb0896925caf39c17e->leave($__internal_0e76933734f8901f98bcd1b5d13870c58cf37a48e3c45ecb0896925caf39c17e_prof);

        
        $__internal_580e260b543ef629143a4cb7740e3a2973c75ed521f6c951350b3b37274d38b2->leave($__internal_580e260b543ef629143a4cb7740e3a2973c75ed521f6c951350b3b37274d38b2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3df5b1e36313b32d3912518451a0e614456118b06fcd323e00d1846b1ae251ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3df5b1e36313b32d3912518451a0e614456118b06fcd323e00d1846b1ae251ad->enter($__internal_3df5b1e36313b32d3912518451a0e614456118b06fcd323e00d1846b1ae251ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a2d26b2b7f844a9c869604f8c9dda5b4c65adafd0d23517bae3da8077e9d0159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2d26b2b7f844a9c869604f8c9dda5b4c65adafd0d23517bae3da8077e9d0159->enter($__internal_a2d26b2b7f844a9c869604f8c9dda5b4c65adafd0d23517bae3da8077e9d0159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a2d26b2b7f844a9c869604f8c9dda5b4c65adafd0d23517bae3da8077e9d0159->leave($__internal_a2d26b2b7f844a9c869604f8c9dda5b4c65adafd0d23517bae3da8077e9d0159_prof);

        
        $__internal_3df5b1e36313b32d3912518451a0e614456118b06fcd323e00d1846b1ae251ad->leave($__internal_3df5b1e36313b32d3912518451a0e614456118b06fcd323e00d1846b1ae251ad_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_bed01e2681914e8cae2233b38da2990c62253759ecf194a15092d00e736a5672 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bed01e2681914e8cae2233b38da2990c62253759ecf194a15092d00e736a5672->enter($__internal_bed01e2681914e8cae2233b38da2990c62253759ecf194a15092d00e736a5672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ee67eae1988e107ce57b340a5f3bb5e93c1200458c1d79ed9e3ab2623c0760af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee67eae1988e107ce57b340a5f3bb5e93c1200458c1d79ed9e3ab2623c0760af->enter($__internal_ee67eae1988e107ce57b340a5f3bb5e93c1200458c1d79ed9e3ab2623c0760af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ee67eae1988e107ce57b340a5f3bb5e93c1200458c1d79ed9e3ab2623c0760af->leave($__internal_ee67eae1988e107ce57b340a5f3bb5e93c1200458c1d79ed9e3ab2623c0760af_prof);

        
        $__internal_bed01e2681914e8cae2233b38da2990c62253759ecf194a15092d00e736a5672->leave($__internal_bed01e2681914e8cae2233b38da2990c62253759ecf194a15092d00e736a5672_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9dcb5ad82b73fa493b43b05673cbe2860d5e1dace695f42a6dc2988964526698 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dcb5ad82b73fa493b43b05673cbe2860d5e1dace695f42a6dc2988964526698->enter($__internal_9dcb5ad82b73fa493b43b05673cbe2860d5e1dace695f42a6dc2988964526698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ef2b03e5672b128f3bc3cc9c00627982268ef069684de4e1c559bea1b8ea91d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef2b03e5672b128f3bc3cc9c00627982268ef069684de4e1c559bea1b8ea91d2->enter($__internal_ef2b03e5672b128f3bc3cc9c00627982268ef069684de4e1c559bea1b8ea91d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ef2b03e5672b128f3bc3cc9c00627982268ef069684de4e1c559bea1b8ea91d2->leave($__internal_ef2b03e5672b128f3bc3cc9c00627982268ef069684de4e1c559bea1b8ea91d2_prof);

        
        $__internal_9dcb5ad82b73fa493b43b05673cbe2860d5e1dace695f42a6dc2988964526698->leave($__internal_9dcb5ad82b73fa493b43b05673cbe2860d5e1dace695f42a6dc2988964526698_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\newP4\\app\\Resources\\views\\base.html.twig");
    }
}
