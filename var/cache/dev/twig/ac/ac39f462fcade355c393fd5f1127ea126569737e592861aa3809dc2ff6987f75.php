<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_a0884b6f078c15924d0a6c228c19cfb7876a60a8da1fe1868aebc9c9300f5a0a extends Twig_Template
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
        $__internal_47d35a96af04a3531181b519f1dee5102977d37877ded14040528633dac87f9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47d35a96af04a3531181b519f1dee5102977d37877ded14040528633dac87f9a->enter($__internal_47d35a96af04a3531181b519f1dee5102977d37877ded14040528633dac87f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_b92ec0c5fef3c3efdd2dc82c2ff5601982a13b00d5741a097e826d254aba3d08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b92ec0c5fef3c3efdd2dc82c2ff5601982a13b00d5741a097e826d254aba3d08->enter($__internal_b92ec0c5fef3c3efdd2dc82c2ff5601982a13b00d5741a097e826d254aba3d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_47d35a96af04a3531181b519f1dee5102977d37877ded14040528633dac87f9a->leave($__internal_47d35a96af04a3531181b519f1dee5102977d37877ded14040528633dac87f9a_prof);

        
        $__internal_b92ec0c5fef3c3efdd2dc82c2ff5601982a13b00d5741a097e826d254aba3d08->leave($__internal_b92ec0c5fef3c3efdd2dc82c2ff5601982a13b00d5741a097e826d254aba3d08_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e2ae81684076d9eae2ff20c7594aa75ae6edc18b70d95f05cda6cabafbbd9df9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2ae81684076d9eae2ff20c7594aa75ae6edc18b70d95f05cda6cabafbbd9df9->enter($__internal_e2ae81684076d9eae2ff20c7594aa75ae6edc18b70d95f05cda6cabafbbd9df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6c415ee085fd55381c508b24c1e88bcf7d6d12c5b3e6d3b9eddfa4b974481fea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c415ee085fd55381c508b24c1e88bcf7d6d12c5b3e6d3b9eddfa4b974481fea->enter($__internal_6c415ee085fd55381c508b24c1e88bcf7d6d12c5b3e6d3b9eddfa4b974481fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6c415ee085fd55381c508b24c1e88bcf7d6d12c5b3e6d3b9eddfa4b974481fea->leave($__internal_6c415ee085fd55381c508b24c1e88bcf7d6d12c5b3e6d3b9eddfa4b974481fea_prof);

        
        $__internal_e2ae81684076d9eae2ff20c7594aa75ae6edc18b70d95f05cda6cabafbbd9df9->leave($__internal_e2ae81684076d9eae2ff20c7594aa75ae6edc18b70d95f05cda6cabafbbd9df9_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_f59d16c906e7ec8385615e9cfc9c45503f6eccb1008afd66a6061ab6dcfe57c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f59d16c906e7ec8385615e9cfc9c45503f6eccb1008afd66a6061ab6dcfe57c6->enter($__internal_f59d16c906e7ec8385615e9cfc9c45503f6eccb1008afd66a6061ab6dcfe57c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_dfc7d9e535d09152873276e2f5895b3f77a4c42d1c0da875a7667648b5559886 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfc7d9e535d09152873276e2f5895b3f77a4c42d1c0da875a7667648b5559886->enter($__internal_dfc7d9e535d09152873276e2f5895b3f77a4c42d1c0da875a7667648b5559886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_dfc7d9e535d09152873276e2f5895b3f77a4c42d1c0da875a7667648b5559886->leave($__internal_dfc7d9e535d09152873276e2f5895b3f77a4c42d1c0da875a7667648b5559886_prof);

        
        $__internal_f59d16c906e7ec8385615e9cfc9c45503f6eccb1008afd66a6061ab6dcfe57c6->leave($__internal_f59d16c906e7ec8385615e9cfc9c45503f6eccb1008afd66a6061ab6dcfe57c6_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_9eec5c5eef7e3ca072788a45c9a79b66bcc20a699f54c59b98d4897328c90065 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9eec5c5eef7e3ca072788a45c9a79b66bcc20a699f54c59b98d4897328c90065->enter($__internal_9eec5c5eef7e3ca072788a45c9a79b66bcc20a699f54c59b98d4897328c90065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8679faa04bf4f3bba5cac97785e5693a0251c176ea7ea18ef9b279e96e97e8d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8679faa04bf4f3bba5cac97785e5693a0251c176ea7ea18ef9b279e96e97e8d6->enter($__internal_8679faa04bf4f3bba5cac97785e5693a0251c176ea7ea18ef9b279e96e97e8d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8679faa04bf4f3bba5cac97785e5693a0251c176ea7ea18ef9b279e96e97e8d6->leave($__internal_8679faa04bf4f3bba5cac97785e5693a0251c176ea7ea18ef9b279e96e97e8d6_prof);

        
        $__internal_9eec5c5eef7e3ca072788a45c9a79b66bcc20a699f54c59b98d4897328c90065->leave($__internal_9eec5c5eef7e3ca072788a45c9a79b66bcc20a699f54c59b98d4897328c90065_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
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
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
