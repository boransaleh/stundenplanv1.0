<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_18bbf02e157370c020ca7b6f32fbe4a2e41e763dd100a147a8e6734c02d54978 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_74c4d2f33d829a750e003fc6024f764ceb7f387a76f5ac25460218c5a732e8ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74c4d2f33d829a750e003fc6024f764ceb7f387a76f5ac25460218c5a732e8ca->enter($__internal_74c4d2f33d829a750e003fc6024f764ceb7f387a76f5ac25460218c5a732e8ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_a2032739c85416c97079eb69dd6803ec97cbc0ff7954958963daf0ce5a87bd68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2032739c85416c97079eb69dd6803ec97cbc0ff7954958963daf0ce5a87bd68->enter($__internal_a2032739c85416c97079eb69dd6803ec97cbc0ff7954958963daf0ce5a87bd68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74c4d2f33d829a750e003fc6024f764ceb7f387a76f5ac25460218c5a732e8ca->leave($__internal_74c4d2f33d829a750e003fc6024f764ceb7f387a76f5ac25460218c5a732e8ca_prof);

        
        $__internal_a2032739c85416c97079eb69dd6803ec97cbc0ff7954958963daf0ce5a87bd68->leave($__internal_a2032739c85416c97079eb69dd6803ec97cbc0ff7954958963daf0ce5a87bd68_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3149a32e62fa2498d8f26cd779d75d908db6804553b54b69948c673a4eae6605 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3149a32e62fa2498d8f26cd779d75d908db6804553b54b69948c673a4eae6605->enter($__internal_3149a32e62fa2498d8f26cd779d75d908db6804553b54b69948c673a4eae6605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5b4073ecd2762983d676e9b151d47dda3d4d5d0b3bc456ca097ce6c44b1811ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b4073ecd2762983d676e9b151d47dda3d4d5d0b3bc456ca097ce6c44b1811ec->enter($__internal_5b4073ecd2762983d676e9b151d47dda3d4d5d0b3bc456ca097ce6c44b1811ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_5b4073ecd2762983d676e9b151d47dda3d4d5d0b3bc456ca097ce6c44b1811ec->leave($__internal_5b4073ecd2762983d676e9b151d47dda3d4d5d0b3bc456ca097ce6c44b1811ec_prof);

        
        $__internal_3149a32e62fa2498d8f26cd779d75d908db6804553b54b69948c673a4eae6605->leave($__internal_3149a32e62fa2498d8f26cd779d75d908db6804553b54b69948c673a4eae6605_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_8323fbdbb9254fee99af0706b94c0495cc00309ce6804ae2d18c187287f96789 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8323fbdbb9254fee99af0706b94c0495cc00309ce6804ae2d18c187287f96789->enter($__internal_8323fbdbb9254fee99af0706b94c0495cc00309ce6804ae2d18c187287f96789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_03e9945dca8e205be0a311646edc6127598bfe600f7bf5debf271d5074d23ab9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03e9945dca8e205be0a311646edc6127598bfe600f7bf5debf271d5074d23ab9->enter($__internal_03e9945dca8e205be0a311646edc6127598bfe600f7bf5debf271d5074d23ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_03e9945dca8e205be0a311646edc6127598bfe600f7bf5debf271d5074d23ab9->leave($__internal_03e9945dca8e205be0a311646edc6127598bfe600f7bf5debf271d5074d23ab9_prof);

        
        $__internal_8323fbdbb9254fee99af0706b94c0495cc00309ce6804ae2d18c187287f96789->leave($__internal_8323fbdbb9254fee99af0706b94c0495cc00309ce6804ae2d18c187287f96789_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
