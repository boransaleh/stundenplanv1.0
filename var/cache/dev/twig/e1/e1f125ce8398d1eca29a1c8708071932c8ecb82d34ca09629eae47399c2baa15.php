<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_048e701c7707b01780990fc6befd58eaa22ca2d05fbb780f9bd2edde43b8dee4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_7feda40680309b7579d0672cd6bb543d99c6085f61aa8e99aed15b50e54bda63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7feda40680309b7579d0672cd6bb543d99c6085f61aa8e99aed15b50e54bda63->enter($__internal_7feda40680309b7579d0672cd6bb543d99c6085f61aa8e99aed15b50e54bda63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_e0284aac92d8f89784c8943650e0b3e5fa16e11fc156c94b5a54cf3311c1e3e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0284aac92d8f89784c8943650e0b3e5fa16e11fc156c94b5a54cf3311c1e3e8->enter($__internal_e0284aac92d8f89784c8943650e0b3e5fa16e11fc156c94b5a54cf3311c1e3e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7feda40680309b7579d0672cd6bb543d99c6085f61aa8e99aed15b50e54bda63->leave($__internal_7feda40680309b7579d0672cd6bb543d99c6085f61aa8e99aed15b50e54bda63_prof);

        
        $__internal_e0284aac92d8f89784c8943650e0b3e5fa16e11fc156c94b5a54cf3311c1e3e8->leave($__internal_e0284aac92d8f89784c8943650e0b3e5fa16e11fc156c94b5a54cf3311c1e3e8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2638fa711c84a729448426a2378b4697a7bc8e4aadbf3e2d9cec9f0637ef0807 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2638fa711c84a729448426a2378b4697a7bc8e4aadbf3e2d9cec9f0637ef0807->enter($__internal_2638fa711c84a729448426a2378b4697a7bc8e4aadbf3e2d9cec9f0637ef0807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_03e110a91f4f76b60a3e81b0cf97b1e274d4709f67f10964a377d9de85ab7faf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03e110a91f4f76b60a3e81b0cf97b1e274d4709f67f10964a377d9de85ab7faf->enter($__internal_03e110a91f4f76b60a3e81b0cf97b1e274d4709f67f10964a377d9de85ab7faf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_03e110a91f4f76b60a3e81b0cf97b1e274d4709f67f10964a377d9de85ab7faf->leave($__internal_03e110a91f4f76b60a3e81b0cf97b1e274d4709f67f10964a377d9de85ab7faf_prof);

        
        $__internal_2638fa711c84a729448426a2378b4697a7bc8e4aadbf3e2d9cec9f0637ef0807->leave($__internal_2638fa711c84a729448426a2378b4697a7bc8e4aadbf3e2d9cec9f0637ef0807_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1f2eb67222f66bcf4eae0ee3f412ec28b4ffb2a86360e1d074fdbbb558b20cb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f2eb67222f66bcf4eae0ee3f412ec28b4ffb2a86360e1d074fdbbb558b20cb5->enter($__internal_1f2eb67222f66bcf4eae0ee3f412ec28b4ffb2a86360e1d074fdbbb558b20cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_aa29cf52c943f27e577a2af2fdf6c85d7d61593067f7bb3e2bf0b63d242f90f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa29cf52c943f27e577a2af2fdf6c85d7d61593067f7bb3e2bf0b63d242f90f0->enter($__internal_aa29cf52c943f27e577a2af2fdf6c85d7d61593067f7bb3e2bf0b63d242f90f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_aa29cf52c943f27e577a2af2fdf6c85d7d61593067f7bb3e2bf0b63d242f90f0->leave($__internal_aa29cf52c943f27e577a2af2fdf6c85d7d61593067f7bb3e2bf0b63d242f90f0_prof);

        
        $__internal_1f2eb67222f66bcf4eae0ee3f412ec28b4ffb2a86360e1d074fdbbb558b20cb5->leave($__internal_1f2eb67222f66bcf4eae0ee3f412ec28b4ffb2a86360e1d074fdbbb558b20cb5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a8ac0814467b5e2567a64a9b6026528f3c98158afeb7a89ff14642c0be98fcdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8ac0814467b5e2567a64a9b6026528f3c98158afeb7a89ff14642c0be98fcdb->enter($__internal_a8ac0814467b5e2567a64a9b6026528f3c98158afeb7a89ff14642c0be98fcdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d6adfcf3aa74654ffceb14d76b65727b64d2ef6a0012dba8888842a8c762513f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6adfcf3aa74654ffceb14d76b65727b64d2ef6a0012dba8888842a8c762513f->enter($__internal_d6adfcf3aa74654ffceb14d76b65727b64d2ef6a0012dba8888842a8c762513f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_d6adfcf3aa74654ffceb14d76b65727b64d2ef6a0012dba8888842a8c762513f->leave($__internal_d6adfcf3aa74654ffceb14d76b65727b64d2ef6a0012dba8888842a8c762513f_prof);

        
        $__internal_a8ac0814467b5e2567a64a9b6026528f3c98158afeb7a89ff14642c0be98fcdb->leave($__internal_a8ac0814467b5e2567a64a9b6026528f3c98158afeb7a89ff14642c0be98fcdb_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
