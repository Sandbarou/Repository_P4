<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_18dedb1163ef54bf0b9efd48e827dc836404e628eaf975eb8e153c85e46827dd extends Twig_Template
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
        $__internal_453e73b3e7bb2ffc14cd2a1b76d91af1a0c97d238dc56aa37685f912a459a7b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_453e73b3e7bb2ffc14cd2a1b76d91af1a0c97d238dc56aa37685f912a459a7b3->enter($__internal_453e73b3e7bb2ffc14cd2a1b76d91af1a0c97d238dc56aa37685f912a459a7b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_69b0a32de76a2b233f6637cb6fceae6ebf88ceea20fe7dabbf8763c0da1652a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69b0a32de76a2b233f6637cb6fceae6ebf88ceea20fe7dabbf8763c0da1652a8->enter($__internal_69b0a32de76a2b233f6637cb6fceae6ebf88ceea20fe7dabbf8763c0da1652a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_453e73b3e7bb2ffc14cd2a1b76d91af1a0c97d238dc56aa37685f912a459a7b3->leave($__internal_453e73b3e7bb2ffc14cd2a1b76d91af1a0c97d238dc56aa37685f912a459a7b3_prof);

        
        $__internal_69b0a32de76a2b233f6637cb6fceae6ebf88ceea20fe7dabbf8763c0da1652a8->leave($__internal_69b0a32de76a2b233f6637cb6fceae6ebf88ceea20fe7dabbf8763c0da1652a8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
