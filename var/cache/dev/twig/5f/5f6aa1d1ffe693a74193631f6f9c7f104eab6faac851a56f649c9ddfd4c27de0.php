<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_4ec42a7794f2ae4305e4238c5d6fcef6eaa1cbc63049a3588e4d46210e3d0160 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d21391b4809241b2fb892f20abd54b5f356eb2b24e1d0d1e9fa3449a58e965f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d21391b4809241b2fb892f20abd54b5f356eb2b24e1d0d1e9fa3449a58e965f->enter($__internal_1d21391b4809241b2fb892f20abd54b5f356eb2b24e1d0d1e9fa3449a58e965f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_0cb627d6e8b28e102ea62a5406b154929df7037e7f6ba1ca8ca7f5258fc10505 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cb627d6e8b28e102ea62a5406b154929df7037e7f6ba1ca8ca7f5258fc10505->enter($__internal_0cb627d6e8b28e102ea62a5406b154929df7037e7f6ba1ca8ca7f5258fc10505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d21391b4809241b2fb892f20abd54b5f356eb2b24e1d0d1e9fa3449a58e965f->leave($__internal_1d21391b4809241b2fb892f20abd54b5f356eb2b24e1d0d1e9fa3449a58e965f_prof);

        
        $__internal_0cb627d6e8b28e102ea62a5406b154929df7037e7f6ba1ca8ca7f5258fc10505->leave($__internal_0cb627d6e8b28e102ea62a5406b154929df7037e7f6ba1ca8ca7f5258fc10505_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_67293be1e12fcdb01555c4c1fa11fd4e2ff6459bcef766fb6e82ec91fe31a464 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67293be1e12fcdb01555c4c1fa11fd4e2ff6459bcef766fb6e82ec91fe31a464->enter($__internal_67293be1e12fcdb01555c4c1fa11fd4e2ff6459bcef766fb6e82ec91fe31a464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bd3808d10a842b45003f5e4447a3a6bc93e98b3a94f3efbf4ca9256e3cef5a73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd3808d10a842b45003f5e4447a3a6bc93e98b3a94f3efbf4ca9256e3cef5a73->enter($__internal_bd3808d10a842b45003f5e4447a3a6bc93e98b3a94f3efbf4ca9256e3cef5a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_bd3808d10a842b45003f5e4447a3a6bc93e98b3a94f3efbf4ca9256e3cef5a73->leave($__internal_bd3808d10a842b45003f5e4447a3a6bc93e98b3a94f3efbf4ca9256e3cef5a73_prof);

        
        $__internal_67293be1e12fcdb01555c4c1fa11fd4e2ff6459bcef766fb6e82ec91fe31a464->leave($__internal_67293be1e12fcdb01555c4c1fa11fd4e2ff6459bcef766fb6e82ec91fe31a464_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5d5882384738871054aeffdf4c6196097c72577c6a9e6069e79deaecf1a832eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d5882384738871054aeffdf4c6196097c72577c6a9e6069e79deaecf1a832eb->enter($__internal_5d5882384738871054aeffdf4c6196097c72577c6a9e6069e79deaecf1a832eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_abbd8e9d1a31d3bb6897fb9721ff3e3940227c699970337db2927b884a25aebe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abbd8e9d1a31d3bb6897fb9721ff3e3940227c699970337db2927b884a25aebe->enter($__internal_abbd8e9d1a31d3bb6897fb9721ff3e3940227c699970337db2927b884a25aebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_abbd8e9d1a31d3bb6897fb9721ff3e3940227c699970337db2927b884a25aebe->leave($__internal_abbd8e9d1a31d3bb6897fb9721ff3e3940227c699970337db2927b884a25aebe_prof);

        
        $__internal_5d5882384738871054aeffdf4c6196097c72577c6a9e6069e79deaecf1a832eb->leave($__internal_5d5882384738871054aeffdf4c6196097c72577c6a9e6069e79deaecf1a832eb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
