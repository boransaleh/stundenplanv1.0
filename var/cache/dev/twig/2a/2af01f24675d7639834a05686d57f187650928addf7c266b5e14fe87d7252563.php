<?php

/* SgDatatablesBundle:datatable:search.js.twig */
class __TwigTemplate_ec056f2de6d9b077a71cde0cb2f67682558d5bea2d5d85cf61033fe0fd0cbbc9 extends Twig_Template
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
        $__internal_56e193fa7a2573e23c809320fb3a606065561fbbb5d3dded498b17687d4c4414 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56e193fa7a2573e23c809320fb3a606065561fbbb5d3dded498b17687d4c4414->enter($__internal_56e193fa7a2573e23c809320fb3a606065561fbbb5d3dded498b17687d4c4414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:datatable:search.js.twig"));

        $__internal_d1e8e07dfb1ddec6ae0e9a3405d070346ee9d4890ea825f1f2abfc79a36c2964 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1e8e07dfb1ddec6ae0e9a3405d070346ee9d4890ea825f1f2abfc79a36c2964->enter($__internal_d1e8e07dfb1ddec6ae0e9a3405d070346ee9d4890ea825f1f2abfc79a36c2964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:datatable:search.js.twig"));

        // line 9
        echo "function drawTable() {
    ";
        // line 10
        if (($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "ajax", array()), "pipeline", array()) > 0)) {
            // line 11
            echo "        oTable.clearPipeline().draw();
    ";
        } else {
            // line 13
            echo "        oTable.draw();
    ";
        }
        // line 15
        echo "}

var search = \$.fn.dataTable.util.throttle(
        function(event) {
            if (event.type == \"keyup\") {
                if (
                        event.keyCode == 37 ||
                        event.keyCode == 38 ||
                        event.keyCode == 39 ||
                        event.keyCode == 40 ||
                        event.keyCode == 16 ||
                        event.keyCode == 17 ||
                        event.keyCode == 18
                )
                    return;
            }

            oTable
                    .column(\$(event.currentTarget).data(\"search-column-index\"))
                    .search(\$(this).val());
            drawTable();
        },
        options.searchDelay
);

\$(selector).find(\"tr input.sg-datatables-individual-filtering\").on(\"keyup change\", search);

\$(selector).find(\"tr select.sg-datatables-individual-filtering\").on(\"keyup change\", function(event) {
    var searchValue = \$(this).val();
    searchValue = searchValue ? searchValue.toString() : '';
    oTable
            .column(\$(event.currentTarget).data(\"search-column-index\"))
            .search(searchValue);
    drawTable();
});
";
        
        $__internal_56e193fa7a2573e23c809320fb3a606065561fbbb5d3dded498b17687d4c4414->leave($__internal_56e193fa7a2573e23c809320fb3a606065561fbbb5d3dded498b17687d4c4414_prof);

        
        $__internal_d1e8e07dfb1ddec6ae0e9a3405d070346ee9d4890ea825f1f2abfc79a36c2964->leave($__internal_d1e8e07dfb1ddec6ae0e9a3405d070346ee9d4890ea825f1f2abfc79a36c2964_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:datatable:search.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 15,  34 => 13,  30 => 11,  28 => 10,  25 => 9,);
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
function drawTable() {
    {% if sg_datatables_view.ajax.pipeline > 0 %}
        oTable.clearPipeline().draw();
    {% else %}
        oTable.draw();
    {% endif %}
}

var search = \$.fn.dataTable.util.throttle(
        function(event) {
            if (event.type == \"keyup\") {
                if (
                        event.keyCode == 37 ||
                        event.keyCode == 38 ||
                        event.keyCode == 39 ||
                        event.keyCode == 40 ||
                        event.keyCode == 16 ||
                        event.keyCode == 17 ||
                        event.keyCode == 18
                )
                    return;
            }

            oTable
                    .column(\$(event.currentTarget).data(\"search-column-index\"))
                    .search(\$(this).val());
            drawTable();
        },
        options.searchDelay
);

\$(selector).find(\"tr input.sg-datatables-individual-filtering\").on(\"keyup change\", search);

\$(selector).find(\"tr select.sg-datatables-individual-filtering\").on(\"keyup change\", function(event) {
    var searchValue = \$(this).val();
    searchValue = searchValue ? searchValue.toString() : '';
    oTable
            .column(\$(event.currentTarget).data(\"search-column-index\"))
            .search(searchValue);
    drawTable();
});
", "SgDatatablesBundle:datatable:search.js.twig", "C:\\Apache24\\htdocs\\vendor\\sg\\datatablesbundle/Resources/views/datatable/search.js.twig");
    }
}
