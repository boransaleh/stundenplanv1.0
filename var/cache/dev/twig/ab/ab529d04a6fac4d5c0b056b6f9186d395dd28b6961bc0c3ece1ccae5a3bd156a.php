<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d0a4b5f3fa0dd798fe6edd0e3f9857d551e4473a0d9e151b06eef71cb8342a1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3e82124c0d729d7f02070df0330bab97522acf003f54ce097c719253d0917a31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e82124c0d729d7f02070df0330bab97522acf003f54ce097c719253d0917a31->enter($__internal_3e82124c0d729d7f02070df0330bab97522acf003f54ce097c719253d0917a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_2f16c30821444931f81cafe75a51d206e5a8eadb780c5c85225445dd27fdcb8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f16c30821444931f81cafe75a51d206e5a8eadb780c5c85225445dd27fdcb8f->enter($__internal_2f16c30821444931f81cafe75a51d206e5a8eadb780c5c85225445dd27fdcb8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e82124c0d729d7f02070df0330bab97522acf003f54ce097c719253d0917a31->leave($__internal_3e82124c0d729d7f02070df0330bab97522acf003f54ce097c719253d0917a31_prof);

        
        $__internal_2f16c30821444931f81cafe75a51d206e5a8eadb780c5c85225445dd27fdcb8f->leave($__internal_2f16c30821444931f81cafe75a51d206e5a8eadb780c5c85225445dd27fdcb8f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_97303798a511910e4e1e5cbbd649f06d4d73b983d708c9ad8fb466825aa0b5cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97303798a511910e4e1e5cbbd649f06d4d73b983d708c9ad8fb466825aa0b5cd->enter($__internal_97303798a511910e4e1e5cbbd649f06d4d73b983d708c9ad8fb466825aa0b5cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e114eee061ed4ffba94d4333b05da00e4baa794ef3726bd04e871bbe15ed843f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e114eee061ed4ffba94d4333b05da00e4baa794ef3726bd04e871bbe15ed843f->enter($__internal_e114eee061ed4ffba94d4333b05da00e4baa794ef3726bd04e871bbe15ed843f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_e114eee061ed4ffba94d4333b05da00e4baa794ef3726bd04e871bbe15ed843f->leave($__internal_e114eee061ed4ffba94d4333b05da00e4baa794ef3726bd04e871bbe15ed843f_prof);

        
        $__internal_97303798a511910e4e1e5cbbd649f06d4d73b983d708c9ad8fb466825aa0b5cd->leave($__internal_97303798a511910e4e1e5cbbd649f06d4d73b983d708c9ad8fb466825aa0b5cd_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_02d95bb713cf7aa321e9b8ac01a415d0239e57dac3bc398fdb7cae971dfcedfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02d95bb713cf7aa321e9b8ac01a415d0239e57dac3bc398fdb7cae971dfcedfe->enter($__internal_02d95bb713cf7aa321e9b8ac01a415d0239e57dac3bc398fdb7cae971dfcedfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_47adf13fb94ccae2afc24e89fb6fc9af40f7629bc2314c9fc055e32efb24000f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47adf13fb94ccae2afc24e89fb6fc9af40f7629bc2314c9fc055e32efb24000f->enter($__internal_47adf13fb94ccae2afc24e89fb6fc9af40f7629bc2314c9fc055e32efb24000f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_47adf13fb94ccae2afc24e89fb6fc9af40f7629bc2314c9fc055e32efb24000f->leave($__internal_47adf13fb94ccae2afc24e89fb6fc9af40f7629bc2314c9fc055e32efb24000f_prof);

        
        $__internal_02d95bb713cf7aa321e9b8ac01a415d0239e57dac3bc398fdb7cae971dfcedfe->leave($__internal_02d95bb713cf7aa321e9b8ac01a415d0239e57dac3bc398fdb7cae971dfcedfe_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc6b39e6e13d303c060cd5714a6469281381fbe73476dc61836bcc0e27a2fe1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc6b39e6e13d303c060cd5714a6469281381fbe73476dc61836bcc0e27a2fe1d->enter($__internal_cc6b39e6e13d303c060cd5714a6469281381fbe73476dc61836bcc0e27a2fe1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ce1dbdee085ba80603c10b4d2458deb7fb8b9201cc957ae2d9a47701af7468d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce1dbdee085ba80603c10b4d2458deb7fb8b9201cc957ae2d9a47701af7468d5->enter($__internal_ce1dbdee085ba80603c10b4d2458deb7fb8b9201cc957ae2d9a47701af7468d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_ce1dbdee085ba80603c10b4d2458deb7fb8b9201cc957ae2d9a47701af7468d5->leave($__internal_ce1dbdee085ba80603c10b4d2458deb7fb8b9201cc957ae2d9a47701af7468d5_prof);

        
        $__internal_cc6b39e6e13d303c060cd5714a6469281381fbe73476dc61836bcc0e27a2fe1d->leave($__internal_cc6b39e6e13d303c060cd5714a6469281381fbe73476dc61836bcc0e27a2fe1d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
