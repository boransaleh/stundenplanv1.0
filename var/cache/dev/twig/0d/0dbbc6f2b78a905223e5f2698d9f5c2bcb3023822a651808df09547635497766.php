<?php

/* callback/renderer.js.twig */
class __TwigTemplate_0b4ecca1c74fc6289b6d17b1e07750576cdc6a2f50a6e44bc3474f9f7af53d4f extends Twig_Template
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
        $__internal_b69a1cba59476638eb5506f166da745599ee3eccc980d4cdbf1ceb1c8cb1b199 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b69a1cba59476638eb5506f166da745599ee3eccc980d4cdbf1ceb1c8cb1b199->enter($__internal_b69a1cba59476638eb5506f166da745599ee3eccc980d4cdbf1ceb1c8cb1b199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "callback/renderer.js.twig"));

        $__internal_162e1ef16b767fef19b239a241e0f812516b2d0f5677c74385ddd6a4abb30542 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_162e1ef16b767fef19b239a241e0f812516b2d0f5677c74385ddd6a4abb30542->enter($__internal_162e1ef16b767fef19b239a241e0f812516b2d0f5677c74385ddd6a4abb30542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "callback/renderer.js.twig"));

        // line 1
        echo "renderer = function (api, rowIdx, columns) {
    var data = \$.map(columns, function (col, i) {
        return col.hidden ?
        '<tr data-dt-row=' + col.rowIndex + ' data-dt-column=' + col.columnIndex + '>' +
        '<td>' + col.title + ':' + '</td> ' +
        '<td>' + col.data + '</td>' +
        '</tr>' : '';
    }).join('');

    return data ? \$('<table/>').append( data ) : false;
}";
        
        $__internal_b69a1cba59476638eb5506f166da745599ee3eccc980d4cdbf1ceb1c8cb1b199->leave($__internal_b69a1cba59476638eb5506f166da745599ee3eccc980d4cdbf1ceb1c8cb1b199_prof);

        
        $__internal_162e1ef16b767fef19b239a241e0f812516b2d0f5677c74385ddd6a4abb30542->leave($__internal_162e1ef16b767fef19b239a241e0f812516b2d0f5677c74385ddd6a4abb30542_prof);

    }

    public function getTemplateName()
    {
        return "callback/renderer.js.twig";
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
        return new Twig_Source("renderer = function (api, rowIdx, columns) {
    var data = \$.map(columns, function (col, i) {
        return col.hidden ?
        '<tr data-dt-row=' + col.rowIndex + ' data-dt-column=' + col.columnIndex + '>' +
        '<td>' + col.title + ':' + '</td> ' +
        '<td>' + col.data + '</td>' +
        '</tr>' : '';
    }).join('');

    return data ? \$('<table/>').append( data ) : false;
}", "callback/renderer.js.twig", "C:\\Apache24\\htdocs\\app\\Resources\\views\\callback\\renderer.js.twig");
    }
}
