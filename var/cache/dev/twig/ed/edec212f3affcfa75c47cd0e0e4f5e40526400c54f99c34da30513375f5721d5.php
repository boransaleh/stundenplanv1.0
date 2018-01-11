<?php

/* @SgDatatables/skeleton/datatable.php.twig */
class __TwigTemplate_2328827369bf4fb0b215fc32234063be0395e79a6b1001111d9bad6b2aa66654 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'use_statements' => array($this, 'block_use_statements'),
            'class_definition' => array($this, 'block_class_definition'),
            'class_body' => array($this, 'block_class_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7cc2cef5f892966aaa7bd6400bf3426adfd4a773e8b03035a3a62419f6d1e372 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cc2cef5f892966aaa7bd6400bf3426adfd4a773e8b03035a3a62419f6d1e372->enter($__internal_7cc2cef5f892966aaa7bd6400bf3426adfd4a773e8b03035a3a62419f6d1e372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/skeleton/datatable.php.twig"));

        $__internal_0792b8f224d5ef7f63ecf6b1d2aafa8c91645bdd84c7f264a5e99d9d2f1cc0f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0792b8f224d5ef7f63ecf6b1d2aafa8c91645bdd84c7f264a5e99d9d2f1cc0f0->enter($__internal_0792b8f224d5ef7f63ecf6b1d2aafa8c91645bdd84c7f264a5e99d9d2f1cc0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/skeleton/datatable.php.twig"));

        // line 1
        echo "<?php

namespace ";
        // line 3
        echo twig_escape_filter($this->env, ($context["namespace"] ?? $this->getContext($context, "namespace")), "html", null, true);
        echo "\\Datatables;

";
        // line 5
        $this->displayBlock('use_statements', $context, $blocks);
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('class_definition', $context, $blocks);
        // line 33
        echo "{
";
        // line 34
        $this->displayBlock('class_body', $context, $blocks);
        // line 118
        echo "}
";
        
        $__internal_7cc2cef5f892966aaa7bd6400bf3426adfd4a773e8b03035a3a62419f6d1e372->leave($__internal_7cc2cef5f892966aaa7bd6400bf3426adfd4a773e8b03035a3a62419f6d1e372_prof);

        
        $__internal_0792b8f224d5ef7f63ecf6b1d2aafa8c91645bdd84c7f264a5e99d9d2f1cc0f0->leave($__internal_0792b8f224d5ef7f63ecf6b1d2aafa8c91645bdd84c7f264a5e99d9d2f1cc0f0_prof);

    }

    // line 5
    public function block_use_statements($context, array $blocks = array())
    {
        $__internal_b3cedf9ac438124fd95a608ba6df95debd1c185d025f39bfadcb3be0dbfabcdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3cedf9ac438124fd95a608ba6df95debd1c185d025f39bfadcb3be0dbfabcdd->enter($__internal_b3cedf9ac438124fd95a608ba6df95debd1c185d025f39bfadcb3be0dbfabcdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "use_statements"));

        $__internal_06d625be929523326b8eb097103be01195ef9a597fc49f32159c0c7c3bfdbc4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06d625be929523326b8eb097103be01195ef9a597fc49f32159c0c7c3bfdbc4e->enter($__internal_06d625be929523326b8eb097103be01195ef9a597fc49f32159c0c7c3bfdbc4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "use_statements"));

        // line 6
        echo "use Sg\\DatatablesBundle\\Datatable\\AbstractDatatable;
