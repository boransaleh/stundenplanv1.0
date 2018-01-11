<?php

/* SgDatatablesBundle:datatable:columns.html.twig */
class __TwigTemplate_7823e2f6a7f2a8fd7d300c3989741c70e48c8e2b4c59d012e383699877016eae extends Twig_Template
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
        $__internal_39b12be89d9b04f0d12e155b28ccae0c9db7ec280c4e0be50c2c75a89840c808 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39b12be89d9b04f0d12e155b28ccae0c9db7ec280c4e0be50c2c75a89840c808->enter($__internal_39b12be89d9b04f0d12e155b28ccae0c9db7ec280c4e0be50c2c75a89840c808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:datatable:columns.html.twig"));

        $__internal_a2840e48fc16a90d4e092be2279215f8cf8f76d057e304236f8d7f54a28895b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2840e48fc16a90d4e092be2279215f8cf8f76d057e304236f8d7f54a28895b0->enter($__internal_a2840e48fc16a90d4e092be2279215f8cf8f76d057e304236f8d7f54a28895b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:datatable:columns.html.twig"));

        // line 9
        echo "\"columns\": [
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["sg_datatables_view"] ?? $this->getContext($context, "sg_datatables_view")), "columnBuilder", array()), "columns", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 11
            echo "        ";
            $this->loadTemplate($this->getAttribute($context["column"], "getOptionsTemplate", array()), "SgDatatablesBundle:datatable:columns.html.twig", 11)->display($context);
            // line 12
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "]
";
        
        $__internal_39b12be89d9b04f0d12e155b28ccae0c9db7ec280c4e0be50c2c75a89840c808->leave($__internal_39b12be89d9b04f0d12e155b28ccae0c9db7ec280c4e0be50c2c75a89840c808_prof);

        
        $__internal_a2840e48fc16a90d4e092be2279215f8cf8f76d057e304236f8d7f54a28895b0->leave($__internal_a2840e48fc16a90d4e092be2279215f8cf8f76d057e304236f8d7f54a28895b0_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:datatable:columns.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 13,  48 => 12,  45 => 11,  28 => 10,  25 => 9,);
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
\"columns\": [
    {% for column in sg_datatables_view.columnBuilder.columns %}
        {% include column.getOptionsTemplate %}
    {% endfor %}
]
", "SgDatatablesBundle:datatable:columns.html.twig", "C:\\Apache24\\htdocs\\vendor\\sg\\datatablesbundle/Resources/views/datatable/columns.html.twig");
    }
}
