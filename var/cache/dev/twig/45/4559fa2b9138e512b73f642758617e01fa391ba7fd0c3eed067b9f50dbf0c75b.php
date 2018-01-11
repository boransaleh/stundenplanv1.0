<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_d73a012251f8c5db5a2bff9bee14d7f783ab16ffac31faf22df2c9249cebf683 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2667c1f888493be27beae88d3b9453d9d2fcbf9e2bdf5615203bd37855e5340f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2667c1f888493be27beae88d3b9453d9d2fcbf9e2bdf5615203bd37855e5340f->enter($__internal_2667c1f888493be27beae88d3b9453d9d2fcbf9e2bdf5615203bd37855e5340f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_bcf350ef9c9b34c334c296af10cf1a736040b62f1e481feab4639ee41b5ca82b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcf350ef9c9b34c334c296af10cf1a736040b62f1e481feab4639ee41b5ca82b->enter($__internal_bcf350ef9c9b34c334c296af10cf1a736040b62f1e481feab4639ee41b5ca82b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2667c1f888493be27beae88d3b9453d9d2fcbf9e2bdf5615203bd37855e5340f->leave($__internal_2667c1f888493be27beae88d3b9453d9d2fcbf9e2bdf5615203bd37855e5340f_prof);

        
        $__internal_bcf350ef9c9b34c334c296af10cf1a736040b62f1e481feab4639ee41b5ca82b->leave($__internal_bcf350ef9c9b34c334c296af10cf1a736040b62f1e481feab4639ee41b5ca82b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9202581d9128ca002adcca38d3291058785e9355dde332893fba378e1d558494 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9202581d9128ca002adcca38d3291058785e9355dde332893fba378e1d558494->enter($__internal_9202581d9128ca002adcca38d3291058785e9355dde332893fba378e1d558494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_72a79f560d4cd15835fd2c227cc7fac49fd7357e79294dfa247ae2773af41316 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72a79f560d4cd15835fd2c227cc7fac49fd7357e79294dfa247ae2773af41316->enter($__internal_72a79f560d4cd15835fd2c227cc7fac49fd7357e79294dfa247ae2773af41316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_72a79f560d4cd15835fd2c227cc7fac49fd7357e79294dfa247ae2773af41316->leave($__internal_72a79f560d4cd15835fd2c227cc7fac49fd7357e79294dfa247ae2773af41316_prof);

        
        $__internal_9202581d9128ca002adcca38d3291058785e9355dde332893fba378e1d558494->leave($__internal_9202581d9128ca002adcca38d3291058785e9355dde332893fba378e1d558494_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6ed71d377ea486d35144a7816779a856d52c3f304045a33f111dccc57399e83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6ed71d377ea486d35144a7816779a856d52c3f304045a33f111dccc57399e83->enter($__internal_f6ed71d377ea486d35144a7816779a856d52c3f304045a33f111dccc57399e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5f8823b7d7d02a4a27e96fd37c9e58dc1eba3b1022192201e7fe96b07d0082e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f8823b7d7d02a4a27e96fd37c9e58dc1eba3b1022192201e7fe96b07d0082e2->enter($__internal_5f8823b7d7d02a4a27e96fd37c9e58dc1eba3b1022192201e7fe96b07d0082e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_5f8823b7d7d02a4a27e96fd37c9e58dc1eba3b1022192201e7fe96b07d0082e2->leave($__internal_5f8823b7d7d02a4a27e96fd37c9e58dc1eba3b1022192201e7fe96b07d0082e2_prof);

        
        $__internal_f6ed71d377ea486d35144a7816779a856d52c3f304045a33f111dccc57399e83->leave($__internal_f6ed71d377ea486d35144a7816779a856d52c3f304045a33f111dccc57399e83_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
