<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_0a5608c5db6ee81b634d97b21c4fa09b031e71d604a0394543697fc74a45f9ee extends Twig_Template
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
        $__internal_9ebcc894feda70f0e90733c8662b226bab2c33e1b7b7ecb9c112b76d66a67f31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ebcc894feda70f0e90733c8662b226bab2c33e1b7b7ecb9c112b76d66a67f31->enter($__internal_9ebcc894feda70f0e90733c8662b226bab2c33e1b7b7ecb9c112b76d66a67f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_45a1fbf40800b3b019c66611b3d9406c2647be0a4465a62c7b744b640e5120af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45a1fbf40800b3b019c66611b3d9406c2647be0a4465a62c7b744b640e5120af->enter($__internal_45a1fbf40800b3b019c66611b3d9406c2647be0a4465a62c7b744b640e5120af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_9ebcc894feda70f0e90733c8662b226bab2c33e1b7b7ecb9c112b76d66a67f31->leave($__internal_9ebcc894feda70f0e90733c8662b226bab2c33e1b7b7ecb9c112b76d66a67f31_prof);

        
        $__internal_45a1fbf40800b3b019c66611b3d9406c2647be0a4465a62c7b744b640e5120af->leave($__internal_45a1fbf40800b3b019c66611b3d9406c2647be0a4465a62c7b744b640e5120af_prof);

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
", "@WebProfiler/Profiler/header.html.twig", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