use Sg\\DatatablesBundle\\Datatable\\Style;
use Sg\\DatatablesBundle\\Datatable\\Column\\Column;
use Sg\\DatatablesBundle\\Datatable\\Column\\BooleanColumn;
use Sg\\DatatablesBundle\\Datatable\\Column\\ActionColumn;
use Sg\\DatatablesBundle\\Datatable\\Column\\MultiselectColumn;
use Sg\\DatatablesBundle\\Datatable\\Column\\VirtualColumn;
use Sg\\DatatablesBundle\\Datatable\\Column\\DateTimeColumn;
use Sg\\DatatablesBundle\\Datatable\\Column\\ImageColumn;
use Sg\\DatatablesBundle\\Datatable\\Filter\\TextFilter;
use Sg\\DatatablesBundle\\Datatable\\Filter\\NumberFilter;
use Sg\\DatatablesBundle\\Datatable\\Filter\\SelectFilter;
use Sg\\DatatablesBundle\\Datatable\\Filter\\DateRangeFilter;
use Sg\\DatatablesBundle\\Datatable\\Editable\\CombodateEditable;
use Sg\\DatatablesBundle\\Datatable\\Editable\\SelectEditable;
use Sg\\DatatablesBundle\\Datatable\\Editable\\TextareaEditable;
use Sg\\DatatablesBundle\\Datatable\\Editable\\TextEditable;
";
        
        $__internal_06d625be929523326b8eb097103be01195ef9a597fc49f32159c0c7c3bfdbc4e->leave($__internal_06d625be929523326b8eb097103be01195ef9a597fc49f32159c0c7c3bfdbc4e_prof);

        
        $__internal_b3cedf9ac438124fd95a608ba6df95debd1c185d025f39bfadcb3be0dbfabcdd->leave($__internal_b3cedf9ac438124fd95a608ba6df95debd1c185d025f39bfadcb3be0dbfabcdd_prof);

    }

    // line 25
    public function block_class_definition($context, array $blocks = array())
    {
        $__internal_e16b3150ef9bdf314109e2f9253a614b339a92df264cdebad972a891407764d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e16b3150ef9bdf314109e2f9253a614b339a92df264cdebad972a891407764d6->enter($__internal_e16b3150ef9bdf314109e2f9253a614b339a92df264cdebad972a891407764d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "class_definition"));

        $__internal_b8c51506b4bb57f392d3b92d1c2d530aab343454677fa69d45bf2f21bac4007c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8c51506b4bb57f392d3b92d1c2d530aab343454677fa69d45bf2f21bac4007c->enter($__internal_b8c51506b4bb57f392d3b92d1c2d530aab343454677fa69d45bf2f21bac4007c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "class_definition"));

        // line 26
        echo "/**
 * Class ";
        // line 27
        echo twig_escape_filter($this->env, ($context["datatable_class"] ?? $this->getContext($context, "datatable_class")), "html", null, true);
        echo "
 *
 * @package ";
        // line 29
        echo twig_escape_filter($this->env, ($context["namespace"] ?? $this->getContext($context, "namespace")), "html", null, true);
        echo "\\Datatables
 */
class ";
        // line 31
        echo twig_escape_filter($this->env, ($context["datatable_class"] ?? $this->getContext($context, "datatable_class")), "html", null, true);
        echo " extends AbstractDatatable
