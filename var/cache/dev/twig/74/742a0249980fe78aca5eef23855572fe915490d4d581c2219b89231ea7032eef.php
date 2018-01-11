<?php

/* default/list.html.twig */
class __TwigTemplate_d2dc714a46d58c0ddfbd00fbd29ff9a8ea3441986f2fcc852416694dc20ce4e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "default/list.html.twig", 1);
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
        $__internal_fb5f154bcaba607a72ef77c29cc7af0385c8066b3b0693ca118ca0f06957e6d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb5f154bcaba607a72ef77c29cc7af0385c8066b3b0693ca118ca0f06957e6d4->enter($__internal_fb5f154bcaba607a72ef77c29cc7af0385c8066b3b0693ca118ca0f06957e6d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/list.html.twig"));

        $__internal_9f268069f3608e160cf5c35efb572d4fb85cbe494709752746827656be703332 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f268069f3608e160cf5c35efb572d4fb85cbe494709752746827656be703332->enter($__internal_9f268069f3608e160cf5c35efb572d4fb85cbe494709752746827656be703332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb5f154bcaba607a72ef77c29cc7af0385c8066b3b0693ca118ca0f06957e6d4->leave($__internal_fb5f154bcaba607a72ef77c29cc7af0385c8066b3b0693ca118ca0f06957e6d4_prof);

        
        $__internal_9f268069f3608e160cf5c35efb572d4fb85cbe494709752746827656be703332->leave($__internal_9f268069f3608e160cf5c35efb572d4fb85cbe494709752746827656be703332_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_506ce35951f7b4f11e7c66342f9fcf8fe85b73e071f851bb95c83a8e9d14aa86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_506ce35951f7b4f11e7c66342f9fcf8fe85b73e071f851bb95c83a8e9d14aa86->enter($__internal_506ce35951f7b4f11e7c66342f9fcf8fe85b73e071f851bb95c83a8e9d14aa86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dc501c741392e8b2e5f46112cc752c424ed6e4737bc77bb9e92f970d8933444e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc501c741392e8b2e5f46112cc752c424ed6e4737bc77bb9e92f970d8933444e->enter($__internal_dc501c741392e8b2e5f46112cc752c424ed6e4737bc77bb9e92f970d8933444e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2>List</h2>
    ";
        // line 5
        echo $this->env->getExtension('Sg\DatatablesBundle\Twig\DatatableTwigExtension')->datatablesRender($this->env, ($context["datatable"] ?? $this->getContext($context, "datatable")));
        echo "
";
        
        $__internal_dc501c741392e8b2e5f46112cc752c424ed6e4737bc77bb9e92f970d8933444e->leave($__internal_dc501c741392e8b2e5f46112cc752c424ed6e4737bc77bb9e92f970d8933444e_prof);

        
        $__internal_506ce35951f7b4f11e7c66342f9fcf8fe85b73e071f851bb95c83a8e9d14aa86->leave($__internal_506ce35951f7b4f11e7c66342f9fcf8fe85b73e071f851bb95c83a8e9d14aa86_prof);

    }

    public function getTemplateName()
    {
        return "default/list.html.twig";
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
{% endblock %}", "default/list.html.twig", "C:\\Apache24\\htdocs\\app\\Resources\\views\\default\\list.html.twig");
    }
}
