<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_4f91b4c1a86fc28631bb7255c12a7b92893b2f279aedc2818f604a32ed043206 extends Twig_Template
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
        $__internal_792fc514816238b3735239d983be6fd2e65a6c1d60ec9debed368ff14ce7edfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_792fc514816238b3735239d983be6fd2e65a6c1d60ec9debed368ff14ce7edfe->enter($__internal_792fc514816238b3735239d983be6fd2e65a6c1d60ec9debed368ff14ce7edfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_bd36a144d3ab5d064fcb5d25de8f1b4ed9805d19cdb51a53f2f9d940af827689 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd36a144d3ab5d064fcb5d25de8f1b4ed9805d19cdb51a53f2f9d940af827689->enter($__internal_bd36a144d3ab5d064fcb5d25de8f1b4ed9805d19cdb51a53f2f9d940af827689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_792fc514816238b3735239d983be6fd2e65a6c1d60ec9debed368ff14ce7edfe->leave($__internal_792fc514816238b3735239d983be6fd2e65a6c1d60ec9debed368ff14ce7edfe_prof);

        
        $__internal_bd36a144d3ab5d064fcb5d25de8f1b4ed9805d19cdb51a53f2f9d940af827689->leave($__internal_bd36a144d3ab5d064fcb5d25de8f1b4ed9805d19cdb51a53f2f9d940af827689_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.rdf.twig", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
