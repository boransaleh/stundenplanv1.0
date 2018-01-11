<?php

/* :default:list.html.twig */
class __TwigTemplate_7f47cfb65e840b41c9adb2068099533b999c8a895db28ef73f71a4a7cec5a373 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", ":default:list.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_183c0bf5b77f59ff591b56b9b0a43527c31a086618da27debf8801b572620ec1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_183c0bf5b77f59ff591b56b9b0a43527c31a086618da27debf8801b572620ec1->enter($__internal_183c0bf5b77f59ff591b56b9b0a43527c31a086618da27debf8801b572620ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:list.html.twig"));

        $__internal_f66acbb23ff9913c82cc1de60f6fdd19c0e3e477547e6d812a70b5741e77b8d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f66acbb23ff9913c82cc1de60f6fdd19c0e3e477547e6d812a70b5741e77b8d3->enter($__internal_f66acbb23ff9913c82cc1de60f6fdd19c0e3e477547e6d812a70b5741e77b8d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_183c0bf5b77f59ff591b56b9b0a43527c31a086618da27debf8801b572620ec1->leave($__internal_183c0bf5b77f59ff591b56b9b0a43527c31a086618da27debf8801b572620ec1_prof);

        
        $__internal_f66acbb23ff9913c82cc1de60f6fdd19c0e3e477547e6d812a70b5741e77b8d3->leave($__internal_f66acbb23ff9913c82cc1de60f6fdd19c0e3e477547e6d812a70b5741e77b8d3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9894b02727722c608d853a1dc266f37968c6bb6f3ffc53076c99bc47a69622f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9894b02727722c608d853a1dc266f37968c6bb6f3ffc53076c99bc47a69622f->enter($__internal_c9894b02727722c608d853a1dc266f37968c6bb6f3ffc53076c99bc47a69622f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cd76c1b3e503ae81dd03ca5facfd69e3840f46eb8eaefa452b24c28631db27cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd76c1b3e503ae81dd03ca5facfd69e3840f46eb8eaefa452b24c28631db27cc->enter($__internal_cd76c1b3e503ae81dd03ca5facfd69e3840f46eb8eaefa452b24c28631db27cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2>List</h2>
    ";
        // line 5
        echo $this->env->getExtension('Sg\DatatablesBundle\Twig\DatatableTwigExtension')->datatablesRender($this->env, ($context["datatable"] ?? $this->getContext($context, "datatable")));
        echo "
";
        
        $__internal_cd76c1b3e503ae81dd03ca5facfd69e3840f46eb8eaefa452b24c28631db27cc->leave($__internal_cd76c1b3e503ae81dd03ca5facfd69e3840f46eb8eaefa452b24c28631db27cc_prof);

        
        $__internal_c9894b02727722c608d853a1dc266f37968c6bb6f3ffc53076c99bc47a69622f->leave($__internal_c9894b02727722c608d853a1dc266f37968c6bb6f3ffc53076c99bc47a69622f_prof);

    }

    public function getTemplateName()
    {
        return ":default:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% block body %}
    <h2>List</h2>
    {{ sg_datatables_render(datatable) }}
{% endblock %}", ":default:list.html.twig", "C:\\Apache24\\htdocs\\app/Resources\\views/default/list.html.twig");
    }
}
