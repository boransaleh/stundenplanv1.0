<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_795653aa58cc13f2ea77d8b49f6782c574bce371ea19a98adfe8778555638da7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2da42aab1f7a61e0bd6c31ce4a886384e5cd14884dd2acc23011e591660ec099 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2da42aab1f7a61e0bd6c31ce4a886384e5cd14884dd2acc23011e591660ec099->enter($__internal_2da42aab1f7a61e0bd6c31ce4a886384e5cd14884dd2acc23011e591660ec099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b321caa68dc6d5b9c36ab8d7ea61dbaaf32172fc949bdba5d5971df75828e215 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b321caa68dc6d5b9c36ab8d7ea61dbaaf32172fc949bdba5d5971df75828e215->enter($__internal_b321caa68dc6d5b9c36ab8d7ea61dbaaf32172fc949bdba5d5971df75828e215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2da42aab1f7a61e0bd6c31ce4a886384e5cd14884dd2acc23011e591660ec099->leave($__internal_2da42aab1f7a61e0bd6c31ce4a886384e5cd14884dd2acc23011e591660ec099_prof);

        
        $__internal_b321caa68dc6d5b9c36ab8d7ea61dbaaf32172fc949bdba5d5971df75828e215->leave($__internal_b321caa68dc6d5b9c36ab8d7ea61dbaaf32172fc949bdba5d5971df75828e215_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9aa6732687d258ae5eb85cc2e865eadae481d91e3d34d96ddde72025d81baede = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aa6732687d258ae5eb85cc2e865eadae481d91e3d34d96ddde72025d81baede->enter($__internal_9aa6732687d258ae5eb85cc2e865eadae481d91e3d34d96ddde72025d81baede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2a74a7f3f57c1fd666c5e100e40b1788a59730d7d72d03c4b96f9fd058eeed5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a74a7f3f57c1fd666c5e100e40b1788a59730d7d72d03c4b96f9fd058eeed5e->enter($__internal_2a74a7f3f57c1fd666c5e100e40b1788a59730d7d72d03c4b96f9fd058eeed5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2a74a7f3f57c1fd666c5e100e40b1788a59730d7d72d03c4b96f9fd058eeed5e->leave($__internal_2a74a7f3f57c1fd666c5e100e40b1788a59730d7d72d03c4b96f9fd058eeed5e_prof);

        
        $__internal_9aa6732687d258ae5eb85cc2e865eadae481d91e3d34d96ddde72025d81baede->leave($__internal_9aa6732687d258ae5eb85cc2e865eadae481d91e3d34d96ddde72025d81baede_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b5041154b9887b47f7850a7dd6f3cf045c3f2e90abe72a49975b481658a34659 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5041154b9887b47f7850a7dd6f3cf045c3f2e90abe72a49975b481658a34659->enter($__internal_b5041154b9887b47f7850a7dd6f3cf045c3f2e90abe72a49975b481658a34659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6c9d03cf2b8e9623ca2b6a0b288fe8e5f1d9412d0edbf672cff0db800c10db8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c9d03cf2b8e9623ca2b6a0b288fe8e5f1d9412d0edbf672cff0db800c10db8c->enter($__internal_6c9d03cf2b8e9623ca2b6a0b288fe8e5f1d9412d0edbf672cff0db800c10db8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6c9d03cf2b8e9623ca2b6a0b288fe8e5f1d9412d0edbf672cff0db800c10db8c->leave($__internal_6c9d03cf2b8e9623ca2b6a0b288fe8e5f1d9412d0edbf672cff0db800c10db8c_prof);

        
        $__internal_b5041154b9887b47f7850a7dd6f3cf045c3f2e90abe72a49975b481658a34659->leave($__internal_b5041154b9887b47f7850a7dd6f3cf045c3f2e90abe72a49975b481658a34659_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_45e5f1bb44b8f7fab34b3f423638f1d7eec976b00d874508404d5443289d36da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45e5f1bb44b8f7fab34b3f423638f1d7eec976b00d874508404d5443289d36da->enter($__internal_45e5f1bb44b8f7fab34b3f423638f1d7eec976b00d874508404d5443289d36da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a0e5f888268ce00f468e23519f7bbd9abba7ba411e12b3a534df8252bdcae192 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0e5f888268ce00f468e23519f7bbd9abba7ba411e12b3a534df8252bdcae192->enter($__internal_a0e5f888268ce00f468e23519f7bbd9abba7ba411e12b3a534df8252bdcae192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a0e5f888268ce00f468e23519f7bbd9abba7ba411e12b3a534df8252bdcae192->leave($__internal_a0e5f888268ce00f468e23519f7bbd9abba7ba411e12b3a534df8252bdcae192_prof);

        
        $__internal_45e5f1bb44b8f7fab34b3f423638f1d7eec976b00d874508404d5443289d36da->leave($__internal_45e5f1bb44b8f7fab34b3f423638f1d7eec976b00d874508404d5443289d36da_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
