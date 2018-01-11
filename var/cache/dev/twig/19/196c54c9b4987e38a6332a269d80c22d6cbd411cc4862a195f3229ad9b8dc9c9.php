<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_79026d15152417746dd29ba79549644ad9a6af54509fe18352486210e49e73fa extends Twig_Template
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
        $__internal_d69a53fffddf7747ae18db3105e4f4054d6a396a0dfe7212f998c58fff2d0883 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d69a53fffddf7747ae18db3105e4f4054d6a396a0dfe7212f998c58fff2d0883->enter($__internal_d69a53fffddf7747ae18db3105e4f4054d6a396a0dfe7212f998c58fff2d0883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_715ed55994fafd217a6f2c4e4598307cfa85fe5fe9f66de2b299746028d5dbb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_715ed55994fafd217a6f2c4e4598307cfa85fe5fe9f66de2b299746028d5dbb2->enter($__internal_715ed55994fafd217a6f2c4e4598307cfa85fe5fe9f66de2b299746028d5dbb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_d69a53fffddf7747ae18db3105e4f4054d6a396a0dfe7212f998c58fff2d0883->leave($__internal_d69a53fffddf7747ae18db3105e4f4054d6a396a0dfe7212f998c58fff2d0883_prof);

        
        $__internal_715ed55994fafd217a6f2c4e4598307cfa85fe5fe9f66de2b299746028d5dbb2->leave($__internal_715ed55994fafd217a6f2c4e4598307cfa85fe5fe9f66de2b299746028d5dbb2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
