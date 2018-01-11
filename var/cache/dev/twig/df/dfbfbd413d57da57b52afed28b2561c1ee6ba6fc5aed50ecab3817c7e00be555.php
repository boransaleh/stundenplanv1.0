<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_689e95fd66f2f0d3fd613b52671cdbe4fee5f5838f224ad2d2d1f9a5c9fb1935 extends Twig_Template
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
        $__internal_3054f5be36d4cb25d3f49a496efe32981c66a521dfba5ae0642499bd6dc30995 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3054f5be36d4cb25d3f49a496efe32981c66a521dfba5ae0642499bd6dc30995->enter($__internal_3054f5be36d4cb25d3f49a496efe32981c66a521dfba5ae0642499bd6dc30995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_6f1cecf2dce6002ccf1cb81dcbec7ea6513cc4b42666fb45401d1e0384e420ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f1cecf2dce6002ccf1cb81dcbec7ea6513cc4b42666fb45401d1e0384e420ad->enter($__internal_6f1cecf2dce6002ccf1cb81dcbec7ea6513cc4b42666fb45401d1e0384e420ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_3054f5be36d4cb25d3f49a496efe32981c66a521dfba5ae0642499bd6dc30995->leave($__internal_3054f5be36d4cb25d3f49a496efe32981c66a521dfba5ae0642499bd6dc30995_prof);

        
        $__internal_6f1cecf2dce6002ccf1cb81dcbec7ea6513cc4b42666fb45401d1e0384e420ad->leave($__internal_6f1cecf2dce6002ccf1cb81dcbec7ea6513cc4b42666fb45401d1e0384e420ad_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
