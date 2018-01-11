<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_822dea10a8a39bd6253ed49ffd5992c8aaf7dd3114bf9bd0796cd7a6e2ddb4d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_65dadcdd1ea6e2080bad039b7f8b5f2138588683c8a637602a29276b0e2a0d2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65dadcdd1ea6e2080bad039b7f8b5f2138588683c8a637602a29276b0e2a0d2f->enter($__internal_65dadcdd1ea6e2080bad039b7f8b5f2138588683c8a637602a29276b0e2a0d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_ffe1744a71b8d260ee1266dd774db9f4cfed76311fd08c8642d5d3734d959feb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffe1744a71b8d260ee1266dd774db9f4cfed76311fd08c8642d5d3734d959feb->enter($__internal_ffe1744a71b8d260ee1266dd774db9f4cfed76311fd08c8642d5d3734d959feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65dadcdd1ea6e2080bad039b7f8b5f2138588683c8a637602a29276b0e2a0d2f->leave($__internal_65dadcdd1ea6e2080bad039b7f8b5f2138588683c8a637602a29276b0e2a0d2f_prof);

        
        $__internal_ffe1744a71b8d260ee1266dd774db9f4cfed76311fd08c8642d5d3734d959feb->leave($__internal_ffe1744a71b8d260ee1266dd774db9f4cfed76311fd08c8642d5d3734d959feb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_13d5e38793f2c57b8136e7566f3e30ca95dd13dbfc09de5e6d3d90bc102e654a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13d5e38793f2c57b8136e7566f3e30ca95dd13dbfc09de5e6d3d90bc102e654a->enter($__internal_13d5e38793f2c57b8136e7566f3e30ca95dd13dbfc09de5e6d3d90bc102e654a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_43ee195d996ecb59bc14918f709d38ad70b52bff78a6108bc323062398ab7e6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43ee195d996ecb59bc14918f709d38ad70b52bff78a6108bc323062398ab7e6a->enter($__internal_43ee195d996ecb59bc14918f709d38ad70b52bff78a6108bc323062398ab7e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_43ee195d996ecb59bc14918f709d38ad70b52bff78a6108bc323062398ab7e6a->leave($__internal_43ee195d996ecb59bc14918f709d38ad70b52bff78a6108bc323062398ab7e6a_prof);

        
        $__internal_13d5e38793f2c57b8136e7566f3e30ca95dd13dbfc09de5e6d3d90bc102e654a->leave($__internal_13d5e38793f2c57b8136e7566f3e30ca95dd13dbfc09de5e6d3d90bc102e654a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
