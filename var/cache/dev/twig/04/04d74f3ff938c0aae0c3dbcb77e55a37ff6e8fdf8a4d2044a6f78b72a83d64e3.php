<?php

/* SgDatatablesBundle:filter:select2.html.twig */
class __TwigTemplate_d85b6d3c96f5505d823d3bd5d0ee3c5850b540109bfde5abc50e72575e71429b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("SgDatatablesBundle:filter:select.html.twig", "SgDatatablesBundle:filter:select2.html.twig", 9);
        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SgDatatablesBundle:filter:select.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1aec691d7e8529f5e59552e0bce8bd9663622500506d9bf39491e3acb92714d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1aec691d7e8529f5e59552e0bce8bd9663622500506d9bf39491e3acb92714d8->enter($__internal_1aec691d7e8529f5e59552e0bce8bd9663622500506d9bf39491e3acb92714d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:filter:select2.html.twig"));

        $__internal_945c176a5bba9d9061ab8c0c30b4d4e52626ee13fe949feaf379fe46d6619b0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_945c176a5bba9d9061ab8c0c30b4d4e52626ee13fe949feaf379fe46d6619b0b->enter($__internal_945c176a5bba9d9061ab8c0c30b4d4e52626ee13fe949feaf379fe46d6619b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:filter:select2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1aec691d7e8529f5e59552e0bce8bd9663622500506d9bf39491e3acb92714d8->leave($__internal_1aec691d7e8529f5e59552e0bce8bd9663622500506d9bf39491e3acb92714d8_prof);

        
        $__internal_945c176a5bba9d9061ab8c0c30b4d4e52626ee13fe949feaf379fe46d6619b0b->leave($__internal_945c176a5bba9d9061ab8c0c30b4d4e52626ee13fe949feaf379fe46d6619b0b_prof);

    }

    // line 11
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_be2381a74e10f9aca278bf376681dc5c9220ed25ae1d445fd3d28ef95ccc2422 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be2381a74e10f9aca278bf376681dc5c9220ed25ae1d445fd3d28ef95ccc2422->enter($__internal_be2381a74e10f9aca278bf376681dc5c9220ed25ae1d445fd3d28ef95ccc2422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_9166294e6b0a980c2ca52e3d3d086ffd3cdecc4096cf90e9150dd15001550957 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9166294e6b0a980c2ca52e3d3d086ffd3cdecc4096cf90e9150dd15001550957->enter($__internal_9166294e6b0a980c2ca52e3d3d086ffd3cdecc4096cf90e9150dd15001550957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 12
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(\"#";
        // line 15
        echo twig_escape_filter($this->env, ($context["filter_id_selector"] ?? $this->getContext($context, "filter_id_selector")), "html", null, true);
        echo "\").select2({
            ";
        // line 16
        if ( !($this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "placeholder", array()) === null)) {
            // line 17
            echo "                placeholder: \"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "placeholder", array()), "html", null, true);
            echo "\",
            ";
        }
        // line 19
        echo "            ";
        if ( !($this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "allowClear", array()) === null)) {
            // line 20
            echo "                allowClear: ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Sg\DatatablesBundle\Twig\DatatableTwigExtension')->boolVar($this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "allowClear", array())), "html", null, true);
            echo ",
            ";
        }
        // line 22
        echo "            ";
        if ( !($this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "tags", array()) === null)) {
            // line 23
            echo "                tags: ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Sg\DatatablesBundle\Twig\DatatableTwigExtension')->boolVar($this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "tags", array())), "html", null, true);
            echo ",
            ";
        }
        // line 25
        echo "            ";
        if ( !($this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "language", array()) === null)) {
            // line 26
            echo "                language: \"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "language", array()), "html", null, true);
            echo "\",
            ";
        } else {
            // line 28
            echo "                language: \"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array()), "html", null, true);
            echo "\",
            ";
        }
        // line 30
        echo "            dropdownAutoWidth : true,
            ";
        // line 31
        if ( !($this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "url", array()) === null)) {
            // line 32
            echo "                ajax: {
                    url: \"";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "url", array()));
            echo "\",
                    dataType: 'json',
                    delay: ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "delay", array()), "html", null, true);
            echo ",
                    cache: ";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Sg\DatatablesBundle\Twig\DatatableTwigExtension')->boolVar($this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "cache", array())), "html", null, true);
            echo ",
                    data: function (params) {
                        return {
                            q: params.term,
                            page: params.page
                        };
                    },
                    processResults: function (data, params) {
                        params.page = params.page || 1;

                        var resultArray = [];
                        for (var id in data) {
                            resultArray.push({
                                id : data[id],
                                text : data[id]
                            });
                        }

                        return {
                            results: resultArray,
                            pagination: {
                                more: (params.page * 30) < data.total_count
                            }
                        };
                    }
                },
            ";
        }
        // line 63
        echo "        });
        ";
        // line 64
        if ($this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", array()), "searchColumn", array())) {
            // line 65
            echo "            \$(\"#";
            echo twig_escape_filter($this->env, ($context["filter_id_selector"] ?? $this->getContext($context, "filter_id_selector")), "html", null, true);
            echo "\").val(\$('#";
            echo twig_escape_filter($this->env, ($context["filter_id_selector"] ?? $this->getContext($context, "filter_id_selector")), "html", null, true);
            echo " option:first-child').val()).trigger('change');
        ";
        }
        // line 67
        echo "    </script>