";
        
        $__internal_b8c51506b4bb57f392d3b92d1c2d530aab343454677fa69d45bf2f21bac4007c->leave($__internal_b8c51506b4bb57f392d3b92d1c2d530aab343454677fa69d45bf2f21bac4007c_prof);

        
        $__internal_e16b3150ef9bdf314109e2f9253a614b339a92df264cdebad972a891407764d6->leave($__internal_e16b3150ef9bdf314109e2f9253a614b339a92df264cdebad972a891407764d6_prof);

    }

    // line 34
    public function block_class_body($context, array $blocks = array())
    {
        $__internal_1c9b09bf0ee4c78119eab1d3893184d071b8df8b086c602ffae2a608549b1a50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c9b09bf0ee4c78119eab1d3893184d071b8df8b086c602ffae2a608549b1a50->enter($__internal_1c9b09bf0ee4c78119eab1d3893184d071b8df8b086c602ffae2a608549b1a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "class_body"));

        $__internal_97f1b09c121443e51e987f2cb07ce82018d81e31f57e84844ea8fb56f3af8cee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97f1b09c121443e51e987f2cb07ce82018d81e31f57e84844ea8fb56f3af8cee->enter($__internal_97f1b09c121443e51e987f2cb07ce82018d81e31f57e84844ea8fb56f3af8cee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "class_body"));

        // line 35
        echo "    /**
     * {@inheritdoc}
     */
    public function buildDatatable(array \$options = array())
    {
        \$this->language->set(array(
            'cdn_language_by_locale' => true
            //'language' => 'de'
        ));

        \$this->ajax->set(array(
        ));

        \$this->options->set(array(
            'individual_filtering' => true,
            'individual_filtering_position' => 'head',
            'order_cells_top' => true,
        ));

        \$this->features->set(array(
        ));

        \$this->columnBuilder
            ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? $this->getContext($context, "fields")));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 59
            echo "->add('";
            echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "property", array()), "html", null, true);
            echo "', ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "column_type", array()), "html", null, true);
            echo ", array(
                'title' => '";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "title", array()), "html", null, true);
            echo "',
                ";
            // line 61
            if ( !(null === $this->getAttribute($context["field"], "data", array()))) {
                // line 62
                echo "'data' => '";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "data", array()), "html", null, true);
                echo "'
                ";
            }
            // line 64
            echo "))
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "->add(null, ActionColumn::class, array(
                'title' => \$this->translator->trans('sg.datatables.actions.title'),
                'actions' => array(
                    array(
                        'route' => '";
        // line 70
        echo twig_escape_filter($this->env, ($context["route_pref"] ?? $this->getContext($context, "route_pref")), "html", null, true);
        echo "_show',
                        'route_parameters' => array(
                            'id' => 'id'
                        ),
                        'label' => \$this->translator->trans('sg.datatables.actions.show'),
                        'icon' => 'glyphicon glyphicon-eye-open',
                        'attributes' => array(
                            'rel' => 'tooltip',
                            'title' => \$this->translator->trans('sg.datatables.actions.show'),
                            'class' => 'btn btn-primary btn-xs',
                            'role' => 'button'
                        ),
                    ),
                    array(
                        'route' => '";
        // line 84
        echo twig_escape_filter($this->env, ($context["route_pref"] ?? $this->getContext($context, "route_pref")), "html", null, true);
        echo "_edit',
                        'route_parameters' => array(
                            'id' => 'id'
                        ),
                        'label' => \$this->translator->trans('sg.datatables.actions.edit'),
                        'icon' => 'glyphicon glyphicon-edit',
                        'attributes' => array(
                            'rel' => 'tooltip',
                            'title' => \$this->translator->trans('sg.datatables.actions.edit'),
                            'class' => 'btn btn-primary btn-xs',
                            'role' => 'button'
                        ),
                    )
                )
            ))
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function getEntity()
    {
        return '";
        // line 107
        echo twig_escape_filter($this->env, ($context["namespace"] ?? $this->getContext($context, "namespace")), "html", null, true);
        echo "\\Entity";
        echo twig_escape_filter($this->env, ((($context["entity_namespace"] ?? $this->getContext($context, "entity_namespace"))) ? (("\\" . ($context["entity_namespace"] ?? $this->getContext($context, "entity_namespace")))) : ("")), "html", null, true);
        echo "\\";
        echo twig_escape_filter($this->env, ($context["entity_class"] ?? $this->getContext($context, "entity_class")), "html", null, true);
        echo "';
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return '";
        // line 115
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? $this->getContext($context, "datatable_name")), "html", null, true);
        echo "';
    }
