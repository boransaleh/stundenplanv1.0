<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_4c920a28df24d57fdc855aafea9bb7107697ffe7e0387b4632770adeef242843 extends Twig_Template
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
        $__internal_a8260e37bf1d35f458f3a3f781fa41662ee9c277e7f946d17f311cf4e3d1a18c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8260e37bf1d35f458f3a3f781fa41662ee9c277e7f946d17f311cf4e3d1a18c->enter($__internal_a8260e37bf1d35f458f3a3f781fa41662ee9c277e7f946d17f311cf4e3d1a18c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_ddd354907a46ad09efd2a571167bdef57a832160cf5786a6edd11b77ce380aab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddd354907a46ad09efd2a571167bdef57a832160cf5786a6edd11b77ce380aab->enter($__internal_ddd354907a46ad09efd2a571167bdef57a832160cf5786a6edd11b77ce380aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_a8260e37bf1d35f458f3a3f781fa41662ee9c277e7f946d17f311cf4e3d1a18c->leave($__internal_a8260e37bf1d35f458f3a3f781fa41662ee9c277e7f946d17f311cf4e3d1a18c_prof);

        
        $__internal_ddd354907a46ad09efd2a571167bdef57a832160cf5786a6edd11b77ce380aab->leave($__internal_ddd354907a46ad09efd2a571167bdef57a832160cf5786a6edd11b77ce380aab_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.js.twig", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
