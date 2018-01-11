<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_756ee7292bd4a33e7c8684a7193ea478e1dcad2094709a52006d35b53737d978 extends Twig_Template
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
        $__internal_918150558d56eccb7eca820af9c35229dabf399da06d788d7e3f752bb2188b63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_918150558d56eccb7eca820af9c35229dabf399da06d788d7e3f752bb2188b63->enter($__internal_918150558d56eccb7eca820af9c35229dabf399da06d788d7e3f752bb2188b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_ad2c832078cf6c679fc5f03dcce6239c3d4f74d04ab7ac53ea1620a6af79646c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad2c832078cf6c679fc5f03dcce6239c3d4f74d04ab7ac53ea1620a6af79646c->enter($__internal_ad2c832078cf6c679fc5f03dcce6239c3d4f74d04ab7ac53ea1620a6af79646c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_918150558d56eccb7eca820af9c35229dabf399da06d788d7e3f752bb2188b63->leave($__internal_918150558d56eccb7eca820af9c35229dabf399da06d788d7e3f752bb2188b63_prof);

        
        $__internal_ad2c832078cf6c679fc5f03dcce6239c3d4f74d04ab7ac53ea1620a6af79646c->leave($__internal_ad2c832078cf6c679fc5f03dcce6239c3d4f74d04ab7ac53ea1620a6af79646c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
