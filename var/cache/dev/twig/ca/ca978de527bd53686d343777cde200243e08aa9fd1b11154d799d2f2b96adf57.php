<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_975d12f5ed2ddb4482a15bae5c0e6b3fa491bfa0115d3e0e8f6a28c57bbeba33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aa344acd61f7653b4042518221f99cf22d6ce96ff75e24510b9d5943ac311904 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa344acd61f7653b4042518221f99cf22d6ce96ff75e24510b9d5943ac311904->enter($__internal_aa344acd61f7653b4042518221f99cf22d6ce96ff75e24510b9d5943ac311904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_51f2de790fa1da91856b1ce5de53db86ba6f067d27f8519fcbf9dbbfef914a4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51f2de790fa1da91856b1ce5de53db86ba6f067d27f8519fcbf9dbbfef914a4f->enter($__internal_51f2de790fa1da91856b1ce5de53db86ba6f067d27f8519fcbf9dbbfef914a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa344acd61f7653b4042518221f99cf22d6ce96ff75e24510b9d5943ac311904->leave($__internal_aa344acd61f7653b4042518221f99cf22d6ce96ff75e24510b9d5943ac311904_prof);

        
        $__internal_51f2de790fa1da91856b1ce5de53db86ba6f067d27f8519fcbf9dbbfef914a4f->leave($__internal_51f2de790fa1da91856b1ce5de53db86ba6f067d27f8519fcbf9dbbfef914a4f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_342d6e2fa86d003f59587dbc61442cb8ad13878490dfcb59ed496225bc4d5162 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_342d6e2fa86d003f59587dbc61442cb8ad13878490dfcb59ed496225bc4d5162->enter($__internal_342d6e2fa86d003f59587dbc61442cb8ad13878490dfcb59ed496225bc4d5162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ab4c6937ae07f95c9cf82824995c84df7a8cc104b76428cc162d83229a91f46e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab4c6937ae07f95c9cf82824995c84df7a8cc104b76428cc162d83229a91f46e->enter($__internal_ab4c6937ae07f95c9cf82824995c84df7a8cc104b76428cc162d83229a91f46e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_ab4c6937ae07f95c9cf82824995c84df7a8cc104b76428cc162d83229a91f46e->leave($__internal_ab4c6937ae07f95c9cf82824995c84df7a8cc104b76428cc162d83229a91f46e_prof);

        
        $__internal_342d6e2fa86d003f59587dbc61442cb8ad13878490dfcb59ed496225bc4d5162->leave($__internal_342d6e2fa86d003f59587dbc61442cb8ad13878490dfcb59ed496225bc4d5162_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_b9ed2417792233a48968cadbf567d8f42e1f44c08cbeac1448786e8bff2f8c09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9ed2417792233a48968cadbf567d8f42e1f44c08cbeac1448786e8bff2f8c09->enter($__internal_b9ed2417792233a48968cadbf567d8f42e1f44c08cbeac1448786e8bff2f8c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fbf245f6aa6a9453a70868de184fda12464c567c46563720edbcb949222338b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbf245f6aa6a9453a70868de184fda12464c567c46563720edbcb949222338b3->enter($__internal_fbf245f6aa6a9453a70868de184fda12464c567c46563720edbcb949222338b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fbf245f6aa6a9453a70868de184fda12464c567c46563720edbcb949222338b3->leave($__internal_fbf245f6aa6a9453a70868de184fda12464c567c46563720edbcb949222338b3_prof);

        
        $__internal_b9ed2417792233a48968cadbf567d8f42e1f44c08cbeac1448786e8bff2f8c09->leave($__internal_b9ed2417792233a48968cadbf567d8f42e1f44c08cbeac1448786e8bff2f8c09_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a541f24fe0d4018ae7b235a9816ca2eaba21bca9fa3480c9174306094e2801a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a541f24fe0d4018ae7b235a9816ca2eaba21bca9fa3480c9174306094e2801a->enter($__internal_8a541f24fe0d4018ae7b235a9816ca2eaba21bca9fa3480c9174306094e2801a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2cf6df6f5354852c2f639b90c5f224c95484574ec3fba9230a16f0d5b0483811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cf6df6f5354852c2f639b90c5f224c95484574ec3fba9230a16f0d5b0483811->enter($__internal_2cf6df6f5354852c2f639b90c5f224c95484574ec3fba9230a16f0d5b0483811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_2cf6df6f5354852c2f639b90c5f224c95484574ec3fba9230a16f0d5b0483811->leave($__internal_2cf6df6f5354852c2f639b90c5f224c95484574ec3fba9230a16f0d5b0483811_prof);

        
        $__internal_8a541f24fe0d4018ae7b235a9816ca2eaba21bca9fa3480c9174306094e2801a->leave($__internal_8a541f24fe0d4018ae7b235a9816ca2eaba21bca9fa3480c9174306094e2801a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