";
        
        $__internal_9166294e6b0a980c2ca52e3d3d086ffd3cdecc4096cf90e9150dd15001550957->leave($__internal_9166294e6b0a980c2ca52e3d3d086ffd3cdecc4096cf90e9150dd15001550957_prof);

        
        $__internal_be2381a74e10f9aca278bf376681dc5c9220ed25ae1d445fd3d28ef95ccc2422->leave($__internal_be2381a74e10f9aca278bf376681dc5c9220ed25ae1d445fd3d28ef95ccc2422_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:filter:select2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 67,  153 => 65,  151 => 64,  148 => 63,  118 => 36,  114 => 35,  109 => 33,  106 => 32,  104 => 31,  101 => 30,  95 => 28,  89 => 26,  86 => 25,  80 => 23,  77 => 22,  71 => 20,  68 => 19,  62 => 17,  60 => 16,  56 => 15,  49 => 12,  40 => 11,  11 => 9,);
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
{% extends 'SgDatatablesBundle:filter:select.html.twig' %}

{% block javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(\"#{{ filter_id_selector }}\").select2({
            {% if column.filter.placeholder is not same as(null) %}
                placeholder: \"{{ column.filter.placeholder }}\",
            {% endif %}
            {% if column.filter.allowClear is not same as(null) %}
                allowClear: {{ column.filter.allowClear|sg_datatables_bool_var }},
            {% endif %}
            {% if column.filter.tags is not same as(null) %}
                tags: {{ column.filter.tags|sg_datatables_bool_var }},
            {% endif %}
            {% if column.filter.language is not same as(null) %}
                language: \"{{ column.filter.language }}\",
            {% else %}
                language: \"{{ app.request.locale }}\",
            {% endif %}
            dropdownAutoWidth : true,
            {% if column.filter.url is not same as(null) %}
                ajax: {
                    url: \"{{ path(column.filter.url) }}\",
                    dataType: 'json',
                    delay: {{ column.filter.delay }},
                    cache: {{ column.filter.cache|sg_datatables_bool_var }},
                    data: function (params) {
                        return {
                            q: params.term,
                            page: params.page
                        };
                    },
                    processResults: function (data, params) {
                        params.page = params.page || 1;

                        var resultArray = [];
                        for (var id in data) {
                            resultArray.push({
                                id : data[id],
                                text : data[id]
                            });
                        }

                        return {
                            results: resultArray,
                            pagination: {
                                more: (params.page * 30) < data.total_count
                            }
                        };
                    }
                },
            {% endif %}
        });
        {% if column.filter.searchColumn %}
            \$(\"#{{ filter_id_selector }}\").val(\$('#{{ filter_id_selector }} option:first-child').val()).trigger('change');
        {% endif %}
    </script>
{% endblock %}
", "SgDatatablesBundle:filter:select2.html.twig", "C:\\Apache24\\htdocs\\vendor\\sg\\datatablesbundle/Resources/views/filter/select2.html.twig");
    }
}
