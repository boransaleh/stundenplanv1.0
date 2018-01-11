<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_f3d29a14dd200b43b6f53643f6f3ce5a799a7a7f85da748982c3884fc6bcb03e extends Twig_Template
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
        $__internal_f5a598ce87f95ed5f0a215819409427a455fddb62dfda43ded88f8314d5c6801 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5a598ce87f95ed5f0a215819409427a455fddb62dfda43ded88f8314d5c6801->enter($__internal_f5a598ce87f95ed5f0a215819409427a455fddb62dfda43ded88f8314d5c6801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_1bf268424d8b669c8722cc2a0f87c5283faac267c63999b32f772880b77ad6b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bf268424d8b669c8722cc2a0f87c5283faac267c63999b32f772880b77ad6b0->enter($__internal_1bf268424d8b669c8722cc2a0f87c5283faac267c63999b32f772880b77ad6b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_f5a598ce87f95ed5f0a215819409427a455fddb62dfda43ded88f8314d5c6801->leave($__internal_f5a598ce87f95ed5f0a215819409427a455fddb62dfda43ded88f8314d5c6801_prof);

        
        $__internal_1bf268424d8b669c8722cc2a0f87c5283faac267c63999b32f772880b77ad6b0->leave($__internal_1bf268424d8b669c8722cc2a0f87c5283faac267c63999b32f772880b77ad6b0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
", "@Twig/Exception/error.js.twig", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
