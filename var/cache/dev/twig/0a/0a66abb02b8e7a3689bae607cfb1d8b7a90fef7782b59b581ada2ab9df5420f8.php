<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_cc54f8cc3573c303c496da7b9737105ac30fc319914cc2273bd66e75d488b9c9 extends Twig_Template
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
        $__internal_77fc37175de79ee3d575e0071ed58183b971a9b7a31437f41d21df17d75cc2db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77fc37175de79ee3d575e0071ed58183b971a9b7a31437f41d21df17d75cc2db->enter($__internal_77fc37175de79ee3d575e0071ed58183b971a9b7a31437f41d21df17d75cc2db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_1ddc41603a5fcc92ade7b8610488791562615b41feb2234776241d65d2486d04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ddc41603a5fcc92ade7b8610488791562615b41feb2234776241d65d2486d04->enter($__internal_1ddc41603a5fcc92ade7b8610488791562615b41feb2234776241d65d2486d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_77fc37175de79ee3d575e0071ed58183b971a9b7a31437f41d21df17d75cc2db->leave($__internal_77fc37175de79ee3d575e0071ed58183b971a9b7a31437f41d21df17d75cc2db_prof);

        
        $__internal_1ddc41603a5fcc92ade7b8610488791562615b41feb2234776241d65d2486d04->leave($__internal_1ddc41603a5fcc92ade7b8610488791562615b41feb2234776241d65d2486d04_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
