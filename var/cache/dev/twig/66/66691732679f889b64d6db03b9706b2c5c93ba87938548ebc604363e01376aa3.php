<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_88465fdca7bd571e3d14daaffea3115e1cf356c59df398eb342b5f01e811a711 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
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
        $__internal_f2d2bd7620d4f5db081c8d66959f19aa46ae2a23bce22c5d3689ed81af5d2b65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2d2bd7620d4f5db081c8d66959f19aa46ae2a23bce22c5d3689ed81af5d2b65->enter($__internal_f2d2bd7620d4f5db081c8d66959f19aa46ae2a23bce22c5d3689ed81af5d2b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_4995a937cb8fdf18445a68dc8cc2260a8de3d70769808a2c1af8dbbaf8bbe46d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4995a937cb8fdf18445a68dc8cc2260a8de3d70769808a2c1af8dbbaf8bbe46d->enter($__internal_4995a937cb8fdf18445a68dc8cc2260a8de3d70769808a2c1af8dbbaf8bbe46d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2d2bd7620d4f5db081c8d66959f19aa46ae2a23bce22c5d3689ed81af5d2b65->leave($__internal_f2d2bd7620d4f5db081c8d66959f19aa46ae2a23bce22c5d3689ed81af5d2b65_prof);

        
        $__internal_4995a937cb8fdf18445a68dc8cc2260a8de3d70769808a2c1af8dbbaf8bbe46d->leave($__internal_4995a937cb8fdf18445a68dc8cc2260a8de3d70769808a2c1af8dbbaf8bbe46d_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_a8a5205d628b033fb906fa7749a4448fbfeefa34f84d1cee8a01153588382c98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8a5205d628b033fb906fa7749a4448fbfeefa34f84d1cee8a01153588382c98->enter($__internal_a8a5205d628b033fb906fa7749a4448fbfeefa34f84d1cee8a01153588382c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_a61ea549f6c176fc6d4be7fad4e031071355a3dcf73ab92f93b153d4bee00954 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a61ea549f6c176fc6d4be7fad4e031071355a3dcf73ab92f93b153d4bee00954->enter($__internal_a61ea549f6c176fc6d4be7fad4e031071355a3dcf73ab92f93b153d4bee00954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_a61ea549f6c176fc6d4be7fad4e031071355a3dcf73ab92f93b153d4bee00954->leave($__internal_a61ea549f6c176fc6d4be7fad4e031071355a3dcf73ab92f93b153d4bee00954_prof);

        
        $__internal_a8a5205d628b033fb906fa7749a4448fbfeefa34f84d1cee8a01153588382c98->leave($__internal_a8a5205d628b033fb906fa7749a4448fbfeefa34f84d1cee8a01153588382c98_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_14ce1cfae43723364efc62321bc2469f8b8e15a1761d9d66f266a3acd8342a70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14ce1cfae43723364efc62321bc2469f8b8e15a1761d9d66f266a3acd8342a70->enter($__internal_14ce1cfae43723364efc62321bc2469f8b8e15a1761d9d66f266a3acd8342a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f84a6b3a8c90ac97ecb61c0f52dea29b5ba0289189e8afe7084643bc6b7844d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f84a6b3a8c90ac97ecb61c0f52dea29b5ba0289189e8afe7084643bc6b7844d4->enter($__internal_f84a6b3a8c90ac97ecb61c0f52dea29b5ba0289189e8afe7084643bc6b7844d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_f84a6b3a8c90ac97ecb61c0f52dea29b5ba0289189e8afe7084643bc6b7844d4->leave($__internal_f84a6b3a8c90ac97ecb61c0f52dea29b5ba0289189e8afe7084643bc6b7844d4_prof);

        
        $__internal_14ce1cfae43723364efc62321bc2469f8b8e15a1761d9d66f266a3acd8342a70->leave($__internal_14ce1cfae43723364efc62321bc2469f8b8e15a1761d9d66f266a3acd8342a70_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
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
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