";
        
        $__internal_97f1b09c121443e51e987f2cb07ce82018d81e31f57e84844ea8fb56f3af8cee->leave($__internal_97f1b09c121443e51e987f2cb07ce82018d81e31f57e84844ea8fb56f3af8cee_prof);

        
        $__internal_1c9b09bf0ee4c78119eab1d3893184d071b8df8b086c602ffae2a608549b1a50->leave($__internal_1c9b09bf0ee4c78119eab1d3893184d071b8df8b086c602ffae2a608549b1a50_prof);

    }

    public function getTemplateName()
    {
        return "@SgDatatables/skeleton/datatable.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 115,  243 => 107,  217 => 84,  200 => 70,  194 => 66,  187 => 64,  181 => 62,  179 => 61,  175 => 60,  168 => 59,  164 => 58,  139 => 35,  130 => 34,  118 => 31,  113 => 29,  108 => 27,  105 => 26,  96 => 25,  69 => 6,  60 => 5,  49 => 118,  47 => 34,  44 => 33,  42 => 25,  39 => 24,  37 => 5,  32 => 3,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php

namespace {{ namespace }}\\Datatables;

{% block use_statements %}
use Sg\\DatatablesBundle\\Datatable\\AbstractDatatable;
use Sg\\DatatablesBundle\\Datatable\\Style;
use Sg\\DatatablesBundle\\Datatable\\Column\\Column;
use Sg\\DatatablesBundle\\Datatable\\Column\\BooleanColumn;
use Sg\\DatatablesBundle\\Datatable\\Column\\ActionColumn;
use Sg\\DatatablesBundle\\Datatable\\Column\\MultiselectColumn;
use Sg\\DatatablesBundle\\Datatable\\Column\\VirtualColumn;
use Sg\\DatatablesBundle\\Datatable\\Column\\DateTimeColumn;
use Sg\\DatatablesBundle\\Datatable\\Column\\ImageColumn;
use Sg\\DatatablesBundle\\Datatable\\Filter\\TextFilter;
use Sg\\DatatablesBundle\\Datatable\\Filter\\NumberFilter;
use Sg\\DatatablesBundle\\Datatable\\Filter\\SelectFilter;
use Sg\\DatatablesBundle\\Datatable\\Filter\\DateRangeFilter;
use Sg\\DatatablesBundle\\Datatable\\Editable\\CombodateEditable;
use Sg\\DatatablesBundle\\Datatable\\Editable\\SelectEditable;
use Sg\\DatatablesBundle\\Datatable\\Editable\\TextareaEditable;
use Sg\\DatatablesBundle\\Datatable\\Editable\\TextEditable;
{% endblock use_statements %}

{% block class_definition %}
/**
 * Class {{ datatable_class }}
 *
 * @package {{ namespace }}\\Datatables
 */
class {{ datatable_class }} extends AbstractDatatable
{% endblock class_definition %}
{
{% block class_body %}
    /**
     * {@inheritdoc}
     */
    public function buildDatatable(array \$options = array())
    {
        \$this->language->set(array(
            'cdn_language_by_locale' => true
            //'language' => 'de'
        ));

        \$this->ajax->set(array(
        ));

        \$this->options->set(array(
            'individual_filtering' => true,
            'individual_filtering_position' => 'head',
            'order_cells_top' => true,
        ));

        \$this->features->set(array(
        ));

        \$this->columnBuilder
            {% for field in fields -%}
            ->add('{{ field.property }}', {{ field.column_type }}, array(
                'title' => '{{ field.title }}',
                {% if field.data is not null -%}
                    'data' => '{{ field.data }}'
                {% endif -%}
                ))
            {% endfor -%}
            ->add(null, ActionColumn::class, array(
                'title' => \$this->translator->trans('sg.datatables.actions.title'),
                'actions' => array(
                    array(
                        'route' => '{{ route_pref }}_show',
                        'route_parameters' => array(
                            'id' => 'id'
                        ),
                        'label' => \$this->translator->trans('sg.datatables.actions.show'),
                        'icon' => 'glyphicon glyphicon-eye-open',
                        'attributes' => array(
                            'rel' => 'tooltip',
                            'title' => \$this->translator->trans('sg.datatables.actions.show'),
                            'class' => 'btn btn-primary btn-xs',
                            'role' => 'button'
                        ),
                    ),
                    array(
                        'route' => '{{ route_pref }}_edit',
                        'route_parameters' => array(
                            'id' => 'id'
                        ),
                        'label' => \$this->translator->trans('sg.datatables.actions.edit'),
                        'icon' => 'glyphicon glyphicon-edit',
                        'attributes' => array(
                            'rel' => 'tooltip',
                            'title' => \$this->translator->trans('sg.datatables.actions.edit'),
                            'class' => 'btn btn-primary btn-xs',
                            'role' => 'button'
                        ),
                    )
                )
            ))
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function getEntity()
    {
        return '{{ namespace }}\\Entity{{ entity_namespace ? '\\\\' ~ entity_namespace : '' }}\\{{ entity_class }}';
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return '{{ datatable_name }}';
    }
{% endblock class_body %}
}
", "@SgDatatables/skeleton/datatable.php.twig", "C:\\Apache24\\htdocs\\vendor\\sg\\datatablesbundle\\Resources\\views\\skeleton\\datatable.php.twig");
    }
}
