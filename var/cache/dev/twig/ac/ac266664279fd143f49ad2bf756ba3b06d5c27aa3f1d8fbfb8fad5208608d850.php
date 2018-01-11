<?php

/* SgDatatablesBundle:column:multiselect.html.twig */
class __TwigTemplate_7c936355b3e665bca669371ff700dfee415a6e6496093754a53f5b7cb4962049 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("SgDatatablesBundle:column:column.html.twig", "SgDatatablesBundle:column:multiselect.html.twig", 9);
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
        $__internal_78517e39a7a5385c2b88978ecfc6c021d535617023c5029ad6a52b83ef7c7239 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78517e39a7a5385c2b88978ecfc6c021d535617023c5029ad6a52b83ef7c7239->enter($__internal_78517e39a7a5385c2b88978ecfc6c021d535617023c5029ad6a52b83ef7c7239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:column:multiselect.html.twig"));

        $__internal_b6cc62f609a44d3da4789d30ac9c89665f997651ab51ddc3aecc1c8cbec9f1c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6cc62f609a44d3da4789d30ac9c89665f997651ab51ddc3aecc1c8cbec9f1c7->enter($__internal_b6cc62f609a44d3da4789d30ac9c89665f997651ab51ddc3aecc1c8cbec9f1c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:column:multiselect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78517e39a7a5385c2b88978ecfc6c021d535617023c5029ad6a52b83ef7c7239->leave($__internal_78517e39a7a5385c2b88978ecfc6c021d535617023c5029ad6a52b83ef7c7239_prof);

        
        $__internal_b6cc62f609a44d3da4789d30ac9c89665f997651ab51ddc3aecc1c8cbec9f1c7->leave($__internal_b6cc62f609a44d3da4789d30ac9c89665f997651ab51ddc3aecc1c8cbec9f1c7_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_b5152ac0d3b573d3091abc01c78a5a52769564344e8771a1d412c34e2198dfe5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5152ac0d3b573d3091abc01c78a5a52769564344e8771a1d412c34e2198dfe5->enter($__internal_b5152ac0d3b573d3091abc01c78a5a52769564344e8771a1d412c34e2198dfe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_74f7e664867ec5e1cab6d6d0cf6a6cd98cf45bab1a006ff09c3dd14c7aaa85ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74f7e664867ec5e1cab6d6d0cf6a6cd98cf45bab1a006ff09c3dd14c7aaa85ea->enter($__internal_74f7e664867ec5e1cab6d6d0cf6a6cd98cf45bab1a006ff09c3dd14c7aaa85ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 12
        echo "    \"title\": \"<input type='checkbox' name='sg-datatables-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "name", array()), "html", null, true);
        echo "-multiselect-checkall' class='sg-datatables-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "name", array()), "html", null, true);
        echo "-multiselect-checkall' />\",
";
        
        $__internal_74f7e664867ec5e1cab6d6d0cf6a6cd98cf45bab1a006ff09c3dd14c7aaa85ea->leave($__internal_74f7e664867ec5e1cab6d6d0cf6a6cd98cf45bab1a006ff09c3dd14c7aaa85ea_prof);

        
        $__internal_b5152ac0d3b573d3091abc01c78a5a52769564344e8771a1d412c34e2198dfe5->leave($__internal_b5152ac0d3b573d3091abc01c78a5a52769564344e8771a1d412c34e2198dfe5_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:column:multiselect.html.twig";
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
", "SgDatatablesBundle:column:multiselect.html.twig", "C:\\Apache24\\htdocs\\vendor\\sg\\datatablesbundle/Resources/views/column/multiselect.html.twig");
    }
}
