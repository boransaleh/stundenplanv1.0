<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_a4b0d4936e710cc032e2a59cc67bd98eb82528724f79cdc6147993d2c9dd33b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_6db1c196d6667b552037d8f676d03666658f128cd4c76e0e4592e862dd27caaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6db1c196d6667b552037d8f676d03666658f128cd4c76e0e4592e862dd27caaa->enter($__internal_6db1c196d6667b552037d8f676d03666658f128cd4c76e0e4592e862dd27caaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_fde9d45617be2a56417f593cfdd6feb10b4a8a8d49c0372ae53c3edfaf029a7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fde9d45617be2a56417f593cfdd6feb10b4a8a8d49c0372ae53c3edfaf029a7c->enter($__internal_fde9d45617be2a56417f593cfdd6feb10b4a8a8d49c0372ae53c3edfaf029a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6db1c196d6667b552037d8f676d03666658f128cd4c76e0e4592e862dd27caaa->leave($__internal_6db1c196d6667b552037d8f676d03666658f128cd4c76e0e4592e862dd27caaa_prof);

        
        $__internal_fde9d45617be2a56417f593cfdd6feb10b4a8a8d49c0372ae53c3edfaf029a7c->leave($__internal_fde9d45617be2a56417f593cfdd6feb10b4a8a8d49c0372ae53c3edfaf029a7c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7415764c6af8052a61babfe22522b09867960e282f2abb29803431df360980b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7415764c6af8052a61babfe22522b09867960e282f2abb29803431df360980b3->enter($__internal_7415764c6af8052a61babfe22522b09867960e282f2abb29803431df360980b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_da134ae46c30a1aab5fc0d6c56d2778b0e6a15b00f8114e70bb925d1a3e2bb16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da134ae46c30a1aab5fc0d6c56d2778b0e6a15b00f8114e70bb925d1a3e2bb16->enter($__internal_da134ae46c30a1aab5fc0d6c56d2778b0e6a15b00f8114e70bb925d1a3e2bb16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_da134ae46c30a1aab5fc0d6c56d2778b0e6a15b00f8114e70bb925d1a3e2bb16->leave($__internal_da134ae46c30a1aab5fc0d6c56d2778b0e6a15b00f8114e70bb925d1a3e2bb16_prof);

        
        $__internal_7415764c6af8052a61babfe22522b09867960e282f2abb29803431df360980b3->leave($__internal_7415764c6af8052a61babfe22522b09867960e282f2abb29803431df360980b3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_64a04709fcf804ed816cba1095c5917bea90ee0ab8c4dacdb59323669ec7d541 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64a04709fcf804ed816cba1095c5917bea90ee0ab8c4dacdb59323669ec7d541->enter($__internal_64a04709fcf804ed816cba1095c5917bea90ee0ab8c4dacdb59323669ec7d541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5a99a8f8482b8ff7a855d4f9e810c5fbf203ab699829964e575e638ede02f258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a99a8f8482b8ff7a855d4f9e810c5fbf203ab699829964e575e638ede02f258->enter($__internal_5a99a8f8482b8ff7a855d4f9e810c5fbf203ab699829964e575e638ede02f258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_5a99a8f8482b8ff7a855d4f9e810c5fbf203ab699829964e575e638ede02f258->leave($__internal_5a99a8f8482b8ff7a855d4f9e810c5fbf203ab699829964e575e638ede02f258_prof);

        
        $__internal_64a04709fcf804ed816cba1095c5917bea90ee0ab8c4dacdb59323669ec7d541->leave($__internal_64a04709fcf804ed816cba1095c5917bea90ee0ab8c4dacdb59323669ec7d541_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
