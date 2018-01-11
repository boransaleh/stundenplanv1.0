<?php

/* @SgDatatables/column/multiselect.html.twig */
class __TwigTemplate_9604df9dfcc8271812b9fe06ca7e9097974be33fdac69b0dbc2ed572befc7bbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("SgDatatablesBundle:column:column.html.twig", "@SgDatatables/column/multiselect.html.twig", 9);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SgDatatablesBundle:column:column.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_84c49aa29b26238f68a6585c05688f3f1ddda5be448c85d1047491245dd8824b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84c49aa29b26238f68a6585c05688f3f1ddda5be448c85d1047491245dd8824b->enter($__internal_84c49aa29b26238f68a6585c05688f3f1ddda5be448c85d1047491245dd8824b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/column/multiselect.html.twig"));

        $__internal_c011ea505bd784265316257ca7a9c388478940e3f7ad6dc33292d11b52687dbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c011ea505bd784265316257ca7a9c388478940e3f7ad6dc33292d11b52687dbc->enter($__internal_c011ea505bd784265316257ca7a9c388478940e3f7ad6dc33292d11b52687dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/column/multiselect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84c49aa29b26238f68a6585c05688f3f1ddda5be448c85d1047491245dd8824b->leave($__internal_84c49aa29b26238f68a6585c05688f3f1ddda5be448c85d1047491245dd8824b_prof);

        
        $__internal_c011ea505bd784265316257ca7a9c388478940e3f7ad6dc33292d11b52687dbc->leave($__internal_c011ea505bd784265316257ca7a9c388478940e3f7ad6dc33292d11b52687dbc_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_99979d8647dce1a2861425911a3807441f34f7dffe5fb71061994bd4ef1f4be4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99979d8647dce1a2861425911a3807441f34f7dffe5fb71061994bd4ef1f4be4->enter($__internal_99979d8647dce1a2861425911a3807441f34f7dffe5fb71061994bd4ef1f4be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b8616ae9c4c43c0f798a62e5836c0de35059426dbfc2229bfcc33d7f4366cb81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8616ae9c4c43c0f798a62e5836c0de35059426dbfc2229bfcc33d7f4366cb81->enter($__internal_b8616ae9c4c43c0f798a62e5836c0de35059426dbfc2229bfcc33d7f4366cb81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 12
        echo "    \"title\": \"<input type='checkbox' name='sg-datatables-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "name", array()), "html", null, true);
        echo "-multiselect-checkall' class='sg-datatables-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "name", array()), "html", null, true);
        echo "-multiselect-checkall' />\",
";
        
        $__internal_b8616ae9c4c43c0f798a62e5836c0de35059426dbfc2229bfcc33d7f4366cb81->leave($__internal_b8616ae9c4c43c0f798a62e5836c0de35059426dbfc2229bfcc33d7f4366cb81_prof);

        
        $__internal_99979d8647dce1a2861425911a3807441f34f7dffe5fb71061994bd4ef1f4be4->leave($__internal_99979d8647dce1a2861425911a3807441f34f7dffe5fb71061994bd4ef1f4be4_prof);

    }

    public function getTemplateName()
    {
        return "@SgDatatables/column/multiselect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 12,  40 => 11,  11 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{##
 # This file is part of the SgDatatablesBundle package.
 #
 # (c) stwe <https://github.com/stwe/DatatablesBundle>
 #
 # For the full copyright and license information, please view the LICENSE
 # file that was distributed with this source code.
 #}
{% extends 'SgDatatablesBundle:column:column.html.twig' %}

{% block title %}
    \"title\": \"<input type='checkbox' name='sg-datatables-{{ sg_datatables_view.name }}-multiselect-checkall' class='sg-datatables-{{ sg_datatables_view.name }}-multiselect-checkall' />\",
{% endblock %}
", "@SgDatatables/column/multiselect.html.twig", "C:\\Apache24\\htdocs\\vendor\\sg\\datatablesbundle\\Resources\\views\\column\\multiselect.html.twig");
    }
}
