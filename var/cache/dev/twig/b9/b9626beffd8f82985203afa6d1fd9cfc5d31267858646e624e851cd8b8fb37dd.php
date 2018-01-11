<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_c14bde554d0512a0f5e28d83de3df85e716478878a5caebb92c40ce2c05c851e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_65230c44d030d5c8dd9616bb21b660c3c24d98003391478112ef1fe55b3acf9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65230c44d030d5c8dd9616bb21b660c3c24d98003391478112ef1fe55b3acf9a->enter($__internal_65230c44d030d5c8dd9616bb21b660c3c24d98003391478112ef1fe55b3acf9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_0613fb9370f91cc0440bf9f2aad24167b53313297f24849f12724845bf6a7b50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0613fb9370f91cc0440bf9f2aad24167b53313297f24849f12724845bf6a7b50->enter($__internal_0613fb9370f91cc0440bf9f2aad24167b53313297f24849f12724845bf6a7b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_65230c44d030d5c8dd9616bb21b660c3c24d98003391478112ef1fe55b3acf9a->leave($__internal_65230c44d030d5c8dd9616bb21b660c3c24d98003391478112ef1fe55b3acf9a_prof);

        
        $__internal_0613fb9370f91cc0440bf9f2aad24167b53313297f24849f12724845bf6a7b50->leave($__internal_0613fb9370f91cc0440bf9f2aad24167b53313297f24849f12724845bf6a7b50_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
