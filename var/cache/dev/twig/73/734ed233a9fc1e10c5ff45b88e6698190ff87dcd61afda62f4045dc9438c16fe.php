<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_ea1018697a51d1ccf3cbed677966ff45c0cc8452ecae2eaac543aef93fe6dcf0 extends Twig_Template
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
        $__internal_ee4c9f668bc70dc697d1c221b95be1f2b4a415038c4c94a197408f6f4903e289 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee4c9f668bc70dc697d1c221b95be1f2b4a415038c4c94a197408f6f4903e289->enter($__internal_ee4c9f668bc70dc697d1c221b95be1f2b4a415038c4c94a197408f6f4903e289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_8bd8bd807a0b8b5a6723d4fc9eb9a887ac003efb419aa17f2f551d811a5a91dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bd8bd807a0b8b5a6723d4fc9eb9a887ac003efb419aa17f2f551d811a5a91dd->enter($__internal_8bd8bd807a0b8b5a6723d4fc9eb9a887ac003efb419aa17f2f551d811a5a91dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_ee4c9f668bc70dc697d1c221b95be1f2b4a415038c4c94a197408f6f4903e289->leave($__internal_ee4c9f668bc70dc697d1c221b95be1f2b4a415038c4c94a197408f6f4903e289_prof);

        
        $__internal_8bd8bd807a0b8b5a6723d4fc9eb9a887ac003efb419aa17f2f551d811a5a91dd->leave($__internal_8bd8bd807a0b8b5a6723d4fc9eb9a887ac003efb419aa17f2f551d811a5a91dd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
