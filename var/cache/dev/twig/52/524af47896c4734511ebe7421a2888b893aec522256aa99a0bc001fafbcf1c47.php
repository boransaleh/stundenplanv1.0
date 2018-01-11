<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_9873f1eb205f6033e137ca01152dba78d77ed9a26f6aef97f2851ff41f2f090e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_b5c24730b2a14905a450f3883bd2684d48a497830f36dd52848ce6b2ec36f10c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5c24730b2a14905a450f3883bd2684d48a497830f36dd52848ce6b2ec36f10c->enter($__internal_b5c24730b2a14905a450f3883bd2684d48a497830f36dd52848ce6b2ec36f10c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_2e88ec69b3b9387387ac43b69532dcabe3c2f1e9e4d8d9e6480ff90cca24e77a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e88ec69b3b9387387ac43b69532dcabe3c2f1e9e4d8d9e6480ff90cca24e77a->enter($__internal_2e88ec69b3b9387387ac43b69532dcabe3c2f1e9e4d8d9e6480ff90cca24e77a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5c24730b2a14905a450f3883bd2684d48a497830f36dd52848ce6b2ec36f10c->leave($__internal_b5c24730b2a14905a450f3883bd2684d48a497830f36dd52848ce6b2ec36f10c_prof);

        
        $__internal_2e88ec69b3b9387387ac43b69532dcabe3c2f1e9e4d8d9e6480ff90cca24e77a->leave($__internal_2e88ec69b3b9387387ac43b69532dcabe3c2f1e9e4d8d9e6480ff90cca24e77a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_eeb8747fbfe9e1925d06baa52eb3f25275998b86c615c17ebf5eec4196687fa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eeb8747fbfe9e1925d06baa52eb3f25275998b86c615c17ebf5eec4196687fa2->enter($__internal_eeb8747fbfe9e1925d06baa52eb3f25275998b86c615c17ebf5eec4196687fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_cc0cffc2d080260dd7656a4d524d0174acf15c1339d15b6d35cf1c8822087d69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc0cffc2d080260dd7656a4d524d0174acf15c1339d15b6d35cf1c8822087d69->enter($__internal_cc0cffc2d080260dd7656a4d524d0174acf15c1339d15b6d35cf1c8822087d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cc0cffc2d080260dd7656a4d524d0174acf15c1339d15b6d35cf1c8822087d69->leave($__internal_cc0cffc2d080260dd7656a4d524d0174acf15c1339d15b6d35cf1c8822087d69_prof);

        
        $__internal_eeb8747fbfe9e1925d06baa52eb3f25275998b86c615c17ebf5eec4196687fa2->leave($__internal_eeb8747fbfe9e1925d06baa52eb3f25275998b86c615c17ebf5eec4196687fa2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_642898cef76e8009789941f2757e019561c8e64043307fe094066d8e8fa3542a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_642898cef76e8009789941f2757e019561c8e64043307fe094066d8e8fa3542a->enter($__internal_642898cef76e8009789941f2757e019561c8e64043307fe094066d8e8fa3542a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f3a6437049d36104032e56a68b5151c58bd17ad4483b308db2bee21704077ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f3a6437049d36104032e56a68b5151c58bd17ad4483b308db2bee21704077ba->enter($__internal_6f3a6437049d36104032e56a68b5151c58bd17ad4483b308db2bee21704077ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6f3a6437049d36104032e56a68b5151c58bd17ad4483b308db2bee21704077ba->leave($__internal_6f3a6437049d36104032e56a68b5151c58bd17ad4483b308db2bee21704077ba_prof);

        
        $__internal_642898cef76e8009789941f2757e019561c8e64043307fe094066d8e8fa3542a->leave($__internal_642898cef76e8009789941f2757e019561c8e64043307fe094066d8e8fa3542a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_834349ab18c5284cc5a5bc42a4939c148bbc0b1ca676a802d94a445b8bb36cc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_834349ab18c5284cc5a5bc42a4939c148bbc0b1ca676a802d94a445b8bb36cc2->enter($__internal_834349ab18c5284cc5a5bc42a4939c148bbc0b1ca676a802d94a445b8bb36cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_280b8890404808414516ad3a1a064473b46c8aa0594ba0abd2efe13e7d25c46f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_280b8890404808414516ad3a1a064473b46c8aa0594ba0abd2efe13e7d25c46f->enter($__internal_280b8890404808414516ad3a1a064473b46c8aa0594ba0abd2efe13e7d25c46f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_280b8890404808414516ad3a1a064473b46c8aa0594ba0abd2efe13e7d25c46f->leave($__internal_280b8890404808414516ad3a1a064473b46c8aa0594ba0abd2efe13e7d25c46f_prof);

        
        $__internal_834349ab18c5284cc5a5bc42a4939c148bbc0b1ca676a802d94a445b8bb36cc2->leave($__internal_834349ab18c5284cc5a5bc42a4939c148bbc0b1ca676a802d94a445b8bb36cc2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
