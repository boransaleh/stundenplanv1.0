<?php

/* :callback:renderer.js.twig */
class __TwigTemplate_96d6c48350288ac5a61414890c88a0928d389dd20407ea7ed6b15f5354caa788 extends Twig_Template
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
        $__internal_5a4f8cdbc013d3f129a723765088522f3fc5be19d8c9c1fa4bde86523b183cb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a4f8cdbc013d3f129a723765088522f3fc5be19d8c9c1fa4bde86523b183cb6->enter($__internal_5a4f8cdbc013d3f129a723765088522f3fc5be19d8c9c1fa4bde86523b183cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":callback:renderer.js.twig"));

        $__internal_7af0c484625a7918b7682aa51c1adb89f4e83e420c8f0549ef7b2ad7604485f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7af0c484625a7918b7682aa51c1adb89f4e83e420c8f0549ef7b2ad7604485f1->enter($__internal_7af0c484625a7918b7682aa51c1adb89f4e83e420c8f0549ef7b2ad7604485f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":callback:renderer.js.twig"));

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
        
        $__internal_5a4f8cdbc013d3f129a723765088522f3fc5be19d8c9c1fa4bde86523b183cb6->leave($__internal_5a4f8cdbc013d3f129a723765088522f3fc5be19d8c9c1fa4bde86523b183cb6_prof);

        
        $__internal_7af0c484625a7918b7682aa51c1adb89f4e83e420c8f0549ef7b2ad7604485f1->leave($__internal_7af0c484625a7918b7682aa51c1adb89f4e83e420c8f0549ef7b2ad7604485f1_prof);

    }

    public function getTemplateName()
    {
        return ":callback:renderer.js.twig";
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
}", ":callback:renderer.js.twig", "C:\\Apache24\\htdocs\\app/Resources\\views/callback/renderer.js.twig");
    }
}
