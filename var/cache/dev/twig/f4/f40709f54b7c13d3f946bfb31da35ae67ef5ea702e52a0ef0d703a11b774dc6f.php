<?php

/* SgDatatablesBundle:skeleton:datatable.php.twig */
class __TwigTemplate_c6f7c370ab6923e9a9644417268cf1861e9b85d0bfabfab3e60e30a9b08b9768 extends Twig_Template
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
        $__internal_b1aab1a01751ff4fc70fb37f1354cbed0d814a8c8f16d79ae5f9f9d6a5141c6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1aab1a01751ff4fc70fb37f1354cbed0d814a8c8f16d79ae5f9f9d6a5141c6c->enter($__internal_b1aab1a01751ff4fc70fb37f1354cbed0d814a8c8f16d79ae5f9f9d6a5141c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:skeleton:datatable.php.twig"));

        $__internal_b50e675b3db16dd7a32a558d017ba286757248caa349de845357dca90094e3a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b50e675b3db16dd7a32a558d017ba286757248caa349de845357dca90094e3a6->enter($__internal_b50e675b3db16dd7a32a558d017ba286757248caa349de845357dca90094e3a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SgDatatablesBundle:skeleton:datatable.php.twig"));

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
        
        $__internal_b1aab1a01751ff4fc70fb37f1354cbed0d814a8c8f16d79ae5f9f9d6a5141c6c->leave($__internal_b1aab1a01751ff4fc70fb37f1354cbed0d814a8c8f16d79ae5f9f9d6a5141c6c_prof);

        
        $__internal_b50e675b3db16dd7a32a558d017ba286757248caa349de845357dca90094e3a6->leave($__internal_b50e675b3db16dd7a32a558d017ba286757248caa349de845357dca90094e3a6_prof);

    }

    // line 5
    public function block_use_statements($context, array $blocks = array())
    {
        $__internal_cec50e69cd9d59a166529e0cb8b5fe60c41ad85878a5957561168dd7fed5f74f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cec50e69cd9d59a166529e0cb8b5fe60c41ad85878a5957561168dd7fed5f74f->enter($__internal_cec50e69cd9d59a166529e0cb8b5fe60c41ad85878a5957561168dd7fed5f74f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "use_statements"));

        $__internal_71634351d5b0ee777985f494811c44e6db57402b0d53380d9cbac56ab8d4b269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71634351d5b0ee777985f494811c44e6db57402b0d53380d9cbac56ab8d4b269->enter($__internal_71634351d5b0ee777985f494811c44e6db57402b0d53380d9cbac56ab8d4b269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "use_statements"));

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
        
        $__internal_71634351d5b0ee777985f494811c44e6db57402b0d53380d9cbac56ab8d4b269->leave($__internal_71634351d5b0ee777985f494811c44e6db57402b0d53380d9cbac56ab8d4b269_prof);

        
        $__internal_cec50e69cd9d59a166529e0cb8b5fe60c41ad85878a5957561168dd7fed5f74f->leave($__internal_cec50e69cd9d59a166529e0cb8b5fe60c41ad85878a5957561168dd7fed5f74f_prof);

    }

    // line 25
    public function block_class_definition($context, array $blocks = array())
    {
        $__internal_968f18825df47cead422b3f473c3f7303d8e35b16ace1db48cce9eb81e80dfd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_968f18825df47cead422b3f473c3f7303d8e35b16ace1db48cce9eb81e80dfd8->enter($__internal_968f18825df47cead422b3f473c3f7303d8e35b16ace1db48cce9eb81e80dfd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "class_definition"));

        $__internal_aec5dbb22c58bb3988440c907eb9fca75711bac6c090227c7c263e942b66a11d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aec5dbb22c58bb3988440c907eb9fca75711bac6c090227c7c263e942b66a11d->enter($__internal_aec5dbb22c58bb3988440c907eb9fca75711bac6c090227c7c263e942b66a11d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "class_definition"));

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
        
        $__internal_aec5dbb22c58bb3988440c907eb9fca75711bac6c090227c7c263e942b66a11d->leave($__internal_aec5dbb22c58bb3988440c907eb9fca75711bac6c090227c7c263e942b66a11d_prof);

        
        $__internal_968f18825df47cead422b3f473c3f7303d8e35b16ace1db48cce9eb81e80dfd8->leave($__internal_968f18825df47cead422b3f473c3f7303d8e35b16ace1db48cce9eb81e80dfd8_prof);

    }

    // line 34
    public function block_class_body($context, array $blocks = array())
    {
        $__internal_452d04eee445d7d1f89919ef582ea5c634aefda512514f382563a5fad5674d90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_452d04eee445d7d1f89919ef582ea5c634aefda512514f382563a5fad5674d90->enter($__internal_452d04eee445d7d1f89919ef582ea5c634aefda512514f382563a5fad5674d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "class_body"));

        $__internal_8994f394fcb689eaec9b94e4abd899930e4447f769f4048b227be4cf3c12aa71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8994f394fcb689eaec9b94e4abd899930e4447f769f4048b227be4cf3c12aa71->enter($__internal_8994f394fcb689eaec9b94e4abd899930e4447f769f4048b227be4cf3c12aa71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "class_body"));

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
        
        $__internal_8994f394fcb689eaec9b94e4abd899930e4447f769f4048b227be4cf3c12aa71->leave($__internal_8994f394fcb689eaec9b94e4abd899930e4447f769f4048b227be4cf3c12aa71_prof);

        
        $__internal_452d04eee445d7d1f89919ef582ea5c634aefda512514f382563a5fad5674d90->leave($__internal_452d04eee445d7d1f89919ef582ea5c634aefda512514f382563a5fad5674d90_prof);

    }

    public function getTemplateName()
    {
        return "SgDatatablesBundle:skeleton:datatable.php.twig";
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
", "SgDatatablesBundle:skeleton:datatable.php.twig", "C:\\Apache24\\htdocs\\vendor\\sg\\datatablesbundle/Resources/views/skeleton/datatable.php.twig");
    }
}
