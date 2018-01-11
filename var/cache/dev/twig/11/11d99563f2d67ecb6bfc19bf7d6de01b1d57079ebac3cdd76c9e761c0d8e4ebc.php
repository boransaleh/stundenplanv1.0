<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_194f8be080ea2a0a1ff65a39d19b73c37dbdb99f9f97772dbcf16dd2629c4d1b extends Twig_Template
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
        $__internal_bb9226887cb7849d5d65ee36858be7249e6746fdf90b6e4c4bded3d52603ef36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb9226887cb7849d5d65ee36858be7249e6746fdf90b6e4c4bded3d52603ef36->enter($__internal_bb9226887cb7849d5d65ee36858be7249e6746fdf90b6e4c4bded3d52603ef36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_5d249ee82c14b30bcfefb2de602dcdc56022fdb197897d85100caef9213d7439 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d249ee82c14b30bcfefb2de602dcdc56022fdb197897d85100caef9213d7439->enter($__internal_5d249ee82c14b30bcfefb2de602dcdc56022fdb197897d85100caef9213d7439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_bb9226887cb7849d5d65ee36858be7249e6746fdf90b6e4c4bded3d52603ef36->leave($__internal_bb9226887cb7849d5d65ee36858be7249e6746fdf90b6e4c4bded3d52603ef36_prof);

        
        $__internal_5d249ee82c14b30bcfefb2de602dcdc56022fdb197897d85100caef9213d7439->leave($__internal_5d249ee82c14b30bcfefb2de602dcdc56022fdb197897d85100caef9213d7439_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_3dbfc57ac94f51bd926e5aa1a5e5da5c40b6190626a1f63ad7d78649045d75b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dbfc57ac94f51bd926e5aa1a5e5da5c40b6190626a1f63ad7d78649045d75b1->enter($__internal_3dbfc57ac94f51bd926e5aa1a5e5da5c40b6190626a1f63ad7d78649045d75b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_27c84c50edd0900ec52817494c407bbc75c4c7312d286b7986f4a2876dc42279 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27c84c50edd0900ec52817494c407bbc75c4c7312d286b7986f4a2876dc42279->enter($__internal_27c84c50edd0900ec52817494c407bbc75c4c7312d286b7986f4a2876dc42279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_27c84c50edd0900ec52817494c407bbc75c4c7312d286b7986f4a2876dc42279->leave($__internal_27c84c50edd0900ec52817494c407bbc75c4c7312d286b7986f4a2876dc42279_prof);

        
        $__internal_3dbfc57ac94f51bd926e5aa1a5e5da5c40b6190626a1f63ad7d78649045d75b1->leave($__internal_3dbfc57ac94f51bd926e5aa1a5e5da5c40b6190626a1f63ad7d78649045d75b1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
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
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
