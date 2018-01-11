<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_5304c37caad63ba5f14509e43107a026110bb3265811a68d1d1fb06d3f1aed65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_24b5a802f2501cd67b835bb72e310e0a423832410864e076d63b11983e10e299 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24b5a802f2501cd67b835bb72e310e0a423832410864e076d63b11983e10e299->enter($__internal_24b5a802f2501cd67b835bb72e310e0a423832410864e076d63b11983e10e299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_d7b972148ac616c62797fb177e068550966eac60836e834a33e033a95d01585d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7b972148ac616c62797fb177e068550966eac60836e834a33e033a95d01585d->enter($__internal_d7b972148ac616c62797fb177e068550966eac60836e834a33e033a95d01585d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_24b5a802f2501cd67b835bb72e310e0a423832410864e076d63b11983e10e299->leave($__internal_24b5a802f2501cd67b835bb72e310e0a423832410864e076d63b11983e10e299_prof);

        
        $__internal_d7b972148ac616c62797fb177e068550966eac60836e834a33e033a95d01585d->leave($__internal_d7b972148ac616c62797fb177e068550966eac60836e834a33e033a95d01585d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_192fd027c3041d82c221c141f4e5a0c177287bfc17a693221a31ffc58cdc5978 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_192fd027c3041d82c221c141f4e5a0c177287bfc17a693221a31ffc58cdc5978->enter($__internal_192fd027c3041d82c221c141f4e5a0c177287bfc17a693221a31ffc58cdc5978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e71ef4d4cd7174d3662e04c93db2a8f0237f52dbad8acc5ff521f9ba4137c41d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e71ef4d4cd7174d3662e04c93db2a8f0237f52dbad8acc5ff521f9ba4137c41d->enter($__internal_e71ef4d4cd7174d3662e04c93db2a8f0237f52dbad8acc5ff521f9ba4137c41d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e71ef4d4cd7174d3662e04c93db2a8f0237f52dbad8acc5ff521f9ba4137c41d->leave($__internal_e71ef4d4cd7174d3662e04c93db2a8f0237f52dbad8acc5ff521f9ba4137c41d_prof);

        
        $__internal_192fd027c3041d82c221c141f4e5a0c177287bfc17a693221a31ffc58cdc5978->leave($__internal_192fd027c3041d82c221c141f4e5a0c177287bfc17a693221a31ffc58cdc5978_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
