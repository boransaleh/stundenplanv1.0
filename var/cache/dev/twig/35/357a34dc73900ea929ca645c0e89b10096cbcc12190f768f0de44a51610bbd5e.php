<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_e7552a2c2527dcc91d628f60479bc0d2ab127f572d11a47930ab1c82281f7466 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_fbcbde01ae7543295a06f04c1f9163cc138ec059e32ae787ed47a9b6849065e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbcbde01ae7543295a06f04c1f9163cc138ec059e32ae787ed47a9b6849065e7->enter($__internal_fbcbde01ae7543295a06f04c1f9163cc138ec059e32ae787ed47a9b6849065e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c790200572d79b2a7b2d10e6e77cb02807cab42c3d8fc8c698ba9b3df1e5f4bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c790200572d79b2a7b2d10e6e77cb02807cab42c3d8fc8c698ba9b3df1e5f4bc->enter($__internal_c790200572d79b2a7b2d10e6e77cb02807cab42c3d8fc8c698ba9b3df1e5f4bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbcbde01ae7543295a06f04c1f9163cc138ec059e32ae787ed47a9b6849065e7->leave($__internal_fbcbde01ae7543295a06f04c1f9163cc138ec059e32ae787ed47a9b6849065e7_prof);

        
        $__internal_c790200572d79b2a7b2d10e6e77cb02807cab42c3d8fc8c698ba9b3df1e5f4bc->leave($__internal_c790200572d79b2a7b2d10e6e77cb02807cab42c3d8fc8c698ba9b3df1e5f4bc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_912c41818e75dd808a0847c39d9916e5401bdf445d633b0cc5ca17514b6d426e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_912c41818e75dd808a0847c39d9916e5401bdf445d633b0cc5ca17514b6d426e->enter($__internal_912c41818e75dd808a0847c39d9916e5401bdf445d633b0cc5ca17514b6d426e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fcc443e0edc6523c07df12235eca343a0982637dd22a6aaa6201ab24390615c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcc443e0edc6523c07df12235eca343a0982637dd22a6aaa6201ab24390615c0->enter($__internal_fcc443e0edc6523c07df12235eca343a0982637dd22a6aaa6201ab24390615c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_fcc443e0edc6523c07df12235eca343a0982637dd22a6aaa6201ab24390615c0->leave($__internal_fcc443e0edc6523c07df12235eca343a0982637dd22a6aaa6201ab24390615c0_prof);

        
        $__internal_912c41818e75dd808a0847c39d9916e5401bdf445d633b0cc5ca17514b6d426e->leave($__internal_912c41818e75dd808a0847c39d9916e5401bdf445d633b0cc5ca17514b6d426e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3f7d5ed6a07f065e4376edb55c21564e919b4b352f736826f6f92742b954a3ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f7d5ed6a07f065e4376edb55c21564e919b4b352f736826f6f92742b954a3ba->enter($__internal_3f7d5ed6a07f065e4376edb55c21564e919b4b352f736826f6f92742b954a3ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a273262314297d33542977be494660934a477f44ab5136959687d59e4e238f4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a273262314297d33542977be494660934a477f44ab5136959687d59e4e238f4e->enter($__internal_a273262314297d33542977be494660934a477f44ab5136959687d59e4e238f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_a273262314297d33542977be494660934a477f44ab5136959687d59e4e238f4e->leave($__internal_a273262314297d33542977be494660934a477f44ab5136959687d59e4e238f4e_prof);

        
        $__internal_3f7d5ed6a07f065e4376edb55c21564e919b4b352f736826f6f92742b954a3ba->leave($__internal_3f7d5ed6a07f065e4376edb55c21564e919b4b352f736826f6f92742b954a3ba_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_600bc9047b34bc7a9866420bde2f9d51fd296801a1adcb8e969a3037a7a0ba2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_600bc9047b34bc7a9866420bde2f9d51fd296801a1adcb8e969a3037a7a0ba2e->enter($__internal_600bc9047b34bc7a9866420bde2f9d51fd296801a1adcb8e969a3037a7a0ba2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3cec94636f135359d07ae3b62bd22fc95de493267e4c98b0dd6c3bfd84a9d83f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cec94636f135359d07ae3b62bd22fc95de493267e4c98b0dd6c3bfd84a9d83f->enter($__internal_3cec94636f135359d07ae3b62bd22fc95de493267e4c98b0dd6c3bfd84a9d83f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_3cec94636f135359d07ae3b62bd22fc95de493267e4c98b0dd6c3bfd84a9d83f->leave($__internal_3cec94636f135359d07ae3b62bd22fc95de493267e4c98b0dd6c3bfd84a9d83f_prof);

        
        $__internal_600bc9047b34bc7a9866420bde2f9d51fd296801a1adcb8e969a3037a7a0ba2e->leave($__internal_600bc9047b34bc7a9866420bde2f9d51fd296801a1adcb8e969a3037a7a0ba2e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
