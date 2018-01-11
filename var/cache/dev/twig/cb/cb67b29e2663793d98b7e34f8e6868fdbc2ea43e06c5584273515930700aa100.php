<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_4be6ffa6970d3f6777ca65b38bdf48368d7f08efa3da9ade05269d79ff01b012 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee1098b9b87fe52c208f084239c7193bfc37b20d3f13dac43cb290ff084911ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee1098b9b87fe52c208f084239c7193bfc37b20d3f13dac43cb290ff084911ca->enter($__internal_ee1098b9b87fe52c208f084239c7193bfc37b20d3f13dac43cb290ff084911ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_79b9d7b4d9617a0c3246d38cff38b703fb9bc5997b914a6fc5f62e01cfc6d041 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79b9d7b4d9617a0c3246d38cff38b703fb9bc5997b914a6fc5f62e01cfc6d041->enter($__internal_79b9d7b4d9617a0c3246d38cff38b703fb9bc5997b914a6fc5f62e01cfc6d041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee1098b9b87fe52c208f084239c7193bfc37b20d3f13dac43cb290ff084911ca->leave($__internal_ee1098b9b87fe52c208f084239c7193bfc37b20d3f13dac43cb290ff084911ca_prof);

        
        $__internal_79b9d7b4d9617a0c3246d38cff38b703fb9bc5997b914a6fc5f62e01cfc6d041->leave($__internal_79b9d7b4d9617a0c3246d38cff38b703fb9bc5997b914a6fc5f62e01cfc6d041_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_baefddbdac4c68a190911aa05f99b9deeda0076be12c6ed342372caf155ec5f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baefddbdac4c68a190911aa05f99b9deeda0076be12c6ed342372caf155ec5f1->enter($__internal_baefddbdac4c68a190911aa05f99b9deeda0076be12c6ed342372caf155ec5f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_92b8cdd0488fef4fd822b5ba8e0d539de71a99a606c509a00801145b8b308598 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92b8cdd0488fef4fd822b5ba8e0d539de71a99a606c509a00801145b8b308598->enter($__internal_92b8cdd0488fef4fd822b5ba8e0d539de71a99a606c509a00801145b8b308598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_92b8cdd0488fef4fd822b5ba8e0d539de71a99a606c509a00801145b8b308598->leave($__internal_92b8cdd0488fef4fd822b5ba8e0d539de71a99a606c509a00801145b8b308598_prof);

        
        $__internal_baefddbdac4c68a190911aa05f99b9deeda0076be12c6ed342372caf155ec5f1->leave($__internal_baefddbdac4c68a190911aa05f99b9deeda0076be12c6ed342372caf155ec5f1_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2451110362ddfc130b1d8cfc97ebe744fccb6f4873e02036691e5974af3adcd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2451110362ddfc130b1d8cfc97ebe744fccb6f4873e02036691e5974af3adcd9->enter($__internal_2451110362ddfc130b1d8cfc97ebe744fccb6f4873e02036691e5974af3adcd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6465c811ca372915cb117d2459807505b95b5bc4dd92ae3ee51916f9aeb0e7e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6465c811ca372915cb117d2459807505b95b5bc4dd92ae3ee51916f9aeb0e7e8->enter($__internal_6465c811ca372915cb117d2459807505b95b5bc4dd92ae3ee51916f9aeb0e7e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_6465c811ca372915cb117d2459807505b95b5bc4dd92ae3ee51916f9aeb0e7e8->leave($__internal_6465c811ca372915cb117d2459807505b95b5bc4dd92ae3ee51916f9aeb0e7e8_prof);

        
        $__internal_2451110362ddfc130b1d8cfc97ebe744fccb6f4873e02036691e5974af3adcd9->leave($__internal_2451110362ddfc130b1d8cfc97ebe744fccb6f4873e02036691e5974af3adcd9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
