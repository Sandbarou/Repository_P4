<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_bf1fd811ebc364c1f0a4b92e92c89d4ec8e86ec1e93ed396270c5a9928cef604 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_81bfebc95a03cb38762d5143e3cc97f6e82eebfeba653624d8148e179681e81d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81bfebc95a03cb38762d5143e3cc97f6e82eebfeba653624d8148e179681e81d->enter($__internal_81bfebc95a03cb38762d5143e3cc97f6e82eebfeba653624d8148e179681e81d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_74b904da59d2dc1b45d54462982f61ac84e3621de11e70c555ef4dd61315109e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74b904da59d2dc1b45d54462982f61ac84e3621de11e70c555ef4dd61315109e->enter($__internal_74b904da59d2dc1b45d54462982f61ac84e3621de11e70c555ef4dd61315109e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_81bfebc95a03cb38762d5143e3cc97f6e82eebfeba653624d8148e179681e81d->leave($__internal_81bfebc95a03cb38762d5143e3cc97f6e82eebfeba653624d8148e179681e81d_prof);

        
        $__internal_74b904da59d2dc1b45d54462982f61ac84e3621de11e70c555ef4dd61315109e->leave($__internal_74b904da59d2dc1b45d54462982f61ac84e3621de11e70c555ef4dd61315109e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d518d3d862315654ae51892385f1e0e303d9ecb98c7dc55993ca793d342a086c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d518d3d862315654ae51892385f1e0e303d9ecb98c7dc55993ca793d342a086c->enter($__internal_d518d3d862315654ae51892385f1e0e303d9ecb98c7dc55993ca793d342a086c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5e2ab4ddafe63bdbc90275ab95af0eaaf7157029ce6bae7bbeb7d0dbd0ab7f80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e2ab4ddafe63bdbc90275ab95af0eaaf7157029ce6bae7bbeb7d0dbd0ab7f80->enter($__internal_5e2ab4ddafe63bdbc90275ab95af0eaaf7157029ce6bae7bbeb7d0dbd0ab7f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_5e2ab4ddafe63bdbc90275ab95af0eaaf7157029ce6bae7bbeb7d0dbd0ab7f80->leave($__internal_5e2ab4ddafe63bdbc90275ab95af0eaaf7157029ce6bae7bbeb7d0dbd0ab7f80_prof);

        
        $__internal_d518d3d862315654ae51892385f1e0e303d9ecb98c7dc55993ca793d342a086c->leave($__internal_d518d3d862315654ae51892385f1e0e303d9ecb98c7dc55993ca793d342a086c_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_ecc543936be37390f630c8e738b5e54833159d95b31803a20d087871f54569aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecc543936be37390f630c8e738b5e54833159d95b31803a20d087871f54569aa->enter($__internal_ecc543936be37390f630c8e738b5e54833159d95b31803a20d087871f54569aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4353932e7c836ada1100cd568777b0f534a968021db05aa5de1333b271285319 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4353932e7c836ada1100cd568777b0f534a968021db05aa5de1333b271285319->enter($__internal_4353932e7c836ada1100cd568777b0f534a968021db05aa5de1333b271285319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_4353932e7c836ada1100cd568777b0f534a968021db05aa5de1333b271285319->leave($__internal_4353932e7c836ada1100cd568777b0f534a968021db05aa5de1333b271285319_prof);

        
        $__internal_ecc543936be37390f630c8e738b5e54833159d95b31803a20d087871f54569aa->leave($__internal_ecc543936be37390f630c8e738b5e54833159d95b31803a20d087871f54569aa_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_d46ba70fd0f0982a9791964f1dce265cae0d93c5e1ee4143e7ede23d29870675 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d46ba70fd0f0982a9791964f1dce265cae0d93c5e1ee4143e7ede23d29870675->enter($__internal_d46ba70fd0f0982a9791964f1dce265cae0d93c5e1ee4143e7ede23d29870675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f0fc34a40823b63f6ae5aedea1466d57edbc09c09e6928999a239d9c612e7d80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0fc34a40823b63f6ae5aedea1466d57edbc09c09e6928999a239d9c612e7d80->enter($__internal_f0fc34a40823b63f6ae5aedea1466d57edbc09c09e6928999a239d9c612e7d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f0fc34a40823b63f6ae5aedea1466d57edbc09c09e6928999a239d9c612e7d80->leave($__internal_f0fc34a40823b63f6ae5aedea1466d57edbc09c09e6928999a239d9c612e7d80_prof);

        
        $__internal_d46ba70fd0f0982a9791964f1dce265cae0d93c5e1ee4143e7ede23d29870675->leave($__internal_d46ba70fd0f0982a9791964f1dce265cae0d93c5e1ee4143e7ede23d29870675_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/layout.html.twig");
    }
}
