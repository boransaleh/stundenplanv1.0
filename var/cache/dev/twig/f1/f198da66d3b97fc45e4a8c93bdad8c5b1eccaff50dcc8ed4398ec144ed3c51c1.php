<?php

/* ::ReportLayout.html.twig */
class __TwigTemplate_c048310bed8fd463dae8de581908dc88130b5311d43487565d07697507debfc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f430cb7540a353ff8d766386f352c13d1775b67361ab579ca6d513dd3738266 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f430cb7540a353ff8d766386f352c13d1775b67361ab579ca6d513dd3738266->enter($__internal_4f430cb7540a353ff8d766386f352c13d1775b67361ab579ca6d513dd3738266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::ReportLayout.html.twig"));

        $__internal_b1518fcd92f100115bf3bceaff7d991a4cfc3093f00ed07a343267eb0633f8cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1518fcd92f100115bf3bceaff7d991a4cfc3093f00ed07a343267eb0633f8cd->enter($__internal_b1518fcd92f100115bf3bceaff7d991a4cfc3093f00ed07a343267eb0633f8cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::ReportLayout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

";
        // line 10
        $this->displayBlock('header', $context, $blocks);
        // line 43
        echo "
</head>
<body>


<div class=\"container\">
    <div class=\"row\">

        <div class=\"col-lg-12\">

            ";
        // line 53
        $this->displayBlock('body', $context, $blocks);
        // line 56
        echo "
        </div>

    </div>

</div>

";
        // line 63
        $this->displayBlock('footer', $context, $blocks);
        // line 70
        echo "</body>
</html>

";
        
        $__internal_4f430cb7540a353ff8d766386f352c13d1775b67361ab579ca6d513dd3738266->leave($__internal_4f430cb7540a353ff8d766386f352c13d1775b67361ab579ca6d513dd3738266_prof);

        
        $__internal_b1518fcd92f100115bf3bceaff7d991a4cfc3093f00ed07a343267eb0633f8cd->leave($__internal_b1518fcd92f100115bf3bceaff7d991a4cfc3093f00ed07a343267eb0633f8cd_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_6de60cbcba89173a9d50a5d786a31f8cf0062915c14e17eda795141f8d9b6a69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6de60cbcba89173a9d50a5d786a31f8cf0062915c14e17eda795141f8d9b6a69->enter($__internal_6de60cbcba89173a9d50a5d786a31f8cf0062915c14e17eda795141f8d9b6a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9094807e7dca5e51d88c5a4e395492e5c64f2e04feac8f3d15eebdc9883f6a5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9094807e7dca5e51d88c5a4e395492e5c64f2e04feac8f3d15eebdc9883f6a5b->enter($__internal_9094807e7dca5e51d88c5a4e395492e5c64f2e04feac8f3d15eebdc9883f6a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_9094807e7dca5e51d88c5a4e395492e5c64f2e04feac8f3d15eebdc9883f6a5b->leave($__internal_9094807e7dca5e51d88c5a4e395492e5c64f2e04feac8f3d15eebdc9883f6a5b_prof);

        
        $__internal_6de60cbcba89173a9d50a5d786a31f8cf0062915c14e17eda795141f8d9b6a69->leave($__internal_6de60cbcba89173a9d50a5d786a31f8cf0062915c14e17eda795141f8d9b6a69_prof);

    }

    // line 10
    public function block_header($context, array $blocks = array())
    {
        $__internal_d9f5c27a10bc7100560f1217a63e8ba0fb2d8211e881a56f71ce63f2e6e295cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9f5c27a10bc7100560f1217a63e8ba0fb2d8211e881a56f71ce63f2e6e295cd->enter($__internal_d9f5c27a10bc7100560f1217a63e8ba0fb2d8211e881a56f71ce63f2e6e295cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_447c0e829be63f097811be9cf13bfdf04624c50ddfb5a0f895e895eaf7525c50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_447c0e829be63f097811be9cf13bfdf04624c50ddfb5a0f895e895eaf7525c50->enter($__internal_447c0e829be63f097811be9cf13bfdf04624c50ddfb5a0f895e895eaf7525c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 11
        echo "

    <!-- Bootstrap -->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css")), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/default.css")), "html", null, true);
        echo "\">

    <link href=\"https://fonts.googleapis.com/css?family=Quicksand:700\" rel=\"stylesheet\">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
<style>
    html, body {
        font-family: 'Quicksand', sans-serif;

        color: black;
        height: 100%;
    }

    table { page-break-inside:auto }
    tr    { page-break-inside:avoid; page-break-after:auto }
    thead { display:table-header-group }
    tfoot { display:table-footer-group }

</style>

";
        
        $__internal_447c0e829be63f097811be9cf13bfdf04624c50ddfb5a0f895e895eaf7525c50->leave($__internal_447c0e829be63f097811be9cf13bfdf04624c50ddfb5a0f895e895eaf7525c50_prof);

        
        $__internal_d9f5c27a10bc7100560f1217a63e8ba0fb2d8211e881a56f71ce63f2e6e295cd->leave($__internal_d9f5c27a10bc7100560f1217a63e8ba0fb2d8211e881a56f71ce63f2e6e295cd_prof);

    }

    // line 53
    public function block_body($context, array $blocks = array())
    {
        $__internal_d1c656b2be1c6d568d985a9d6625b54a90956d24358c2d9c227efdbc304f23fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1c656b2be1c6d568d985a9d6625b54a90956d24358c2d9c227efdbc304f23fc->enter($__internal_d1c656b2be1c6d568d985a9d6625b54a90956d24358c2d9c227efdbc304f23fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_faa938b72333203c431c9bfe42549cf97e5bdd2c59174d151b30a99d41580649 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faa938b72333203c431c9bfe42549cf97e5bdd2c59174d151b30a99d41580649->enter($__internal_faa938b72333203c431c9bfe42549cf97e5bdd2c59174d151b30a99d41580649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 54
        echo "
            ";
        
        $__internal_faa938b72333203c431c9bfe42549cf97e5bdd2c59174d151b30a99d41580649->leave($__internal_faa938b72333203c431c9bfe42549cf97e5bdd2c59174d151b30a99d41580649_prof);

        
        $__internal_d1c656b2be1c6d568d985a9d6625b54a90956d24358c2d9c227efdbc304f23fc->leave($__internal_d1c656b2be1c6d568d985a9d6625b54a90956d24358c2d9c227efdbc304f23fc_prof);

    }

    // line 63
    public function block_footer($context, array $blocks = array())
    {
        $__internal_55345afe6ce7d6cf72adc6a96dc27b85a920c7c03e596d40c60a718df360524e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55345afe6ce7d6cf72adc6a96dc27b85a920c7c03e596d40c60a718df360524e->enter($__internal_55345afe6ce7d6cf72adc6a96dc27b85a920c7c03e596d40c60a718df360524e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_28b887e14fcb5166668cf7f2f7bbe12332a2511b9079c2a91675792aa92538e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28b887e14fcb5166668cf7f2f7bbe12332a2511b9079c2a91675792aa92538e7->enter($__internal_28b887e14fcb5166668cf7f2f7bbe12332a2511b9079c2a91675792aa92538e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 64
        echo "
    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-1.9.1.js")), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js")), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/default.js")), "html", null, true);
        echo "\"></script>

";
        
        $__internal_28b887e14fcb5166668cf7f2f7bbe12332a2511b9079c2a91675792aa92538e7->leave($__internal_28b887e14fcb5166668cf7f2f7bbe12332a2511b9079c2a91675792aa92538e7_prof);

        
        $__internal_55345afe6ce7d6cf72adc6a96dc27b85a920c7c03e596d40c60a718df360524e->leave($__internal_55345afe6ce7d6cf72adc6a96dc27b85a920c7c03e596d40c60a718df360524e_prof);

    }

    public function getTemplateName()
    {
        return "::ReportLayout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  196 => 67,  192 => 66,  188 => 65,  185 => 64,  176 => 63,  165 => 54,  156 => 53,  119 => 16,  114 => 14,  109 => 11,  100 => 10,  83 => 8,  70 => 70,  68 => 63,  59 => 56,  57 => 53,  45 => 43,  43 => 10,  38 => 8,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>{% block title %}{% endblock %}</title>

{% block header %}


    <!-- Bootstrap -->
    <link href=\"{{absolute_url(asset('css/bootstrap.min.css')) }}\" rel=\"stylesheet\">

    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{absolute_url(asset('css/default.css')) }}\">

    <link href=\"https://fonts.googleapis.com/css?family=Quicksand:700\" rel=\"stylesheet\">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
<style>
    html, body {
        font-family: 'Quicksand', sans-serif;

        color: black;
        height: 100%;
    }

    table { page-break-inside:auto }
    tr    { page-break-inside:avoid; page-break-after:auto }
    thead { display:table-header-group }
    tfoot { display:table-footer-group }

</style>

{% endblock %}

</head>
<body>


<div class=\"container\">
    <div class=\"row\">

        <div class=\"col-lg-12\">

            {% block body %}

            {% endblock %}

        </div>

    </div>

</div>

{% block footer %}

    <script src=\"{{absolute_url(asset('js/jquery-1.9.1.js')) }}\"></script>
    <script src=\"{{absolute_url(asset('js/bootstrap.min.js')) }}\"></script>
    <script src=\"{{absolute_url(asset('js/default.js')) }}\"></script>

{% endblock %}
</body>
</html>

", "::ReportLayout.html.twig", "C:\\Apache24\\htdocs\\app/Resources\\views/ReportLayout.html.twig");
    }
}
