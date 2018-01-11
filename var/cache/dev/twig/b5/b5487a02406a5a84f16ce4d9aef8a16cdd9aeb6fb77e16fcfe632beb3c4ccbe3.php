<?php

/* SgDatatablesBundle:column:column.html.twig */
class __TwigTemplate_e0db53e21a7d1879e8f110c3677e3fef9669decdcfbf40ca20dcdca68ac0e765 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'common' => array($this, 'block_common'),
            'title' => array($this, 'block_title'),
            'data' => array($this, 'block_data'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d67469e11c9fc1e53059d199598cf60914fbeaa73f035b889f92a8c34585bacf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d67469e11c9fc1e53059d199598cf60914fbeaa73f035b889f92a8c34585bacf->enter($__internal_d67469e11c9fc1e53059d199598cf60914fbeaa73f035b889f92a8c34585bacf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:column:column.html.twig"));

        $__internal_cde183c93ea59c556f78b64c370705281003b2730f87cdf5d4ba39efd63dbbe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cde183c93ea59c556f78b64c370705281003b2730f87cdf5d4ba39efd63dbbe9->enter($__internal_cde183c93ea59c556f78b64c370705281003b2730f87cdf5d4ba39efd63dbbe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:column:column.html.twig"));

        // line 9
        echo "{
    ";
        // line 10
        $this->displayBlock('common', $context, $blocks);
        // line 60
        echo "
    ";
        // line 61
        $this->displayBlock('data', $context, $blocks);
        // line 64
        echo "},
";
        
        $__internal_d67469e11c9fc1e53059d199598cf60914fbeaa73f035b889f92a8c34585bacf->leave($__internal_d67469e11c9fc1e53059d199598cf60914fbeaa73f035b889f92a8c34585bacf_prof);

        
        $__internal_cde183c93ea59c556f78b64c370705281003b2730f87cdf5d4ba39efd63dbbe9->leave($__internal_cde183c93ea59c556f78b64c370705281003b2730f87cdf5d4ba39efd63dbbe9_prof);

    }

    // line 10
    public function block_common($context, array $blocks = array())
    {
        $__internal_0b81d3e23d0da40cb046535586f3c0eab7f135e2705e6c3fcc900ba3c98ce2c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b81d3e23d0da40cb046535586f3c0eab7f135e2705e6c3fcc900ba3c98ce2c9->enter($__internal_0b81d3e23d0da40cb046535586f3c0eab7f135e2705e6c3fcc900ba3c98ce2c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "common"));

        $__internal_4747cbb8c3ddb68a8090e9bf26a1a9a89bb434b022bb7063a0b9e633a173faf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4747cbb8c3ddb68a8090e9bf26a1a9a89bb434b022bb7063a0b9e633a173faf4->enter($__internal_4747cbb8c3ddb68a8090e9bf26a1a9a89bb434b022bb7063a0b9e633a173faf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "common"));

        // line 11
        echo "        ";
        if ( !($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "cellType", array()) === null)) {
            // line 12
            echo "            \"cellType\": \"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "cellType", array()), "html", null, true);
            echo "\",
        ";
        }
        // line 14
        echo "        ";
        if ( !($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "contentPadding", array()) === null)) {
            // line 15
            echo "            \"contentPadding\": \"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "contentPadding", array()), "html", null, true);
            echo "\",
        ";
        }
        // line 17
        echo "        ";
        if ( !($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "defaultContent", array()) === null)) {
            // line 18
            echo "            \"defaultContent\": \"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "defaultContent", array()), "html", null, true);
            echo "\",
        ";
        }
        // line 20
        echo "        ";
        if ( !($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "name", array()) === null)) {
            // line 21
            echo "            \"name\": \"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "name", array()), "html", null, true);
            echo "\",
        ";
        }
        // line 23
        echo "        ";
        if ( !($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "width", array()) === null)) {
            // line 24
            echo "            \"width\": \"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "width", array()), "html", null, true);
            echo "\",
        ";
        }
        // line 26
        echo "        ";
        $this->displayBlock('title', $context, $blocks);
        // line 31
        echo "        ";
        if ((($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "searchable", array()) === true) || ($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "searchable", array()) === false))) {
            // line 32
            echo "            \"searchable\": ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Sg\DatatablesBundle\Twig\DatatableTwigExtension')->boolVar($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "searchable", array())), "html", null, true);
            echo ",
        ";
        }
        // line 34
        echo "        ";
        if (($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "visible", array()) === true)) {
            // line 35
            echo "            \"visible\": true,
            ";
            // line 36
            if ( !($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "className", array()) === null)) {
                // line 37
                echo "                \"className\": \"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "className", array()), "html", null, true);
                echo "\",
            ";
            }
            // line 39
            echo "        ";
        }
        // line 40
        echo "        ";
        if (($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "visible", array()) === false)) {
            // line 41
            echo "            \"visible\": false,
            \"className\": \"never ";
            // line 42
            if ( !($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "className", array()) === null)) {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "className", array()), "html", null, true);
            }
            echo "\",
        ";
        }
        // line 44
        echo "        ";
        if (($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "orderable", array()) === true)) {
            // line 45
            echo "            \"orderable\": true,
            ";
            // line 46
            if ( !($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "orderSequence", array()) === null)) {
                // line 47
                echo "                \"orderSequence\": ";
                echo $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "orderSequence", array());
                echo ",
            ";
            }
            // line 49
            echo "            ";
            if ( !($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "orderData", array()) === null)) {
                // line 50
                echo "                \"orderData\": ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "orderData", array()), "html", null, true);
                echo ",
            ";
            }
            // line 52
            echo "        ";
        }
        // line 53
        echo "        ";
        if (($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "orderable", array()) === false)) {
            // line 54
            echo "            \"orderable\": false,
        ";
        }
        // line 56
        echo "        ";
        if ( !($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "responsivePriority", array()) === null)) {
            // line 57
            echo "            \"responsivePriority\": ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "responsivePriority", array()), "html", null, true);
            echo ",
        ";
        }
        // line 59
        echo "    ";
        
        $__internal_4747cbb8c3ddb68a8090e9bf26a1a9a89bb434b022bb7063a0b9e633a173faf4->leave($__internal_4747cbb8c3ddb68a8090e9bf26a1a9a89bb434b022bb7063a0b9e633a173faf4_prof);

        
        $__internal_0b81d3e23d0da40cb046535586f3c0eab7f135e2705e6c3fcc900ba3c98ce2c9->leave($__internal_0b81d3e23d0da40cb046535586f3c0eab7f135e2705e6c3fcc900ba3c98ce2c9_prof);

    }

    // line 26
    public function block_title($context, array $blocks = array())
    {
        $__internal_c3ae028bf51535f4ba209a719c9bde07199c38c7f2a0f8ea7455672100791d78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3ae028bf51535f4ba209a719c9bde07199c38c7f2a0f8ea7455672100791d78->enter($__internal_c3ae028bf51535f4ba209a719c9bde07199c38c7f2a0f8ea7455672100791d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ede35b53856af6bd5b1d850980fcbb2f2c7821de9fcff9d9949ba6bfeea36928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ede35b53856af6bd5b1d850980fcbb2f2c7821de9fcff9d9949ba6bfeea36928->enter($__internal_ede35b53856af6bd5b1d850980fcbb2f2c7821de9fcff9d9949ba6bfeea36928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 27
        echo "            ";
        if ( !($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "title", array()) === null)) {
            // line 28
            echo "                \"title\": \"";
            echo $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "title", array());
            echo "\",
            ";
        }
        // line 30
        echo "        ";
        
        $__internal_ede35b53856af6bd5b1d850980fcbb2f2c7821de9fcff9d9949ba6bfeea36928->leave($__internal_ede35b53856af6bd5b1d850980fcbb2f2c7821de9fcff9d9949ba6bfeea36928_prof);

        
        $__internal_c3ae028bf51535f4ba209a719c9bde07199c38c7f2a0f8ea7455672100791d78->leave($__internal_c3ae028bf51535f4ba209a719c9bde07199c38c7f2a0f8ea7455672100791d78_prof);

    }

    // line 61
    public function block_data($context, array $blocks = array())
    {
        $__internal_b254b3d4a2526f47c57d118c75523f474f5083fe07d97be2545f48fe21df3ae0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b254b3d4a2526f47c57d118c75523f474f5083fe07d97be2545f48fe21df3ae0->enter($__internal_b254b3d4a2526f47c57d118c75523f474f5083fe07d97be2545f48fe21df3ae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        $__internal_30c9ee1af8c188b9a69667e3255a48d3d64b714b66ef2ee466dcae8a486358cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30c9ee1af8c188b9a69667e3255a48d3d64b714b66ef2ee466dcae8a486358cd->enter($__internal_30c9ee1af8c188b9a69667e3255a48d3d64b714b66ef2ee466dcae8a486358cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        // line 62
        echo "        \"data\": \"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "data", array()), "html", null, true);
        echo "\",
    ";
        
        $__internal_30c9ee1af8c188b9a69667e3255a48d3d64b714b66ef2ee466dcae8a486358cd->leave($__internal_30c9ee1af8c188b9a69667e3255a48d3d64b714b66ef2ee466dcae8a486358cd_prof);

        
        $__internal_b254b3d4a2526f47c57d118c75523f474f5083fe07d97be2545f48fe21df3ae0->leave($__internal_b254b3d4a2526f47c57d118c75523f474f5083fe07d97be2545f48fe21df3ae0_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:column:column.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  234 => 62,  225 => 61,  215 => 30,  209 => 28,  206 => 27,  197 => 26,  187 => 59,  181 => 57,  178 => 56,  174 => 54,  171 => 53,  168 => 52,  162 => 50,  159 => 49,  153 => 47,  151 => 46,  148 => 45,  145 => 44,  138 => 42,  135 => 41,  132 => 40,  129 => 39,  123 => 37,  121 => 36,  118 => 35,  115 => 34,  109 => 32,  106 => 31,  103 => 26,  97 => 24,  94 => 23,  88 => 21,  85 => 20,  79 => 18,  76 => 17,  70 => 15,  67 => 14,  61 => 12,  58 => 11,  49 => 10,  38 => 64,  36 => 61,  33 => 60,  31 => 10,  28 => 9,);
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
{
    {% block common %}
        {% if column.cellType is not same as(null) %}
            \"cellType\": \"{{ column.cellType }}\",
        {% endif %}
        {% if column.contentPadding is not same as(null) %}
            \"contentPadding\": \"{{ column.contentPadding }}\",
        {% endif %}
        {% if column.defaultContent is not same as(null) %}
            \"defaultContent\": \"{{ column.defaultContent }}\",
        {% endif %}
        {% if column.name is not same as(null) %}
            \"name\": \"{{ column.name }}\",
        {% endif %}
        {% if column.width is not same as(null) %}
            \"width\": \"{{ column.width }}\",
        {% endif %}
        {% block title %}
            {% if column.title is not same as(null) %}
                \"title\": \"{{ column.title|raw }}\",
            {% endif %}
        {% endblock %}
        {% if column.searchable is same as(true) or column.searchable is same as(false) %}
            \"searchable\": {{ column.searchable|sg_datatables_bool_var }},
        {% endif %}
        {% if column.visible is same as(true) %}
            \"visible\": true,
            {% if column.className is not same as(null) %}
                \"className\": \"{{ column.className }}\",
            {% endif %}
        {% endif %}
        {% if column.visible is same as(false) %}
            \"visible\": false,
            \"className\": \"never {% if column.className is not same as(null) %}{{ column.className }}{% endif %}\",
        {% endif %}
        {% if column.orderable is same as(true) %}
            \"orderable\": true,
            {% if column.orderSequence is not same as(null) %}
                \"orderSequence\": {{ column.orderSequence|raw }},
            {% endif %}
            {% if column.orderData is not same as(null) %}
                \"orderData\": {{ column.orderData }},
            {% endif %}
        {% endif %}
        {% if column.orderable is same as(false) %}
            \"orderable\": false,
        {% endif %}
        {% if column.responsivePriority is not same as(null) %}
            \"responsivePriority\": {{ column.responsivePriority }},
        {% endif %}
    {% endblock %}

    {% block data %}
        \"data\": \"{{ column.data }}\",
    {% endblock %}
},
", "SgDatatablesBundle:column:column.html.twig", "C:\\Apache24\\htdocs\\vendor\\sg\\datatablesbundle/Resources/views/column/column.html.twig");
    }
}
