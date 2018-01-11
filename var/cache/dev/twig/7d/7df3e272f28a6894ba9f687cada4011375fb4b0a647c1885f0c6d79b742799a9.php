<?php

/* SgDatatablesBundle:datatable:initial_search.html.twig */
class __TwigTemplate_43b71506774f7b9f2c02106f317adcd2f0b1dd33d50b43bb97c058f31cac2169 extends Twig_Template
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
        $__internal_2b7e79759ac6fff0328f75810b0c924813f184f4e725814608d765c1b3b9f9a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b7e79759ac6fff0328f75810b0c924813f184f4e725814608d765c1b3b9f9a4->enter($__internal_2b7e79759ac6fff0328f75810b0c924813f184f4e725814608d765c1b3b9f9a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:datatable:initial_search.html.twig"));

        $__internal_8320c45c645e8d1e8ddff19d93398903e4bc3e664e8c46f728ebcd1b6d1a4b77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8320c45c645e8d1e8ddff19d93398903e4bc3e664e8c46f728ebcd1b6d1a4b77->enter($__internal_8320c45c645e8d1e8ddff19d93398903e4bc3e664e8c46f728ebcd1b6d1a4b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:datatable:initial_search.html.twig"));

        // line 9
        echo "\"searchCols\": [
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "columnBuilder", array()), "columns", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 11
            echo "        ";
            if (($this->getAttribute($this->getAttribute($context["column"], "filter", array(), "any", false, true), "initialSearch", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["column"], "filter", array()), "initialSearch", array())) > 0))) {
                echo "{\"search\" : \"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["column"], "filter", array()), "initialSearch", array()), "html", null, true);
                echo "\"}";
            } else {
                echo "null";
            }
            echo ",
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "]
";
        
        $__internal_2b7e79759ac6fff0328f75810b0c924813f184f4e725814608d765c1b3b9f9a4->leave($__internal_2b7e79759ac6fff0328f75810b0c924813f184f4e725814608d765c1b3b9f9a4_prof);

        
        $__internal_8320c45c645e8d1e8ddff19d93398903e4bc3e664e8c46f728ebcd1b6d1a4b77->leave($__internal_8320c45c645e8d1e8ddff19d93398903e4bc3e664e8c46f728ebcd1b6d1a4b77_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:datatable:initial_search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 13,  32 => 11,  28 => 10,  25 => 9,);
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
\"searchCols\": [
    {% for column in sg_datatables_view.columnBuilder.columns %}
        {% if column.filter.initialSearch is defined and column.filter.initialSearch|length > 0 %}{\"search\" : \"{{ column.filter.initialSearch }}\"}{% else %}null{% endif %},
    {% endfor %}
]
", "SgDatatablesBundle:datatable:initial_search.html.twig", "C:\\Apache24\\htdocs\\vendor\\sg\\datatablesbundle/Resources/views/datatable/initial_search.html.twig");
    }
}
