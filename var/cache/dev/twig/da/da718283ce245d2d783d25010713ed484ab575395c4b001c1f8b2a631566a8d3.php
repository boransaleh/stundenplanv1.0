<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_d2bc216e6cf55285d80a41fe98a9fde37ecbf994c2a0a577d79df8d2190be36b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
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
        $__internal_be557a8ebe1f4d7a8edf910eb324a0ac98673603eb95e1ac989ffc0f0266341e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be557a8ebe1f4d7a8edf910eb324a0ac98673603eb95e1ac989ffc0f0266341e->enter($__internal_be557a8ebe1f4d7a8edf910eb324a0ac98673603eb95e1ac989ffc0f0266341e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_b74d481f8d4fffefcfe5bc0d406a4b4daa182008611b03b6bbe77f689efd531d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b74d481f8d4fffefcfe5bc0d406a4b4daa182008611b03b6bbe77f689efd531d->enter($__internal_b74d481f8d4fffefcfe5bc0d406a4b4daa182008611b03b6bbe77f689efd531d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be557a8ebe1f4d7a8edf910eb324a0ac98673603eb95e1ac989ffc0f0266341e->leave($__internal_be557a8ebe1f4d7a8edf910eb324a0ac98673603eb95e1ac989ffc0f0266341e_prof);

        
        $__internal_b74d481f8d4fffefcfe5bc0d406a4b4daa182008611b03b6bbe77f689efd531d->leave($__internal_b74d481f8d4fffefcfe5bc0d406a4b4daa182008611b03b6bbe77f689efd531d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a6c3cf2c1218204f1ddc88085185cd54f89599ebed040c68bb67a2a694af6165 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6c3cf2c1218204f1ddc88085185cd54f89599ebed040c68bb67a2a694af6165->enter($__internal_a6c3cf2c1218204f1ddc88085185cd54f89599ebed040c68bb67a2a694af6165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_55ae1a258dedaca2281514f26b8a02152092603baadf2da9480210821b223dd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55ae1a258dedaca2281514f26b8a02152092603baadf2da9480210821b223dd4->enter($__internal_55ae1a258dedaca2281514f26b8a02152092603baadf2da9480210821b223dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_55ae1a258dedaca2281514f26b8a02152092603baadf2da9480210821b223dd4->leave($__internal_55ae1a258dedaca2281514f26b8a02152092603baadf2da9480210821b223dd4_prof);

        
        $__internal_a6c3cf2c1218204f1ddc88085185cd54f89599ebed040c68bb67a2a694af6165->leave($__internal_a6c3cf2c1218204f1ddc88085185cd54f89599ebed040c68bb67a2a694af6165_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
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
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
