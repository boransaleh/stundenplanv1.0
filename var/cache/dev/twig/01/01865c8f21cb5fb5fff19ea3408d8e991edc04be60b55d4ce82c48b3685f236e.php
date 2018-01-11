<?php

/* @SgDatatables/datatable/initial_search.html.twig */
class __TwigTemplate_3c218e84941b4a5d87d01bd9865a3c5dab0dd21aa6066ae6fc2713ef24aa4d9a extends Twig_Template
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
        $__internal_de656ca0bd226fbb3da8181c314dfeb70e2db8fb534113dcbcdf1ca9575a372b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de656ca0bd226fbb3da8181c314dfeb70e2db8fb534113dcbcdf1ca9575a372b->enter($__internal_de656ca0bd226fbb3da8181c314dfeb70e2db8fb534113dcbcdf1ca9575a372b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/datatable/initial_search.html.twig"));

        $__internal_af18da4284b08ae66b65ce1faaccc9a5e0ecb266e0274c6d5758b4463f8996b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af18da4284b08ae66b65ce1faaccc9a5e0ecb266e0274c6d5758b4463f8996b2->enter($__internal_af18da4284b08ae66b65ce1faaccc9a5e0ecb266e0274c6d5758b4463f8996b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/datatable/initial_search.html.twig"));

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
        
        $__internal_de656ca0bd226fbb3da8181c314dfeb70e2db8fb534113dcbcdf1ca9575a372b->leave($__internal_de656ca0bd226fbb3da8181c314dfeb70e2db8fb534113dcbcdf1ca9575a372b_prof);

        
        $__internal_af18da4284b08ae66b65ce1faaccc9a5e0ecb266e0274c6d5758b4463f8996b2->leave($__internal_af18da4284b08ae66b65ce1faaccc9a5e0ecb266e0274c6d5758b4463f8996b2_prof);

    }

    public function getTemplateName()
    {
        return "@SgDatatables/datatable/initial_search.html.twig";
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
", "@SgDatatables/datatable/initial_search.html.twig", "C:\\Apache24\\htdocs\\vendor\\sg\\datatablesbundle\\Resources\\views\\datatable\\initial_search.html.twig");
    }
}
