<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_d56ef131dca96ec2ec76b75d3913e3b70085f0c8a3cd3f7ab4b7489466c2dadd extends Twig_Template
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
        $__internal_8e0826f67800bcd74ea2a40db35fd001202600a42adb538a97f91c0a90c4d154 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e0826f67800bcd74ea2a40db35fd001202600a42adb538a97f91c0a90c4d154->enter($__internal_8e0826f67800bcd74ea2a40db35fd001202600a42adb538a97f91c0a90c4d154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_a2da07ef2ec3b712f35beba22157372397a7576fc7fdc34c4052bcfba1e45ed2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2da07ef2ec3b712f35beba22157372397a7576fc7fdc34c4052bcfba1e45ed2->enter($__internal_a2da07ef2ec3b712f35beba22157372397a7576fc7fdc34c4052bcfba1e45ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_8e0826f67800bcd74ea2a40db35fd001202600a42adb538a97f91c0a90c4d154->leave($__internal_8e0826f67800bcd74ea2a40db35fd001202600a42adb538a97f91c0a90c4d154_prof);

        
        $__internal_a2da07ef2ec3b712f35beba22157372397a7576fc7fdc34c4052bcfba1e45ed2->leave($__internal_a2da07ef2ec3b712f35beba22157372397a7576fc7fdc34c4052bcfba1e45ed2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
