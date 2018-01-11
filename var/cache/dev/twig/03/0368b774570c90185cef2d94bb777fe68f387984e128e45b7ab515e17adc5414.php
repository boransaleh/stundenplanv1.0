<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_ee4ea750d2f1f88415b1353a592c9582cc246454fabe486ffe8fe028bebf52f1 extends Twig_Template
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
        $__internal_15b19d52017c939cb50293a97c4bf2b113e32cd37dfd4184c797927336692bc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15b19d52017c939cb50293a97c4bf2b113e32cd37dfd4184c797927336692bc4->enter($__internal_15b19d52017c939cb50293a97c4bf2b113e32cd37dfd4184c797927336692bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_0cc6d3e434c36548f4b340160e3c90288eaf0c4ca035599c57d7ec10a48f21fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cc6d3e434c36548f4b340160e3c90288eaf0c4ca035599c57d7ec10a48f21fb->enter($__internal_0cc6d3e434c36548f4b340160e3c90288eaf0c4ca035599c57d7ec10a48f21fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_15b19d52017c939cb50293a97c4bf2b113e32cd37dfd4184c797927336692bc4->leave($__internal_15b19d52017c939cb50293a97c4bf2b113e32cd37dfd4184c797927336692bc4_prof);

        
        $__internal_0cc6d3e434c36548f4b340160e3c90288eaf0c4ca035599c57d7ec10a48f21fb->leave($__internal_0cc6d3e434c36548f4b340160e3c90288eaf0c4ca035599c57d7ec10a48f21fb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.rdf.twig", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
