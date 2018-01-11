<?php

/* @SgDatatables/datatable/datatable_js.html.twig */
class __TwigTemplate_f8b589cff91c9b9d082f1eb5993dc09388bf355c4b52e0fc04ffd2d9d9b2b713 extends Twig_Template
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
        $__internal_97a06afdd8a276644698f0e589c724a7892f4ff56a789cf86b07aa6c6e3f8e24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97a06afdd8a276644698f0e589c724a7892f4ff56a789cf86b07aa6c6e3f8e24->enter($__internal_97a06afdd8a276644698f0e589c724a7892f4ff56a789cf86b07aa6c6e3f8e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/datatable/datatable_js.html.twig"));

        $__internal_f7147d9163d3b1531cc481d25ff896695a48510d8b0243eedc9fa72f0dfd14d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7147d9163d3b1531cc481d25ff896695a48510d8b0243eedc9fa72f0dfd14d5->enter($__internal_f7147d9163d3b1531cc481d25ff896695a48510d8b0243eedc9fa72f0dfd14d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/datatable/datatable_js.html.twig"));

        // line 9
        echo "<script type=\"text/javascript\">

    \$(document).ready(function () {

        var selector = \"#sg-datatables-";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "name", array()), "html", null, true);
        echo "\";
        var oTable;

        var defaults = {
        };

        var language = {
            ";
        // line 20
        $this->loadTemplate("SgDatatablesBundle:datatable:language.html.twig", "@SgDatatables/datatable/datatable_js.html.twig", 20)->display($context);
        // line 21
        echo "        };

        var ajax = {
            ";
        // line 24
        $this->loadTemplate("SgDatatablesBundle:datatable:ajax.html.twig", "@SgDatatables/datatable/datatable_js.html.twig", 24)->display($context);
        // line 25
        echo "        };

        var options = {
            ";
        // line 28
        $this->loadTemplate("SgDatatablesBundle:datatable:options.html.twig", "@SgDatatables/datatable/datatable_js.html.twig", 28)->display($context);
        // line 29
        echo "        };

        var features = {
            ";
        // line 32
        $this->loadTemplate("SgDatatablesBundle:datatable:features.html.twig", "@SgDatatables/datatable/datatable_js.html.twig", 32)->display($context);
        // line 33
        echo "        };

        var callbacks = {
            ";
        // line 36
        $this->loadTemplate("SgDatatablesBundle:datatable:callbacks.html.twig", "@SgDatatables/datatable/datatable_js.html.twig", 36)->display($context);
        // line 37
        echo "        };

        var extensions = {
            ";
        // line 40
        $this->loadTemplate("SgDatatablesBundle:datatable:extensions.html.twig", "@SgDatatables/datatable/datatable_js.html.twig", 40)->display($context);
        // line 41
        echo "        };

        var columns = {
            ";
        // line 44
        $this->loadTemplate("SgDatatablesBundle:datatable:columns.html.twig", "@SgDatatables/datatable/datatable_js.html.twig", 44)->display($context);
        // line 45
        echo "        };

        var initialSearch = {
            ";
        // line 48
        $this->loadTemplate("SgDatatablesBundle:datatable:initial_search.html.twig", "@SgDatatables/datatable/datatable_js.html.twig", 48)->display($context);
        // line 49
        echo "        };

        function postCreateDatatable(pipeline) {
            ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "columnBuilder", array()), "columns", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 53
            echo "                ";
            if ( !(null === $this->getAttribute($context["column"], "renderPostCreateDatatableJsContent", array()))) {
                // line 54
                echo "                    ";
                echo $this->getAttribute($context["column"], "renderPostCreateDatatableJsContent", array());
                echo "
                ";
            }
            // line 56
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        }

        function createDatatable() {
            \$.extend(defaults, language);
            \$.extend(defaults, ajax);
            \$.extend(defaults, options);
            \$.extend(defaults, features);
            \$.extend(defaults, callbacks);
            \$.extend(defaults, extensions);
            \$.extend(defaults, columns);
            \$.extend(defaults, initialSearch);

            if (!\$.fn.dataTable.isDataTable(selector)) {
                \$(selector)
                    ";
        // line 71
        $this->loadTemplate("SgDatatablesBundle:datatable:events.html.twig", "@SgDatatables/datatable/datatable_js.html.twig", 71)->display($context);
        // line 72
        echo "                ;
            
                oTable = \$(selector)
                    .DataTable(defaults)
                        .on('draw.dt', function() { postCreateDatatable(";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "ajax", array()), "pipeline", array()), "html", null, true);
        echo ") })
                    ;

                ";
        // line 79
        if ((true == $this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "options", array()), "individualFiltering", array()))) {
            // line 80
            echo "                    ";
            $this->loadTemplate("SgDatatablesBundle:datatable:search.js.twig", "@SgDatatables/datatable/datatable_js.html.twig", 80)->display($context);
            // line 81
            echo "                ";
        }
        // line 82
        echo "            }
        }

        createDatatable();

        ";
        // line 87
        if ( !(null === $this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "columnBuilder", array()), "uniqueColumn", array(0 => "multiselect"), "method"))) {
            // line 88
            echo "            ";
            echo $this->env->getExtension('Sg\DatatablesBundle\Twig\DatatableTwigExtension')->datatablesRenderMultiselectActions($this->env, $this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "columnBuilder", array()), "uniqueColumn", array(0 => "multiselect"), "method"), $this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "ajax", array()), "pipeline", array()));
            echo "
        ";
        }
        // line 90
        echo "    });

</script>
";
        
        $__internal_97a06afdd8a276644698f0e589c724a7892f4ff56a789cf86b07aa6c6e3f8e24->leave($__internal_97a06afdd8a276644698f0e589c724a7892f4ff56a789cf86b07aa6c6e3f8e24_prof);

        
        $__internal_f7147d9163d3b1531cc481d25ff896695a48510d8b0243eedc9fa72f0dfd14d5->leave($__internal_f7147d9163d3b1531cc481d25ff896695a48510d8b0243eedc9fa72f0dfd14d5_prof);

    }

    public function getTemplateName()
    {
        return "@SgDatatables/datatable/datatable_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 90,  163 => 88,  161 => 87,  154 => 82,  151 => 81,  148 => 80,  146 => 79,  140 => 76,  134 => 72,  132 => 71,  116 => 57,  110 => 56,  104 => 54,  101 => 53,  97 => 52,  92 => 49,  90 => 48,  85 => 45,  83 => 44,  78 => 41,  76 => 40,  71 => 37,  69 => 36,  64 => 33,  62 => 32,  57 => 29,  55 => 28,  50 => 25,  48 => 24,  43 => 21,  41 => 20,  31 => 13,  25 => 9,);
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
<script type=\"text/javascript\">

    \$(document).ready(function () {

        var selector = \"#sg-datatables-{{ sg_datatables_view.name }}\";
        var oTable;

        var defaults = {
        };

        var language = {
            {% include 'SgDatatablesBundle:datatable:language.html.twig' %}
        };

        var ajax = {
            {% include 'SgDatatablesBundle:datatable:ajax.html.twig' %}
        };

        var options = {
            {% include 'SgDatatablesBundle:datatable:options.html.twig' %}
        };

        var features = {
            {% include 'SgDatatablesBundle:datatable:features.html.twig' %}
        };

        var callbacks = {
            {% include 'SgDatatablesBundle:datatable:callbacks.html.twig' %}
        };

        var extensions = {
            {% include 'SgDatatablesBundle:datatable:extensions.html.twig' %}
        };

        var columns = {
            {% include 'SgDatatablesBundle:datatable:columns.html.twig' %}
        };

        var initialSearch = {
            {% include 'SgDatatablesBundle:datatable:initial_search.html.twig' %}
        };

        function postCreateDatatable(pipeline) {
            {% for column in sg_datatables_view.columnBuilder.columns %}
                {% if column.renderPostCreateDatatableJsContent is not null %}
                    {{ column.renderPostCreateDatatableJsContent|raw }}
                {% endif %}
            {% endfor %}
        }

        function createDatatable() {
            \$.extend(defaults, language);
            \$.extend(defaults, ajax);
            \$.extend(defaults, options);
            \$.extend(defaults, features);
            \$.extend(defaults, callbacks);
            \$.extend(defaults, extensions);
            \$.extend(defaults, columns);
            \$.extend(defaults, initialSearch);

            if (!\$.fn.dataTable.isDataTable(selector)) {
                \$(selector)
                    {% include 'SgDatatablesBundle:datatable:events.html.twig' %}
                ;
            
                oTable = \$(selector)
                    .DataTable(defaults)
                        .on('draw.dt', function() { postCreateDatatable({{ sg_datatables_view.ajax.pipeline}}) })
                    ;

                {% if true == sg_datatables_view.options.individualFiltering %}
                    {% include 'SgDatatablesBundle:datatable:search.js.twig' %}
                {% endif %}
            }
        }

        createDatatable();

        {% if sg_datatables_view.columnBuilder.uniqueColumn('multiselect') is not null %}
            {{ sg_datatables_render_multiselect_actions( sg_datatables_view.columnBuilder.uniqueColumn('multiselect'), sg_datatables_view.ajax.pipeline) }}
        {% endif %}
    });

</script>
", "@SgDatatables/datatable/datatable_js.html.twig", "C:\\Apache24\\htdocs\\vendor\\sg\\datatablesbundle\\Resources\\views\\datatable\\datatable_js.html.twig");
    }
}
