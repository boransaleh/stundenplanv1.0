<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_e0ec438b4c2cb598c4b847d2677a9ed3156d395d7de9c4008cde9b2aa29a3d1e extends Twig_Template
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
        $__internal_e0bbadda9bde45ebfb0b41ac674e171c23c0b78519c1fe39e2ce309f45fad3aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0bbadda9bde45ebfb0b41ac674e171c23c0b78519c1fe39e2ce309f45fad3aa->enter($__internal_e0bbadda9bde45ebfb0b41ac674e171c23c0b78519c1fe39e2ce309f45fad3aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_170a9cd6fe7487bd8cb07c8f228f7cf42076969ca6dea4f4a5d78186bd4a9203 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_170a9cd6fe7487bd8cb07c8f228f7cf42076969ca6dea4f4a5d78186bd4a9203->enter($__internal_170a9cd6fe7487bd8cb07c8f228f7cf42076969ca6dea4f4a5d78186bd4a9203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_e0bbadda9bde45ebfb0b41ac674e171c23c0b78519c1fe39e2ce309f45fad3aa->leave($__internal_e0bbadda9bde45ebfb0b41ac674e171c23c0b78519c1fe39e2ce309f45fad3aa_prof);

        
        $__internal_170a9cd6fe7487bd8cb07c8f228f7cf42076969ca6dea4f4a5d78186bd4a9203->leave($__internal_170a9cd6fe7487bd8cb07c8f228f7cf42076969ca6dea4f4a5d78186bd4a9203_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
